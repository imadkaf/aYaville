<?php
// src/aYaline/HelloBundle/Form/FeedbackType.php
namespace aYaline\HelloBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
class FeedbackType extends AbstractType
{
public function getName()
{
return 'aYaline_feedback';
}
public function setDefaultOptions( OptionsResolverInterface $resolver )
{
$resolver->setDefaults( array( 'data_class' => 'aYaline\\HelloBundle\\Model\\Feedback' ) );
}
public function buildForm( FormBuilderInterface $builder, array $options )
{
$builder->add(
'fullName',
'text',
array(
'label' => 'Your full name',
)
);
$builder->add(
'email',
'email',
array(
'label' => 'Your email',
)
);
$builder->add(
'message',
'textarea',
array(
'label' => 'Your message',
)
);
$builder->add(
'send',
'submit',
array(
'label' => 'Send!',
)
);
}
} 