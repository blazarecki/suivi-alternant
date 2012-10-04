<?php

namespace Suivi\MainBundle\DependencyInjection;

use Symfony\Component\HttpKernel\DependencyInjection\Extension,
    Symfony\Component\DependencyInjection\ContainerBuilder,
    Symfony\Component\Config\FileLocator,
    Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * SuiviMainExtension
 *
 * @author Benjamin Lazarecki <benjamin.lazarecki@gmail.com>
 */
class SuiviMainExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
    }
}
