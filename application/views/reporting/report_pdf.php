<?php

$pageLayout = array(800, 900);

$pdf = new Pdf('L', 'pt', $pageLayout, true, 'UTF-8', false);

$pdf->SetTitle('Contohsdsdsd');
$pdf->SetTopMargin(20);
$pdf->setFooterMargin(20);
$pdf->SetAutoPageBreak(true);
$pdf->SetAuthor('Author');
$pdf->SetDisplayMode('real', 'default');
$pdf->AddPage();
$pdf->Write(0, 'Example of HTML tables', '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('helvetica', '', 8);

$table = '
    <table border="1" cellpadding="2" cellspacing="2" nobr="true">
        <thead>
            <tr>
                <th colspan="2">item</th>
                <th>Fce Combustion</th>
                <th>Fce Outlet Sand</th>
                <th>Fce Inlet Sand</th>
                <th>Top Temp. Fce</th>
                <th>Pressure</th>
                <th>Damper Open</th>
                <th>Damper Open</th>
                <th>Pressure</th>
                <th>Damper Open</th>
                <th>Pressure</th>
                <th>Damper Open</th>
                <th>Speed Screw Feeder</th>
                <th>Pressure</th>
                <th>Damper Open</th>
                <th>Pressure</th>
                <th>Damper Open</th>
                <th>Nozzle No. 1</th>
                <th>Nozzle No. 2</th>
                <th>Nozzle No. 3</th>
                <th>Temp. No. 1</th>
                <th>Temp. No. 2</th>
                <th>Damper Open</th>
                <th>DC Inlet Temp. (T10b)</th>
                <th>Conveying</th>
                <th>ACCUM</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="2">Kode Sensor</td>
                <td>(T1/S1)</td>
                <td>(T2/S2)</td> 
                <td>(T3/S3)</td>
                <td>(T4/S4)</td>
                <td></td>
                <td>MOT 2</td>
                <td>MOT 3</td>
                <td>PT 4</td>
                <td>MOT 4</td>
                <td>PT 6</td>
                <td>MOT 06</td>
                <td>INV 1</td>
                <td>PT 5</td>
                <td>MOT 5</td>
                <td>PT 7</td>
                <td>MOT 07</td>
                <td>Tc2</td> 
                <td>Tc3</td> 
                <td>Tc3</td>
                <td>Tc5</td>
                <td>Tc6</td>
                <td>MOT 08</td>
                <td>T10b</td>
                <td></td>
                <td></td>	
            </tr>
            <tr>
                <td colspan="2">UNIT</td>
                <td>°C</td>
                <td>°C</td>
                <td>°C</td>
                <td>°C</td>
                <td>mmAq</td>
                <td>%</td>
                <td>%</td>
                <td>mmAq</td>
                <td>%</td>
                <td>mmAq</td>
                <td>%</td>
                <td>%</td>
                <td>mmAq</td>
                <td>%</td>
                <td>mmAq</td>
                <td>%</td>
                <td>°C</td>
                <td>°C</td>
                <td>°C</td>
                <td>°C</td>
                <td>°C</td>
                <td>%</td>
                <td>mmAq</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td rowspan="2">STD.</td>
                <td>LOW</td>';
                for ($i = 0 ; $i <= 22 ; $i++){
    $table.= '<td>1</td>';
                };
    $table.='<td></td>
            <td></td>
            </tr>
            <tr>
                <td>HIGH</td>';
                for ($i = 0 ; $i <= 22 ; $i++){
    $table.='<td>2</td>';
                }
    $table.='<td></td>
            <td></td>
            </tr>
            ';
            for ($i = 0 ; $i < count($arrayMaster) ; $i++){
                $data = $arrayMaster[$i];
    $table.='<tr>';
                if($i==0){
                    $table.=  '<td rowspan="'.count($arrayMaster).'">Jam</td>';
                }
                
                $table.=  '<td>'. $data["Clock"] .'</td>
                <td>'. $data["Fce Combustion"] .'</td>
                <td>'. $data["Fce Outlet Sand"] .'</td>
                <td>'. $data["Fce Inlet Sand"] .'</td>
                <td>'. $data["Top Temp. Fce"] .'</td>
                <td>'. $data["PressureBlank"] .'</td>
                <td>'. $data["Damper Open"] .'</td>
                <td>'. $data["Damper Open"] .'</td>
                <td>'. $data["Pressure"] .'</td>
                <td>'. $data["Damper Open"] .'</td>
                <td>'. $data["Pressure"] .'</td>
                <td>'. $data["Damper Open"] .'</td>
                <td>'. $data["Speed Screw Feeder"] .'</td>
                <td>'. $data["Pressure"] .'</td>
                <td>'. $data["Damper Open"] .'</td>
                <td>'. $data["Pressure"] .'</td>
                <td>'. $data["Damper Open"] .'</td>
                <td>'. $data["Nozzle No. 1"] .'</td>
                <td>'. $data["Nozzle No. 2"] .'</td>
                <td>'. $data["Nozzle No. 3"] .'</td>
                <td>'. $data["Temp. No. 1"] .'</td>
                <td>'. $data["Temp. No. 2"] .'</td>
                <td>'. $data["Damper Open"] .'</td>
                <td>'. $data["DC Inlet Temp. (T10b)"] .'</td>
                <td></td>
                <td></td>     
            </tr>';
            }
$table.='</tbody>
    </table>';
$pdf->writeHTML($table, true, false, false, false, '');


//
$table  ='<table border="1" cellpadding="2" cellspacing="2" nobr="true">
<thead>
    <tr>
        <th rowspan="2">No.</th>
        <th colspan="2">Jam</th>
        <th rowspan="2">Durasi (menit)</th>
        <th rowspan="2">Alarm Message</th>
        <th rowspan="2">Masalah</th>
        <th rowspan="2">Penanggulangan</th>
        <th rowspan="2">PIC</th>
        <th rowspan="2">Hasil</th>
    </tr>
    <tr>
        <th>Start</th>
        <th>Finish</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="8"></td>
        <td></td>
    </tr>
</tbody>
</table>';

$pdf->writeHTML($table, true, false, false, false, '');

$pdf->Output('Laporan');

?>
			 			