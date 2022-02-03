      <?php 
      // connexion BDD 
      include('control/connexion.php');
      $sql="SELECT pseudo, comment FROM comments";
      $sth = $conn->prepare($sql);
       //resultat est un tableau ( array )
      $sth->execute();
      $c = $sth->fetchAll();
      ?>
      <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h1>Commentaires</h1>
                        </div>
                        <div class="cta-inner bg-faded text-center rounded">
                        <form action="control/commentaires.php" method="post">
                        <p>Votre nom : <input type="text" name="saisie[nom]" /></p>
                        <p>Votre commentaire : <input type="text" name="saisie[commentaire]" class="n_commentaires" /></p>
                        <p><input type="submit" value="Envoyer" name="saisie[ok]"></p>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
        <section class="page-section about-heading">
            <div class="container">
                <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0 ml-5" src="assets/img/Commentaires.jpeg" alt="..." />
                <div class="about-heading-content">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 mx-auto">
                            <div class="bg-faded rounded p-5">
                                <h2 class="section-heading mb-4">
                                     "Ce qu'un homme ne dit pas est le sel de la conversation." 
                                </h2>
                                <p style="margin-left: 43vw;">Proverbe japonais</p>
                                <?php foreach ($c as $key => $value) {
                                    echo 'nom:'.$value["pseudo"].'<br>';
                                    echo 'commentaire:'.$value["comment"].'<br>';
                                    echo '-------------------------<br>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
        
        