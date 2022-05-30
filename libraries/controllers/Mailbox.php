<?php
namespace Controllers;
require("libraries/autoload.php");
class Mailbox extends Controller{
    protected $pageTitle = 'Boîte-Email';
    protected $view2 = 'email';
    protected $modelName = \models\Mailbox::class;
  public function index(){
    $pageTitle = $this->pageTitle;
    $path1 = 'email/emailBox';
    \Renderer::render($this->view2, compact('pageTitle', 'path1'));
  }
  public function newMessage(){
    $pageTitle = $this->pageTitle;
    $path1 = 'email/sendEmail';
    \Renderer::render($this->view2, compact('pageTitle', 'path1'));
  }
}
?>