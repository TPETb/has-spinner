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
use HAS\SpinnerBundle\Document\User;

class DefaultData implements FixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param \Doctrine\Common\Persistence\ObjectManager $manager
     */
    function load(ObjectManager $manager)
    {
        $categories = [
            (object)[
                'title' => 'Führung',
                'sections' => [
                    (object)[
                        'title' => 'Zielplanung',
                        'questions' => [
                            (object)[
                                'text' => 'Bestehen aktuelle Standards zur Zielplanung?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Wird diese Führungsaufgabe von Ihnen und Ihren FK trainiert?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Wird eine Zielplanung von allen FK durchgeführt?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Besteht ein Controlling durch Sie und ihre FK bzgl. der Durchführung der Zielplanung?',
                                'weight' => '25',
                            ],
                        ],
                    ],
                    (object)[
                        'title' => 'Maßnahmenplanung',
                        'questions' => [
                            (object)[
                                'text' => 'Bestehen aktuelle Standards zur Maßnahmenplanung?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Wird diese Führungsaufgabe von Ihnen und Ihren FK trainiert?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Wird eine Maßnahmenplanung von allen FK durchgeführt?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Besteht ein Controlling durch Sie und ihre FK bzgl. der Durchführung der Maßnahmenplanung?',
                                'weight' => '25',
                            ],
                        ],
                    ],
                    (object)[
                        'title' => 'Aktivitäten durchführen',
                        'questions' => [
                            (object)[
                                'text' => 'Bestehen aktuelle Standards zur Durchführung von Aktivitäten?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Wird diese Führungsaufgabe von Ihnen und Ihren FK trainiert?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Werden die Aktivitäten von allen MA konsequent durchgeführt?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Besteht ein Controlling durch Sie und ihre FK bzgl. der Durführung von Aktivitäten?',
                                'weight' => '25',
                            ],
                        ],
                    ],
                    (object)[
                        'title' => 'Erfolgskontrolle',
                        'questions' => [
                            (object)[
                                'text' => 'Bestehen aktuelle Standards für eine Erfolgskontrolle?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Wird diese Führungsaufgabe von Ihnen und Ihren FK trainiert?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Wird eine Erfolgskontrolle von allen FK durchgeführt?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Besteht ein Controlling durch Sie und ihre FK bzgl. einer Erfolgskontrolle?',
                                'weight' => '25',
                            ],
                        ],
                    ],
                    (object)[
                        'title' => 'Steuerung',
                        'questions' => [
                            (object)[
                                'text' => 'Bestehen aktuelle Standards zur Steurung?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Wird diese Führungsaufgabe von Ihnen und Ihren FK trainiert?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Werden Steuerungsmaßnahmen von allen FK durchgeführt?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Besteht ein Controlling durch Sie und ihre FK bzgl. der Steuerungsmaßnahmen?',
                                'weight' => '25',
                            ],
                        ],
                    ],
                    (object)[
                        'title' => 'Karriereförderung',
                        'questions' => [
                            (object)[
                                'text' => 'Bestehen aktuelle Standards zur Karriereförderung?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Wird diese Führungsaufgabe von Ihnen und Ihren FK trainiert?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Wird eine Karriereförderung von allen FK durchgeführt?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Besteht ein Controlling durch Sie und ihre FK bzgl. der Karriereförderung?',
                                'weight' => '25',
                            ],
                        ],
                    ],
                    (object)[
                        'title' => 'Motivation',
                        'questions' => [
                            (object)[
                                'text' => 'Bestehen aktuelle Standards zur Motivation der Mitarbeiter?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Wird diese Führungsaufgabe von Ihnen und Ihren FK trainiert?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Werden motivierende Maßnahmen von allen FK durchgeführt?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Besteht ein Controlling durch Sie und ihre FK bzgl. der Motivation?',
                                'weight' => '25',
                            ],
                        ],
                    ],
                ],
            ],


            (object)[
                'title' => 'Recruiting',
                'sections' => [
                    (object)[
                        'title' => 'Potential- neue Finanzberater',
                        'questions' => [
                            (object)[
                                'text' => 'Bestehen aktuelle Standards zur Potentialsammlung und -pflege?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Wird die Potentialsammlung und -pflege durch Sie und ihre FK trainiert?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Wird die Potentialsammlung und -pflege von allen Mitarbeitern umgesetzt?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Besteht ein Controlling von Ihnen und ihren FK zur Potentialsammlung und -pflege?',
                                'weight' => '25',
                            ],
                        ],
                    ],
                    (object)[
                        'title' => 'Kontaktaufnahme',
                        'questions' => [
                            (object)[
                                'text' => 'Bestehen aktuelle Kontaktgespräche / Leitfäden als Standard?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Wird die Kontaktaufnahme / -gespräche durch Sie und ihre FK trainiert?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Wird die Kontaktaufnahme / -gespräche von allen Mitarbeitern umgesetzt?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Besteht ein Controlling von Ihnen und ihren FK zur Kontaktaufnahme?',
                                'weight' => '25',
                            ],
                        ],
                    ],
                    (object)[
                        'title' => 'Vorstellungsgespräch',
                        'questions' => [
                            (object)[
                                'text' => 'Bestehen aktuelle Leitfäden / Gespräche als Standard ? ',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Werden die VG durch Sie und ihre FK trainiert ? ',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Werden VG von allen Mitarbeitern umgesetzt ? ',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Besteht ein Controlling von Ihnen und ihren FK zu VG ? ',
                                'weight' => '25',
                            ],
                        ],
                    ],
                    (object)[
                        'title' => 'Informationsveranstaltung',
                        'questions' => [
                            (object)[
                                'text' => 'Bestehen aktuelle Standards ?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Werden die Informationsveranstaltung und die Durchführung durch Sie und ihre FK trainiert ? ',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Wird die Informationsveranstaltung von allen Mitarbeitern umgesetzt / genutzt ? ',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Besteht ein Controlling von Ihnen und ihren FK zur Informationsveranstaltung ? ',
                                'weight' => '25',
                            ],
                        ],
                    ],
                    (object)[
                        'title' => 'Start - PG für neue Finanzberater',
                        'questions' => [
                            (object)[
                                'text' => 'Bestehen aktuelle Leitfäden / Gespräche als Standard ? ',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Werden die Start - PG durch Sie und ihre FK trainiert ? ',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Werden die Start - PG von allen Mitarbeitern umgesetzt ? ',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Besteht ein Controlling von Ihnen und ihren FK zu den Start - PG ? ',
                                'weight' => '25',
                            ],
                        ],
                    ],
                ],
            ],


            (object)[
                'title' => 'Führung',
                'sections' => [
                    (object)[
                        'title' => 'Potential- neue Kunden',
                        'questions' => [
                            (object)[
                                'text' => 'Haben Sie und ihre FK. eine aktuelle standardisierte Vorgehensweise für die Potenzial Gewinnung?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Setzen Sie und ihre FK. einheitliche trainings zur Potenzial Gewinnung in der Struktur ein?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Setzen Sie und ihre FK. dies konsequent und einheitlich in der gesamten Struktur um?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Findet hierzu ein Controlling durch Sie und die FK statt?',
                                'weight' => '25',
                            ],
                        ],
                    ],
                    (object)[
                        'title' => 'Kontaktaufnahme',
                        'questions' => [
                            (object)[
                                'text' => 'Haben Sie und ihre FK. eine aktuelle standardisierte Vorgehensweise für die Kontaktaufnahme?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Setzen Sie und ihre FK. einheitliche trainings zur Potenzial Gewinnung in der Struktur ein?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Setzen Sie und ihre FK. dies konsequent und einheitlich in der gesamten Struktur um?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Findet hierzu ein Controlling durch Sie und die FK statt?',
                                'weight' => '25',
                            ],
                        ],
                    ],
                    (object)[
                        'title' => 'Terminvereinbarung',
                        'questions' => [
                            (object)[
                                'text' => 'Haben Sie und ihre FK. eine aktuelle standardisierte Vorgehensweise für die Terminvereinbarung?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Setzen Sie und ihre FK. einheitliche trainings zur Terminvereinbarung in der Struktur ein?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Setzen Sie und ihre FK. dies konsequent und einheitlich in der gesamten Struktur um?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Findet hierzu ein Controlling durch Sie und die FK statt?',
                                'weight' => '25',
                            ],
                        ],
                    ],
                    (object)[
                        'title' => 'Analyse',
                        'questions' => [
                            (object)[
                                'text' => 'Haben Sie und ihre FK. eine aktuelle standardisierte Vorgehensweise für die Analyse?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Setzen Sie und ihre FK. einheitliche trainings zur Analyse in der Struktur ein?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Setzen Sie und ihre FK. dies konsequent und einheitlich in der gesamten Struktur um?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Findet hierzu ein Controlling durch Sie und die FK statt?',
                                'weight' => '25',
                            ],
                        ],
                    ],
                    (object)[
                        'title' => 'Beratung',
                        'questions' => [
                            (object)[
                                'text' => 'Haben Sie und ihre FK. eine aktuelle standardisierte Vorgehensweise für die Beratung?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Setzen Sie und ihre FK. einheitliche trainings zur Beratung in der Struktur ein?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Setzen Sie und ihre FK. dies konsequent und einheitlich in der gesamten Struktur um?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Findet hierzu ein Controlling durch Sie und die FK statt?',
                                'weight' => '25',
                            ],
                        ],
                    ],
                    (object)[
                        'title' => 'Service',
                        'questions' => [
                            (object)[
                                'text' => 'Haben Sie und ihre FK. eine aktuelle standardisierte Vorgehensweise für den Service?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Setzen Sie und ihre FK. einheitliche trainings zum Thema Service in der Struktur ein?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Setzen Sie und ihre FK. dies konsequent und einheitlich in der gesamten Struktur um?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Findet hierzu ein Controlling durch Sie und die FK statt?',
                                'weight' => '25',
                            ],
                        ],
                    ],
                ],
            ],


            (object)[
                'title' => 'Qualifizierung',
                'sections' => [
                    (object)[
                        'title' => 'Einarbeitung',
                        'questions' => [
                            (object)[
                                'text' => 'Gibt es eine aktuelle standardisierte Vorgehensweise in der Einarbeitung?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Wird dies einheitlich in der gesamten Struktur trainiert?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Wird dies konsequent und einheitlich in der gesamten Struktur umgesetzt?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Findet hierzu ein Controlling durch die FK statt?',
                                'weight' => '25',
                            ],
                        ],
                    ],
                    (object)[
                        'title' => 'Grundausbildung',
                        'questions' => [
                            (object)[
                                'text' => 'Gibt es eine aktuelle standardisierte Vorgehensweise in der Grundausbildung?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Wird dies einheitlich in der gesamten Struktur trainiert?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Wird dies konsequent und einheitlich in der gesamten Struktur umgesetzt?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Findet hierzu ein Controlling durch die FK statt?',
                                'weight' => '25',
                            ],
                        ],
                    ],
                    (object)[
                        'title' => 'GST Seminar',
                        'questions' => [
                            (object)[
                                'text' => 'Gibt es eine aktuelle standardisierte Vorgehensweise in der Vorbereitung aufs GST Seminar?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Wird dies einheitlich in der gesamten Struktur trainiert?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Wird dies konsequent und einheitlich in der gesamten Struktur umgesetzt?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Findet hierzu ein Controlling durch die FK statt?',
                                'weight' => '25',
                            ],
                        ],
                    ],
                    (object)[
                        'title' => 'Weiterqualifizierung ab GST',
                        'questions' => [
                            (object)[
                                'text' => 'Gibt es eine aktuelle standardisierte Vorgehensweise in der Weiterbildung ab GST?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Wird dies einheitlich in der gesamten Struktur trainiert?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Wird dies konsequent und einheitlich in der gesamten Struktur umgesetzt?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Findet hierzu ein Controlling durch die FK statt?',
                                'weight' => '25',
                            ],
                        ],
                    ],
                    (object)[
                        'title' => 'Weiterqualifizierung ab Direktor',
                        'questions' => [
                            (object)[
                                'text' => 'Gibt es eine aktuelle standardisierte Vorgehensweise bei der Weiterbildung ab Direktor?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Wird dies einheitlich in der gesamten Struktur trainiert?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Wird dies konsequent und einheitlich in der gesamten Struktur umgesetzt?',
                                'weight' => '25',
                            ],
                            (object)[
                                'text' => 'Findet hierzu ein Controlling durch die FK statt?',
                                'weight' => '25',
                            ],
                        ],
                    ],

                ],
            ],
        ];

        $user = new User();
        $user->setName('test-user');

        foreach ($categories as $category) {
            $categoryDoc = new Category();
            $categoryDoc->setName($category->title);
            $manager->persist($categoryDoc);
            foreach ($category->sections as $section) {
                $sectionDoc = new Section();
                $sectionDoc->setName($section->title);
                $sectionDoc->setCategory($categoryDoc);
                $manager->persist($sectionDoc);
                foreach ($section->questions as $question) {
                    $questionDoc = new Question();
                    $questionDoc->setName($question->text);
                    $questionDoc->setWeight($question->weight);
                    $questionDoc->setSection($sectionDoc);
                    $manager->persist($questionDoc);
                }
            }
        }

        $manager->persist($user);

        $manager->flush();
    }
}