<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
<div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.php">NESTI PRESENTATION</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item <?= ($loc=='home')?'active':''; ?> px-lg-4"><a class="nav-link text-uppercase" href="index.php?loc=home">HOME</a></li>
                        <li class="nav-item <?= ($loc =='about')?'active':''; ?> px-lg-4"><a class="nav-link text-uppercase" href="index.php?loc=about">ABOUT</a></li>
                        <li class="nav-item <?= ($loc == 'products')?'active':''; ?> px-lg-4"><a class="nav-link text-uppercase" href="index.php?loc=products">PRODUCTS</a></li>
                        <li class="nav-item <?= ($loc == 'realisations')?'active':''; ?> px-lg-4"><a class="nav-link text-uppercase" href="index.php?loc=realisations">REALISATIONS</a></li>
                    </ul>
                </div>
            </div>
            </nav>
            
<!-- ajouter une ternaire php dans class de li pour ajouter "active" selon la page actualitée  -->