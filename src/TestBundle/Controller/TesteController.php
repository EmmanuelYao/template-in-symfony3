<?php

namespace TestBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TesteController extends Controller{


  /**
  *@Route("/", name="")
  */
  public function indexAction()

  {

   return $this->render('TestBundle:Default:index.html.twig');

  }


  /**
  *@Route("loyout", name="index")
  */
  public function layoutAction()
  {

    return $this->render('TestBundle::layout.html.twig');
  }


  
  /**
  *@Route("pages", name="pages")
  */
  public function principalAction()
  {

    return $this->render('TestBundle:lespages:index.html.twig');
  }


  /**
  *@Route("gallery", name="gallery")
  */
  public function galleryAction()
{

  return $this->render('TestBundle:lespages:gallery.html.twig');
}


}
