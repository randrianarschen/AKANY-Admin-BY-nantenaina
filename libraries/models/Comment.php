<?php
namespace models;
class Comment extends model{
    protected $table = 'commentaires';
    protected $colToUpdate= "commentator_name = :commentator_name, commentator_email =:commentator_email, fb_account = :fb_account, comments = :comments";
   protected $valToUpdate = ":commentator_name, commentator_email, fb_account, :comments";
    protected $columns = "commentator_name, commentator_email, fb_account, comments";
    protected $col = "commentator_name OR comments OR commentator_email OR fb_account";
}