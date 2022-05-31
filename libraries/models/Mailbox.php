<?php
namespace models;
class Mailbox extends Model{
   protected $table = "mailbox";
   protected $colToUpdate = "name_sender = : name_sender, email_sender = : email_sender, subject =: subject, message =: message, time = :time, attachment = :attachment";
   protected $valToInsert = ":name_sender, :email_sender, :subject,  :message, NOW(), :attachment";
   protected $columns = "name_sender, email_sender, subject, message, time, attachment";
   protected $col = "name_sender OR email_sender OR subject OR message OR time OR attachment";
}