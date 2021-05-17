<?php

use PHPUnit\Framework\TestCase;
use App\hmg\MetaGroup;

class MetaGroupTest extends TestCase {

    public function test_metaGroup () : void {

        $metaGroup = new MetaGroup([
            'author' => "John Doe",
            'description' => "Free Web tutorials",
            'keywords' => "HTML, CSS, JavaScript"
        ]);

        $this->assertEquals ('<meta charset="UTF-8"/><meta name="viewport" content="width=device-width, initial-scale=1.0"/><meta name="author" content="John Doe"/><meta name="description" content="Free Web tutorials"/><meta name="keywords" content="HTML, CSS, JavaScript"/>', $metaGroup->Group());

    }

}