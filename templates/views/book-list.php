<section class="book-list">
    <div class="container">
        <h2>Nos livres</h2>
        <div class="row">
        <?php foreach ($idList as $bookId): ?>
        <?php $book = $livre->getBookInfo(intval($bookId))[0] ?>
        <div class="col s6">
            <div class="card horizontal">
                <div class="card-image">
                    <img src="<?php echo $book['img_url']; ?>">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <h5><?php echo $book['titre']; ?></h5>
                        <div><span class="new badge" data-badge-caption="<?php echo $book['categorie_nom'] ?>"></span><?php echo $book['auteur_nom'] ?></div>
                        <hr>
                        <p><?php echo substr($book['resume'], 0, 100).'...';?></p>
                    </div>
                    <div class="card-action">
                        <a href="<?php echo ('http://'.$_SERVER['HTTP_HOST']."/single-book.php?book=".$book['id']); ?>">Détails du livre</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        </div>
    </div>
</section>