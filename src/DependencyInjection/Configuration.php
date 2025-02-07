<?php declare(strict_types = 1);

namespace LSBProject\BlacklistBundle\src\DependencyInjection;

use LSBProject\BlacklistBundle\src\Type\DefaultType;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/configuration.html}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('lsb_project_blacklist');
        $rootNode = $treeBuilder->root();

        // Here you should define the parameters that are allowed to
        // configure your bundle. See the documentation linked above for
        // more information on that topic.

        $rootNode
            ->children()
                ->scalarNode('default_type')
                    ->cannotBeEmpty()
                    ->defaultValue(DefaultType::class)
                    ->end()
                ->end();

        return $treeBuilder;
    }
}
