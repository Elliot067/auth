<?php


if (connecte()) {
    header('Location: /public');
    exit();}
?>
<body>


<div class="register_background">
    <div class="form_inscription">


        <div class="sousmenu">
            <div class="sousmenu_login "><a href="login">Connexion</a></div>
            <div class="sousmenu_register select"><a href="register">Inscription</a></div>
        </div>

        <div class="login">

            <form action="/app/HTML/inscription_verif.php" method="post">
                <div class="pseudo user_pass">
                    <span class="iconify" data-icon="codicon:account"></span>

                    <input type="text" placeholder="Prénom" name="prenom" required>

                </div>
                <div class="user_pass">
                    <span class="iconify" data-icon="codicon:account"></span>

                    <input type="text" placeholder="Nom" name="nom" required>

                </div>

                <div class="user_pass">
                    <span class="iconify" data-icon="ci:mail"></span>

                    <input class="email" type="email" placeholder="Email" name="email" required>

                </div>
                <div class="user_pass">
                    <span class="iconify" data-icon="codicon:account"></span>

                    <input type="tel" placeholder="Téléphone" name="tel" required>

                </div>

                <div class="user_pass">
                    <span class="iconify" data-icon="ic:baseline-password"></span>

                    <input type="password" placeholder="Mot de passe" name="password" required>
                </div>
                <div class="user_pass">
                    <span class="iconify" data-icon="ic:baseline-password"></span>

                    <input type="password" placeholder="Mot de passe" name="password_retype" required>
                </div>



                <?php



                if (isset($_GET['reg_err'])) {
                    $error = htmlspecialchars($_GET['reg_err']);

                    switch ($error) {
                        case 'success':
                            ?>
                            <div class="success">
                                <strong>Succès</strong> inscription réussie !
                            </div>
                            <?php
                            break;
                        case 'password_condition':
                            ?>
                            <div class="alert ">
                                <strong>Erreur</strong> mot de passe ne respecte pas les conditions
                            </div>
                            <?php
                            break;
                        case 'password':
                            ?>
                            <div class="alert ">
                                <strong>Erreur</strong> mot de passe différent
                            </div>
                            <?php
                            break;

                        case 'email':
                            ?>
                            <div class="alert ">
                                <strong>Erreur</strong> email non valide
                            </div>
                            <?php
                            break;

                        case 'email_length':
                            ?>
                            <div class="alert ">
                                <strong>Erreur</strong> email trop long
                            </div>
                            <?php
                            break;

                        case 'already':
                            ?>
                            <div class="alert ">
                                <strong>Erreur</strong> compte deja existant
                            </div>
                            <?php
                            break;

                        case 'nom_length':
                            ?>
                            <div class="alert ">
                                <strong>Erreur</strong> nom trop long
                            </div>
                            <?php
                            break;

                        case 'prenom_length':
                            ?>
                            <div class="alert ">
                                <strong>Erreur</strong> prenom trop long
                            </div>
                            <?php
                            break;

                        case 'tel_is_int':
                            ?>
                            <div class="alert ">
                                <strong>Erreur</strong> Seulement des entiers
                            </div>
                        <?php


                    }
                }
                ?>
                <div class="login_button">
                    <input type="submit" id='submit' value='Inscription'>
                </div>
            </form>
        </div>
    </div>

</div>

</body>

