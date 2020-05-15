<html>

    <form method="POST" action="<?php echo base_url('report/report-daily') ?>">
        <div class="form-group">
            <label>Default Input Text</label>
            <input type="text" class="form-control" name="shift">
        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="text" class="form-control datemask" placeholder="YYYY-MM-DD" name="datetime">
        </div>
        <button class="btn btn-primary mr-1" type="submit">Submit</button>
    </form>
    
</html>


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
                <td>LOW</td>
                <td>1</td>
                <td></td>
            <td></td>
            </tr>
            <tr>
                <td>HIGH</td>
                <td>2</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Jam</td>  
            </tr>
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
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
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
                <td colspan="2" rowspan="2">Konsumsi LNG (m3)</td>
                <td colspan="2">Start</td>
                <td colspan="2">Finish</td>
                <td colspan="2">Total</td>
                <td colspan="2" rowspan="2">Konsumsi Air (M3)</td>
                <td colspan="2">Start</td>
                <td colspan="2">Finish</td>
                <td colspan="2">Total</td>
                <td colspan="4">Start Prod. :</td>
                <td colspan="7">formatnya (hh : mm : ss)</td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td colspan="2"></td>
                <td colspan="2"></td>
                <td colspan="2"></td>
                <td colspan="2"></td>
                <td colspan="2"></td>
                <td colspan="4">Finish Prod. :</td>
                <td colspan="7">formatnya (hh : mm : ss)</td>
            </tr>
            
    </tbody>
</table>
<table border="1" cellpadding="2" cellspacing="2" nobr="true">
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
</table>																			
                        


																										
																										
																										

