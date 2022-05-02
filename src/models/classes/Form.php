<?php

namespace models\classes;

use models\templates\FormInterface;

class Form implements FormInterface
{
    public function startingForm(string $action, string $method)
    {
        echo "<form action={$action} method={$method}>";
    }

    public function textInput(array $config)
    {
        echo "<label for={$config['label']}>{$config['label']}";

        if ($config['class'] && $config['id'] && $config['name']) {
            echo "<input class={$config['class']} id={$config['id']} type='text' name={$config['name']} required>";
        } else if ($config['class'] && $config['name']) {
            echo "<input class={$config['class']} type='text' name={$config['name']} required>";
        } else if ($config['id'] && $config['name']) {
            echo "<input class={$config['id']} type='text' name={$config['name']} required>";
        }

        echo "</label>";
    }

    public function selectInput(array $config, array $value)
    {
        echo "<label for={$config['label']}>{$config['label']}";

        if ($config['class'] && $config['id'] && $config['name']) {
            echo "<select class={$config['class']} id={$config['id']} type='text' name={$config['name']} required>
                  <option value=''>Please choose an option</option>";

            foreach ($value as $item) {
                echo "<option value={$item}>{$item}</option>";
            }

        } else if ($config['class'] && $config['name']) {
            echo "<select class={$config['class']} type='text' name={$config['name']} required>
                  <option value=''>Please choose an option</option>";

            foreach ($value as $item) {
                echo "<option value={$item}>{$item}</option>";
            }

        } else if ($config['id'] && $config['name']) {
            echo "<select class={$config['id']} type='text' name={$config['name']} required>
                  <option value=''>Please choose an option</option>";

            foreach ($value as $item) {
                echo "<option value={$item}>{$item}</option>";
            }
        }

        echo "</label>";
    }

    public function textAreaInput(array $config, string $text)
    {
        if ($config['class'] && $config['id'] && $config['name']) {
            echo "<textarea class={$config['class']} id={$config['id']} name={$config['name']} placeholder={$text} required></textarea>";
        } else if ($config['class'] && $config['name']) {
            echo "<textarea class={$config['class']} name={$config['name']} placeholder={$text} required></textarea>";
        } else if ($config['id'] && $config['name']) {
            echo "<textarea class={$config['class']} id={$config['id']} name={$config['name']} placeholder={$text} required></textarea>";
        }
    }

    public function radioInput(array $config, string $value)
    {
        if ($config['class'] && $config['id'] && $config['name']) {
            echo "<input class={$config['class']} id={$config['id']} type='radio' name={$config['name']} value={$value}>
                  <label for={$config['label']}>{$config['label']}";
        } else if ($config['class'] && $config['name']) {
            echo "<input class={$config['class']} type='radio' name={$config['name']} value={$value}>
                  <label for={$config['label']}>{$config['label']}";
        } else if ($config['id'] && $config['name']) {
            echo "<input class={$config['id']} type='radio' name={$config['name']} value={$value}>
                  <label for={$config['label']}>{$config['label']}";
        }
    }

    public function checkboxInput()
    {
        // TODO: Implement checkboxInput() method.
    }

    public function submitInput()
    {
        // TODO: Implement submitInput() method.
    }

    public function endingForm()
    {
        echo "</form>";
    }
}
