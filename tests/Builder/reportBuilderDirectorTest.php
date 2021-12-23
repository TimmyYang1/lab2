<?php
namespace Test\Builder;

use PHPUnit\Framework\TestCase;
use Builder;

class ReportBuilderDirectorTest extends TestCase
{
    public function testCreateReport()
    {
            
        $dayReportBuilder = new DayReportBuilder("Влад");
        $monthreportBuilder = new MonthReportBuilder("Владислав");

        $reportBuilderDirector = new ReportBuilderDirector();

        $dayReport = $reportBuilderDirector->createReport( $dayReportBuilder);
        $monthReport = $reportBuilderDirector->createReport( $monthreportBuilder);

        $this->assertInstenceOf(Report::class, $dayReport);
        $this->assertInstenceOf(Report::class,$monthReport);
        $bodyMonthReport = <<<HTML
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
        $bodyDayReport = <<<HTML
            <table>
                <caption>{$this->report->getTitle()}</caption>
                <tr>
                    <th>№ п/п</th>
                    <th>Наименование товара</th>
                    <th>Ед. изм.</th>
                    <th>Количество</th>
                    <th>Цена за ед. изм., руб.</th>
                    <th>Стоимость, руб.</th>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Томаты свежие</td><td>кг</td><td>15,20</td><td>69,00</td><td>1048,80</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Огурцы свежие</td><td>кг</td><td>2,50</td><td>48,00</td><td>120,00</td>
                </tr>
                <tr>
                    <td colspan="5" style="text-align:right">ИТОГО:</td><td>1168,80</td>
                </tr>
            </table>
        HTML;
        $this->assertEquels($bodyMonthReport,$monthReport->getBody());
        $this->assertEquels($bodyDayReport,$dayReport->getBody());
    }
}