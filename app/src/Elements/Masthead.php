<?php


namespace App\Elements;

use SilverStripe\ElementalBannerBlock\Block\BannerBlock;

class Masthead extends BannerBlock
{
    private static $db = [];

    private static $defaults = [
        'ShowTitle' => true,
    ];

    private static $description = 'Masthead content for the top of the page';

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        return $fields;
    }

    public function getType()
    {
        return 'Masthead';
    }

    protected function provideBlockSchema()
    {
        $blockSchema = parent::provideBlockSchema();

        if ($this->dbObject('Content')) {
            $blockSchema['content'] = $this->dbObject('Content')->Summary();
        } else {
            $blockSchema['content'] = $this->getDescription();
        }
        return $blockSchema;
    }
}
