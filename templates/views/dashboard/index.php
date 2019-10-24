<section class="dashboard">
    <div class="row">
        <aside class="col s3">
            <ul class="collection with-header">
                <li class="collection-header"><h5>Tableau de bord</h5></li>
                <?php if ($_SESSION['account'] == 2 || $_SESSION['account'] == 4): ?>
                    <li class="collection-item"><a href="#!" id="bookAdd"><i class="material-icons">library_add</i>Ajouter
                            un livre</a></li>
                    <li class="collection-item"><a href="#!" id="bookList"><i class="material-icons">library_books</i>Liste des livres</a></li>
                <?php endif; ?>
                <?php if ($_SESSION['account'] == 3 || $_SESSION['account'] == 4): ?>
                    <li class="collection-item"><a href="#!" id="userAdd"><i class="material-icons">person_add</i>Ajouter
                            un utilisateur</a></li>
                    <li class="collection-item"><a href="#!" id="userList"><i class="material-icons">person</i>Liste des
                            utilisateurs</a></li>
                <?php endif; ?>
            </ul>
        </aside>
        <div class="col s9 col-dash">
            <div class="main-dashboard">

                <div class="dashboard-stats">
                    <div class="row">
                        <div class="col s4">
                            <a class="waves-effect waves-light btn-large"><i
                                        class="material-icons right">account_circle</i><?php echo $nbrUsers[0][0]; ?>
                                utilisateurs</a>
                        </div>
                        <div class="col s4">
                            <a class="waves-effect waves-light btn-large"><i
                                        class="material-icons right">library_books</i><?php echo $nbrBooks[0][0]; ?>
                                livres</a>
                        </div>
                        <div class="col s4">
                            <a class="waves-effect waves-light btn-large"><i
                                        class="material-icons right">mode_edit</i><?php echo $nbrAuteur[0][0]; ?>
                                auteurs</a>
                        </div>
                    </div>
                </div>

                <?php if ($_SESSION['account'] == 2 || $_SESSION['account'] == 4): ?>
                <div class="book-add">
                    <h5>Ajouter un livre</h5>
                    <div class="row">
                        <form class="col s12"
                              action="<?php echo('http://' . $_SERVER['HTTP_HOST'] . "/templates/controllers/dashboard/bookAddHandler.php"); ?>"
                              method="post">
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="book_title" type="text" class="validate" name="livre_title">
                                    <label for="book_title">Titre du livre</label>
                                </div>
                                <div class="input-field col s3">
                                    <input id="book_pages" type="number" class="validate" name="nbr_pages">
                                    <label for="book_pages">Nombre de pages</label>
                                </div>
                                <div class="input-field col s3">
                                    <input type="text" class="datepicker validate" placeholder="Date de publication"
                                           name="livre_date-publi">
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s8">
                                    <textarea id="book_resume" class="materialize-textarea"
                                              name="livre_resume"></textarea>
                                    <label for="book_resume">Resumé</label>
                                </div>
                                <div class="input-field col s4">
                                    <select name="livre_categorie">
                                        <?php foreach ($categories as $categorie): ?>
                                        <option value="<?php echo $categorie['id'] ?>"><?php echo $categorie['categorie_nom'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label>Catégorie</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="book_image" type="text" class="validate" name="livre_image">
                                    <label for="book_image">URL de l'image</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s9">
                                    <select name="livre_biblioteque">
                                        <?php foreach ($biblioteques as $biblioteque): ?>
                                            <option value="<?php echo $biblioteque['id_biblio'] ?>"><?php echo $biblioteque['nom_biblio'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label>Bibliothèque</label>
                                </div>
                                <div class="input-field col s3">
                                    <input id="book_isbn" type="text" class="validate" name="livre_isbn">
                                    <label for="book_isbn">ISBN</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s4">
                                    <select name="livre_auteur">
                                        <?php foreach ($auteurs as $auteur): ?>
                                            <option value="<?php echo $auteur['id'] ?>"><?php echo $auteur['auteur_nom'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label>Auteur</label>
                                </div>
                                <div class="input-field col s4">
                                    <select name="livre_editeur">
                                        <?php foreach ($editeurs as $editeur): ?>
                                            <option value="<?php echo $editeur['id'] ?>"><?php echo $editeur['editeur_nom'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label>Editeur</label>
                                </div>
                                <div class="input-field col s4">
                                    <select name="livre_lang">
                                        <?php foreach ($langs as $lang): ?>
                                            <option value="<?php echo $lang['id'] ?>"><?php echo $lang['lang_nom'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label>Langue</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12">
                                    <button type="submit" class="waves-effect waves-light btn"><i
                                                class="material-icons left">add</i>Ajouter
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <?php endif; ?>

                <?php if ($_SESSION['account'] == 2 || $_SESSION['account'] == 4): ?>
                    <div class="book-list">
                        <h5>Liste des livres</h5>
                        <ul class="collection">
                            <?php foreach ($booksList as $book): ?>
                                <li class="collection-item">
                                    <div><?php echo '<b>' . $book['titre']. '</b> - ' . 'AUTEUR ' ?>
                                        <a href="" class="secondary-content"><i class="material-icons">delete</i></a></div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php if ($_SESSION['account'] == 3 || $_SESSION['account'] == 4): ?>
                    <div class="user-add">
                        <h5>Ajouter un utilisateur</h5>
                        <div class="row">
                            <form class="col s12"
                                  action="<?php echo('http://' . $_SERVER['HTTP_HOST'] . "/templates/controllers/dashboard/userAddHandler.php"); ?>"
                                  method="post">
                                <div class="row">
                                    <div class="input-field col s4">
                                        <input id="first_name" type="text" class="validate" name="prenom">
                                        <label for="first_name">Prénom</label>
                                    </div>
                                    <div class="input-field col s4">
                                        <input id="last_name" type="text" class="validate" name="nom">
                                        <label for="last_name">Nom</label>
                                    </div>
                                    <div class="input-field col s4">
                                        <input type="text" class="datepicker validate" placeholder="Date de naissance"
                                               name="naissance">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="email" type="email" class="validate" name="mail">
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="password" type="password" class="validate" name="mdp">
                                        <label for="password">Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s7">
                                        <input id="adress" type="text" class="validate" name="adresse">
                                        <label for="adress">Adresse</label>
                                    </div>
                                    <div class="input-field col s5">
                                        <input id="city" type="text" class="validate" name="ville">
                                        <label for="city">Ville</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <select name="compte">
                                            <optgroup label="Etudiant">
                                                <option value="1">Etudiant</option>
                                            </optgroup>
                                            <optgroup label="Employé">
                                                <option value="2">Libraire</option>
                                                <option value="3">Gérant utilisateur</option>
                                                <option value="4">Administrateur</option>
                                            </optgroup>
                                        </select>
                                        <label>Type de compte</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        <button type="submit" class="waves-effect waves-light btn"><i
                                                    class="material-icons left">add</i>Ajouter
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if ($_SESSION['account'] == 3 || $_SESSION['account'] == 4): ?>
                    <div class="user-list">
                        <h5>Liste des utilisateurs</h5>
                        <ul class="collection">
                            <?php foreach ($users as $user): ?>
                                <li class="collection-item">
                                    <div><?php echo '<b>' . $user['prenom'] . ' ' . $user['nom'] . '</b> - ' . accountName($user['type_compte']); ?>
                                        <a href="<?php echo('http://' . $_SERVER['HTTP_HOST'] . "/templates/controllers/dashboard/userDelHandler.php?user=" . $user['id_user']); ?>"
                                           class="secondary-content"><i class="material-icons">delete</i></a></div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

            </div>

        </div>
    </div>


</section>