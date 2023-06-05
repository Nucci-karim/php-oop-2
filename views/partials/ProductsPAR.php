<?php

include __DIR__ . '/../../models/negozio.php';
include __DIR__ . '/../../models/category.php';
include __DIR__ . '/../../models/food.php';
$prodotto_1 = new Product("mandalorian",  40, "https://picsum.photos/300/300");

$arrayProducts = [
    new Product("croccantini",  11, "https://picsum.photos/300/300"),
    new Product("carne in scatola",  3, "https://picsum.photos/300/300"),
    new Product("cuccia", "", "https://picsum.photos/300/300")
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
                <p class="card-text">Prezzo: <?php echo $elem->prezzo ?> &euro</p>
            </div>
            </div>
        </div>
        <?php }?>
    </div>
</main>