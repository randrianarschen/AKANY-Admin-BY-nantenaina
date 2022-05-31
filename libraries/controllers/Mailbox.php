<?php
namespace Controllers;
class Mailbox extends Controller{
    protected $pageTitle = 'Boîte-Email';
    protected $view2 = 'email';
    protected $modelName = \models\Mailbox::class;
  public function index(){
    $pageTitle = $this->pageTitle;
    $path1 = 'email/emailBox';
    \Renderer::render($this->view2, 'email/emailBox',  compact('pageTitle'));
  }
  public function newMessage(){
    if(isset($_POST['sendEmail'])){
      if(isset($_POST['to']) && isset($_POST['subject']) && isset($_POST['message'])){
        if(!empty($_POST['to']) && !empty($_POST['subject']) && !empty($_POST['message'])  || !empty($_FILES['attachment']['name'] || !empty($_FILES['image']['name']))){
          $to = $_POST['to'];
          $subject = $_POST['subject'];
          $message = $_POST['message'];
          $attachment = $_FILES['attachment']['name'];
          $ext = explode('.', $attachment);
          $file_ext = strtolower(end($ext));
          $attachment= rand(1, 1000000) . '.' . $file_ext; 
          $domain = 'email';
          $Model = $this->model;
          $modelMethod = 'insertOne';
          $emailAdmin =new  \models\Contact;
          $emailAdmin = $emailAdmin->getEmail();
          if(mail($to, $subject, $message, $attachment)){
            \Database::verifyFile(compact('file_ext', 'attachment', 'domain', 'Model', 'modelMethod'), compact('to', 'subject', 'message','attachment'));
          }
      }
      }
  }
  $pageTitle = $this->pageTitle;
  $path1 = 'email/sendEmail';
  \Renderer::render($this->view2,'email/sendEmail', compact('pageTitle'));
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