<?php declare(strict_types = 1);

namespace LSBProject\BlacklistBundle\DependencyInjection;

use LSBProject\BlacklistBundle\Entity\Blacklist;
use LSBProject\BlacklistBundle\Validator\Constraints\IsNotBlacklisted;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * This is the class that loads and manages your bundle configuration.
 *
 * @link http://symfony.com/doc/current/cookbook/bundles/extension.html
 */
class LSBProjectBlacklistExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $container->setParameter('default_type', $config['default_type']);

        $this->addAnnotatedClassesToCompile([
            IsNotBlacklisted::class,
            Blacklist::class,
        ]);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
    }
}
