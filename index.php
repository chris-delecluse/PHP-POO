<?php

use models\classes\Form;
use models\classes\Html;

require "src/models/interfaces/FormInterface.php";
require "src/models/classes/Form.php";
require "src/models/interfaces/HtmlInterface.php";
require "src/models/classes/Html.php";

require "src/views/templates/head.php";

$form = new Form();

$arr1 = array(
    'label' => 'Username',
    'name' => 'username',
    'id' => null,
    'class' => 'userInput'
);

$arr2 = array(
    'label' => 'Choose',
    'name' => 'selectInput',
    'id' => "selectInput",
    'class' => null
);

$arr3 = array(
    'label' => 'Message',
    'name' => 'message',
    'id' => null,
    'class' => 'message'
);

$arr4 = array(
    'label' => 'choose 1',
    'name' => 'test',
    'id' => null,
    'class' => 'test'
);

$arr5 = array(
    'label' => 'man',
    'name' => 'man',
    'class' => null,
    'id' => 'man'
);

$arr6 = array(
    'label' => 'woman',
    'name' => 'woman',
    'class' => null,
    'id' => 'woman'
);

$arr7 = array(
    'name' => 'submit',
    'class' => null,
    'id' => null
);

$selectArr = ['first', 'second', 'third'];

// ---------------------

$form->startingForm("prout.php", "POST");

$form->textInput($arr1);
// ----------------------
$form->selectInput($arr2, $selectArr);
// -----------------------
$form->textAreaInput($arr3, "Hello");
// ------------------------
$form->radioInput($arr4, "choose-1");

$arr4['label'] = "choose 2";
$form->radioInput($arr4, "choose-2");

$arr4['label'] = "choose 3";
$form->radioInput($arr4, "choose-3");
// -------------------------
$form->checkboxInput($arr5);
$form->checkboxInput($arr6);
// ---------------------
$form->submitInput($arr7, "Envoyer");
// ---------------------
$form->endingForm();



$html = new Html();

$html->linkAnchors("https://www.youtube.com/", "redirect on Youtube", "link");

$html->linkImages("https://media4.giphy.com/media/COYGe9rZvfiaQ/giphy.gif", "photo");

$html->linkMetaData("test", "ok");

require "src/views/templates/footer.php";