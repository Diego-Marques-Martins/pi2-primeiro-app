<?php require_once("./includes/page-top.php") ?>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/hamburger.png" class="d-block" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/hotdog.png" class="d-block" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/potato.png" class="d-block" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/snacks.png" class="d-block" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <main class="container p-3">
        <div class="row">
            <div class="col">
                <div class="card text-white bg-warning">
                    <img class="card-img-top" src="./img/hamburger-cartoon.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's
                        content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-warning ">
                    <img class="card-img-top" src="./img/hotdog-cartoon.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's
                        content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-warning ">
                    <img class="card-img-top" src="./img/snacks-cartoon.png" alt="Card image cap">
                     <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's
                        content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-warning ">
                    <img class="card-img-top" src="./img/potato-cartoon.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's
                        content.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php require_once("./includes/page-botton.php") ?>