<?php


namespace App\Elements;


class BaseElement extends \DNADesign\Elemental\Models\BaseElement
{
    private static $db = [];

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
