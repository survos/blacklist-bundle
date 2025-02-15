<?php declare(strict_types=1);

namespace Survos\BotBlockerBundle;

use Survos\BotBlockerBundle\EventListener\BeforeRequestListener;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class SurvosBotBlockerBundle extends AbstractBundle
{
    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        // Inspector will be injected automatically, but we could spell it out.
        $builder->autowire(BeforeRequestListener::class)
            ->setPublic(true)
            ->setAutoconfigured(true)
            ->setAutowired(true);
    }

}
