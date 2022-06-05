<?php

namespace Controllers;


class Donation extends Controller
{
  protected $pageTitle = 'Donation';
  protected $view1 = 'donation/ask';
  protected $view2 = 'donation/index';
  protected $modelName = \models\Donation::class;

  /**
   * ask for donation
   *
   * @return void
   */
  public function ask()
  {
    global $error_msg;
    $error_msg = '';
    $sujet = '';
    $montant = '';
    $motif = '';
    if(isset($_POST['demande_don'])){
      if (isset($_POST['sujet']) && isset($_POST['montant']) && isset($_POST['motif'])) {
        if (!empty($_POST['sujet']) &&  !empty($_POST['montant']) && !empty($_POST['motif']) && !empty($_FILES['image']['name'])) {
          $sujet = $_POST['sujet'];
          $montant = $_POST['montant'];
          $motif = $_POST['motif'];
          $img = $_FILES['image']['name'];  
              $ext = explode('.', $img);
         $file_ext = strtolower(end($ext));
          $image= rand(1, 1000000) . '.' . $file_ext; 
          $domain = 'donation';
          $Model = $this->model;
          $modelMethod = 'insertOne';
          \Database::verifyFile(compact('file_ext', 'image', 'domain', 'Model', 'modelMethod'), compact('sujet', 'montant', 'motif','image'));
        } else {
          $error_msg = \Renderer::showError('Veuillez remplir tous les champs', 'danger');
        }
      }
    }
    $pageTitle = $this->pageTitle;
    \Renderer::render($this->view1, '',  compact('pageTitle', 'error_msg', 'sujet', 'montant', 'motif'));
  }

  /**
   * show all donations
   *
   * @return void
   */
  public function manageAsking()
  {
    $pageTitle = $this->pageTitle;
    $donations = $this->model->findAll();
    \Renderer::render('donation/manageAsking', '', compact('pageTitle', 'donations'));
  }
  public function updateRowDonat(){
   
    $response = array();
     
        global $success;
        global $error_msg;
        $error_msg = 'bon ok';
        $success = '';
         $id = $_POST['id'] ;
         $sujet = $_POST['val1'];
         $motif = $_POST['val2'];
          $cree_a = $_POST['val3'] ;
          $montant = $_POST['val4'] ;
          $Model = $this->model;
          $modelMethod = 'updateOne';
          $domain = "donation";
          if(!empty($_FILES['image']['name'])) {
            $img = $_FILES['image']['name'];   
            $ext = explode('.', $img);
            $file_ext = strtolower(end($ext));
            $image = rand(1, 1000000) . '.' . $file_ext;
            \Database::verifyFile(compact('file_ext', 'image', 'domain', 'Model', 'modelMethod'),  compact('sujet','montant', 'motif','image', 'cree_a','id'));
          } else {
              $img =$_POST['image'];
              $ext = explode('.', $img);
              $file_ext = strtolower(end($ext));
              $image = rand(1, 1000000) . '.' . $file_ext;
              $this->model->updateOne(compact('sujet','montant', 'motif','image', 'cree_a','id'));
              $success = true;
          }
          
          $response = array(
            'success' => $success,);
         echo json_encode($response);
           
}
  
}
