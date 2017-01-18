<?php

namespace Proxies\__CG__\Entities;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class link_tags extends \Entities\link_tags implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setId($id)
    {
        $this->__load();
        return parent::setId($id);
    }

    public function getLink_tagsAssignedUser()
    {
        $this->__load();
        return parent::getLink_tagsAssignedUser();
    }

    public function setLink_tagsAssignedUser($link_tagsAssignedUser)
    {
        $this->__load();
        return parent::setLink_tagsAssignedUser($link_tagsAssignedUser);
    }

    public function getLink_tagsCreatedbyUser()
    {
        $this->__load();
        return parent::getLink_tagsCreatedbyUser();
    }

    public function setLink_tagsCreatedbyUser($link_tagsCreatedbyUser)
    {
        $this->__load();
        return parent::setLink_tagsCreatedbyUser($link_tagsCreatedbyUser);
    }

    public function getLink_tagsUser_tags()
    {
        $this->__load();
        return parent::getLink_tagsUser_tags();
    }

    public function setLink_tagsUser_tags($link_tagsUser_tags)
    {
        $this->__load();
        return parent::setLink_tagsUser_tags($link_tagsUser_tags);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'link_tagsAssignedUser', 'link_tagsCreatedbyUser', 'link_tagsUser_tags');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}