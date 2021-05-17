<?php

if(!function_exists('group')) {
    function group (array $metaContent) {
        $metaGroup = new App\hmg\MetaGroup($metaContent);
        return $metaGroup->Group();
    }
}