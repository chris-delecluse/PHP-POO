<?php

namespace models\templates;

interface FormInterface
{
    public function startingForm(string $action, string $method);

    public function textInput(array $config);

    public function selectInput(array $config, array $value);

    public function textAreaInput(array $config, string $text);

    public function radioInput(array $config, string $value);

    public function checkboxInput(array $config);

    public function submitInput(array $config, string $value);

    public function endingForm();
}