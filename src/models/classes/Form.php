<?php

namespace models\classes;

use models\interfaces\FormInterface;

class Form implements FormInterface
{
    public function startingForm(string $action, string $method)
    {
        echo "<form action='$action' method='$method'>";
    }

    public function textInput(array $config, $steps)
    {
        echo "<label for='$config[label]'>$config[label]";

        if ($config['class'] && $config['id'] && $config['name'] && $steps) {
            echo "<input class='$config[class]' id='$config[id]' type='$config[type]' step='$steps' name='$config[name]' required>";
        } else if ($config['class'] && $config['id'] && $config['name']) {
            echo "<input class='$config[class]' id='$config[id]' type='$config[type]' name='$config[name]' required>";
        } else if ($config['class'] && $config['name']) {
            echo "<input class='$config[class]' type='$config[type]' name='$config[name]' required>";
        } else if ($config['id'] && $config['name']) {
            echo "<input class='$config[id]' type='$config[type]' name='$config[name]' required>";
        } else if ($config['name']) {
            echo "<input type='text' name='$config[name]' required>";
        }

        echo "</label>";
    }

    public function selectInput(array $config, array $value)
    {
        if ($config['class'] && $config['id'] && $config['name']) {
            echo "<select class='$config[class]' id='$config[id]' name='$config[name]' required>
                  <option value=''>Please choose an option</option>";

            foreach ($value as $item) {
                echo "<option value='$item'>$item</option>";
            }

            echo "</select>";

        } else if ($config['class'] && $config['name']) {
            echo "<select class='$config[class]' name='$config[name]' required>
                  <option value=''>Please choose an option</option>";

            foreach ($value as $item) {
                echo "<option value='$item'>$item</option>";
            }

            echo "</select>";

        } else if ($config['id'] && $config['name']) {
            echo "<select class='$config[id]' name='$config[name]' required>
                  <option value=''>Please choose an option</option>";

            foreach ($value as $item) {
                echo "<option value='$item'>$item</option>";
            }

            echo "</select>";

        } else if ($config['name']) {
            echo "<select name='$config[name]' required>
                  <option value=''>Please choose an option</option>";

            foreach ($value as $item) {
                echo "<option value='$item'>$item</option>";
            }

            echo "</select>";
        }
    }

    public function textAreaInput(array $config, string $text)
    {
        if ($config['class'] && $config['id'] && $config['name']) {
            echo "<textarea class='$config[class]' id='$config[id]' name='$config[name]' placeholder='$text' required></textarea>";
        } else if ($config['class'] && $config['name']) {
            echo "<textarea class='$config[class]' name='$config[name]' placeholder='$text' required></textarea>";
        } else if ($config['id'] && $config['name']) {
            echo "<textarea class='$config[class]' id='$config[id]' name='$config[name]' placeholder='$text' required></textarea>";
        } else if ($config['name']) {
            echo "<textarea name='$config[name]' placeholder='$text' required></textarea>";
        }
    }

    public function radioInput(array $config, string $value)
    {
        if ($config['class'] && $config['id'] && $config['name']) {
            echo "<input class='$config[class]' id='$config[id]' type='radio' name='$config[name]' value='$value'>
                  <label for='$config[label]'>$config[label]</label>";
        } else if ($config['class'] && $config['name']) {
            echo "<input class='$config[class]' type='radio' name='$config[name]' value='$value'>
                  <label for='$config[label]'>$config[label]</label>";
        } else if ($config['id'] && $config['name']) {
            echo "<input class='$config[id]' type='radio' name='$config[name]' value='$value'>
                  <label for='$config[label]'>$config[label]</label>";
        } else if ($config['name']) {
            echo "<input type='radio' name='$config[name]' value='$value'>
                  <label for='$config[label]'>$config[label]</label>";
        }
    }

    public function checkboxInput(array $config)
    {
        if ($config['class'] && $config['id'] && $config['name']) {
            echo "<input class='$config[class]' id='$config[id]' type='checkbox' name='$config[name]'>
                  <label for='$config[label]'>$config[label]</label>";
        } else if ($config['class'] && $config['name']) {
            echo "<input class='$config[class]' type='checkbox' name='$config[name]'>
                  <label for='$config[label]'>$config[label]</label>";
        } else if ($config['id'] && $config['name']) {
            echo "<input class='$config[id]' type='checkbox' name='$config[name]'>
                  <label for='$config[label]'>$config[label]</label>";
        } else if ($config['name']) {
            echo "<input type='checkbox' name='$config[name]'>
                  <label for='$config[label]'>$config[label]</label>";
        }
    }

    public function submitInput(array|string $config, string $value)
    {
        if ($config['class'] && $config['id'] && $config['name']) {
            echo "<input type='submit' name='$config[name]' class='$config[class]' id='$config[id]' value='$value'>";
        } else if ($config['class'] && $config['name']) {
            echo "<input type='submit' name='$config[name]' class='$config[class]' value='$value'>";
        } else if ($config['id'] && $config['name']) {
            echo "<input type='submit' name='$config[name]' id='$config[id]' value='$value'>";
        } else if ($config['name']) {
            echo "<input type='submit' name='$config[name]' value='$value'>";
        }
    }

    public function endingForm()
    {
        echo "</form>";
    }
}
