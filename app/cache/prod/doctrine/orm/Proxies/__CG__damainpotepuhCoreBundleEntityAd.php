<?php

namespace Proxies\__CG__\damainpotepuh\CoreBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Ad extends \damainpotepuh\CoreBundle\Entity\Ad implements \Doctrine\ORM\Proxy\Proxy
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

    public function setName($name)
    {
        $this->__load();
        return parent::setName($name);
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function getTelephone()
    {
        $this->__load();
        return parent::getTelephone();
    }

    public function setTelephone($telephone)
    {
        $this->__load();
        return parent::setTelephone($telephone);
    }

    public function getEmail()
    {
        $this->__load();
        return parent::getEmail();
    }

    public function setEmail($email)
    {
        $this->__load();
        return parent::setEmail($email);
    }

    public function getAbsolutePath()
    {
        $this->__load();
        return parent::getAbsolutePath();
    }

    public function getWebPath()
    {
        $this->__load();
        return parent::getWebPath();
    }

    public function getFile()
    {
        $this->__load();
        return parent::getFile();
    }

    public function setFile(\Symfony\Component\HttpFoundation\File\UploadedFile $file = NULL)
    {
        $this->__load();
        return parent::setFile($file);
    }

    public function setPath($path)
    {
        $this->__load();
        return parent::setPath($path);
    }

    public function getPath()
    {
        $this->__load();
        return parent::getPath();
    }

    public function setSize()
    {
        $this->__load();
        return parent::setSize();
    }

    public function getSize()
    {
        $this->__load();
        return parent::getSize();
    }

    public function getCreated()
    {
        $this->__load();
        return parent::getCreated();
    }

    public function setText($text)
    {
        $this->__load();
        return parent::setText($text);
    }

    public function getText()
    {
        $this->__load();
        return parent::getText();
    }

    public function preUpload()
    {
        $this->__load();
        return parent::preUpload();
    }

    public function upload()
    {
        $this->__load();
        return parent::upload();
    }

    public function removeUpload()
    {
        $this->__load();
        return parent::removeUpload();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'name', 'telephone', 'email', 'path', 'size', 'created', 'text');
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