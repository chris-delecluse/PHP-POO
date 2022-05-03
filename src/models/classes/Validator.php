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

    public function validateInteger($int) : int
    {
        if (!empty($int)) {
            return $int;
        } else {
            return 0;
        }
    }

    public function validateFloat($float) : float
    {
        if (!empty($float)) {
            return $float;
        } else {
            return 0.0;
        }
    }
}
