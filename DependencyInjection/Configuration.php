<?php

namespace LSBProject\BlacklistBundle\DependencyInjection;

use LSBProject\Type\DefaultType;
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
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('lsb_project_blacklist');

        // Here you should define the parameters that are allowed to
        // configure your bundle. See the documentation linked above for
        // more information on that topic.

        $rootNode
            ->addDefaultChildrenIfNoneSet()
            ->children()
                ->scalarNode('default_type')
                ->cannotBeEmpty()
                ->defaultValue(DefaultType::class)
                ->end()
            ->children()
                ->scalarNode('default_path')
                ->cannotBeEmpty()
                ->defaultValue('BlacklistType')
                ->end();

        return $treeBuilder;
    }
}
