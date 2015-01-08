<?php
/**
 * Created by PhpStorm.
 * User: BK
 * Date: 08.01.2015
 * Time: 11:50
 */

namespace HAS\SpinnerBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\ODM\MongoDB\Mapping\Annotations\ReferenceOne;

/**
 * Class QuizResult
 * @package HAS\SpinnerBundle\Document
 * @MongoDB\Document
 */
class QuizResult
{

    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Timestamp
     */
    protected $datePassing;


    /** @ReferenceOne(targetDocument="User") */
    protected $user;

    /**
     * @MongoDB\String
     */
    protected $result;


    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set datePassing
     *
     * @param timestamp $datePassing
     * @return self
     */
    public function setDatePassing($datePassing)
    {
        $this->datePassing = $datePassing;
        return $this;
    }


    /**
     * Get datePassing
     *
     * @return timestamp $datePassing
     */
    public function getDatePassing()
    {
        return $this->datePassing;
    }


    /**
     * Set user
     *
     * @param HAS\SpinnerBundle\Document\User $user
     * @return self
     */
    public function setUser(\HAS\SpinnerBundle\Document\User $user)
    {
        $this->user = $user;
        return $this;
    }


    /**
     * Get user
     *
     * @return HAS\SpinnerBundle\Document\User $user
     */
    public function getUser()
    {
        return $this->user;
    }


    /**
     * Set result
     *
     * @param string $result
     * @return self
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }


    /**
     * Get result
     *
     * @return string $result
     */
    public function getResult()
    {
        return $this->result;
    }
}
