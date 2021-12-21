<?php
namespace Builder;
class Report
{
    private string $title;
    private string $date;
    private string $authorName;
    private string $body;

    public function construct(string $authorName)
    {
        $this->authorName = $authorName;
        $this->date = new DateTime();
    }

    public function setTitle(string $title):void
    {
        $this->title = $title;
    }

    public function setAuthorName(string $authorName):void
    {
        $this->authorName = $authorName;
    }

    public function setBody(string $body):void
    {
        $this->body = $body;
    }
    public function getTitle():string
    {
        return $this->title;
    }

    
}