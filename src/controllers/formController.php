<?php

use \models\classes\Validator;

require "../models/classes/Validator.php";

if (isset($_POST['submit'])) {
    $validateDataArr = [];

    $control = new Validator();

    if ($control->validateString($_POST['testString']) !== "error") {
        $validateDataArr[] = $control->validateString($_POST['testString']);
    }

    if (count($validateDataArr) == 3) {
        session_start();
        $_SESSION['string'] = $validateDataArr[0];
        $_SESSION['int'] = $validateDataArr[1];
        $_SESSION['float'] = $validateDataArr[2];

        header("location: ../views/validateFormView.php");
    } else {
        echo "<h1>Error: please enter a correct information.</h1>";
    }
}