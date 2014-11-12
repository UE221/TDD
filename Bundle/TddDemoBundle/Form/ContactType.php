<?php
namespace Cvtic\Bundle\TddDemoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Formulaire simple de contact.
 *
 * @author Sylvain Floury <sylvain@floury.name>
 */

class ContactType extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('name');
        $builder->add('email', 'email');
    }
    
/*    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            //'data_class' => 'Cvtic\Bundle\TddDemoBundle\Entity\Contact',
            'csrf_protection' => false,
        ));
    }
  */  
    public function getName() {
        return 'contact';
    }
}
