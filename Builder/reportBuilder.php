<?php 
namespace Builder;

interface ReportBuilder
{
    public function __construct(string $authorName);
    public function setTitle():void;
    public function setBody():void;
    public function build():Report;
}