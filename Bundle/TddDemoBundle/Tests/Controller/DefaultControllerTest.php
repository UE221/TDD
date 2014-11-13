<?php

namespace Cvtic\Bundle\TddDemoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class DefaultControllerTest extends WebTestCase
{
    public function testContact()
    {
        $client = static::createClient();
        $client->followRedirects();

        // Appel de l'URL de l'application
        $crawler = $client->request('GET', '/cvtic/contact');
        
        // Contrôle de l'URL
        $this->assertEquals(Response::HTTP_OK, $client->getResponse()->getStatusCode());

        // Complete le formulaire et l'envoie
        $form = $crawler->selectButton('Ajouter')->form();
        
        $form['contact[name]'] = 'Sylvain';
        $form['contact[email]'] = 'sylvain@floury.name';
        
        $client->submit($form);
        
        // Contrôle du message de confirmation
        $this->assertRegExp('/Ajout du contact : Sylvain - sylvain@floury.name/', $client->getResponse()->getContent());
    }
}
