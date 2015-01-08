<?php
/**
 * Created by PhpStorm.
 * User: BK
 * Date: 06.01.2015
 * Time: 3:59
 */

namespace HAS\SpinnerBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\ODM\MongoDB\Mapping\Annotations\ReferenceOne;
use Doctrine\ODM\MongoDB\Mapping\Annotations\ReferenceMany;

/**
 * Class Section
 * @package HAS\SpinnerBundle\Document
 * @MongoDB\Document
 */
class Section {
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\String
     */
    protected $name;

    /**
     * @ReferenceOne(targetDocument="Category", inversedBy="sections")
     */
    protected $category;

    /**
     * @ReferenceMany(targetDocument="Question", mappedBy="section")
     */
    protected $questions;


    public function __construct()
    {
        $this->questions = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * Set name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set category
     *
     * @param HAS\SpinnerBundle\Document\Category $category
     * @return self
     */
    public function setCategory(\HAS\SpinnerBundle\Document\Category $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Get category
     *
     * @return HAS\SpinnerBundle\Document\Category $category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Add question
     *
     * @param HAS\SpinnerBundle\Document\Question $question
     */
    public function addQuestion(\HAS\SpinnerBundle\Document\Question $question)
    {
        $this->questions[] = $question;
    }

    /**
     * Remove question
     *
     * @param HAS\SpinnerBundle\Document\Question $question
     */
    public function removeQuestion(\HAS\SpinnerBundle\Document\Question $question)
    {
        $this->questions->removeElement($question);
    }

    /**
     * Get questions
     *
     * @return Doctrine\Common\Collections\Collection $questions
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    public function __toString(){
        return $this->name;
    }
}
