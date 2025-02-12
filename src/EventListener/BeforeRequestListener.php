<?php

namespace LSBProject\BlacklistBundle\EventListener;

use App\Doctrine\AccessFilter;
use App\Doctrine\ProjectFilter;
use App\Entity\Field\CategoryField;
use App\Entity\Field\Field;
use App\Entity\Instance;
use App\Entity\Member;
use App\Entity\Owner;
use App\Entity\OwnerMember;
use App\Entity\Project;
use App\Service\ApplicationGlobals;
use App\Service\ProjectService;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Inspector\Inspector;
use Inspector\Symfony\Bundle\Listeners\InspectorAwareTrait;
use LSBProject\BlacklistBundle\Entity\BlacklistManager;
use LSBProject\BlacklistBundle\Entity\BlacklistManagerInterface;
use Psr\Log\LoggerInterface;
use Survos\BootstrapBundle\Event\KnpMenuEvent;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\EventDispatcher\Attribute\AsEventListener;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Uid\Uuid;

class BeforeRequestListener
{
//    use InspectorAwareTrait;
    public function __construct(
        private BlacklistManagerInterface $blacklistManager,
        private readonly RouterInterface $router,
        private readonly LoggerInterface $logger,
        protected Inspector $inspector,
        #[Autowire('%env(BASE_HOST)%')] private ?string $baseHost=null,
    ) {
    }

    #[AsEventListener(RequestEvent::class, priority: 10000)]
    public function onKernelRequest(RequestEvent $event): void
    {
        // check the IP
        $request = $event->getRequest();
        $ip = $request->getClientIp();
        $blacklisted = $this->blacklistManager->isBlacklisted($ip, 'ip');
        $bot = $event->getRequest()->headers->get('User-Agent');
//        dd($ip, $blacklisted, $bot);


        // https://symfonycasts.com/screencast/question-answer-day/symfony2-dynamic-subdomains
        $path = $request->getPathInfo();

        // always let debug path through
        if (str_starts_with($path, '/_wdt')) {
            return;
        }

        // @todo: get bad list from cache or config or something
        if (str_ends_with($path, '.php')
            || preg_match('{\.(alfa|php|php7)$}i', $path)
            || preg_match('{/wp-includes|/wp-content|.well-known|/wp-admin|/session}', $path)
        ) {
            $response = new Response();

            // from https://ourcodeworld.com/articles/read/1097/how-to-restrict-the-access-to-your-website-to-a-specific-country-geoblocking-in-symfony-5
            // https://lindevs.com/block-access-by-ip-address-in-symfony
            // https://blowstack.com/blog/how-to-use-events-listeners-in-symfony
            // https://medium.com/@dams_crr/mastering-symfonys-kernel-events-listeners-vs-subscribers-54be05bbe8fa
            $response->setStatusCode(Response::HTTP_FORBIDDEN);

            // Render some twig view, in our case we will render the blocked.html.twig file
            $response->setContent("<html lang='en'><body>Bad bot! $path</body></html>");
            // Return an HTML file
            $response->headers->set('Content-Type', 'text/html');
            if ($this->inspector?->isRecording()) {
                $this->inspector?->stopRecording();
            }
            $this->inspector->transaction()?->addContext("Referrer", $request->headers->get('referer'));

            // Send response
            $event->setResponse($response);

//            $redirect =  new RedirectResponse($url, 302);
//            $event->setResponse($redirect);
//                dd($host, $url, $this->baseHost);
//            dd($redirect, $url);
            return;

        }
    }

}
