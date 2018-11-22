<?php

use SilverStripe\CMS\Controllers\ContentController;
use SilverStripe\View\Requirements;

class PageController extends ContentController
{
    public function init()
    {
        parent::init();
        Requirements::css("http://fonts.googleapis.com/css?family=Raleway:300,500,900%7COpen+Sans:400,700,400italic");
        Requirements::css("themes/one-ring/css/bootstrap.min.css");
        Requirements::css("themes/one-ring/css/style.css");

        Requirements::javascript("themes/one-ring/js/common/modernizr.js");
        Requirements::javascript("themes/one-ring/js/common/jquery-1.11.1.min.js");
        Requirements::javascript("themes/one-ring/js/common/bootstrap.min.js");
        Requirements::javascript("themes/one-ring/js/common/bootstrap-datepicker.js");
        Requirements::javascript("themes/one-ring/js/common/chosen.min.js");
        Requirements::javascript("themes/one-ring/js/common/bootstrap-checkbox.js");
        Requirements::javascript("themes/one-ring/js/common/nice-scroll.js");
        Requirements::javascript("themes/one-ring/js/common/jquery-browser.js");
        Requirements::javascript("themes/one-ring/js/scripts.js");
    }
}
