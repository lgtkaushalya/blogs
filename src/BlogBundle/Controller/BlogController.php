<?php
namespace BlogBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class BlogController extends Controller {
  public function listAction() {
    return $this->render('BlogBundle:Blog:list.html.twig');
  }
}
