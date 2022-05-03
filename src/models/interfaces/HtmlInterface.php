<?php

namespace models\interfaces;

use models\classes\Form;

interface HtmlInterface
{
    public function linkStylesheets(string $path);
    public function linkMetaData(string $attribute, string $value);
    public function linkImages(string $path, string $alt, ...$data);
    public function linkAnchors(string $path, string $text, ...$data);
    public function linkJavascriptFiles(string $path);
}
