<?php

namespace models\classes;

use models\interfaces\HtmlInterface;

class Html implements HtmlInterface
{
    public function linkStylesheets(string $path)
    {
        echo "<link rel='stylesheet' href='$path'>";
    }

    public function linkMetaData(string $attribute, string $value)
    {
        echo "<meta '$attribute'='$value'>";
    }

    public function linkImages(string $path, string $alt, ...$data)
    {
        if (empty($data[0]) && empty($data[1])) {
            echo "<img src='$path' alt='$alt'>";
        } else if (empty($data[1])) {
            echo "<img src='$path' alt='$alt' class='$data[0]'>";
        } else {
            echo "<img src='$path' alt='$alt' id='$data[0]' class='$data[1]'>";
        }
    }

    public function linkAnchors(string $path, string $text, ...$data)
    {
        if (empty($data[0]) && empty($data[1])) {
            echo "<a href='$path'>$text</a>";
        } else if (empty($data[1])) {
            echo "<a class='$data[0]' href='$path'>$text</a>";
        } else {
            echo "<a id='$data[0]' class='$data[1]' href='$path'>$text</a>";
        }
    }

    public function linkJavascriptFiles(string $path)
    {
        echo "<script type='module' src='$path'></script>";
    }
}
