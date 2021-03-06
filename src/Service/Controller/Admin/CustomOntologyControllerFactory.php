<?php
namespace CustomOntology\Service\Controller\Admin;

use CustomOntology\Controller\Admin\CustomOntologyController;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class CustomOntologyControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $services, $requestedNamed, array $options = null)
    {
        $entityManager = $services->get('Omeka\EntityManager');
        return new CustomOntologyController(
            $entityManager
        );
    }
}
