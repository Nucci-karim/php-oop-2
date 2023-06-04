<?php

include __DIR__ . '/../../models/negozio.php';
$prodotto_1 = new Product("mandalorian",  40, "https://images.unsplash.com/photo-1608346128025-1896b97a6fa7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2940&q=80");

$arrayMovies = [
    new Product("croccantini",  11, "https://images.unsplash.com/photo-1608346128025-1896b97a6fa7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2940&q=80"),
    new Product("carne in scatola",  3, "https://images.unsplash.com/photo-1623984109622-f9c970ba32fc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=736&q=80"),
    new Product("cuccia", "", "https://images.unsplash.com/photo-1596727147705-61a532a659bd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2787&q=80")
]


?>

<main class="container">
    <div class="row">
        <?php foreach($arrayMovies as $elem) {?>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
            <img src="<?php echo $elem->poster ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $elem->title ?></h5>
                <p class="card-text">Durata: <?php echo $elem->duration ?>mesi</p>
            </div>
            </div>
        </div>
        <?php }?>
    </div>
</main>