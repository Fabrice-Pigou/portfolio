<?php
use src\core\html\Form;
use src\app\perso\Goupy;
use \src\core\Flash;

$oForm = new Form;
$oGoupy = new Goupy;

if (isset($_POST['lunh'])) {
    if(is_numeric($_POST['lunh'])){
        $_POST['lunh'] = htmlentities($_POST['lunh']);
        $lunh = $oGoupy->isLuhnNum($_POST['lunh']);
        
        if ($lunh == 0) {
            $message = '<h3 class="text-center green">Le numéros est valide</h3>';
        }
        else {
            $message = '<h3 class="text-center red">Le numéros n\'est pas valide</h3>';
        }
    }
    else{
        Flash::setFlash('Il ne doit y avoir que des chiffres', 'alert');
    }
}

include '../views/luhn.phtml';
