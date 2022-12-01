<?php

namespace ContainerVulMPGx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder59744 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2398e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0b0e8 = [
        
    ];

    public function getConnection()
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'getConnection', array(), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'getMetadataFactory', array(), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'getExpressionBuilder', array(), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'beginTransaction', array(), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'getCache', array(), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'transactional', array('func' => $func), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'wrapInTransaction', array('func' => $func), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'commit', array(), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->commit();
    }

    public function rollback()
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'rollback', array(), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'getClassMetadata', array('className' => $className), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'createQuery', array('dql' => $dql), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'createNamedQuery', array('name' => $name), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'createQueryBuilder', array(), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'flush', array('entity' => $entity), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'clear', array('entityName' => $entityName), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->clear($entityName);
    }

    public function close()
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'close', array(), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->close();
    }

    public function persist($entity)
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'persist', array('entity' => $entity), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'remove', array('entity' => $entity), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'refresh', array('entity' => $entity), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'detach', array('entity' => $entity), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'merge', array('entity' => $entity), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'contains', array('entity' => $entity), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'getEventManager', array(), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'getConfiguration', array(), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'isOpen', array(), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'getUnitOfWork', array(), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'getProxyFactory', array(), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'initializeObject', array('obj' => $obj), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'getFilters', array(), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'isFiltersStateClean', array(), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'hasFilters', array(), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return $this->valueHolder59744->hasFilters();
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

        $instance->initializer2398e = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder59744) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder59744 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder59744->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, '__get', ['name' => $name], $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        if (isset(self::$publicProperties0b0e8[$name])) {
            return $this->valueHolder59744->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59744;

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

        $targetObject = $this->valueHolder59744;
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
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59744;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder59744;
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
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, '__isset', array('name' => $name), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59744;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder59744;
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
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, '__unset', array('name' => $name), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59744;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder59744;
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
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, '__clone', array(), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        $this->valueHolder59744 = clone $this->valueHolder59744;
    }

    public function __sleep()
    {
        $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, '__sleep', array(), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;

        return array('valueHolder59744');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2398e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2398e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2398e && ($this->initializer2398e->__invoke($valueHolder59744, $this, 'initializeProxy', array(), $this->initializer2398e) || 1) && $this->valueHolder59744 = $valueHolder59744;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder59744;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder59744;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
