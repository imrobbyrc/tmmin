<?php
echo "reporting";
?>

<html>
<table border=1>
    <thead>
        <th colspan=2>item</th>
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
            <td>LOW</td>
            <?php for ($i = 0 ; $i <= 22 ; $i++){ ?>
             <td>1</td>
            <?php } ?>
        </tr>
        <tr>
            <td>HIGH</td>
            <?php for ($i = 0 ; $i <= 22 ; $i++){ ?>
             <td>2</td>
            <?php } ?>
        </tr>

        <tr>
            <td rowspan="14">JAm</td>
            
        </tr>
        <?php for ($i =0 ; $i < count($arrayMaster) ; $i++){ ?>
            <tr>
                <?php 
               // print_r($arrayMaster[$i]);
                 $data = $arrayMaster[$i];

                ?>
                <td><?=$data['Clock'] ?></td>
                <td><?= $data['Fce Combustion'] ?> </td>
                <td><?= $data['Fce Outlet Sand'] ?> </td>
                <td><?= $data['Fce Inlet Sand'] ?> </td>
                <td><?= $data['Top Temp. Fce'] ?> </td>
                <td><?= $data['PressureBlank'] ?> </td>
                <td><?= $data['Damper Open'] ?> </td>
                <td><?= $data['Damper Open'] ?> </td>
                <td><?= $data['Pressure'] ?> </td>
                <td><?= $data['Damper Open'] ?> </td>
                <td><?= $data['Pressure'] ?> </td>
                <td><?= $data['Damper Open'] ?> </td>
                <td><?= $data['Speed Screw Feeder'] ?> </td>
                <td><?= $data['Pressure'] ?> </td>
                <td><?= $data['Damper Open'] ?> </td>
                <td><?= $data['Pressure'] ?> </td>
                <td><?= $data['Damper Open'] ?> </td>
                <td><?= $data['Nozzle No. 1'] ?> </td>
                <td><?= $data['Nozzle No. 2'] ?> </td>
                <td><?= $data['Nozzle No. 3'] ?> </td>
                <td><?= $data['Temp. No. 1'] ?> </td>
                <td><?= $data['Temp. No. 2'] ?> </td>
                <td><?= $data['Damper Open'] ?> </td>
                <td><?= $data['DC Inlet Temp. (T10b)'] ?> </td>
                
            </tr>
            
        <?php } ?>
        
        
    </tbody>
</table>
</html>
		 				 			
