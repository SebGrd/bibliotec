<section class="book-list">

    <pre>
        <?php

//        var_dump($livres);
//        var_dump($livretest);
        var_dump($idList);

        foreach ($idList as $bookId){
            var_dump($livre->getBookInfo(intval($bookId)));
        }

        ?>
    </pre>

<!---->
<!--    --><?php //foreach ($livres as $livre): ?>
<!--    --><?php
//        $livreInfo = $livre['items'][0]['volumeInfo'];
//        ?>
<!--       <div class="book-card">-->
<!---->
<!--           <h3>--><?php //echo $livreInfo['title']; ?><!--</h3>-->
<!---->
<!--           --><?php //if (isset($livreInfo['imageLinks'])): ?>
<!--               <img src="--><?php //echo $livreInfo['imageLinks']['thumbnail']; ?><!--" alt="">-->
<!--           --><?php //endif; ?>
<!---->
<!--           --><?php //if (isset($livreInfo['authors'])): ?>
<!--               <p>--><?php //echo implode(', ', $livreInfo['authors']); ?><!--</p>-->
<!--           --><?php //endif; ?>
<!---->
<!--           <p>Date de publication : <strong>--><?php //echo isset($livreInfo['publishedDate']) ? $livreInfo['publishedDate'] : 'Inconnue'; ?><!--</strong></p>-->
<!--           <p>Editeur : <strong>--><?php //echo isset($livreInfo['publisher']) ? $livreInfo['publisher'] : 'Inconnu'; ?><!--</strong></p>-->
<!--           <p>Catégories : <strong>--><?php //echo isset($livreInfo['categories']) ? implode(', ', $livreInfo['categories']) : 'Aucune'; ?><!--</strong></p>-->
<!--           <p>Nombre de pages : <strong>--><?php //echo isset($livreInfo['pageCount']) ? $livreInfo['pageCount'] : 'Inconnu'; ?><!--</strong></p>-->
<!--           <p>Livre à contenu pour adulte : <strong>--><?php //echo isset($livreInfo['maturityRating']) ? $livreInfo['maturityRating'] : 'Inconnu'; ?><!--</strong></p>-->
<!--           <p>Langue : <strong>--><?php //echo isset($livreInfo['language']) ? $livreInfo['language'] : 'Inconnue'; ?><!--</strong></p>-->
<!--           <p>--><?php //echo $livreInfo['description']; ?><!--</p>-->
<!--           --><?php //if(isset($livreInfo['industryIdentifiers'])): ?>
<!--               <ul>-->
<!--                   --><?php //foreach ($livreInfo['industryIdentifiers'] as $isbn): ?>
<!--                       <li>--><?php //echo $isbn['type'] . ' : '; ?><!--<strong>--><?php //echo $isbn['identifier']; ?><!--</strong></li>-->
<!--                   --><?php //endforeach; ?>
<!--               </ul>-->
<!--           --><?php //endif; ?>
<!---->
<!--       </div>-->
<!--        <hr>-->
<!--    --><?php //endforeach; ?>
</section>