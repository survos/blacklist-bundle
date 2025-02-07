<?php declare(strict_types = 1);

namespace LSBProject\BlacklistBundle;

use LSBProject\BlacklistBundle\src\Command\AddToBlacklist;
use LSBProject\BlacklistBundle\src\Command\ShowBlacklisted;
use LSBProject\BlacklistBundle\src\DependencyInjection\RegisterTypesPass;
use LSBProject\BlacklistBundle\src\Type\DefaultType;
use Symfony\Component\Config\Definition\Configurator\DefinitionConfigurator;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class LSBProjectBlacklistBundle extends AbstractBundle implements CompilerPassInterface
{
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
                ->addTag('console.command')
            ;
        }

        $container->addCompilerPass($this);

    }

    public function configure(DefinitionConfigurator $definition): void
    {
        $definition->rootNode()
            ->children()
            ->scalarNode('default_type')->cannotBeEmpty()->defaultValue(DefaultType::class)->end()
            ->end();
    }

    public function build(ContainerBuilder $container): void
    {
        parent::build($container);

        $container->addCompilerPass(new RegisterTypesPass());
    }

    public function process(ContainerBuilder $container): void
    {
        $types = $container->findTaggedServiceIds('lsbproject.blacklist.type');
        $extractor = $container->getDefinition('lsbproject.type_extractor');
        $extractor->setArgument('$types', array_map(fn(string $service) => new Reference($service), array_keys($types)));
    }

}
