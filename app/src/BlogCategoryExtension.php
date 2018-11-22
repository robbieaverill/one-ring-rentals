<?php

namespace Highlight\App;




use SilverStripe\ORM\DataList;
use SilverStripe\Control\Controller;
use SilverStripe\ORM\DataExtension;



class BlogCategoryExtension extends DataExtension
{
    /**
     * @param DataList $posts
     *
     * @return DataList
     */
    public function updateGetBlogPosts(DataList &$posts) {
        $controller = Controller::curr();

        if ($controller) {
            $request = $controller->getRequest();

            if ($request) {
                $filter = $request->getVar("featured");

                if (!empty($filter)) {
                    $posts = $posts->filter(array("IsFeatured" => true));
                }
            }
        }
    }


}