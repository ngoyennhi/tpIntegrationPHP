<?php
//mettre cet morceau de code pour savoir l'erreur si l'on a
error_reporting(E_ALL);
ini_set('display_errors', 'On');
// Tous les fichiers passent par le même fichier index.php. On l’appelle le contrôleur
//initialisation d'une variable
$arr = [
    'Ho Tong Minh' => [
        'prenom' => 'Yen Nhi',
        'site' =>
            'https://hotongminh.needemand.com/monportfolio/indexAccueil.html',
    ],
    'Razafia' => [
        'prenom' => 'Stéphane',
        'site' =>
            'https://razafiasimanana.needemand.com/',
    ],
    'Baudino' => [
        'prenom' => 'Pierre-Olivier',
        'site' =>
            'https://pierre-olivierb.github.io',
    ],
    'Kim' => [
        'prenom' => 'Young Hee',
        'site' =>
            'https://kim.needemand.com/',
    ],
    'Cochonneau' => [
        'prenom' => 'Laurent',
        'site' =>
            'https://cochonneau.needemand.com/',
    ],
    'Hernandez' => [
        'prenom' => 'Raul',
        'site' =>
            'https://hernandez.needemand.com/',
    ],
    'Arneaud' => [
        'prenom' => 'Patrick',
        'site' =>
            'https://arnaud.needemand.com/',
    ],
    'Briois' => [
        'prenom' => 'Jean-Bernard',
        'site' =>
            'https://briois.needemand.com/',
    ],
    'Mourichon' => [
        'prenom' => 'Thibault',
        'site' =>
            'https://mourichon.needemand.com/',
    ],
    'Linxe' => [
        'prenom' => 'Sylvie',
        'site' =>
            'https://linxe.needemand.com/',
    ],
    'Grossi' => [
        'prenom' => 'Julien',
        'site' =>
            'https://grossi.needemand.com/',
    ],
];
?>

<section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-5">
                                <span class="section-heading-upper">Coming Soon</span>
                                <span class="section-heading-lower">Vos réalisations</span>
                            </h2>
                            <!-- un boucle pour ajouter les infos dans le tableau $arr dans la liste -->
                            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                                <?php foreach($arr as $key => $value)
                                echo "<li class='list-unstyled-item list-hours-item n_fontLora d-flex justify-content-between'>".$key." ".$value['prenom']."<a class='ml-auto' href = ' ".$value['site']." ' >"."Porfolio</a></li>";
                                ?>
                            </ul>
                            <p class="address mb-5">
                                <em>
                                    <strong>Promo 2020-2021 </strong>
                                    <br />
                                    Concepteurs & développeurs d'application 
                                </em>
                            </p>
                            <p class="mb-0">
                                <small><em>Needemand</em></small>
                                <br />
                                contact@needemand.com 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section about-heading">
            <div class="container">
                <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="assets/img/delai.jpg" alt="..." />
                <div class="about-heading-content">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 mx-auto">
                            <div class="bg-faded rounded p-5">
                                <h2 class="section-heading mb-4">
                                    <span class="section-heading-upper">Projet Fil Rouge</span>
                                    <span class="section-heading-lower">Contexte</span>
                                </h2>
                                
                                <p class="mb-0">
                                    Projet réalisé dans le cadre d'une formation. En partie en groupe et en partie individuellement, ce projet est le résultat d'un apprentissage lors d'une formation. <br>
                                    Temps de réalisation du projet<em> 5 mois</em> environ
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>