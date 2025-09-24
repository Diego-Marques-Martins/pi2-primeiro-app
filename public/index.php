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
                        <p class="card-text">Sabor e qualidade em cada mordida. Nosso hambúrguer artesanal é feito com os melhores ingredientes, oferecendo uma experiência deliciosa e única. Perfeito para qualquer momento!</p>
                        <a href="cardapio.php" class="btn btn-vermelho">Ver opções</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-warning ">
                    <img class="card-img-top" src="./img/hotdog-cartoon.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">O clássico hot dog, simples e irresistível. Salsicha suculenta, pão macio e o toque perfeito de condimentos. Uma delícia para qualquer momento!</p>
                        <a href="pagina-destino.html" class="btn btn-vermelho">Ver opções</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-warning ">
                    <img class="card-img-top" src="./img/snacks-cartoon.png" alt="Card image cap">
                     <div class="card-body">
                        <p class="card-text">Batatas fritas crocantes e douradas, perfeitas para acompanhar seu prato ou como um delicioso lanche. A combinação ideal de sabor e textura!</p>
                        <a href="pagina-destino.html" class="btn btn-vermelho">Ver opções</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-warning ">
                    <img class="card-img-top" src="./img/potato-cartoon.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Batata assada recheada com ingredientes frescos e saborosos. Uma opção perfeita para quem busca algo nutritivo e delicioso em uma refeição completa!</p>
                        <a href="pagina-destino.html" class="btn btn-vermelho">Ver opções</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php require_once("./includes/page-botton.php") ?>