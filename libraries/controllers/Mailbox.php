<?php 
 namespace Controllers; 
 use \PHPMailer\PHPMailer\PHPMailer;         
 use \PHPMailer\PHPMailer\Exception;
 require_once 'libraries/vendor/autoload.php';
class Mailbox extends Controller{
 
    protected $pageTitle = 'Boîte-Email';
    protected $view2 = 'email';
    protected $modelName = \models\Mailbox::class;
    
  public function index(){
    $pageTitle = $this->pageTitle;
    $path1 = 'email/emailBox';
    $messages = $this->model->findAll();
    \Renderer::render($this->view2, 'email/emailBox',  compact('pageTitle', 'messages'));
  }
  public function sendMessage(){
    $success = false;
       if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['msg']) && isset($_POST['object']) && isset($_POST['to']))
       {
         if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['msg']) && !empty($_POST['object']) && !empty($_POST['to'])){
           $name_sender = $_POST['name'];
           $email_sender = htmlspecialchars($_POST['email']);
           $to = htmlspecialchars($_POST['to']);
           $message = $_POST['msg'];
           $subject = $_POST['object'];
           $attachment ="";
           $image = "";
           $this->model->insertOne(compact('name_sender', 'email_sender', 'to', 'message', 'subject', 'attachment', 'image'));
          $success = true;
        }
      }
      $arraySuccess = array('success' => $success);
       echo json_encode($arraySuccess); 
     }
}
?>