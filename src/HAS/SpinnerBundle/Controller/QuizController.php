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
                'id' => $category->getId(),
                'name' => $category->getName(),
                'sections' => [],
            ];
            foreach ($category->getSections() as $section) {
                $tmp1 = [
                    'id' => $section->getId(),
                    'name' => $section->getName(),
                    'questions' => [],
                ];
                foreach ($section->getQuestions() as $question) {
                    $tmp2 = [
                        'id' => $question->getId(),
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

    /**
     * @Route("quiz/results", name="quiz_results")
     * @Method("GET")
     */
    public function resultsAction()
    {
        $dm = $this->get('doctrine_mongodb')->getManager();

        $results = $dm->getRepository('HASSpinnerBundle:QuizResult')->findAll(array('user.name' => 'test-user'));
        if (!$results) {
            throw $this->createNotFoundException('Unable to find quiz results.');
        }
        return $this->render('HASSpinnerBundle:Quiz:results.html.twig', array('results' => $results));
    }

    /**
     * @Route("quiz/view/{id}", name="quiz_view")
     * @Method("GET")
     */
    public function viewAction($id)
    {
        $dm = $this->get('doctrine_mongodb')->getManager();

        $result = $dm->getRepository('HASSpinnerBundle:QuizResult')->findOneById($id);

        if (!$result) {
            throw $this->createNotFoundException('Unable to find quiz result.');
        }

        $categories = json_decode($result->getResult());

        return $this->render('HASSpinnerBundle:Quiz:view.html.twig', array('categories' => $categories));
    }
}