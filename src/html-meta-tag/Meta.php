<?php

namespace App\mt;

use App\ha\HtmlArmor;

class Meta extends HtmlArmor {

    public function charset() {
        $this->setType("auto");
        $this->setTag("meta");
        $this->setAtributos([
            'charset' => "UTF-8"
        ]);
        return $this->build();
    }

    public function viewport() {
        $this->setType("auto");
        $this->setTag("meta");
        $this->setAtributos([
            'name' => "viewport",
            "content" => "width=device-width, initial-scale=1.0"
        ]);
        return $this->build();
    }

    public function description(string $descripcion) {
        $this->setType("auto");
        $this->setTag("meta");
        $this->setAtributos([
            'name' => "description",
            "content" => $descripcion
        ]);
        return $this->build();
    }

    public function keywords(string $keywords) {
        $this->setType("auto");
        $this->setTag("meta");
        $this->setAtributos([
            'name' => "keywords",
            "content" => $keywords
        ]);
        return $this->build();
    }

    public function author(string $author) {
        $this->setType("auto");
        $this->setTag("meta");
        $this->setAtributos([
            'name' => "author",
            "content" => $author
        ]);
        return $this->build();
    }

    public function edge() {
        $this->setType("auto");
        $this->setTag("meta");
        $this->setAtributos([
            'http-equiv' => "X-UA-Compatible",
            "content" => "IE=edge"
        ]);
        return $this->build();
    }

}