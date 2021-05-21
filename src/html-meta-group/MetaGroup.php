<?php

namespace App\hmg;

use App\mt\Meta;

class MetaGroup extends Meta {

    private string $author;
    private string $description;
    private string $keywords;

    public function __construct(array $values) {
        $this->author = $values['author'];
        $this->description = $values['description'];
        $this->keywords = $values['keywords'];
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getKeywords() {
        return $this->keywords;
    }

    public function Group () {
        $metaTags = [
            $this->charset(),
            $this->viewport(),
            $this->author($this->getAuthor()),
            $this->description($this->getDescription()),
            $this->keywords($this->getKeywords()),
            $this->edge()
        ];
        return implode("",$metaTags);
    }

}