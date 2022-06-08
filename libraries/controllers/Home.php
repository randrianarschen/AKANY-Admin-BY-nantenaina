<?php

namespace Controllers;

class Home extends Controller
{
    protected $pageTitle = 'Accueil';
    protected $view2 = 'home/index';
    protected $modelName = \models\Donation::class;
    public function indexfr(){
        $donations = $this->model->findAll();
        $events = new \models\Events;
        $events = $events->findAll();
        $blogs = new \models\Blog;
        $blogs = $blogs->findAll();
        $responsables = new \models\Responsible;
        $responsables = $responsables->findAll();
        $witnesses = new \models\Witness;
        $witnesses = $witnesses->findAll();
          $email = new \models\Contact;
        $emailAdmin = $email->getEmail();
        $page ='indexfr';
        \Renderer::renderCust(compact('page', 'donations', 'events', 'blogs', 'responsables', 'witnesses', 'emailAdmin'));
    }
}