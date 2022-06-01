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
        if(!empty($_POST['to']) && !empty($_POST['subject']) && !empty($_POST['message'])){
          $to = $_POST['to'];
          $subject = $_POST['subject'];
          $message = $_POST['message'];
          $attachment = "";
          $image = ""; 
          $emailAdmin =new  \models\Contact;
          $adminName = new \models\Admin;
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
              $target = "libraries/images/imageSent/$image";
              move_uploaded_file($image_tmp, $target);
            }
         
      
 
// Email subject 
 
// Attachment file 

 
// Email body content 
$htmlContent = ' 
    <h3>'.$subject.'</h3> 
    <p>This email is sent from the PHP script with attachment.</p> 
'; 
 
// Header for sender info 
$headers = "From: $nameAdmin"." <".$from.">"; 
 
// Boundary  
$semi_rand = md5(time());  
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";  
 
// Headers for attachment  
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
 
// Multipart boundary  
$message = "--{$mime_boundary}\n" . $message;
 
// Preparing attachment 
if(!empty($target) > 0){ 
  move_uploaded_file($image_tmp, $target);
    if(is_file($target)){ 
        $message .= "--{$mime_boundary}\n"; 
        $fp =    @fopen($target,"rb"); 
        $data =  @fread($fp,filesize($target)); 
 
        @fclose($fp); 
        $data = chunk_split(base64_encode($data)); 
        $message .= "Content-Type: application/octet-stream; name=\"".basename($target)."\"\n" .  
        "Content-Description: ".basename($target)."\n" . 
        "Content-Disposition: attachment;\n" . " filename=\"".basename($target)."\"; size=".filesize($target).";\n" .  
        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n"; 
    } 
} 
$message .= "--{$mime_boundary}--"; 
$returnpath = "-f" . $from; 
 
// Send email 
if(mail($to, $subject, $message, $headers, $returnpath)){

    \Renderer::showError('Votre message a bien été envoyé', 'success');
}else{
    \Renderer::showError('Votre message n\'a pas été envoyé', 'danger');
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