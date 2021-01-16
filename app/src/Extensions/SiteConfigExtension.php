<?php


namespace App\Extensions;

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataExtension;

class SiteConfigExtension extends DataExtension
{
    private static $db = [
        'Phone' => 'Varchar',
        'Email' => 'Varchar',
        'Address' => 'Varchar',
        'PostalAddress' => 'Varchar',
        'GoogleAnalyticsCode' => 'Varchar',
        'Facebook' => 'Varchar',
        'Instagram' => 'Varchar',
        'YouTube' => 'Varchar',
    ];

    public function updateCMSFields(FieldList $fields)
    {
        $fields->removeByName('Tagline');

        $fields->addFieldsToTab('Root.Main', [
            TextField::create('Phone', 'Contact Phone'),
            TextField::create('Email', 'Contact Email'),
            TextareaField::create('Address', 'Physical Address'),
            TextareaField::create('PostalAddress', 'Postal Address'),
            TextField::create('Facebook', 'Facebook URL'),
            TextField::create('Instagram', 'Instagram URL'),
            TextField::create('YouTube', 'YouTube URL'),
            TextareaField::create('GoogleAnalyticsCode', 'Google Analytics Code')
        ]);
    }
}
