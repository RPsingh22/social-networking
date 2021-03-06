<?php

namespace Proxies\__CG__\Entities;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class job extends \Entities\job implements \Doctrine\ORM\Proxy\Proxy
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

    public function getJob_title()
    {
        $this->__load();
        return parent::getJob_title();
    }

    public function setJob_title($job_title)
    {
        $this->__load();
        return parent::setJob_title($job_title);
    }

    public function getJob_description()
    {
        $this->__load();
        return parent::getJob_description();
    }

    public function setJob_description($job_description)
    {
        $this->__load();
        return parent::setJob_description($job_description);
    }

    public function getJob_reference()
    {
        $this->__load();
        return parent::getJob_reference();
    }

    public function setJob_reference($job_reference)
    {
        $this->__load();
        return parent::setJob_reference($job_reference);
    }

    public function getResponsibilities()
    {
        $this->__load();
        return parent::getResponsibilities();
    }

    public function setResponsibilities($responsibilities)
    {
        $this->__load();
        return parent::setResponsibilities($responsibilities);
    }

    public function getSkills_n_expertise()
    {
        $this->__load();
        return parent::getSkills_n_expertise();
    }

    public function setSkills_n_expertise($skills_n_expertise)
    {
        $this->__load();
        return parent::setSkills_n_expertise($skills_n_expertise);
    }

    public function getExpiry_date()
    {
        $this->__load();
        return parent::getExpiry_date();
    }

    public function setExpiry_date($expiry_date)
    {
        $this->__load();
        return parent::setExpiry_date($expiry_date);
    }

    public function getUrl_fields()
    {
        $this->__load();
        return parent::getUrl_fields();
    }

    public function setUrl_fields($url_fields)
    {
        $this->__load();
        return parent::setUrl_fields($url_fields);
    }

    public function getCompany_desc()
    {
        $this->__load();
        return parent::getCompany_desc();
    }

    public function setCompany_desc($company_desc)
    {
        $this->__load();
        return parent::setCompany_desc($company_desc);
    }

    public function getJob_posted_by()
    {
        $this->__load();
        return parent::getJob_posted_by();
    }

    public function setJob_posted_by($job_posted_by)
    {
        $this->__load();
        return parent::setJob_posted_by($job_posted_by);
    }

    public function getApply_from()
    {
        $this->__load();
        return parent::getApply_from();
    }

    public function setApply_from($apply_from)
    {
        $this->__load();
        return parent::setApply_from($apply_from);
    }

    public function getJob_image()
    {
        $this->__load();
        return parent::getJob_image();
    }

    public function setJob_image($job_image)
    {
        $this->__load();
        return parent::setJob_image($job_image);
    }

    public function getCompany_job_url()
    {
        $this->__load();
        return parent::getCompany_job_url();
    }

    public function setCompany_job_url($company_job_url)
    {
        $this->__load();
        return parent::setCompany_job_url($company_job_url);
    }

    public function getComments()
    {
        $this->__load();
        return parent::getComments();
    }

    public function setComments($comments)
    {
        $this->__load();
        return parent::setComments($comments);
    }

    public function getCompany_job_apply_url()
    {
        $this->__load();
        return parent::getCompany_job_apply_url();
    }

    public function setCompany_job_apply_url($company_job_apply_url)
    {
        $this->__load();
        return parent::setCompany_job_apply_url($company_job_apply_url);
    }

    public function getJob_applications()
    {
        $this->__load();
        return parent::getJob_applications();
    }

    public function setJob_applications($job_applications)
    {
        $this->__load();
        return parent::setJob_applications($job_applications);
    }

    public function getSavedJobs()
    {
        $this->__load();
        return parent::getSavedJobs();
    }

    public function setSavedJobs($savedJobs)
    {
        $this->__load();
        return parent::setSavedJobs($savedJobs);
    }

    public function getCountryRef()
    {
        $this->__load();
        return parent::getCountryRef();
    }

    public function setCountryRef($countryRef)
    {
        $this->__load();
        return parent::setCountryRef($countryRef);
    }

    public function getState()
    {
        $this->__load();
        return parent::getState();
    }

    public function setState($state)
    {
        $this->__load();
        return parent::setState($state);
    }

    public function getCity()
    {
        $this->__load();
        return parent::getCity();
    }

    public function setCity($city)
    {
        $this->__load();
        return parent::setCity($city);
    }

    public function getJobFunction()
    {
        $this->__load();
        return parent::getJobFunction();
    }

    public function setJobFunction($jobFunction)
    {
        $this->__load();
        return parent::setJobFunction($jobFunction);
    }

    public function getCompany()
    {
        $this->__load();
        return parent::getCompany();
    }

    public function setCompany($company)
    {
        $this->__load();
        return parent::setCompany($company);
    }

    public function getIndustryRef()
    {
        $this->__load();
        return parent::getIndustryRef();
    }

    public function setIndustryRef($industryRef)
    {
        $this->__load();
        return parent::setIndustryRef($industryRef);
    }

    public function getJobType()
    {
        $this->__load();
        return parent::getJobType();
    }

    public function setJobType($jobType)
    {
        $this->__load();
        return parent::setJobType($jobType);
    }

    public function getSender_ref_id()
    {
        $this->__load();
        return parent::getSender_ref_id();
    }

    public function setSender_ref_id($sender_ref_id)
    {
        $this->__load();
        return parent::setSender_ref_id($sender_ref_id);
    }

    public function getSender_ref_type()
    {
        $this->__load();
        return parent::getSender_ref_type();
    }

    public function setSender_ref_type($sender_ref_type)
    {
        $this->__load();
        return parent::setSender_ref_type($sender_ref_type);
    }

    public function getSalaryRange()
    {
        $this->__load();
        return parent::getSalaryRange();
    }

    public function setSalaryRange($salaryRange)
    {
        $this->__load();
        return parent::setSalaryRange($salaryRange);
    }

    public function getExperieneceLevel()
    {
        $this->__load();
        return parent::getExperieneceLevel();
    }

    public function setExperieneceLevel($experieneceLevel)
    {
        $this->__load();
        return parent::setExperieneceLevel($experieneceLevel);
    }

    public function getJobStatus()
    {
        $this->__load();
        return parent::getJobStatus();
    }

    public function setJobStatus($jobStatus)
    {
        $this->__load();
        return parent::setJobStatus($jobStatus);
    }

    public function getIlookUser()
    {
        $this->__load();
        return parent::getIlookUser();
    }

    public function setIlookUser($ilookUser)
    {
        $this->__load();
        return parent::setIlookUser($ilookUser);
    }

    public function getCreated_at()
    {
        $this->__load();
        return parent::getCreated_at();
    }

    public function setCreated_at($created_at)
    {
        $this->__load();
        return parent::setCreated_at($created_at);
    }

    public function getUpdated_at()
    {
        $this->__load();
        return parent::getUpdated_at();
    }

    public function setUpdated_at($updated_at)
    {
        $this->__load();
        return parent::setUpdated_at($updated_at);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'job_title', 'job_description', 'job_reference', 'responsibilities', 'skills_n_expertise', 'expiry_date', 'url_fields', 'company_desc', 'job_posted_by', 'apply_from', 'job_image', 'company_job_url', 'company_job_apply_url', 'comments', 'sender_ref_id', 'sender_ref_type', 'created_at', 'updated_at', 'job_applications', 'savedJobs', 'countryRef', 'state', 'city', 'jobFunction', 'company', 'industryRef', 'jobType', 'salaryRange', 'experieneceLevel', 'jobStatus', 'ilookUser');
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