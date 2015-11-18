<?php
namespace BlogBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class BlogController extends Controller {
  public function listAction() {

    $posts = $this->getDoctrine()
      ->getRepository('BlogBundle:Post')
      ->findAll();

    return $this->render('BlogBundle:Blog:list.html.twig', array('posts' => $posts));
  }
}
