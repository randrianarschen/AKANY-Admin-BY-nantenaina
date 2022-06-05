<?php

namespace Controllers;

class Home extends Controller
{
    protected $pageTitle = 'Accueil';
    protected $view2 = 'home/index';
    protected $modelName = \models\Donation::class;
    public function indexfr(){
        $donations = new \models\Donation;
        $donations = $donations->findAll();
        $events = new \models\Events;
        $events = $events->findAll();
        $blogs = new \models\Blog;
        $blogs = $blogs->findAll();
        $responsables = new \models\Responsible;
        $responsables = $responsables->findAll();
        $witnesses = new \models\Witness;
        $witnesses = $witnesses->findAll();
        \Renderer::renderCust(compact('donations', 'events', 'blogs', 'responsables', 'witnesses'));
    }
}