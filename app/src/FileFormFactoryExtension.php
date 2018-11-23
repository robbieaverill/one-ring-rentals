<?php

namespace Highlight\App;

use SilverStripe\Core\Extension;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;

class FileFormFactoryExtension extends Extension
{
    public function updateFormFields(FieldList $fields, $controller, $formName, $context)
    {
        $fields->insertAfter(
            TextField::create('Description', null, $context['Record']->Description),
            'Title'
        );
    }
}
