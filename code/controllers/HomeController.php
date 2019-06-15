<?php
// make sure you add the Controllers child name to the root namespace of your application
namespace RootNamespaceOfYourApp\Controllers;

// import the base class of the controller
use PhpMvc\Controller;

// expand your class with the base controller class
class HomeController extends Controller
{

    public function get($search = '', $page = 1, $limit = 10) {
        return $this->redirect( $url);
    }
}