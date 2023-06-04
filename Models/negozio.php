 <?php
 class Product{
    public $title;
    public $duration;
    public $poster;

    public function __construct($_title, $_duration, $_poster ){
        $this->title = $_title;
        $this->duration = $_duration;
        $this->poster = $_poster;
    }

    public function get_product_details(){
        return "Product: $this->title, ha una durata di:  $this->duration"; 
    }
 }
 
 
 ?>