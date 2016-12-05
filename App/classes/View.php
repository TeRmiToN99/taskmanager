<?php
namespace App;

class View
{

    public function display($template, array $data)
    {
        foreach ($data as $key => $value) {
            $$key = $value;
        }
        include __DIR__ . '/../templates/' .$template;
    }
}