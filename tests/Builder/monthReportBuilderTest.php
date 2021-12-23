<?php
namespace Test\Builder;

use PHPUnit\Framework\TestCase;
use Builder;

class MonthReportBuilderTest extends TestCase
{
    public function testBuild()
    {
        $monthreportBuilder = new MonthReportBuilder("Владислав");
        $reportBuilderDirector = new ReportBuilderDirector();
        $monthReport = $reportBuilderDirector->createReport( $monthreportBuilder);
        $this->assertInstensOf(Report::class,$monthReport);

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
        $this->assertEquels($body,$monthReport->getBody());
    }
}