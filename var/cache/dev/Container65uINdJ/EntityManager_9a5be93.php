<?php

namespace Container65uINdJ;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder87de5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera068e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties10ddf = [
        
    ];

    public function getConnection()
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'getConnection', array(), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return $this->valueHolder87de5->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'getMetadataFactory', array(), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return $this->valueHolder87de5->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'getExpressionBuilder', array(), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return $this->valueHolder87de5->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'beginTransaction', array(), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return $this->valueHolder87de5->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'getCache', array(), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return $this->valueHolder87de5->getCache();
    }

    public function transactional($func)
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'transactional', array('func' => $func), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return $this->valueHolder87de5->transactional($func);
    }

    public function commit()
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'commit', array(), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return $this->valueHolder87de5->commit();
    }

    public function rollback()
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'rollback', array(), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return $this->valueHolder87de5->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'getClassMetadata', array('className' => $className), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return $this->valueHolder87de5->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'createQuery', array('dql' => $dql), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return $this->valueHolder87de5->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'createNamedQuery', array('name' => $name), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return $this->valueHolder87de5->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return $this->valueHolder87de5->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return $this->valueHolder87de5->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'createQueryBuilder', array(), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return $this->valueHolder87de5->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'flush', array('entity' => $entity), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return $this->valueHolder87de5->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return $this->valueHolder87de5->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return $this->valueHolder87de5->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return $this->valueHolder87de5->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'clear', array('entityName' => $entityName), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return $this->valueHolder87de5->clear($entityName);
    }

    public function close()
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'close', array(), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return $this->valueHolder87de5->close();
    }

    public function persist($entity)
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'persist', array('entity' => $entity), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return $this->valueHolder87de5->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'remove', array('entity' => $entity), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return $this->valueHolder87de5->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'refresh', array('entity' => $entity), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return $this->valueHolder87de5->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'detach', array('entity' => $entity), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return $this->valueHolder87de5->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'merge', array('entity' => $entity), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return $this->valueHolder87de5->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return $this->valueHolder87de5->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return $this->valueHolder87de5->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'getRepository', array('entityName' => $entityName), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return $this->valueHolder87de5->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'contains', array('entity' => $entity), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return $this->valueHolder87de5->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'getEventManager', array(), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return $this->valueHolder87de5->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'getConfiguration', array(), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return $this->valueHolder87de5->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'isOpen', array(), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return $this->valueHolder87de5->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'getUnitOfWork', array(), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return $this->valueHolder87de5->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return $this->valueHolder87de5->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return $this->valueHolder87de5->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'getProxyFactory', array(), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return $this->valueHolder87de5->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'initializeObject', array('obj' => $obj), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return $this->valueHolder87de5->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'getFilters', array(), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return $this->valueHolder87de5->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'isFiltersStateClean', array(), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return $this->valueHolder87de5->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'hasFilters', array(), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return $this->valueHolder87de5->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializera068e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder87de5) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder87de5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder87de5->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, '__get', ['name' => $name], $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        if (isset(self::$publicProperties10ddf[$name])) {
            return $this->valueHolder87de5->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder87de5;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder87de5;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder87de5;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder87de5;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, '__isset', array('name' => $name), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder87de5;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder87de5;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, '__unset', array('name' => $name), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder87de5;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder87de5;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, '__clone', array(), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        $this->valueHolder87de5 = clone $this->valueHolder87de5;
    }

    public function __sleep()
    {
        $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, '__sleep', array(), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;

        return array('valueHolder87de5');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera068e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera068e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera068e && ($this->initializera068e->__invoke($valueHolder87de5, $this, 'initializeProxy', array(), $this->initializera068e) || 1) && $this->valueHolder87de5 = $valueHolder87de5;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder87de5;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder87de5;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
