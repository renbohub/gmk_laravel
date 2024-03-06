<?php

namespace App\Exports;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCharts;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PhpOffice\PhpSpreadsheet\Chart\Chart;
use PhpOffice\PhpSpreadsheet\Chart\DataSeries;
use PhpOffice\PhpSpreadsheet\Chart\DataSeriesValues;
use PhpOffice\PhpSpreadsheet\Chart\Legend;
use PhpOffice\PhpSpreadsheet\Chart\PlotArea;
use PhpOffice\PhpSpreadsheet\Chart\Title;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Ramsey\Collection\Exception\CollectionException;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ReportExcel implements WithHeadings, FromArray, WithCharts,WithEvents,WithCustomStartCell,WithDrawings,WithStyles
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function startCell(): string
    {
        return 'A23';
    }
    public function registerEvents(): array {
        
        return [
            AfterSheet::class => function(AfterSheet $event) {
                /** @var Sheet $sheet */
                $sheet = $event->sheet;

                // Merge cells and set values
                $sheet->mergeCells('A1:L5');
                $sheet->setCellValue('A1', "CHECK SHEET LEAK TEST MUFFLER");

                $sheet->mergeCells('M1:N1');
                $sheet->setCellValue('M1', "LINE");

                $sheet->mergeCells('O1:R1');
                $sheet->setCellValue('O1', "");

                $sheet->mergeCells('S1:T1');
                $sheet->setCellValue('S1', "DIBUAT");

                $sheet->mergeCells('U1:V1');
                $sheet->setCellValue('U1', "DIKETAHUI");

                //// 

                $sheet->mergeCells('M2:N2');
                $sheet->setCellValue('M2', "SHIFT");

                $sheet->mergeCells('O2:R2');
                $sheet->setCellValue('O2', "");

                $sheet->mergeCells('S2:T4');

                $sheet->mergeCells('U2:V4');
                //


                $sheet->mergeCells('M3:N3');
                $sheet->setCellValue('M3', "BULAN");

                $sheet->mergeCells('O3:R3');
                $sheet->setCellValue('O3', "");

                
                
                //
                $sheet->mergeCells('M4:N4');
                $sheet->setCellValue('M4', "TAHUN");

                $sheet->mergeCells('O4:R4');
                $sheet->setCellValue('O4', "");
                //

                $sheet->mergeCells('M5:N5');
                $sheet->setCellValue('M5', "KAPASITAS");

                $sheet->mergeCells('O5:R5');
                $sheet->setCellValue('O5', "");

                $sheet->mergeCells('S5:T5');
                $sheet->setCellValue('S5', "GROUP HEAD");

                $sheet->mergeCells('U5:V5');
                $sheet->setCellValue('U5', "SECT.HEAD");

               

        
                // Apply styles
                $styleArray = [
                    'alignment' => [
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                        'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
                    ],
                ];

                $cellRange = 'A1:Q5'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->applyFromArray($styleArray);

                // Apply border to all cells in the specified ranges
                $borderStyle = [
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                        ],
                    ],
                ];

                $borderRanges = [
                    'A1:L5', 'M1:V5',
                ];

                foreach ($borderRanges as $range) {
                    $event->sheet->getDelegate()->getStyle($range)->applyFromArray($borderStyle);
                }
            },
        ];

    }
    
    public function drawings()
    {
        $drawing = new Drawing();
        $drawing->setName('Logo');
        $drawing->setDescription('This is my logo');
        $drawing->setPath(public_path('sites/img/ng.jpg'));
        $drawing->setHeight(315);
        $drawing->setCoordinates('A7');

        return $drawing;
    }
    public function headings(): array
    {
        return [
            'No',
            'Time',
            'Plan',
            'Total OK',
            'Total NG',
            'NG 1',
            'NG 2',
            'NG 3',
            'NG 4',
            'NG 5',
            'NG 6',
            'NG 7',
            'NG 8',
            'NG 9',
            'NG 10',
            'NG 11',
            'NG 12',
            'Straight Pass Ration',
            'NG Ratio',
            'Total Leak Point',
            'NG Ratio Day Month'
        ];
    }

      public function styles(Worksheet $sheet)
    {
        // Set wrap text for all columns
        $sheet->getStyle('A23:U23')->getAlignment()->setWrapText(true);
    }
    public function __construct(array $data)
    {
        $this->data = $data;
     
    }

    public function array(): array
    {
        $array = $this->data;
        return $array;
    }

    public function charts()
    {
         $array = $this->data;
        $countArray = count($array);

       
        $label      = [
            new DataSeriesValues('String', 'Worksheet!$S$23', null, 1)
            
            
        ];
        $categories = [new DataSeriesValues('String', 'Worksheet!$B$24:$B$' . $countArray + 24 .'', null, 4)];
        $values     = [ 
            new DataSeriesValues('Number', 'Worksheet!$S$24:S$' . $countArray + 23 .'' , null, 4),
        ];

        $series = new DataSeries(
            DataSeries::TYPE_LINECHART, 
            DataSeries::GROUPING_STANDARD,
            range(0, \count($values) - 1), 
            $label, 
            $categories, 
            $values
        );
        $plot   = new PlotArea(null, [$series]);

        $legend = new Legend(Legend::POSITION_BOTTOM, null, false);
        $chart  = new Chart('chart name', new Title('Graphic NG Ratio'), $legend, $plot);
        $chart->setTopLeftPosition('J6')
              ->setBottomRightPosition('W22');

        return $chart;
    }
}