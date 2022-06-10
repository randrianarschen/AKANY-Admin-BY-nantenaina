<?php

namespace Controllers;

require("libraries/autoload.php");
class Admin extends Controller
{
    protected $pageTitle = 'Paramètres';
    protected $view2 = 'settings/general';
    protected $modelName = \models\Admin::class;
    public function general()
    {
        global $error_msg;
        $error_msg = ' ';
        $newAdminName= ' ';
        $password_admin = ' ';
        $newPass = " ";
        $newPassConfirm = " ";
        if (isset($_POST['update'])) {
            if (isset($_POST['newAdminName']) && isset($_POST['currentPass']) && isset($_POST['newPass']) && isset($_POST['newPassConfirm'])) {
                if (!empty($_POST['newAdminName']) && !empty($_POST['currentPass']) && !empty($_POST['newPass']) && !empty($_POST['newPassConfirm']) && !empty($_FILES['image']['name'])) {
                    $newAdminName = htmlspecialchars($_POST['newAdminName']);
                    $currentPass = $_POST['currentPass'];
                    $newPass = $_POST['newPass'];
                    $newPassConfirm = $_POST['newPassConfirm'];

                    $img = $_FILES['image']['name'];
                    $ext = explode('.', $img);
                    $file_ext = strtolower(end($ext));
                    $image = rand(1, 1000000) . '.' . $file_ext;
                     $keywords = sha1($currentPass);
                    $passToInsert = sha1($newPass);
                    $col = 'password_admin';
                    $results = $this->model->search(compact('col', 'keywords'));
                    foreach($results as $result){
                        $id = $result['id'];
                        $image = $result['image_admin'];
                    }
                    $domain = 'admin';
                    $Model = $this->model;
                    $modelMethod = 'updateOne';
                    if ($results) {
                        if ($newPass === $newPassConfirm) {
                            \Database::verifyFile(compact('file_ext', 'domain', 'modelMethod', 'Model', 'image'), compact('newAdminName', 'passToInsert', 'image', 'image', 'id'));
                        } else {
                            $error_msg = \Renderer::showError("Les mots de passe ne correspondent pas", "danger");
                        }
                    } else {
                        $error_msg = \Renderer::showError("Mot de passe incorrect", "danger");
                    }
                } else {
                    $error_msg = \Renderer::showError('Veuillez remplir tous les champs', 'danger');
                }
            }
        }

        $pageTitle = $this->pageTitle;
        \Renderer::render($this->view2, '', compact('pageTitle', 'error_msg', 'newAdminName', 'newPass', 'newPassConfirm'));
    }
    public function logIn(){
        global $error_msg;
        $error_msg = ' ';
        $page = 'indexLogin';
        $contact = new \models\Contact;
        $emailAdmin = $contact->getEmail();
        if(isset($_POST['login'])){
       if(isset($_POST['name_admin']) && isset($_POST['pswd_admin'])){
           if(!empty($_POST['name_admin']) && !empty($_POST['pswd_admin'])){
                $name_admin = htmlspecialchars($_POST['name_admin']);
                $pswd_admin = $_POST['pswd_admin'];
                $shaPass = sha1($pswd_admin);
                $results = $this->model->matchData(compact('name_admin', 'shaPass'));
                echo$name_admin.''.$shaPass;
                if($results){
                    $_SESSION['username_admin'] = $results['username_admin'];
                    $_SESSION['password_admin'] = $results['password_admin'];
                    $image = $results['image_admin'];
                   $page = 'home/index';
                   $pageTitle = 'Home';
                   \Renderer::render($page, '', compact('pageTitle',  'emailAdmin', 'image'));
                }else{
                    $error_msg = "Votre nom ou mot de passe n'est pas validé" ;
                    \Renderer::renderCust(compact('page','error_msg'));
                   
                 }
} }}
        else{
             \Renderer::renderCust(compact('page','error_msg'));
             
        }
      
        

    }
  public function logOut(){
       session_start();
        session_destroy();
       $homeCust = new \controllers\Home;
       $homeCust->indexfr();

  }

}
