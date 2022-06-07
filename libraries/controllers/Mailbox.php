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
    \Renderer::render($this->view2, 'email/emailBox',  compact('pageTitle'));
  }
  public function sendMessage(){
     if(isset($_POST[''])){
       
     }
     }    
 
  public function messageSent(){
    $pageTitle = $this->pageTitle;
    $path1 = 'email/emailBox';
    \Renderer::render($this->view2,'email/emailSent', compact('pageTitle'));
  }
  public function draft(){

  }
  
}
?>