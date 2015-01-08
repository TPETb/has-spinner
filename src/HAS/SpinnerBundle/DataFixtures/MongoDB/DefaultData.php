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
use HAS\SpinnerBundle\Document\Section;

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

        $s1 = new Section();
        $s1->setName("Zielplanung");
        $s1->setCategory($category1);

        $q1 = new Question();
        $q1->setName("Bestehen aktuelle Standards zur Zielplanung?");
        $q1->setCategory($category1);
        $q1->setSection($s1);

        $q2 = new Question();
        $q2->setName("Wird diese Führungsaufgabe von Ihnen und Ihren FK trainiert?");
        $q2->setCategory($category1);
        $q2->setSection($s1);

        $q3 = new Question();
        $q3->setName("Wird eine Zielplanung von allen FK durchgeführt?");
        $q3->setCategory($category1);
        $q3->setSection($s1);

        $q4 = new Question();
        $q4->setName("Besteht ein Controlling durch Sie und ihre FK bzgl. der Durchführung der Zielplanung?");
        $q4->setCategory($category1);
        $q4->setSection($s1);

        $s2 = new Section();
        $s2->setName("Maßnahmenplanung");
        $s2->setCategory($category1);

        $q5 = new Question();
        $q5->setName("Bestehen aktuelle Standards zur Maßnahmenplanung?");
        $q5->setCategory($category1);
        $q5->setSection($s2);

        $q6 = new Question();
        $q6->setName("Wird diese Führungsaufgabe von Ihnen und Ihren FK trainiert?");
        $q6->setCategory($category1);
        $q6->setSection($s2);

        $q7 = new Question();
        $q7->setName("Wird eine Maßnahmenplanung von allen FK durchgeführt?");
        $q7->setCategory($category1);
        $q7->setSection($s2);

        $q8 = new Question();
        $q8->setName("Besteht ein Controlling durch Sie und ihre FK bzgl. der Durchführung der Maßnahmenplanung?");
        $q8->setCategory($category1);
        $q8->setSection($s2);

        $s3 = new Section();
        $s3->setName("Aktivitäten durchführen");
        $s3->setCategory($category1);


        $q9 = new Question();
        $q9->setName("Bestehen aktuelle Standards zur Durchführung von Aktivitäten?");
        $q9->setCategory($category1);
        $q9->setSection($s3);

        $q10 = new Question();
        $q10->setName("Wird diese Führungsaufgabe von Ihnen und Ihren FK trainiert?");
        $q10->setCategory($category1);
        $q10->setSection($s3);

        $q11 = new Question();
        $q11->setName("Werden die Aktivitäten von allen MA konsequent durchgeführt?");
        $q11->setCategory($category1);
        $q11->setSection($s3);

        $q12 = new Question();
        $q12->setName("Besteht ein Controlling durch Sie und ihre FK bzgl. der Durchführung der Maßnahmenplanung?");
        $q12->setCategory($category1);
        $q12->setSection($s3);

        $s4 = new Section();
        $s4->setName("Erfolgskontrolle");
        $s4->setCategory($category1);

        $q13 = new Question();
        $q13->setName("Bestehen aktuelle Standards für eine Erfolgskontrolle?");
        $q13->setCategory($category1);
        $q13->setSection($s4);

        $q14 = new Question();
        $q14->setName("Wird diese Führungsaufgabe von Ihnen und Ihren FK trainiert?");
        $q14->setCategory($category1);
        $q14->setSection($s4);

        $q15 = new Question();
        $q15->setName("Wird eine Erfolgskontrolle von allen FK durchgeführt?");
        $q15->setCategory($category1);
        $q15->setSection($s4);

        $q16 = new Question();
        $q16->setName("Besteht ein Controlling durch Sie und ihre FK bzgl. einer Erfolgskontrolle?");
        $q16->setCategory($category1);
        $q16->setSection($s4);

        $s5 = new Section();
        $s5->setName("Steuerung");
        $s5->setCategory($category1);

        $q17 = new Question();
        $q17->setName("Bestehen aktuelle Standards zur Steurung?");
        $q17->setCategory($category1);
        $q17->setSection($s5);

        $q18 = new Question();
        $q18->setName("Wird diese Führungsaufgabe von Ihnen und Ihren FK trainiert?");
        $q18->setCategory($category1);
        $q18->setSection($s5);

        $q19 = new Question();
        $q19->setName("Werden Steuerungsmaßnahmen von allen FK durchgeführt?");
        $q19->setCategory($category1);
        $q19->setSection($s5);

        $q20 = new Question();
        $q20->setName("Besteht ein Controlling durch Sie und ihre FK bzgl. der Steuerungsmaßnahmen?");
        $q20->setCategory($category1);
        $q20->setSection($s5);

        $s6 = new Section();
        $s6->setName("Karriereförderung");
        $s6->setCategory($category1);

        $q21 = new Question();
        $q21->setName("Bestehen aktuelle Standards zur Karriereförderung?");
        $q21->setCategory($category1);
        $q21->setSection($s6);

        $q22 = new Question();
        $q22->setName("Wird diese Führungsaufgabe von Ihnen und Ihren FK trainiert?");
        $q22->setCategory($category1);
        $q22->setSection($s6);

        $q23 = new Question();
        $q23->setName("Besteht ein Controlling durch Sie und ihre FK bzgl. der Karriereförderung?");
        $q23->setCategory($category1);
        $q23->setSection($s6);

        $q24 = new Question();
        $q24->setName("Besteht ein Controlling durch Sie und ihre FK bzgl. der Karriereförderung?");
        $q24->setCategory($category1);
        $q24->setSection($s6);

        $s7 = new Section();
        $s7->setName("Motivation");
        $s7->setCategory($category1);

        $q25 = new Question();
        $q25->setName("Bestehen aktuelle Standards zur Motivation der Mitarbeiter?");
        $q25->setCategory($category1);
        $q25->setSection($s7);

        $q26 = new Question();
        $q26->setName("Wird diese Führungsaufgabe von Ihnen und Ihren FK trainiert?");
        $q26->setCategory($category1);
        $q26->setSection($s7);

        $q27 = new Question();
        $q27->setName("Werden motivierende Maßnahmen von allen FK durchgeführt?");
        $q27->setCategory($category1);
        $q27->setSection($s7);

        $q28 = new Question();
        $q28->setName("Besteht ein Controlling durch Sie und ihre FK bzgl. der Motivation?");
        $q28->setCategory($category1);
        $q28->setSection($s7);

        $category2 = new Category();
        $category2->setName("Recruiting");

        $category3 = new Category();
        $category3->setName("Verkauf");

        $category4 = new Category();
        $category4->setName("Qualifizierung");

        //two category sections
        $s8 = new Section();
        $s8->setName("Potential- neue Finanzberater");
        $s8->setCategory($category2);

        $q29 = new Question();
        $q29->setName("Bestehen aktuelle Standards zur Potentialsammlung und -pflege?");
        $q29->setCategory($category2);
        $q29->setSection($s8);

        $q30 = new Question();
        $q30->setName("Wird die Potentialsammlung und -pflege durch Sie und ihre FK trainiert?");
        $q30->setCategory($category2);
        $q30->setSection($s8);

        $q31 = new Question();
        $q31->setName("Wird die Potentialsammlung und -pflege von allen Mitarbeitern umgesetzt?");
        $q31->setCategory($category2);
        $q31->setSection($s8);

        $q32 = new Question();
        $q32->setName("Besteht ein Controlling von Ihnen und ihren FK zur Potentialsammlung und -pflege?");
        $q32->setCategory($category2);
        $q32->setSection($s8);

        $s9 = new Section();
        $s9->setName("Kontaktaufnahme");
        $s9->setCategory($category2);

        $q33 = new Question();
        $q33->setName("Bestehen aktuelle Kontaktgespräche / Leitfäden als Standard?");
        $q33->setCategory($category2);
        $q33->setSection($s9);

        $q34 = new Question();
        $q34->setName("Wird die Kontaktaufnahme / -gespräche durch Sie und ihre FK trainiert?");
        $q34->setCategory($category2);
        $q34->setSection($s9);

        $q35 = new Question();
        $q35->setName("Wird die Kontaktaufnahme / -gespräche von allen Mitarbeitern umgesetzt?");
        $q35->setCategory($category2);
        $q35->setSection($s9);

        $q36 = new Question();
        $q36->setName("Besteht ein Controlling von Ihnen und ihren FK zur Kontaktaufnahme?");
        $q36->setCategory($category2);
        $q36->setSection($s9);

        $s10 = new Section();
        $s10->setName("Vorstellungsgespräch");
        $s10->setCategory($category2);

        $q37 = new Question();
        $q37->setName("Bestehen aktuelle Leitfäden / Gespräche als Standard?");
        $q37->setCategory($category2);
        $q37->setSection($s10);

        $q38 = new Question();
        $q38->setName("Werden die VG durch Sie und ihre FK trainiert?");
        $q38->setCategory($category2);
        $q38->setSection($s10);

        $q39 = new Question();
        $q39->setName("Werden VG von allen Mitarbeitern umgesetzt?");
        $q39->setCategory($category2);
        $q39->setSection($s10);

        $q40 = new Question();
        $q40->setName("Besteht ein Controlling von Ihnen und ihren FK zu VG?");
        $q40->setCategory($category2);
        $q40->setSection($s10);

        $s11 = new Section();
        $s11->setName("Informationsveranstaltung");
        $s11->setCategory($category2);

        $q41 = new Question();
        $q41->setName("Bestehen aktuelle Standards?");
        $q41->setCategory($category2);
        $q41->setSection($s11);

        $q42 = new Question();
        $q42->setName("Werden die Informationsveranstaltung und die Durchführung durch Sie und ihre FK trainiert?");
        $q42->setCategory($category2);
        $q42->setSection($s11);

        $q43 = new Question();
        $q43->setName("Wird die Informationsveranstaltung von allen Mitarbeitern umgesetzt / genutzt? ");
        $q43->setCategory($category2);
        $q43->setSection($s11);

        $q44 = new Question();
        $q44->setName("Besteht ein Controlling von Ihnen und ihren FK zur Informationsveranstaltung?");
        $q44->setCategory($category2);
        $q44->setSection($s11);

        $s12 = new Section();
        $s12->setName("Start-PG für neue Finanzberater");
        $s12->setCategory($category2);

        $q45 = new Question();
        $q45->setName("Bestehen aktuelle Leitfäden / Gespräche als Standard?");
        $q45->setCategory($category2);
        $q45->setSection($s12);

        $q46 = new Question();
        $q46->setName("Werden die Start-PG durch Sie und ihre FK trainiert?");
        $q46->setCategory($category2);
        $q46->setSection($s12);

        $q47 = new Question();
        $q47->setName("Werden die Start-PG von allen Mitarbeitern umgesetzt?");
        $q47->setCategory($category2);
        $q47->setSection($s12);

        $q48 = new Question();
        $q48->setName("Besteht ein Controlling von Ihnen und ihren FK zu den Start-PG?");
        $q48->setCategory($category2);
        $q48->setSection($s12);


        $manager->persist($category1);
        $manager->persist($category2);
        $manager->persist($category3);
        $manager->persist($category4);

        $manager->persist($s1);
        $manager->persist($s2);
        $manager->persist($s3);
        $manager->persist($s4);
        $manager->persist($s5);
        $manager->persist($s6);
        $manager->persist($s7);
        $manager->persist($s8);
        $manager->persist($s9);
        $manager->persist($s10);
        $manager->persist($s11);
        $manager->persist($s12);


        $manager->persist($q1);
        $manager->persist($q2);
        $manager->persist($q3);
        $manager->persist($q4);
        $manager->persist($q5);
        $manager->persist($q6);
        $manager->persist($q7);
        $manager->persist($q8);
        $manager->persist($q9);
        $manager->persist($q10);
        $manager->persist($q11);
        $manager->persist($q12);
        $manager->persist($q13);
        $manager->persist($q14);
        $manager->persist($q15);
        $manager->persist($q16);
        $manager->persist($q17);
        $manager->persist($q18);
        $manager->persist($q19);
        $manager->persist($q20);
        $manager->persist($q21);
        $manager->persist($q22);
        $manager->persist($q23);
        $manager->persist($q24);
        $manager->persist($q25);
        $manager->persist($q26);
        $manager->persist($q27);
        $manager->persist($q28);

        $manager->persist($q29);
        $manager->persist($q30);
        $manager->persist($q31);
        $manager->persist($q32);
        $manager->persist($q33);
        $manager->persist($q34);
        $manager->persist($q35);
        $manager->persist($q36);
        $manager->persist($q37);
        $manager->persist($q38);
        $manager->persist($q39);
        $manager->persist($q40);
        $manager->persist($q41);
        $manager->persist($q42);
        $manager->persist($q43);
        $manager->persist($q44);
        $manager->persist($q45);
        $manager->persist($q46);
        $manager->persist($q47);
        $manager->persist($q48);

        $manager->flush();
    }
}