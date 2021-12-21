<?php
namespace Builder;
class DayReportBuilder implements reportBuilder
{
    private Report $report;

    public function __construct(string  $authorName)
    {
        $this->report = new Report($authorName);
    }

    public function setTitle():void
    {
        $this->report->setTitle("Дневной отчет");
    }
    public function setBody():void
    {
        $body = <<<HTML
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
        $this->report->setBody($body);
    }
    public function build():Report
    {
        return $this->retort;
    }
}