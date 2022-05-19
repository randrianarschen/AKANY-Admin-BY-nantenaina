<?php
namespace Controllers;
require("libraries/autoload.php");
class Contact extends Controller{
    protected $pageTitle = 'Paramètres';
    protected $view2="settings/updatecontact";
    protected $modelName = \models\Contact::class;
    public function updateContact(){
        global $error_msg;
        $error_msg = '';
       if(isset($_POST['update'])){
           if(isset($_POST['email']) && isset($_POST['phone1']) && isset($_POST['phone2']) && isset($_POST['address']) && isset($_POST['fb_page'])){
               if(!empty($_POST['email']) && !empty($_POST['phone1']) && !empty($_POST['phone2']) && !empty($_POST['address']) && !empty($_POST['fb_page'])){
              
                $new_email =htmlspecialchars( $_POST['email']);
                   $previous_num = $_POST['phone1'];
                     $new_num = $_POST['phone2'];
                     $new_address = htmlspecialchars($_POST['address']);
                        $new_fb_page = htmlspecialchars($_POST['fb_page']);
                        $col = 'phone_num';
                        $keywords = $previous_num;
                     $results = $this->model->search(compact('col', 'keywords'));
                     if($results){
                         $id = $results['id'];
                         $this->model->updateOne( compact('new_address', 'new_num', 'new_email', 'new_fb_page', 'id'));
                         $error_msg = \Renderer::showError("Votre contact a été mis à jour", "success");}
                         else{
                            $error_msg = \Renderer::showError("Numéro de téléphone introuvable", 'danger');
                        }
                   
                   
               }
               else{
                     $error_msg = \Renderer::showError("Veuillez remplir tous les champs", 'danger');
               }  
            }
       }
  $pageTitle =  $this->pageTitle ;
  \Renderer::render($this->view2, compact('pageTitle', 'error_msg'));
}
}
