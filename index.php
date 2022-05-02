<?php

use models\classes\Form;

require "src/models/interfaces/FormInterface.php";
require "src/models/classes/Form.php";

require "src/views/templates/head.php";

$form = new Form();

$arrayOfData = array(
    'label' => 'Prout',
    'name' => 'PasDeNom',
    'id' => null,
    'class' => 'test'
);

$arr = ['po', 'kds', 'ptdr'];

// ---------------------

$form->startingForm("prout.php", "POST");
$form->textInput($arrayOfData);

// ----------------------

$form->selectInput($arrayOfData, $arr);

// -----------------------

$form->textAreaInput($arrayOfData, "Hello");

// ------------------------

$form->radioInput(array(
    'label' => 'Prout',
    'name' => 'essaie',
    'id' => null,
    'class' => 'test'
), "hello");

$form->radioInput(array(
    'label' => 'salut',
    'name' => 'essaie',
    'id' => null,
    'class' => 'test1 test3'
), "helllllllo");

$form->radioInput(array(
    'label' => 'mp',
    'name' => 'essaie',
    'id' => 'azzess',
    'class' => 'sd'
), "fdsfsdfsdfsds");

// -------------------------

$form->endingForm();

require "src/views/templates/footer.php";