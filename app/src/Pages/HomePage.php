<?php


namespace App\Pages;

use Page;

class HomePage extends Page
{
    private static $db = [];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        return $fields;
    }
}
