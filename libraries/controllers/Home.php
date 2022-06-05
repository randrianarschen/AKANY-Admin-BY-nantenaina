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
        \Renderer::renderCust(compact('donations', 'events'));
    }
}