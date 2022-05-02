<?php

use models\classes\Form;

require "templates/head.php";
require "../models/interfaces/FormInterface.php";
require "../models/classes/Form.php";

$textInputConfig = array(
    'label' => 'test string',
    'name' => 'testString',
    'id' => null,
    'class' => 'textInput',
);

$form = new Form();

$form->startingForm("src/controllers/formController.php", "POST");
$form->textInput($textInputConfig);

$textInputConfig['label'] = 'test integer';
$textInputConfig['name'] = 'testInteger';
$form->textInput($textInputConfig);

$textInputConfig['label'] = 'test float';
$textInputConfig['name'] = 'testFloat';
$form->textInput($textInputConfig);

$form->submitInput(array(
    'name' => 'submit',
    'id' => null,
    'class' => null
), "send value");

$form->endingForm();

require "templates/footer.php";
