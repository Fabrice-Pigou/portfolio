<?php
use app\core\html\Form;
use app\src\perso\Goupy;
$oForm = new Form;
$oGoupy = new Goupy;

if (isset($_POST['lunh'])) {
    $lunh = $oGoupy->isLuhnNum($_POST['lunh']);

    if ($lunh == 0) {
        $message = '<h3 class="text-center">Le numéros de carte bleu est valide</h3>';
    }
    else {
        $message = '<h3 class="text-center">Le numéros de carte bleu n\'est pas valide</h3><h3>'.$lunh.'</h3>';
    }
}

include '../views/luhn.phtml';
