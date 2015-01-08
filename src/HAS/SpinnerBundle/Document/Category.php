<?php
/**
 * Created by PhpStorm.
 * User: BK
 * Date: 06.01.2015
 * Time: 3:58
 */

namespace HAS\SpinnerBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\ODM\MongoDB\Mapping\Annotations\ReferenceMany;

/**
 * Class Category
 * @package HAS\SpinnerBundle\Document
 * @MongoDB\Document
 */
class Category
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
     * @ReferenceMany(targetDocument="Section", mappedBy="category")
     */
    protected $sections;


    public function __construct()
    {
        $this->sections = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add section
     *
     * @param HAS\SpinnerBundle\Document\Section $section
     */
    public function addSection(\HAS\SpinnerBundle\Document\Section $section)
    {
        $this->sections[] = $section;
    }


    /**
     * Remove section
     *
     * @param HAS\SpinnerBundle\Document\Section $section
     */
    public function removeSection(\HAS\SpinnerBundle\Document\Section $section)
    {
        $this->sections->removeElement($section);
    }


    /**
     * Get sections
     *
     * @return Doctrine\Common\Collections\Collection $sections
     */
    public function getSections()
    {
        return $this->sections;
    }


    public function __toString()
    {
        return $this->name;
    }
}
