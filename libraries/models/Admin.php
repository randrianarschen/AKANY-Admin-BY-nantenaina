<?php
namespace models;
class Admin extends Model {
    protected $table = 'compte_admin';
    protected $colToUpdate= "username_admin = :newAdminName, password_admin = :passToInsert, image_admin = :image";
    protected $columns = "username_admin, password_admin, image_admin";
    public function getName(){
        $results =  $this->findOne(1);
        return $results['username_admin'];
    }
}