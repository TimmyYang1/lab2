<?php
namespace Builder;

class MonthReportBuilder implements reportBuilder
{
    private Report $report;
    public function __construct(string $authorName)
    {
        $this->report = new Report($authorName);
    }    
    public function setTitle():void
    {
        $this->report->setTitle("Месячный отчет");
    }


    public function setBody():void
    {
        $body = <<<HTML
            <table>
                <colgroup>
                    <col span="2" style="background:Khaki">
                    <col style="background-color:LightCyan">
                </colgroup>
                <tr>
                    <th>№ п/п</th>
                    <th>Наименование</th>
                    <th>Цена, руб.</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Карандаш цветной</td>
                    <td>20,00</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Линейка 20 см</td>
                    <td>30,00</td>
                </tr>
            </table>
        HTML;
        $this->report->setBody($body);
    }
    public function build():Report
    {
        return $this->report;
    }
}
