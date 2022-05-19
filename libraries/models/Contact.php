<?php
namespace models;
class Contact extends Model{
    protected $table = "contacts";
    protected $colToUpdate = "address = :new_address, phone_num = :new_num, email = :new_email, fb_page = :new_fb_page";
    protected $columns = "address, phone_num, email, fb_page";
}