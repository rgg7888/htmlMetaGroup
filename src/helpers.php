<?php

if(!function_exists('group')) {
    function group (array $metaContent) {
        $metaGroup = new MetaGroup($metaContent);
        return $metaGroup->Group();
    }
}