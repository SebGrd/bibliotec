<?php require_once $_SERVER['DOCUMENT_ROOT']."/templates/function.php"; ?>

<?php get_header(); ?>

<body id="home">

    <main>

        <section id="visuel-home" class="parallax-window" data-parallax="scroll" data-image-src="<?php echo ('http://'.$_SERVER['HTTP_HOST']."/templates/img/bg-2.jpg"); ?>">
            <div class="big-button" id="parcourir">
                <a href="#">Parcourir les livres</a>
            </div>
            <div class="big-button" id="emprunt">
                <a href="#">Emprunter un livre</a>
            </div>

            <div class="big-scrolldown">
                <a href="#tendance-livre">
                    <i class="fas fa-chevron-circle-down"></i>
                </a>
            </div>
        </section>

        <section id="tendance-livre">
            <h2><i class="far fa-heart"></i> Coups de coeur</h2>

            <article>
                <header>
                    <h4>Le titre du livre</h4>
                    <span class="disponibilite -non">Indisponible</span>
                </header>
                <div class="resume">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem ducimus rerum veritatis vitae?
                        Ad autem beatae delectus doloremque fuga hic in molestias, pariatur, quidem quod quos, repudiandae sed ullam voluptatibus?
                    </p>
                </div>
                <footer>
                    <p><b>Auteur :</b> Jacque célère</p>
                    <p><b>Publié le :</b> <time>02/12/2018</time></p>
                </footer>
            </article>
            <article>
                <header>
                    <h4>Le titre du livre</h4>
                    <span class="disponibilite">Disponible</span>
                </header>
                <div class="resume">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem ducimus rerum veritatis vitae?
                        Ad autem beatae delectus doloremque fuga hic in molestias, pariatur, quidem quod quos, repudiandae sed ullam voluptatibus?
                    </p>
                </div>
                <footer>
                    <p><b>Auteur :</b> Jacque célère</p>
                    <p><b>Publié le :</b> <time>02/12/2018</time></p>
                </footer>
            </article>
            <article>
                <header>
                    <h4>Le titre du livre</h4>
                    <span class="disponibilite">Disponible</span>
                </header>
                <div class="resume">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem ducimus rerum veritatis vitae?
                        Ad autem beatae delectus doloremque fuga hic in molestias, pariatur, quidem quod quos, repudiandae sed ullam voluptatibus?
                    </p>
                </div>
                <footer>
                    <p><b>Auteur :</b> Jacque célère</p>
                    <p><b>Publié le :</b> <time>02/12/2018</time></p>
                </footer>
            </article>

        </section>

        <section id="sites">

        </section>

        <?php

//        $N=12;
//        $u=$N;
//        $i=0;
//        while ($i<5){
//            echo $u;
//            if($u%2==0){
//                $u=$u/2;
//            } else{
//                $u=$u*3+1;
//            }
//            $i++;
//        }


        $hashed_password = password_hash('mypassword', PASSWORD_BCRYPT);
        echo $hashed_password;

        ?>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax.js/1.5.0/parallax.js"></script>
</body>

