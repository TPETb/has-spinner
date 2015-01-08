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
class Question
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\String
     */
    protected $name;

    /**
     * @MongoDB\Int
     */
    protected $weight;

    /**
     * @ReferenceOne(targetDocument="Category")
     */
    protected $category;

    /**
     * @ReferenceOne(targetDocument="Section", inversedBy="questions")
     */
    protected $section;


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

    /**
     * Set weight
     *
     * @param int $weight
     * @return self
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * Get weight
     *
     * @return int $weight
     */
    public function getWeight()
    {
        return $this->weight;
    }
}
