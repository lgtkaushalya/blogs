<?php
namespace BlogBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
class BlogController {
  public function listAction() {
    return new Response("Welcome to Blog List");
  }
}
