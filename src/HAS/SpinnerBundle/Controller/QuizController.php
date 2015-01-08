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
        $dm = $this->get('doctrine_mongodb')->getManager();

        $categories = $dm->getRepository('HASSpinnerBundle:Category')->findAll();
        
        return $this->render('HASSpinnerBundle:Quiz:do.html.twig', ['categories' => $categories]);
    }
}