<section class="book-list">

    <div class="container">

        <?php foreach ($bibliotheques as $bibliotheque): ?>
            <div class="row z-depth-3 mt-5">
                <div class="col s7">
                    <h4 class="amber-text"><?php echo $bibliotheque['nom_biblio']; ?></h4>
                    <h6><?php echo $bibliotheque['adresse_biblio'].', '.$bibliotheque['ville_biblio']; ?></h6>
                </div>
                <div class="col s5 pr-0">
                    <div class="biblimap" id="map<?php echo $bibliotheque['id_biblio'];?>"></div>
                </div>
            </div>

            <script>
                var mymap<?php echo $bibliotheque['id_biblio'];?> = L.map("map<?php echo $bibliotheque['id_biblio'];?>").setView([<?php echo $bibliotheque['lattitude'].', '.$bibliotheque['longitude'];?>], 15);
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    id: 'mapbox.streets',
                    accessToken: 'your.mapbox.access.token'
                }).addTo(mymap<?php echo $bibliotheque['id_biblio'];?>);
            </script>
        <?php endforeach; ?>

    </div>


    <!--    --><?php //foreach ($livres as $livre): ?>
    <!---->
    <!--    --><?php //endforeach; ?>
</section>