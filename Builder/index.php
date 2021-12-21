<?php

use Builder;

class mailn{

   public function runBuilder(){
       
    $dayReportBuilder = new DayReportBuilder("Влад");
    $monthreportBuilder = new MonthReportBuilder("Владислав");

    $reportBuilderDirector = new ReportBuilderDirector();

    $dayReport = $reportBuilderDirector->createReport( $dayReportBuilder);
    $monthReport = $reportBuilderDirector->createReport( $monthreportBuilder);

    var_dump($monthReport);
    var_dump($dayReport);
   }

   

}