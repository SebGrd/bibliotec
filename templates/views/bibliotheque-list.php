<section class="book-list">

    <div class="container">

        <?php foreach ($bibliotheques as $bibliotheque): ?>
        <h3><?php echo $bibliotheque['nom_biblio']; ?></h3>
            <pre>
                <?php print_r($bibliotheque); ?>
         </pre>
        <?php endforeach; ?>

    </div>


    <!--    --><?php //foreach ($livres as $livre): ?>
    <!---->
    <!--    --><?php //endforeach; ?>
</section>