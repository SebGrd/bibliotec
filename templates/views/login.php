<div class="container">
    <section class="login">
        <h1>Connexion</h1>
        <?php if (isset($error)){ ?>
            <p><?php echo $error; ?></p>
        <?php } ?>
        <form action="login.php" method="post" autocomplete="off">
            <input type="text" name="mail" placeholder="Mail de connexion">
            <input type="password" name="password" placeholder="Mot de passe">
            <input type="submit" value="Connexion">
        </form>
    </section>
</div>