<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 1/6/15
 * Time: 7:40 PM
 */

namespace HAS\SpinnerBundle\Controller;


use HAS\SpinnerBundle\Document\QuizResult;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

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
        $dm = $this->get('doctrine_mongodb')->getManager();

        $categories = $dm->getRepository('HASSpinnerBundle:Category')->findAll();

        return $this->render('HASSpinnerBundle:Quiz:do.html.twig', ['categories' => $categories]);
    }


    /**
     * @Route("quiz/submit", name="quiz_submit")
     * @Method("POST")
     */
    public function submitAction(Request $request)
    {
        $dm = $this->get('doctrine_mongodb')->getManager();

        $categories = $dm->getRepository('HASSpinnerBundle:Category')->findAll();
        $user = $dm->getRepository('HASSpinnerBundle:User')->findOneBy(array('name'=>'test-user'));

        $categoriesArray = [];
        foreach ($categories as $category) {
            $tmp = [
                'name' => $category->getName(),
                'sections' => [],
            ];
            foreach ($category->getSections() as $section) {
                $tmp1 = [
                    'name' => $section->getName(),
                    'questions' => [],
                ];
                foreach ($section->getQuestions() as $question) {
                    $tmp2 = [
                        'name' => $question->getName(),
                        'weight' => $question->getWeight(),
                        'value' => $request->get('question_'.$question->getId()),
                    ];
                    $tmp1['questions'][] = $tmp2;
                }
                $tmp['sections'][] = $tmp1;
            }
            $categoriesArray[] = $tmp;
        }

        $result = new QuizResult();
        $date = new \DateTime();
        $result->setDatePassing($date->getTimestamp());
        $result->setResult(json_encode($categoriesArray));
        $result->setUser($user);
        $dm->persist($result);
        $dm->flush();

        return $this->redirect($this->generateUrl('quiz_do'));
    }
}