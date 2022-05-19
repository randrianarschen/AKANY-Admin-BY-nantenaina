<?php

namespace Controllers;

class Events extends Controller
{
  protected $modelName = \models\Events::class;
  protected $view1 = 'Event/addEvent';
  protected $view2 = 'Event/manageEvent';
  protected $pageTitle = 'Evènement';
  public function addEvent()
  {
    global $error_msg;
    $error_msg = '';
    $title_event = '';
    $time_event = '';
    $date_event = '';
    $description_event = '';
    if (isset($_POST['add_event']) ) {
     
      if (isset($_POST['title_event']) && isset($_POST['description_event'])) {
        if (!empty($_POST['title_event']) && !empty($_POST['description_event']) && !empty($_FILES['image']['name'])) {
         
          $title_event = $_POST['title_event'];
          $description_event = $_POST['description_event'];
          $img = $_FILES['image']['name'];
          $ext = explode('.', $img);
          $file_ext = strtolower(end($ext));
          $image = rand(1, 1000000) . '.' . $file_ext;
          $domain = 'events';
          $Model = $this->model;
          $modelMethod = 'insertOne';
          \Database::verifyFile(compact('file_ext', 'image', 'domain', 'Model', 'modelMethod'),  compact('title_event', 'description_event','image'));

        }
      }
    }
    $pageTitle = $this->pageTitle;
    \Renderer::render($this->view1, compact('pageTitle', 'error_msg', 'title_event',  'description_event'));
  }
  public function manageEvent(){
    $error_msg="";
    $pageTitle = $this->pageTitle;
     $events = $this->model->findAll();
     \renderer::render($this->view2, compact('pageTitle', 'events', 'error_msg'));
  }
  public function updateRowEvent(){
   
    $response = array();
     
        global $success;
        global $error_msg;
        $error_msg = 'bon ok';
        $success = '';
         $id = $_POST['id'] ;
         $title_event = $_POST['val1'];
          $description_event = $_POST['val4'] ;
          $Model = $this->model;
          $modelMethod = 'updateOne';
          $domain = "events";
          $img = $_FILES['image']['name'];
          $ext = explode('.', $img);
          $file_ext = strtolower(end($ext));
          $image = rand(1, 1000000) . '.' . $file_ext;
          \Database::verifyFile(compact('file_ext', 'image', 'domain', 'Model', 'modelMethod'),  compact('title_event', 'date_event', 'time_event', 'description_event','image','id'));
          $response = array(
            'success' => $success,
            'error_msg' => $error_msg,
            'title_event' => $title_event,
             'image' => $image,
            'id' => $id,);
      
          
         echo json_encode($response);
           
}
}
