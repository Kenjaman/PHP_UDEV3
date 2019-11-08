<?php


function debug($var)
{

    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

function create($verif)
{

    $content = '<div id="modale" class="bouge">';
    $content .= ($verif != false && (isset($verif['pseudo']) && $verif['pseudo'] != false && isset($verif['password']) && $verif['password'] != false)) ?
        '<p id="good">Vous êtes connectés</p>' : '<p id="bad">Erreur de connexion</p>';
    $content .= '</div>';
    return $content;
}

function crypting($pw)
{

    $options = ['cost' => 12];
    $crypted = password_hash($pw, PASSWORD_BCRYPT, $options);
    return $crypted;
}

function verif()
{

    if (isset($_POST['control']) && $_POST['control'] == 'ok') {

        $original_mdp = '$2y$12$qHZWgoCB9KL6RqNJvu019OIYhp136OOqq9CgEfBHjUlR.wFixXVOq';

        $pseudo = ($_POST['pseudo'] != '') ? $_POST['pseudo'] : false;

        $pass = ($_POST['pwd'] != '') ? $_POST['pwd'] : false;

        $results = [
            'pseudo' => $pseudo,
            'password' => (password_verify($pass, $original_mdp) == true) ? crypting($pass) : false
        ];

        return $results;

    } else {

        return false;
    }
}