<section class="book-list">

    <div class="container">

        <?php foreach ($bibliotheques as $bibliotheque): ?>
        <div>
            <h3><?php echo $bibliotheque['nom_biblio']; ?></h3>
            <div class="id"><?php echo $bibliotheque['id_biblio']; ?></div>
        </div>

            <pre>
                <?php print_r($bibliotheque); ?>
         </pre>
        <?php endforeach; ?>

    </div>


    <!--    --><?php //foreach ($livres as $livre): ?>
    <!---->
    <!--    --><?php //endforeach; ?>
</section>