<?php

namespace Highlight\App;

use SilverStripe\ORM\DataExtension;

class FileExtension extends DataExtension
{
    private static $db = [
        'Description' => 'Varchar',
    ];
}
