<div class="container">
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

            <h5 class="primary-text">Disponibilités</h5>
            <div class="row">
                <div class="col s7">
                    <b><?php echo $biblio['nom_biblio'] ?></b>
                    <ul>
                        <li><?php echo $biblio['adresse_biblio'].', '.$biblio['ville_biblio']; ?></li>
                    </ul>
                    <a class="waves-effect waves-light btn"><i class="material-icons right">add</i>Emprunter ce livre</a>
                </div>
                <div class="col s5">
                    <div id="bibli" style="width: 100%; height: 200px;"></div>
                </div>
            </div>
<!--            IF DISPO-->

<!--            ENDIF-->
        </div>
    </div>

</div>

<script>
    var bibli = L.map("bibli").setView([<?php echo $biblio['lattitude'].', '.$biblio['longitude'];?>], 15);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        id: 'mapbox.streets',
        accessToken: 'your.mapbox.access.token'
    }).addTo(bibli);
</script>