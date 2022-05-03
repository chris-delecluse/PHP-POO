<?php

use models\classes\Form;

require "templates/head.php";
require "../models/interfaces/FormInterface.php";
require "../models/classes/Form.php";

$textInputConfig = array(
    'label' => 'test string',
    'type' => 'text',
    'name' => 'testString',
    'id' => 'textId',
    'class' => 'textInput',
);

$form = new Form();

$form->startingForm("../controllers/formController.php", "POST");
$form->textInput($textInputConfig, null);

$textInputConfig['label'] = 'test integer';
$textInputConfig['name'] = 'testInteger';
$textInputConfig['type'] = 'number';
$form->textInput($textInputConfig, null);

$textInputConfig['label'] = 'test float';
$textInputConfig['name'] = 'testFloat';
$textInputConfig['type'] = 'number';
$form->textInput($textInputConfig,0.01);

$form->submitInput(array(
    'name' => 'submit',
    'id' => null,
    'class' => null
), "send value");

$form->endingForm();

require "templates/footer.php";
