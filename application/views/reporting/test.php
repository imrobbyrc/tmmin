<?php
    function test(){
        ?>
            <table>
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
                    </tr>
                </thead>
            </table>
        <?php
    }
?>

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
        </tr>
        <tr>
            <td rowspan="2">STD.</td>
            <td>LOW</td>';
            for ($i = 0 ; $i <= 22 ; $i++){
                $table .= '<td>1</td>';
            };
        $table .="</tr>
        <tr>
            <td>HIGH</td>";
            for ($i = 0 ; $i <= 22 ; $i++){
                $table .= '<td>2</td>';
            }
        $table .='</tr>

        <tr>
            <td rowspan="14">Jam</td>
            
        </tr>';
        for ($i =0 ; $i < count($arrayMaster) ; $i++){
            $data = $arrayMaster[$i];
        $table .='<tr>'.
                '<td>'. $data["Clock"] .'</td>
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
                
            </tr>';
        }
$table .= '</tbody>
    </table>
';
$pdf->writeHTML($table, true, false, false, false, '');
$pdf->Output('Laporan');

?>
			 			
