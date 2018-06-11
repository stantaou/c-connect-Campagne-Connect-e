<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Utilisateur;
use AppBundle\Form\UtilisateurType;

class UtilisateurController extends Controller{
    /**
     * @Route("/se-connecter", name="se_connecter")
     */
	public function connecterAction(Request $request, AuthenticationUtils $authUtils)
    {
        // get the login error if there is one
        $error = $authUtils->getLastAuthenticationError();
        // last utilisateurname entered by the utilisateur
        $lastUsername = $authUtils->getLastUsername();
        return $this->render('utilisateur/se_connecter.html.twig', array(
            'last_username' => $lastUsername,
            'error'         => $error,
        ));
    }
    /**
     * @Route("/s-inscrire", name="s_inscrire")
     */
    public function inscrireAction(Request $request,UserPasswordEncoderInterface $encoder)
    {
        $utilisateur=new Utilisateur();
        $utilisateurForm = $this->createForm(UtilisateurType::class,$utilisateur);
        $utilisateurForm->handleRequest($request);
        if($utilisateurForm->isSubmitted() && $utilisateurForm->isValid()){
            $em = $this->getDoctrine()->getManager();
            
            #Hashage du mot de passe
            $hash = $encoder->encodePassword($utilisateur, $utilisateur->getPassword());
            $utilisateur->setMotDePasse($hash);
           
            $utilisateur->setDateCreation(new \DateTime());
            $utilisateur->setRole("ROLE_utilisateur");
            $em->persist($utilisateur);
            $em->flush();
            $this->addFlash("success","Bienvenue !");
            return $this->redirectToRoute("se_connecter");
        }
        return $this->render('utilisateur/s_inscrire.html.twig',[
            "registerForm"=>$utilisateurForm->createView()
        ]);
    
    }
}