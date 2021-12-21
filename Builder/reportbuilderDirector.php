<?php
namespace Builder;
class ReportBuilderDirector
{
    public function createReport(ReportBuilder $reportBuilder):Report
    {
        $reportBuilder->setTitle();
        $reportBuilder->setBody();
        return $reportBuilder->build();
    }
}