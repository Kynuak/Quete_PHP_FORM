<?php

echo "Merci " . $_POST['user_firstname'] . " " . $_POST['user_lastname'] . " de nous avoir contacté à propos de '" . $_POST['user_sujet'] . "'.";
echo "<br>";
echo "<br>";

echo "Un de nos conseillers vous contactera soit à l'adresse " . $_POST['user_email'] . " ou par téléphone au " . $_POST['user_telephone'] . " dans les plus brefs détais
pour traiter votre demande :";
echo "<br>";
echo "<br>";
echo $_POST['user_message'];