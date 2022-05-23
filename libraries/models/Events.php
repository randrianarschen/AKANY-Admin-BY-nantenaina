<?php
 namespace models;
 class Events extends Model{
    protected $table = ' ad_event';
    protected $colToUpdate= "title_event = :title_event, datetime_event = :datetime_event, description_event = :description_event, image = :image";
    protected $valToInsert = " :title_event,  NOW(),  :description_event,  :image";
    protected $columns = "title_event, datetime_event,  description_event, image";
    protected $col = "title_event OR description_event";
 }
?>