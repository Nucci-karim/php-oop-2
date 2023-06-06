<?php

include __DIR__ . '/../../models/Products.php';
include __DIR__ . '/../../models/category.php';
include __DIR__ . '/../../models/food.php';

$dogs = new category("Dogs", "fa-solid fa-dog");

$food = new food("croccantini",  12, 'https://picsum.photos/300/300', $dogs, '10/12/24');

$arrayProducts = [
    new food('croccantini',  11, 'https://picsum.photos/300/300', $dogs, '10/12/24'),
    new food("carne in scatola",  3, 'https://picsum.photos/300/300', $dogs, '18/12/24'),
    new product('cuccia', 100, 'https://picsum.photos/300/300', $dogs)
]


?>

<main class="container">
    <div class="row d-flex justify-content-center m-2">
        <?php foreach($arrayProducts as $elem) {?>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
            <img src="<?php echo $elem->image ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $elem->nome ?></h5>
                <?php echo $elem->get_expiration_date() ?>
                <p class="card-text">Prezzo: <?php echo $elem->prezzo ?> €</p>
                <?php echo $elem->get_category_icon()?>
            </div>
            </div>
        </div>
        <?php }?>
    </div>
</main>