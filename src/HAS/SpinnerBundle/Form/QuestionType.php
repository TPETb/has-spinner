<?php
/**
 * Created by PhpStorm.
 * User: BK
 * Date: 06.01.2015
 * Time: 5:33
 */

namespace HAS\SpinnerBundle\Form;

use Doctrine\ODM\MongoDB\DocumentRepository;
use Doctrine\ORM\EntityRepository;
use HAS\SpinnerBundle\Document\Category;
use HAS\SpinnerBundle\Document\Question;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QuestionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('category')
//            ->add('section')
        ;

        $factory = $builder->getFormFactory();

        $refreshCity = function($form, $category) use ($factory) {
            /** @var $form \Symfony\Component\Form\Form */
            $form->add($factory->createNamed('section', "document", null, array(
                'class'         => 'HASSpinnerBundle:Section',
                'property'      => 'name',
                "auto_initialize" => false,
                'label'         => 'Section',
                'attr'          => array('class' => 'input-xlarge validate required select2'),
                'query_builder' => function (DocumentRepository $er) use ($category) {
                    //var_dump($category); die();
                    $qb = $er->createQueryBuilder('Section')->field('category')->equals("54abc0d8d23bd3c41e000033");
                    //var_dump($qb); die();

//                    if ($category instanceof Category) {
//
//                        $qb = $qb->where('category = :category')
//                            ->setParameter('category', $category);
//                    } elseif (is_numeric($category)) {
//
//                        $qb = $qb->where('section.id = :id')
//                            ->setParameter('id', $category);
//                    } else {
//                        $qb = $qb->where('category = :category')
//                            ->setParameter('category', $category);
//                    }
                    //var_dump($qb); die();
                    return $qb;
                }
            )));
        };

        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) use ($refreshCity) {
            $form = $event->getForm();
            $data = $event->getData();

            if ($data == null)
                $refreshCity($form, null);

            if ($data instanceof Question) {
               // var_dump($data); die();
                $refreshCity($form, "qwe");
            }
        });

        $builder->addEventListener(FormEvents::PRE_BIND, function (FormEvent $event) use ($refreshCity) {
            $form = $event->getForm();
            $data = $event->getData();

            if (array_key_exists('category', $data)) {
                $refreshCity($form, $data['category']);
            }
        });
    }



    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HAS\SpinnerBundle\Document\Question'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'has_spinnerbundle_question';
    }
}
