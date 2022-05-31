<?php

namespace Controllers;

require("libraries/autoload.php");
class Witness extends Controller
{
  protected $pageTitle = 'Temoignage';
  protected $view1 = 'witness/addWitness';
  protected $view2 = "Witness/manageWitness";
  protected $modelName = \models\Witness::class;
  public function addWitness()
  {
    global $error_msg;
    $error_msg = ' ';
    $name_witness = ' ';
    $title = "";
    $function = " ";
    $link_video = " ";
    if (isset($_POST['add_witness'])) {
      if (isset($_POST['name_witness']) && isset($_POST['title']) && isset($_POST['function']) && isset($_POST['link_video'])) {
        if (!empty($_POST['name_witness']) && !empty($_POST['title']) && !empty($_POST['function']) && !empty($_POST['link_video']) && !empty($_FILES['image']['name'])) {
          $name_witness = $_POST['name_witness'];
          $title = $_POST['title'];
          $function = $_POST['function'];
          $link_video = $_POST['link_video'];
          $img = $_FILES['image']['name'];
          $ext = explode('.', $img);
          $file_ext = strtolower(end($ext));
          $image = rand(1, 1000000) . '.' . $file_ext;
          $domain = 'witnesses';
          $Model = $this->model;
          $id= 0;
          $modelMethod = 'insertOne';
          \Database::verifyFile(compact('file_ext', 'image', 'domain', 'Model', 'modelMethod'), compact('name_witness', 'title', 'function', 'link_video', 'image'));
        } else {
          $error_msg = \Renderer::showError('Veuillez remplir tous les champs', 'danger');
        }
      }
    }
    $pageTitle = $this->pageTitle;
    \Renderer::render($this->view1, '', compact('pageTitle', 'error_msg', 'name_witness', 'title', 'function', 'link_video'));
  }



  public function manageWitness()
  {
    $error_msg = "";
    $pageTitle = $this->pageTitle;
    $witnesses = $this->model->findAll();
    \renderer::render($this->view2, '', compact('pageTitle', 'witnesses', 'error_msg'));
  }
  public function updateRowWit(){
   
    $response = array();
     
        global $success;
        global $error_msg;
        $error_msg = 'bon ok';
        $success = '';
         $id = $_POST['id'] ;
         $name_witness = $_POST['val1'];
         $title = $_POST['val2'];
          $date_publication = $_POST['val3'] ;
          $function = $_POST['val4'] ;
          $link_video = $_POST['val5'] ;
          $Model = $this->model;
          $modelMethod = 'updateOne';
          $domain = "witnesses";
          if(!empty($_FILES['image']['name'])) {
            $img = $_FILES['image']['name'];   
            $ext = explode('.', $img);
            $file_ext = strtolower(end($ext));
            $image = rand(1, 1000000) . '.' . $file_ext;
            \Database::verifyFile(compact('file_ext', 'image', 'domain', 'Model', 'modelMethod'),  compact('name_witness', 'title', 'function',  'link_video','image', 'date_publication', 'id'));
          } else {
              $img =$_POST['image'];
              $ext = explode('.', $img);
              $file_ext = strtolower(end($ext));
              $image = rand(1, 1000000) . '.' . $file_ext;
              $this->model->updateOne(compact('name_witness', 'title', 'function', 'link_video', 'image', 'date_publication', 'id'));
              $success = true;
          }
          
          $response = array(
            'success' => $success,);
         echo json_encode($response);
           
}
}
