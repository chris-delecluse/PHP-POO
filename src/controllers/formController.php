<?php

use \models\classes\Validator;


if (isset($_POST['submit'])) {
    $control = new Validator();

    if ($control->validateString($_POST['testString']) !== "error") {

    }
}