<?php

use models\classes\Form;
use models\classes\Html;

require "src/models/interfaces/FormInterface.php";
require "src/models/classes/Form.php";
require "src/models/interfaces/HtmlInterface.php";
require "src/models/classes/Html.php";

require "src/views/templates/head.php";

$form = new Form();

$arrayOfData = array(
    'label' => 'label1',
    'name' => 'test1',
    'id' => null,
    'class' => 'test1'
);

$arr = ['po', 'kds', 'ptdr'];

// ---------------------

$form->startingForm("prout.php", "POST");
$form->textInput($arrayOfData);

// ----------------------

$form->selectInput(array(
    'label' => 'label2',
    'name' => 'test2',
    'id' => null,
    'class' => 'test2'
), $arr);

// -----------------------

$form->textAreaInput(array(
    'label' => 'label3',
    'name' => 'test3',
    'id' => null,
    'class' => 'test3'
), "Hello");

// ------------------------

$form->radioInput(array(
    'label' => 'label4',
    'name' => 'test4',
    'id' => null,
    'class' => 'test4'
), "hello");

$form->radioInput(array(
    'label' => 'label5',
    'name' => 'test4',
    'id' => null,
    'class' => 'test5 sqdssfsd'
), "helllllllo");

$form->radioInput(array(
    'label' => 'label6',
    'name' => 'test4',
    'id' => null,
    'class' => 'test6'
), "test6");

// -------------------------

$form->checkboxInput(array(
    'label' => 'man',
    'name' => 'man',
    'class' => null,
    'id' => 'man'
));

$form->checkboxInput(array(
    'label' => 'woman',
    'name' => 'woman',
    'class' => null,
    'id' => 'woman'
));

// ---------------------

$form->submitInput(array(
    'name' => 'submit',
    'class' => null,
    'id' => null
    ), "Envoyer");


$form->endingForm();


$tessssst = new Html();

$popo = ["ceciEstUnID", "ceciEstUneClass"];

$tessssst->linkAnchors("https://www.youtube.com/", "prou", "hello");

$tessssst->linkImages("https://media4.giphy.com/media/COYGe9rZvfiaQ/giphy.gif", "photo");

$tessssst->linkMetaData(["prout", "cahuette"], ["hello", "cahuette", "prout", "world"]);
require "src/views/templates/footer.php";