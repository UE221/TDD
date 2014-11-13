<?php

namespace Cvtic\Bundle\TddDemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Cvtic\Bundle\TddDemoBundle\Form\ContactType;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }
    
   /**
    * @Route("/contact", name="_demo_contact")
    * @Template()
    */
    public function contactAction(Request $request)
    {
        $form = $this->createForm(new ContactType());
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            $contact = $form->getData();
            $request->getSession()->getFlashBag()->set('notice', 'Ajout du contact : ' . $contact['name']);
            return new RedirectResponse($this->generateUrl('_demo_contact'));
        }
        
        return array('form' => $form->createView());
    }
}
