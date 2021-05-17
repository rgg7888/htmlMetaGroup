<?php

use PHPUnit\Framework\TestCase;
use App\mt\Meta;

class MetaTest extends TestCase {

    public function test_meta () : void {

        $meta = new Meta;

        $this->assertEquals("<meta charset=\"UTF-8\"/>", $meta->charset());

        $this->assertEquals('<meta name="viewport" content="width=device-width, initial-scale=1.0"/>', $meta->viewport());

        $this->assertEquals('<meta name="description" content="Free Web tutorials"/>', $meta->description("Free Web tutorials"));

        $this->assertEquals('<meta name="keywords" content="HTML, CSS, JavaScript"/>', $meta->keywords("HTML, CSS, JavaScript"));

        $this->assertEquals('<meta name="author" content="John Doe"/>', $meta->author("John Doe"));

    }

}