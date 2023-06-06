 <?php
 class product{
    public $nome;
    public $prezzo;
    public $image;
    public $category;

    public function __construct($_nome, $_prezzo, $_image, category $_category){
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->image = $_image;
        $this->category = $_category;
    }

    public function get_product_details(){
        return "Product: $this->nome, ha una durata di:  $this->duration"; 
    }
    public function get_category_icon(){
        $icon = $this->category->icon;
        return "<i class='$icon'></i>";
    }
 }
 
 
 ?>