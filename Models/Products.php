 <?php
 class Product{
    public $nome;
    public $prezzo;
    public $image;

    public function __construct($_nome, $_prezzo, $_image ){
        $this->nome = $_title;
        $this->prezzo = $_prezzo;
        $this->image = $_image;
    }

    public function get_product_details(){
        return "Product: $this->title, ha una durata di:  $this->duration"; 
    }
 }
 
 
 ?>