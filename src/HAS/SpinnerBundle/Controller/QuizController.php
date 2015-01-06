<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 1/6/15
 * Time: 7:40 PM
 */

namespace HAS\SpinnerBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class QuizController
 * @package HAS\SpinnerBundle\Controller
 */
class QuizController extends Controller
{
    /**
     * Allows to fill the quiz
     *
     * @Route("/quiz/do", name="quiz_do")
     * @Method("GET")
     */
    public function doAction()
    {
        $sections = [
            (object) [
                'id' => uniqid(),
                'title' => 'Führung',
                'categories' => [
                    (object) [
                        'id' => uniqid(),
                        'title' => 'Zielplanung',
                        'questions' => [
                            (object) [
                                'id' => uniqid(),
                                'text' => 'Bestehen aktuelle Standards zur Zielplanung?',
                                'weight' => '25',
                                'value' => rand(0, 10) * 10,
                            ],
                            (object) [
                                'id' => uniqid(),
                                'text' => 'Wird diese Führungsaufgabe von Ihnen und Ihren FK trainiert?',
                                'weight' => '25',
                                'value' => rand(0, 10) * 10,
                            ],
                            (object) [
                                'id' => uniqid(),
                                'text' => 'Wird eine Zielplanung von allen FK durchgeführt?',
                                'weight' => '25',
                                'value' => rand(0, 10) * 10,
                            ],
                            (object) [
                                'id' => uniqid(),
                                'text' => 'Besteht ein Controlling durch Sie und ihre FK bzgl. der Durchführung der Zielplanung?',
                                'weight' => '25',
                                'value' => rand(0, 10) * 10,
                            ],
                        ],
                    ],
                    (object) [
                        'id' => uniqid(),
                        'title' => 'Maßnahmenplanung',
                        'questions' => [
                            (object) [
                                'id' => uniqid(),
                                'text' => 'Bestehen aktuelle Standards zur Maßnahmenplanung?',
                                'weight' => '25',
                                'value' => rand(0, 10) * 10,
                            ],
                            (object) [
                                'id' => uniqid(),
                                'text' => 'Wird diese Führungsaufgabe von Ihnen und Ihren FK trainiert?',
                                'weight' => '25',
                                'value' => rand(0, 10) * 10,
                            ],
                            (object) [
                                'id' => uniqid(),
                                'text' => 'Wird eine Maßnahmenplanung von allen FK durchgeführt?',
                                'weight' => '25',
                                'value' => rand(0, 10) * 10,
                            ],
                            (object) [
                                'id' => uniqid(),
                                'text' => 'Besteht ein Controlling durch Sie und ihre FK bzgl. der Durchführung der Maßnahmenplanung?',
                                'weight' => '25',
                                'value' => rand(0, 10) * 10,
                            ],
                        ],
                    ],
                ],
            ],
            (object) [
                'id' => uniqid(),
                'title' => 'Recruiting',
                'categories' => [
                    (object) [
                        'id' => uniqid(),
                        'title' => 'Zielplanung',
                        'questions' => [
                            (object) [
                                'id' => uniqid(),
                                'text' => 'Bestehen aktuelle Standards zur Zielplanung?',
                                'weight' => '25',
                                'value' => rand(0, 10) * 10,
                            ],
                            (object) [
                                'id' => uniqid(),
                                'text' => 'Wird diese Führungsaufgabe von Ihnen und Ihren FK trainiert?',
                                'weight' => '25',
                                'value' => rand(0, 10) * 10,
                            ],
                            (object) [
                                'id' => uniqid(),
                                'text' => 'Wird eine Zielplanung von allen FK durchgeführt?',
                                'weight' => '25',
                                'value' => rand(0, 10) * 10,
                            ],
                            (object) [
                                'id' => uniqid(),
                                'text' => 'Besteht ein Controlling durch Sie und ihre FK bzgl. der Durchführung der Zielplanung?',
                                'weight' => '25',
                                'value' => rand(0, 10) * 10,
                            ],
                        ],
                    ],
                    (object) [
                        'id' => uniqid(),
                        'title' => 'Maßnahmenplanung',
                        'questions' => [
                            (object) [
                                'id' => uniqid(),
                                'text' => 'Bestehen aktuelle Standards zur Maßnahmenplanung?',
                                'weight' => '25',
                                'value' => rand(0, 10) * 10,
                            ],
                            (object) [
                                'id' => uniqid(),
                                'text' => 'Wird diese Führungsaufgabe von Ihnen und Ihren FK trainiert?',
                                'weight' => '25',
                                'value' => rand(0, 10) * 10,
                            ],
                            (object) [
                                'id' => uniqid(),
                                'text' => 'Wird eine Maßnahmenplanung von allen FK durchgeführt?',
                                'weight' => '25',
                                'value' => rand(0, 10) * 10,
                            ],
                            (object) [
                                'id' => uniqid(),
                                'text' => 'Besteht ein Controlling durch Sie und ihre FK bzgl. der Durchführung der Maßnahmenplanung?',
                                'weight' => '25',
                                'value' => rand(0, 10) * 10,
                            ],
                        ],
                    ],
                ],
            ],
        ];

        return $this->render('HASSpinnerBundle:Quiz:do.html.twig', ['sections' => $sections]);
    }
}