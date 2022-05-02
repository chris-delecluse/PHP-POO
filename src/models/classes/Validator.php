<?php

namespace models\classes;

class Validator
{
    public function validateString($string): string

    {
        $regex = '/[#$%&*()+=\-\[\];,.\/{}|":<>?~\\\\]/';
        $result = !preg_match($regex, $string);

        if (!empty($string) && strlen($string) > 3 && strlen($string) <= 60 && $result) {
            return htmlspecialchars($string);
        } else {
            return "error";
        }
    }

    public function validateInteger()
    {

    }

    public function validateFloat()
    {

    }
}
