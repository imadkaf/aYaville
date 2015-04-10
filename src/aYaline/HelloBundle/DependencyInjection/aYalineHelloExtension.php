<?php
// src/aYaline/HelloBundle/DependencyInjection/AcmeFormsTutorialExtension.php
namespace aYaline\HelloBundle\DependencyInjection;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;
use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Config\Resource\FileResource;
class aYalineHelloExtension extends Extension implements PrependExtensionInterface
{
public function load( array $config, ContainerBuilder $container )
{
$loader = new Loader\YamlFileLoader( $container, new FileLocator( __DIR__ . '/../Resources/config' ) );
$loader->load( 'services.yml' );
}
public function prepend( ContainerBuilder $container )
{
$configFile = __DIR__ . '/../Resources/config/ezpublish.yml';
$config = Yaml::parse( file_get_contents( $configFile ) );
$container->prependExtensionConfig( 'ezpublish', $config );
$container->addResource( new FileResource( $configFile ) );
}
} 