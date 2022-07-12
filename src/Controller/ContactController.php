<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Contact;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Doctrine\ORM\EntityManagerInterface;

class ContactController extends AbstractController
{
    #[Route('/admin/contacts', name: 'app_contact')]
    public function index(): Response
    {
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }
    
    #[Route('/contact', name: 'contact')]
    public function create(Request $request, EntityManagerInterface $manager){
        $contact = new Contact();
        $contact_form = $this->createFormBuilder($contact)
                     ->add('name', TextType::class, [
                        'attr' => [
                            'placeholder' => 'Your name',
                            'id' => 'form_name'
                        ]
                     ])
                     ->add('email', TextType::class, [
                        'attr' => [
                            'placeholder' => 'Your email',
                            'id' => 'form_email'
                        ]
                     ])
                     ->add('phone', TextType::class, [
                        'attr' => [
                                'placeholder' => 'Your phone',
                                'id' => 'form_phone'
                        ]
                    ])
                     ->add('subject', TextType::class, [
                        'attr' => [
                                'placeholder' => 'Your subject',
                                'id' => 'form_subject'
                        ],
                     ])
                     ->add('message', TextareaType::class, [
                        'attr' => [
                                'placeholder' => 'Your message',
                                'id' => 'form_message'
                        ]
                     ])
                     ->getForm();
                  

            $contact_form->handleRequest($request);

            if($contact_form->isSubmitted() && $contact_form->isValid()){
                $contact->setCreatedAt(new \Datetime());
                $contact = $contact_form->getData();
                $manager->persist($contact);
                $manager->flush();

                return $this->redirectToRoute('home');
            }

        return $this->render('contact/create.html.twig', [
            'contact_form' => $contact_form->createView()
        ]);
    }
}
