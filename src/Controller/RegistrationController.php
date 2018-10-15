<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\Users;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/inscription", name="inscription")
     */
    public function new(Request $request, UserPasswordEncoderInterface $encoder)
    {
        // creates a task and gives it some dummy data for this example
        $user = new Users();

        $form = $this->createFormBuilder($user)
            ->add('firstName', TextType::class, array('label' => 'Prénom : '))
            ->add('lastName', TextType::class, array('label' => 'Nom de famille : '))
            ->add('email', EmailType::class, array('label' => 'E-mail : '))
            ->add('password', PasswordType::class, array('label' => 'Mot de passe : '))
            ->add('save', SubmitType::class, array('label' => 'S\'inscrire'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();
            
            $plainPassword = $user->getPassword();
            $encryptedPassword = $encoder->encodePassword($user, $plainPassword);
            $user->setPassword($encryptedPassword);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('registration_success');
        }

        return $this->render('registration/form.html.twig', array(
            'form' => $form->createView(),
            'user' => $user,
        ));
    }

    /**
     * @Route("/inscription/congrats", name="registration_success")
     */
    public function registrationSuccess()
    {
        return $this->render('registration/registration_success.html.twig');
    }
}
