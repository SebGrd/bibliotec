<div class="container">
    <div class="retour-liste mt-5">
        <a href="/book-list.php" class="btn">Retour à la liste des livres</a>
    </div>

<!--    --><?php //var_dump($book); ?>
    <h2><?php echo $book['titre']; ?></h2>
    <div class="row">
        <div class="col s4">
            <img src="<?php echo $book['img_url']; ?>" alt="" class="img-fluid">
        </div>
        <div class="col s8">
            <div class="info">
                <div class="row">
                    <div class="col s6">
                        <ul>
                            <li>Auteur : <b><?php echo $book['auteur_nom']; ?></b></li>
                            <li>Editeur : <b><?php echo $book['editeur_nom']; ?></b></li>
                            <li>Langue : <b><?php echo $book['lang_nom']; ?></b></li>
                            <li>ISBN : <b><?php echo $book['isbn']; ?></b></li>
                        </ul>
                    </div>
                    <div class="col s6">
                        <ul>
                            <li>Catégorie : <b><?php echo $book['categorie_nom']; ?></b></li>
                            <li>Nombre de pages : <b><?php echo $book['nbr_page']; ?></b></li>
                            <li>Date de publication : <b><?php echo date('d/m/Y', strtotime($book['date_publi'])); ?></b></li>
                        </ul>
                    </div>
                </div>
            </div>
            <p><?php echo $book['resume']; ?></p>
            <hr>

            <h5 class="primary-text">Disponibilités
                <?php if ($emprunted): ?>
                    <span class="new badge red" data-badge-caption="Indisponible"></span>
                <?php else: ?>
                <span class="new badge green" data-badge-caption="Disponible"></span>
                <?php endif; ?>
            </h5>

            <div class="row">
                <div class="col s7">
                    <b><?php echo $biblio['nom_biblio'] ?></b>
                    <ul>
                        <li><?php echo $biblio['adresse_biblio'].', '.$biblio['ville_biblio']; ?></li>
                    </ul>
<!--                    <a href="--><?php //echo ('http://'.$_SERVER['HTTP_HOST']."/borrow-book.php?book=".$book['id']); ?><!--"-->
<!--                       class="waves-effect waves-light btn --><?php //if ($emprunted){echo 'disabled';}?><!--"><i class="material-icons right">add</i>-->
<!--                        Emprunter ce livre</a>-->
                    <a class="waves-effect waves-light btn modal-trigger <?php if ($emprunted){echo 'disabled';}?>" href="#modal1"><i class="material-icons right">add</i>
                        Emprunter ce livre</a>

                    <?php if ($emprunted): ?>
                        <ul>
                            <li class="red-text">Date de retour : <b><?php echo $emprunt[0]['dateRetour']; ?></b></li>
                        </ul>
                    <?php endif; ?>

                </div>
                <div class="col s5">
                    <div id="bibli" style="width: 100%; height: 200px;"></div>
                </div>
            </div>

        </div>
    </div>

</div>

<!-- Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Emprunter ce livre</h4>
        <p>Completez le formulaire ci-dessous afin de reserver votre livre.</p>
        <div class="row">
            <form class="col s12"
                  action="<?php echo ('http://'.$_SERVER['HTTP_HOST']."/templates/controllers/borrowHandler.php"    ); ?>"
                  method="GET">
                <div class="row">
                    <input type="hidden" value="<?php echo $book['id']; ?>" name="idBook">
                    <input type="hidden" value="<?php echo $_SESSION['idUser']; ?>" name="idUser">
                    <div class="input-field col s4">
                        <input type="text" class="datepicker validate" placeholder="Date de retour"
                               name="retour">
                    </div>
                    <div class="col s4">
                        <button type="submit" class="waves-effect waves-light btn mt-5">Emprunter<i
                                    class="material-icons right">add</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat red-text">Annuler</a>
    </div>
</div>

<script>
    var bibli = L.map("bibli").setView([<?php echo $biblio['lattitude'].', '.$biblio['longitude'];?>], 15);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        id: 'mapbox.streets',
        accessToken: 'your.mapbox.access.token'
    }).addTo(bibli);
</script>

