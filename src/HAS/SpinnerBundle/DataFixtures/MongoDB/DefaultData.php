<?php
/**
 * Created by PhpStorm.
 * User: BK
 * Date: 08.01.2015
 * Time: 8:36
 */

namespace HAS\SpinnerBundle\DataFixtures\MongoDB;


use Doctrine\Common\DataFixtures\Doctrine;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use HAS\SpinnerBundle\Document\Category;
use HAS\SpinnerBundle\Document\Question;
use MongoDBODMProxies\__CG__\HAS\SpinnerBundle\Document\Section;

class DefaultData implements FixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param Doctrine\Common\Persistence\ObjectManager $manager
     */
    function load(ObjectManager $manager)
    {
        $category1 = new Category();
        $category1->setName("Führung");

        $category2 = new Category();
        $category2->setName("Recruiting");

        $category3 = new Category();
        $category3->setName("Verkauf");

        $category4 = new Category();
        $category4->setName("Qualifizierung");

        //first category sections
        $section1 = new Section();
        $section1->setName("Zielplanung");
        $section1->setCategory($category1);

        $manager->persist($category1);
        $manager->persist($category2);
        $manager->persist($category3);
        $manager->persist($category4);
        $manager->persist($section1);
        $manager->flush();
    }
}