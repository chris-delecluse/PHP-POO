<?php

namespace models\interfaces;

interface HtmlInterface
{
    public function linkStylesheets(string $path);
    public function linkMetaData(array $);
    public function linkImages(string $path, string $alt, ...$data);
    public function linkAnchors(string $path, string $text, ...$data);
    public function linkJavascriptFiles(string $path);
}