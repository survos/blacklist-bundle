<?php declare(strict_types=1);

namespace LSBProject\BlacklistBundle;

use LSBProject\BlacklistBundle\Command\AddToBlacklist;
use LSBProject\BlacklistBundle\Command\ShowBlacklisted;
use LSBProject\BlacklistBundle\Entity\BlacklistManager;
use LSBProject\BlacklistBundle\Entity\BlacklistManagerInterface;
use LSBProject\BlacklistBundle\Type\DefaultType;
use LSBProject\BlacklistBundle\Type\EmailType;
use LSBProject\BlacklistBundle\Type\IpType;
use LSBProject\BlacklistBundle\Utils\TypeExtractorInterface;
use Symfony\Component\Config\Definition\Configurator\DefinitionConfigurator;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class LSBProjectBlacklistBundle extends AbstractBundle implements CompilerPassInterface
{
    const SERVICE_TAG = 'survos.blacklist.type';

    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
//        $builder->autowire(SaisClientService::class)
//            ->setPublic(true)
//            ->setAutoconfigured(true)
//            ->setArgument('$apiEndpoint', $config['api_endpoint'])
//            ->setArgument('$apiKey', $config['api_key']);

        foreach ([AddToBlacklist::class, ShowBlacklisted::class] as $commandName) {
            $builder->autowire($commandName)
                ->setAutoconfigured(true)
                ->addTag('console.command');
        }

        $builder->autowire(BlacklistManagerInterface::class, BlacklistManager::class)
            ->setPublic(true)
            ->setAutoconfigured(true)
            ->setAutowired(true);

        // @todo: UserAgent type?
        foreach ([
                     EmailType::class,
                     IPType::class,
                 ] as $class) {
            $builder->autowire($class)
                ->setPublic(true)
                ->setAutoconfigured(true)
                ->setAutowired(true)
                ->addTag(self::SERVICE_TAG, [
                    'class' => $class,
                ]);
        }


    }

    public function build(ContainerBuilder $container): void
    {
        $container->addCompilerPass($this);
    }


    public function configure(DefinitionConfigurator $definition): void
    {
        $definition->rootNode()
            ->children()
            ->scalarNode('default_type')->cannotBeEmpty()->defaultValue(DefaultType::class)->end()
            ->end();
    }

    public function process(ContainerBuilder $container): void
    {

        $types = $container->findTaggedServiceIds(self::SERVICE_TAG);
//        dump($types);
//        $extractor = $container->getDefinition(TypeExtractorInterface::class);
//        $extractor->setArgument('$types', array_map(fn(string $service) => new Reference($service), array_keys($types)));
    }

}
