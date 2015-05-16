<?php

namespace ZF\Apigility\Doctrine\Server\Query\Provider;

use DoctrineModule\Persistence\ObjectManagerAwareInterface;
use Zend\Paginator\Adapter\AdapterInterface;
use Zend\ServiceManager\AbstractPluginManager;
use ZF\Rest\ResourceEvent;

interface CollectionTotalQueryProviderInterface extends ObjectManagerAwareInterface
{
    /**
     * @param ResourceEvent $event
     * @param string        $entityClass
     * @param array         $parameters
     *
     * @return mixed This will return an ORM or ODM Query\Builder
     */
    public function createCollectionTotalQuery(ResourceEvent $event, $entityClass, $parameters);
}
