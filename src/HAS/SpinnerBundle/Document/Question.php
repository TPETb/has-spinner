<?php
/**
 * Created by PhpStorm.
 * User: BK
 * Date: 06.01.2015
 * Time: 5:08
 */

namespace HAS\SpinnerBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\ODM\MongoDB\Mapping\Annotations\ReferenceOne;

/**
 * Class Question
 * @package HAS\SpinnerBundle\Document
 * @MongoDB\Document
 */
class Question {
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\String
     */
    protected $name;

    /**
     * @ReferenceOne(targetDocument="Category", inversedBy="section")
     */
    protected $category;

    /**
     * @ReferenceOne(targetDocument="Section", inversedBy="category")
     */
    public $section;



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
     * Set section
     *
     * @param HAS\SpinnerBundle\Document\Section $section
     * @return self
     */
    public function setSection(\HAS\SpinnerBundle\Document\Section $section)
    {
        $this->section = $section;
        return $this;
    }

    /**
     * Get section
     *
     * @return HAS\SpinnerBundle\Document\Section $section
     */
    public function getSection()
    {
        return $this->section;
    }
}