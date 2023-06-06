<?php
require_once __DIR__ . '/Products.php';
require_once __DIR__ . '/../traits/expiration.php';

class food extends product{
    // private expiration;
    use expiration;

     public function __construct($_nome, $_prezzo, $_image, category $_category, $_expiration){
        parent::__construct($_nome, $_prezzo, $_image, $_category);

        $this->expiration = $_expiration;
     }
}


?>