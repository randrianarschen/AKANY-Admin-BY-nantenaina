<?php
namespace models;
class Admin extends Model {
    protected $table = 'compte_admin';
    protected $colToUpdate= "username_admin = :newAdminName, password_admin = :passToInsert, image_admin = :image";
    protected $columns = "username_admin, password_admin, image_admin";
    public function getName(){
        $admin =  $this->findOne(1);
        return $admin['username_admin'];
    }
    public function matchData(array $var = []){
        $selectOne = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE username_admin = :name_admin  AND password_admin = :shaPass");
        $selectOne->execute($var);
        $selectOne = $selectOne->fetch();
        return $selectOne;

        
      }
}