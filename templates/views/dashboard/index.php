<section class="dashboard">
    <div class="row">
            <aside class="col s3">
                <ul class="collection with-header">
                    <li class="collection-header"><h5>Tableau de bord</h5></li>
                    <li class="collection-item"><a href="#!" id="bookAdd"><i class="material-icons">library_add</i>Ajouter un livre</a></li>
                    <?php if ($_SESSION['account'] == 3 || $_SESSION['account'] == 4): ?>
                    <li class="collection-item"><a href="#!" id="userAdd"><i class="material-icons">person_add</i>Ajouter un utilisateur</a></li>
                    <li class="collection-item"><a href="#!" id="userList"><i class="material-icons">person</i>Liste des utilisateurs</a></li>
                    <?php endif; ?>
                </ul>
            </aside>
        <div class="col s9 col-dash">
            <div class="main-dashboard">

                <div class="dashboard-stats">
                    <div class="row">
                        <div class="col s4">
                            <a class="waves-effect waves-light btn-large"><i class="material-icons right">account_circle</i>86 utilisateurs</a>
                        </div>
                        <div class="col s4">
                            <a class="waves-effect waves-light btn-large"><i class="material-icons right">library_books</i>5465 livres</a>
                        </div>
                        <div class="col s4">
                            <a class="waves-effect waves-light btn-large"><i class="material-icons right">cloud</i>button</a>
                        </div>
                    </div>
                </div>

                <?php if ($_SESSION['account'] == 3 || $_SESSION['account'] == 4): ?>
                <div class="user-add">
                    <h5>Ajouter un utilisateur</h5>
                    <div class="row">
                        <form class="col s12" action="<?php echo ('http://'.$_SERVER['HTTP_HOST']."/templates/controllers/dashboard/userAddHandler.php"); ?>" method="post">
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
                                    <input type="text" class="datepicker validate" placeholder="Date de naissance" name="naissance">
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
                                    <button type="submit" class="waves-effect waves-light btn"><i class="material-icons left">add</i>Ajouter</button>
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
                    <?php foreach ($users as $user):?>
                        <li class="collection-item"><div><?php echo '<b>'.$user['prenom'].' '.$user['nom'].'</b> - '.accountName($user['type_compte']);?><a href="<?php echo ('http://'.$_SERVER['HTTP_HOST']."/templates/controllers/dashboard/userDelHandler.php?user=".$user['id_user']);?>" class="secondary-content"><i class="material-icons">delete</i></a></div></li>
                    <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>

            </div>

        </div>
    </div>



</section>