<?php

declare(strict_types=1);

namespace Alura\Mvc\Entity;

class Video{

    public readonly int $id;
    public readonly string $urlv;
    public ?string $filePath=null;

    public function __construct( public readonly string $url, public readonly string $title )
    {
        $this->setUrl($url);
    }

    private function setUrl(string $url){
        if(filter_var($url,FILTER_VALIDATE_URL)===false){
            throw new \InvalidArgumentException();
        };
        
        $this->urlv=$url;
    }
    public function setId(int $id):void{
        $this->id=$id;
    }

    public function setFilePath(string $filePath):void{
        $this->filePath;
    }

    public function getFilePath() : ?string{
        return $this->filePath;
    }
}