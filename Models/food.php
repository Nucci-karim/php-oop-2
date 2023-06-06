<?php
require_once __DIR__ . '/Products.php';

class food extends product{
     public function __construct($_nome, $_prezzo, $_image, category $_category){
        parent::__construct($_nome, $_prezzo, $_image, $_category);
     }
}


?>