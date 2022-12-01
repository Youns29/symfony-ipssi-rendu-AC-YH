<?php

namespace ContainerTt0jEw3;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder04651 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer88855 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties28ed8 = [
        
    ];

    public function getConnection()
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'getConnection', array(), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'getMetadataFactory', array(), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'getExpressionBuilder', array(), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'beginTransaction', array(), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'getCache', array(), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->getCache();
    }

    public function transactional($func)
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'transactional', array('func' => $func), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'wrapInTransaction', array('func' => $func), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'commit', array(), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->commit();
    }

    public function rollback()
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'rollback', array(), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'getClassMetadata', array('className' => $className), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'createQuery', array('dql' => $dql), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'createNamedQuery', array('name' => $name), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'createQueryBuilder', array(), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'flush', array('entity' => $entity), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'clear', array('entityName' => $entityName), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->clear($entityName);
    }

    public function close()
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'close', array(), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->close();
    }

    public function persist($entity)
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'persist', array('entity' => $entity), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'remove', array('entity' => $entity), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'refresh', array('entity' => $entity), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'detach', array('entity' => $entity), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'merge', array('entity' => $entity), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'getRepository', array('entityName' => $entityName), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'contains', array('entity' => $entity), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'getEventManager', array(), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'getConfiguration', array(), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'isOpen', array(), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'getUnitOfWork', array(), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'getProxyFactory', array(), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'initializeObject', array('obj' => $obj), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'getFilters', array(), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'isFiltersStateClean', array(), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'hasFilters', array(), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return $this->valueHolder04651->hasFilters();
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

        $instance->initializer88855 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder04651) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder04651 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder04651->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, '__get', ['name' => $name], $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        if (isset(self::$publicProperties28ed8[$name])) {
            return $this->valueHolder04651->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder04651;

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

        $targetObject = $this->valueHolder04651;
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
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder04651;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder04651;
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
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, '__isset', array('name' => $name), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder04651;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder04651;
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
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, '__unset', array('name' => $name), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder04651;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder04651;
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
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, '__clone', array(), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        $this->valueHolder04651 = clone $this->valueHolder04651;
    }

    public function __sleep()
    {
        $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, '__sleep', array(), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;

        return array('valueHolder04651');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer88855 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer88855;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer88855 && ($this->initializer88855->__invoke($valueHolder04651, $this, 'initializeProxy', array(), $this->initializer88855) || 1) && $this->valueHolder04651 = $valueHolder04651;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder04651;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder04651;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
