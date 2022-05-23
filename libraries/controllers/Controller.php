<?php

namespace Controllers;

abstract class Controller
{
    protected $model;
    protected $modelName;
    protected $view1;
    protected $view2;
    protected $pageTitle;


    public  function __construct()
    {
        $this->model = new $this->modelName();
    }
    /**
     * index the page
     *
     * @return void
     */

    public function index()
    {
        $pageTitle = $this->pageTitle;
        \Renderer::render($this->view2, compact('pageTitle'));
    }

    public function delete(): void
    {
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id = $_GET['id'];
            $this->model->deleteOne($id);
            $success = true;
        } else {
            $success = false;
        }
        echo json_encode(['success' => $success]);
    }
  public function anulate():void
    {
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id = $_GET['id'];
            $response = $this->model->findOne($id);
           echo json_encode($response);
        }
    }
    public function searchAny():void{
        if (isset($_GET['search']) && !empty($_GET['search'])) {
            $keywords = $_GET['search'];
            $response = $this->model->search($keywords);
            echo json_encode($response);
        }
    }
}
