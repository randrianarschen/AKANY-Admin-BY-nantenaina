<?php
namespace models;
class Mailbox extends Model{
   protected $table = "mailbox";
   protected $valToInsert = ":name_sender, :email_sender, :to,  :subject,  :message, NOW(), :attachment, :image";
   protected $columns = "name_sender, email_sender, email_receiver, subject, message, time, attachment, image";
   protected $col = "name_sender OR email_sender OR subject OR message OR time OR email_receiver ";
}