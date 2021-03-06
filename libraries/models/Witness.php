<?php
namespace models;
class Witness extends Model{
    protected $table = 'temoignage';
    protected $colToUpdate= "name_witness = :name_witness, title = :title, function = :function, link_video = :link_video, image = :image, date_publication = :date_publication";
    protected $valToInsert = " :name_witness,  :title,  :function, :link_video, :image , NOW() ";
    protected $columns = "name_witness, title, function, link_video,  image, date_publication";
    protected $col = "name_witness OR title OR function";
}