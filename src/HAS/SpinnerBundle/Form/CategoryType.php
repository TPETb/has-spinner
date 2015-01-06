<?php
/**
 * Created by PhpStorm.
 * User: BK
 * Date: 06.01.2015
 * Time: 5:33
 */

namespace HAS\SpinnerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategoryType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HAS\SpinnerBundle\Document\Category'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'has_spinnerbundle_category';
    }
}
