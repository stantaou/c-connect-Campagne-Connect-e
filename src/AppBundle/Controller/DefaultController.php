<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Image;
use AppBundle\Entity\Produit;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            ''
        ]);
    }
    
    /**
     * @Route("/catalogue-de-produits", name="catalogue")
     */
    public function catalogueProduitsDirection()
    {
        $repo = $this->getDoctrine()->getRepository(Produit::class);
        $produits = $repo->findAll();
        $repo = $this->getDoctrine()->getRepository(Image::class);
        $images = $repo->findAll();
        
        return $this->render('catalogue_de_produit/catalogue.html.twig', [
            'produits'=>$produits,
            'images'=>$images,
            ''
        ]);
    }
    
    /**
     * @Route("/comment-ça-marche", name="comment_ca_marche")
     */
    public function fonctionnementDirection()
    {
        
        // replace this example code with whatever you need
        return $this->render('comment_ça_marche/comment_ca_marche.html.twig', [
            ''
        ]);
    }
}
