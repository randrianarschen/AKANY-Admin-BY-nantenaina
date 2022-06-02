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
  public function newMessage(){
    if(isset($_POST['sendEmail'])){
      if(isset($_POST['to']) && isset($_POST['subject']) && isset($_POST['message'])){
        if(!empty($_POST['to']) && !empty($_POST['subject']) && !empty($_POST['message'])){
       
          $to = htmlspecialchars( $_POST['to']);
          $subject = $_POST['subject'];
          $message = $_POST['message'];
          $attachment = "";
          $image = ""; 
          $attachment_tmp = "";
          $image_tmp = "";
          $emailAdmin =new  \models\Contact;
          $adminName = new \models\Admin;
          $name_receiver = new \models\Mailbox;
          $from = $emailAdmin->getEmail();
          $nameAdmin = $adminName->getName();
          if(!empty($_FILES['attachment']['name'])){
            $attach = $_FILES['attachment']['name'];
            $attachment_tmp = $_FILES['attachment']['tmp_name'];
            $ext = explode('.', $attach);
            $file_ext = strtolower(end($ext));
            $attachment = rand(1, 1000000) . '.' . $file_ext;
           }
            if(!empty($_FILES['image']['name'])){
              $img = $_FILES['image']['name'];
              $image_tmp = $_FILES['image']['tmp_name'];
              $ext = explode('.', $img);
              $file_ext = strtolower(end($ext));
              $image = rand(1, 1000000) . '.' . $file_ext;
              $target = "libraries/views/images/imageSent/$image";
              move_uploaded_file($image_tmp, $target);
            }
          $mail = new PHPMailer(true);
          $mail->from = $from;
          $mail->fromName =$nameAdmin;
          $mail->addAddress($to, $name_receiver->getReceiverName($to));
          $mail->isHTML(true);
          $mail->Subject = $subject;
          $mail->Body = $message;
          $mail->addAttachment($attachment_tmp, $attachment);
          $mail->addAttachment($image_tmp, $image);
          try{
            $mail->send();
            $this->index();
            echo"<script>alert('Message envoyé avec succès')</script>";
          }catch(Exception $e){
            echo $mail->ErrorInfo;
          }
          }}}
        $pageTitle = $this->pageTitle;
        $path1 = 'email/sendEmail';
        \Renderer::render($this->view2, $path1,  compact('pageTitle'));}    
 
  public function messageSent(){
    $pageTitle = $this->pageTitle;
    $path1 = 'email/emailBox';
    \Renderer::render($this->view2,'email/emailSent', compact('pageTitle'));
  }
  public function draft(){

  }
  
}
?>