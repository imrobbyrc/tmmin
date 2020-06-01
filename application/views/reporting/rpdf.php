<style> 
.table{width:100%;max-width:100%;margin-bottom:1rem;background-color:transparent}
.table td,.table th{padding:.75rem;vertical-align:top;border-top:1px solid #dee2e6}
.table thead th{vertical-align:bottom;border-bottom:2px solid #dee2e6}
.table tbody+tbody{border-top:2px solid #dee2e6}
.table .table{background-color:#fff} 
/* @page { margin: 0px; }
body { margin: 0px; } */
.text-center{
    text-align:center !important;
}
.text-right{
    text-align:right !important;
}
.text-left{
    text-align:left !important;
}
input{
    width:100%;
    border:none;  
    padding-left:.25rem;
}
.form-check > input{
    width:auto!important;
}
.mt-custom-1{
    margin-top:4.3rem!important;
}
.mt-custom-2{
    margin-top:4.2rem!important;
}
.mt-custom-3{
    margin-top:4rem!important;
}
.mt-custom-4{
    margin-top:4rem!important;
}
.mt-custom-5{
    margin-top:3.2rem!important;
}
.mt-custom-6{
    margin-top:4rem!important;
}
.mt-custom-7{
    margin-top:4rem!important;
}
.mt-custom-8{
    margin-top:3.2rem!important;
}
.mt-custom-9{
    margin-top:4rem!important;
}
.mt-custom-10{
    margin-top:3.2rem!important;
}
.mt-custom-11{
    margin-top:4rem!important;
}
.mt-custom-12{
    margin-top:3.2rem!important;
}
.mt-custom-13{
    margin-top:4rem!important;
}
.mt-custom-14{
    margin-top:3.2rem!important;
}
.mt-custom-15{
    margin-top:4rem!important;
}
.mt-custom-16{
    margin-top:3.8rem!important;
}
.mt-custom-17{
    margin-top:3.8rem!important;
}
.mt-custom-18{
    margin-top:3.8rem!important;
}
.mt-custom-19{
    margin-top:3.8rem!important;
}
.mt-custom-20{
    margin-top:3.8rem!important;
}
.mt-custom-21{
    margin-top:4rem!important;
}
.mt-custom-22{
    margin-top:3.3rem!important;
}
.mt-custom-23{
    margin-top:3.3rem!important;
}
.mt-custom-24{
    margin-top:2.8rem!important;
} 
h1 { margin-bottom:.5rem!important;font-family: Calibri; font-size: 18px; font-style: normal; font-variant: normal; line-height: 15.4px; } 
h3 { margin-bottom:.5rem!important;font-family: Calibri, Candara, Segoe, "Segoe UI", Optima, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 700; line-height: 15.4px; } 
p {  margin-bottom:.5rem!important;font-family: Calibri, Candara, Segoe, "Segoe UI", Optima, Arial, sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; line-height: 15px; } 
.b-white{
    border:none!important
}
p{
    margin-bottom:0px!important;
}
.rotate {
    white-space:nowrap;
    margin-top:0rem;
    -webkit-transform: rotate(-90deg); 
    -moz-transform: rotate(-90deg); 
    -ms-transform: rotate(-90deg); 
    -o-transform: rotate(-90deg); 
    transform: rotate(-90deg); 
}
p {
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px; 
    margin-top: 0;
}

.waffle,
.grid-fixed-table { 
    table-layout: fixed;
    border-collapse: separate;
    border-style: none;
    border-spacing: 0;
    width: 100%;
    cursor: default
} 
.grid-container { 
    overflow: hidden;
    position: relative;
    z-index: 0
}
.waffle td, .waffle th{
    border: 1px SOLID #000000;
    color: #000000;
    font-size: 11px;
    padding: 0px 3px 0px 3px!important; 
}
.vc {
    vertical-align: middle !important;
}
#header { 
    position: fixed; left: 0px; top: -92.75px; right: 0px; 
    height: 150px;
} 
@page { margin-top: 150px; }
</style>   
        <div id="header"> 
                <table class="waffle no-grid table" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <?php for ($i=0; $i < 27; $i++):?>
                                <td style="border-color:#fff!important;border-bottom:#000!important"></td>
                            <?php endfor;?>
                        </tr>
                        <tr>
                            <td colspan="4" rowspan="3" class="text-center vc">
                                <p><strong><h3>PT. TMMIN</h3></strong></p>
                                <p><h3>Casting Division</h3></p>
                                <p><h3>Produksi II</h3></p>
                            </td>
                            <td colspan="17" rowspan="3" class="text-center vc">
                                <p><strong><h1>Laporan Produksi dan Check Temperature Furnace</h1></strong></p>
                                <p><h1><strong>CKS - AZC300 - RC015</strong> (REPORT AUTO GENERATE)</h1></p>
                            </td>
                            <td colspan="2">
                                <p>Hari / Tanggal</p>
                            </td>
                            <td colspan="4">
                                <p><?= date('D / d-m-Y ',strtotime($datetime))?></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p>PIC</p>
                            </td>
                            <td colspan="4">
                                <p>Shift</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="p-0">
                                <p><?= @$pic_names?>&nbsp;</p>
                            </td>
                            <td colspan="2"><p><?= strtoupper($color)?>&nbsp;</p></td>
                            <td colspan="2"><p><?= strtoupper($shift)?>&nbsp;</p></td>
                        </tr>
                    </thead>
                <tbody>
                </tbody>
                </table>
        </div>
        <div class="ritz grid-container" dir="ltr">
                <table class="waffle no-grid table" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <?php for ($i=0; $i < 27; $i++):?>
                                <td style="border-color:#fff!important;border-bottom:#000!important"></td>
                            <?php endfor;?>
                        </tr>
                    </thead>
                <tbody>
                    <tr>
                        <td colspan="2" rowspan="3" class="text-center vc">
                            <p><strong>ITEM</strong></p>
                            <p><strong>→</strong></p>
                        </td>
                        <td colspan="12" class="text-center">
                            <p><strong>Furnace</strong></p>
                        </td>
                        <td colspan="7" class="text-center"><p><strong>Sand Cooler</strong></p></td>
                        <td colspan="3" class="text-center"><p><strong>Gas Cooler</strong></p></td> 
                        <td rowspan="2" class="text-center"><p><strong>Dust Collector</strong></p></td> 
                        <td colspan="2" rowspan="2" class="text-center"><p><strong>Pneumatic Conveyor</strong></p></td> 
                    </tr>
                    <tr>
                        <td colspan="4" class="text-center vc"><p><strong>TEMPERATURE</strong></p></td>
                        <td colspan="3" class="text-center vc"><p><strong><p>Blower Combustion</p><p>Burner</p></strong></p></td>
                        <td colspan="2" class="text-center vc"><p><strong><p>Blower F'ce</p><p>Bubling</p></strong></p></td>
                        <td colspan="2" class="text-center vc"><p><strong><p>Auto Damper</p><p>IDC 004</p></strong></p></td>
                        <td rowspan="2" class="text-center vc"><p class="rotate" ><strong>Speed Screw Feeder</strong></p></td>
                        <td colspan="2" class="text-center vc"><p><strong><p>Sand Cooler</p><p>Bubling</p></strong></p></td>
                        <td colspan="2" class="text-center vc"><p><strong><p>Auto Damper</p><p>IDC 004</p></strong></p></td>
                        <td colspan="3" class="text-center vc"><p><strong>Spray Temperature</strong></p></td>
                        <td colspan="2" class="text-center vc"><p><strong>Spray Temp.</strong></p></td>
                        <td class="text-center"><p><strong>Fresh Air</strong></p></td>
                    </tr>
                    <tr>
                        <?php $cls=1; foreach($fces as $fce):?>
                            <td style="height:95px"><p class="rotate mt-custom-<?=$cls?>"><strong><?=$fce?></strong></p></td>
                        <?php $cls++;endforeach;?>
                    </tr>
                    <tr class="text-center">
                        <td colspan="2"><p><strong>Kode Sensor</strong></p></td>
                        <?php foreach($codes as $code):?>
                            <td><p><strong><?=$code?></strong></p></td>
                        <?php endforeach;?>
                    </tr>
                    <tr class="text-center">
                        <td colspan="2"><p><strong>UNIT</strong></p></td>
                        <?php foreach($units as $unit):?>
                            <td><p><?=$unit?></p></td>
                        <?php endforeach;?>
                    </tr>
                    <tr>
                        <td rowspan="2" class="text-center vc"><p><strong>STD.</strong></p></td>
                        <td class="text-center"><p><strong>LOW</strong></p></td>
                        <?php foreach($standardValue as $row):?>
                        <td class="text-right"><p><?= $row['lowval']?>&nbsp;</p></td>
                        <?php endforeach;?>
                        <!-- <td class="p-0"><p><?= @$stdlow[0]?>&nbsp;</p></td>
                        <td class="p-0"><p><?= @$stdlow[1]?>&nbsp;</p></td> -->
                        <td class="p-0 text-center"><p>-</p></td>
                        <td class="p-0 text-center"><p>-</p></td>
                    </tr>
                    <tr>
                        <td class="text-center"><p><strong>HIGH</strong></p></td>
                        <?php foreach($standardValue as $row):?>
                        <td class="text-right"><p><?= $row['highval']?>&nbsp;</p></td>
                        <?php endforeach;?>
                        <!-- <td class="p-0"><p><?= @$stdhigh[0]?>&nbsp;</p></td>
                        <td class="p-0"><p><?= @$stdhigh[1]?>&nbsp;</p></td> -->
                        <td class="p-0 text-center"><p>-</p></td>
                        <td class="p-0 text-center"><p>-</p></td>
                    </tr>
                    <?php for ($i = 0 ; $i < count($arrayMaster) ; $i++):?>
                    <tr>
                        <?php $data = $arrayMaster[$i]; ?>
                        <?php if($i==0):?>
                        <td rowspan="<?=count($arrayMaster)?>" style="padding-top:6rem;"><p class="rotate" style="margin-top:5rem"><strong>JAM</strong></p></td>
                        <?php endif; ?>
                        <td class="text-right"><?= $data["Clock"]; ?></td>
                        <td class="text-right"><?= $data["T1_S1"]; ?></td>
                        <td class="text-right"><?= $data["T2_S2"]; ?></td>
                        <td class="text-right"><?= $data["T3_S3"]; ?></td>
                        <td class="text-right"><?= $data["T4_S4"]; ?></td>
                        <td class="text-right"><?= $data["Self"]; ?></td>
                        <td class="text-right"><?= $data["MOT2"]; ?></td>
                        <td class="text-right"><?= $data["MOT3"]; ?></td>
                        <td class="text-right"><?= $data["PT4"]; ?></td>
                        <td class="text-right"><?= $data["MOT4"]; ?></td>
                        <td class="text-right"><?= $data["PT6"]; ?></td>
                        <td class="text-right"><?= $data["MOT6"]; ?></td>
                        <td class="text-right"><?= $data["INV1"]; ?></td>
                        <td class="text-right"><?= $data["PT5"]; ?></td>
                        <td class="text-right"><?= $data["MOT5"]; ?></td>
                        <td class="text-right"><?= $data["PT7"]; ?></td>
                        <td class="text-right"><?= $data["MOT7"]; ?></td>
                        <td class="text-right"><?= $data["Tc2"]; ?></td>
                        <td class="text-right"><?= $data["Tc3"]; ?></td>
                        <td class="text-right"><?= $data["Tc4"]; ?></td>
                        <td class="text-right"><?= $data["Tc5"]; ?></td>
                        <td class="text-right"><?= $data["Tc6"]; ?></td>
                        <td class="text-right"><?= $data["MOT8"]; ?></td>
                        <td class="text-right"><?= $data["T10b"]; ?></td>
                        <td class="p-0">
                            <p><?= @$conveying[$i]?>&nbsp;</p>
                        </td>
                        <td class="p-0">
                            <p><?= @$accum[$i]?>&nbsp;</p>
                        </td>
                    </tr>
                    <?php endfor;?>
                       
                    <tr class="text-center">
                        <td colspan="2" rowspan="2"><p><strong>Konsumsi LNG (m3)</strong></p></td>
                            <td colspan="2"><p><strong>Start</strong></p></td>
                            <td colspan="2"><p><strong>Finish</strong></p></td>
                            <td colspan="2"><p><strong>Total</strong></p></td>
                            <td colspan="2" rowspan="2"><p><strong>Konsumsi Air (m3)</strong></p></td>
                            <td colspan="2"><p><strong>Start</strong></p></td>
                            <td colspan="2"><p><strong>Finish</strong></p></td>
                            <td colspan="2"><p><strong>Total</strong></p></td>
                            <td colspan="4"><p><strong>Start Prod. : </strong></p></td>
                            <td colspan="7" class="p-0"><p><?= @$time_prod[0]?>&nbsp;</p></td>
                    </tr>
                    <tr class="text-center"> 
                            <td colspan="2" class="p-0"><p><?= @$lng[0]?>&nbsp;</p></td>
                            <td colspan="2" class="p-0"><p><?= @$lng[1]?>&nbsp;</p></td>
                            <td colspan="2" class="p-0"><p><?= @$lng[2]?>&nbsp;</p></td>
                            <td colspan="2" class="p-0"><p><?= @$lng[3]?>&nbsp;</p></td>
                            <td colspan="2" class="p-0"><p><?= @$lng[4]?>&nbsp;</p></td>
                            <td colspan="2" class="p-0"><p><?= @$lng[5]?>&nbsp;</p></td>
                            <td colspan="4"><p><strong>Finish Prod. : </strong></p></td>
                            <td colspan="7" class="p-0"><p><?= @$time_prod[1]?>&nbsp;</p></td>
                    </tr>
                </tbody>
                </table>

                <!-- 2nd Table -->
                <table class="waffle no-grid table" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <?php for ($i=0; $i < 27; $i++):?>
                                <td style="border-color:#fff!important;border-bottom:#000!important"></td>
                            <?php endfor;?>
                        </tr>
                        <tr class="text-center">
                            <td rowspan="2" class="vc"><p><strong>No.</strong></p></td>
                            <td colspan="4"><p><strong>Jam</strong></p></td> 
                            <td rowspan="2" class="vc" colspan="2"><p><strong>Durasi</strong></p></td>
                            <td colspan="5" rowspan="2" class="vc"><p><strong>Alarm Message</strong></p></td>
                            <td colspan="6" rowspan="2" class="vc"><p><strong>Masalah</strong></p></td>
                            <td colspan="5" rowspan="2" class="vc"><p><strong>Penanggulangan</strong></p></td>
                            <td colspan="2" rowspan="2" class="vc"><p><strong>PIC</strong></p></td>
                            <td colspan="2" rowspan="2" class="vc"><p><strong>Hasil</strong></p></td>
                        </tr>
                        <tr class="text-center">
                            <td colspan="2"><p><strong>Start</strong></p></td>
                            <td colspan="2"><p><strong>End</strong></p></td>
                        </tr>
                    </thead>
                    <tbody> 
                        <?php $i = 0;
                        foreach($alarm as $row):
                            
                        ?>
                        <tr>
                            <td><?=$i+1;?></td>
                            <td colspan="2"><p><?=substr($row->starttime,11,8);?></p></td>
                            <td colspan="2"><p><?=substr($row->endtime,11,8);?></p></td>
                            <td colspan="2"><p><?=$row->duration;?></p></td>
                            <td colspan="5"><p><?=$row->alarm_msg;?></p></td>
                            <td colspan="6" class="p-0">
                                <p><?= @$alarm_mslh[$i]?>&nbsp;</p>
                            </td>
                            <td colspan="5" class="p-0">
                                <p><?= @$alarm_solve[$i]?>&nbsp;</p>
                            </td>
                            <td colspan="2" class="p-0">
                                <p><?= @$alarm_pic[$i]?>&nbsp;</p>
                            </td>
                            <td colspan="2" class="p-0">
                                <p><?= @$alarm_hasil[$i]?>&nbsp;</p>
                            </td>
                        </tr>
                        <?php $i++ ; endforeach;?>
                        <tr>
                            <td colspan="25" class="text-right"><p><strong>Total Line Stop : </strong></p></td>
                            <td class="p-0"><p><?= @$line_stop?>&nbsp;</p></td>
                            <td><p>menit</p></td>
                        </tr>
                    </tbody>
                </table>
                <!-- 2nd Table -->
                
                <!-- 3rd Table -->
                <table class="waffle no-grid table" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <?php for ($i=0; $i < 27; $i++):?>
                                <td style="border-color:#fff!important;border-bottom:#000!important"></td>
                            <?php endfor;?>
                        </tr>
                        <tr> 
                            <td colspan="4" rowspan="3" class="text-center vc" style="border-bottom:2px solid #000"><p><strong>CHECK ANALYSIS</strong></p></td> 
                            <td colspan="2" style="border:none;border-top:1px solid #000000;border-bottom:1px solid #fff"><p><strong>CYCLE TIME</strong></p></td> 
                            <td colspan="3" style="border:none;border-top:1px solid #000000"><p>1 Tangki = 15 menit</p></td> 
                            <td colspan="5" style="border:none;border-top:1px solid #000000;border-right:1px solid #000000"><p>&nbsp;</p></td> 
                            <td colspan="6" style="border:none;border-top:1px solid #000000"><p><strong>EFFICIENCY</strong></p></td> 
                            <td colspan="1" style="border:none;border-top:1px solid #000000"><p>=</p></td> 
                            <td colspan="1" style="border:none;border-top:1px solid #000000"><p>0.25 x</p></td> 
                            <td colspan="5" style="border:none;border-top:1px solid #000000;border-right:1px solid #000000"><p>T. Conveying / Running Hour  x  100%</p></td> 
                        </tr>
                        <tr> 
                            <td colspan="2" style="border:none;border-bottom:1px solid #fff"><p>&nbsp;</p></td> 
                            <td colspan="3" style="border:none;border-bottom:1px solid #fff"><p>1 Tangki = 300 kg</p></td> 
                            <td colspan="5" style="border:none;border-right:1px solid #000000"><p>&nbsp;</p></td> 
                            <td colspan="6" style="border:none"><p>&nbsp;</p></td> 
                            <td colspan="1" style="border:none"><p>=</p></td> 
                            <td colspan="1" style="border:none"><p>0.25 x</p></td> 
                            <td colspan="1" style="border:none" class="p-0">
                                <p><?= @$efficiency[0]?>&nbsp;</p>
                            </td>
                            <td colspan="5" style="border:none;border-right:1px solid #000000"><p>Conveying  x  100%</p></td> 
                        </tr>
                        <tr> 
                            <td colspan="2" style="border:none;border-bottom:2px solid #000000"><p>&nbsp;</p></td> 
                            <td colspan="3" style="border:none;border-bottom:2px solid #000000"><p>1 Jam = 1.2 Ton</p></td> 
                            <td colspan="5" style="border:none;border-bottom:2px solid #000000;border-right:1px solid #000000"><p>&nbsp;</p></td> 
                            <td colspan="6" style="border:none;border-bottom:2px solid #000000"><p>&nbsp;</p></td> 
                            <td colspan="1" style="border:none;border-bottom:2px solid #000000"><p>=</p></td> 
                            <td colspan="1" style="border:none;border-bottom:2px solid #000000" class="p-0">
                                <p><?= @$efficiency[1]?>&nbsp;</p>
                            </td>
                            <td colspan="1" style="border:none;border-bottom:2px solid #000000"><p>%</p></td> 
                            <td colspan="5" style="border:none;border-bottom:2px solid #000000;border-right:1px solid #000000"><p>&nbsp;</p></td> 
                        </tr>
                        <tr class="text-center"> 
                            <td colspan="4" style="border-top:1px solid #fff"><p><strong>SHIFT</strong></p></td> 
                            <td colspan="3" style="border-top:1px solid #fff"><p><strong>SIANG : </strong></p></td> 
                            <td colspan="3" style="border-top:1px solid #fff"><p><strong>MALAM : </strong></p></td> 
                            <td class="b-white" colspan="17"><p>&nbsp;</p></td> 
                        </tr>
                    </thead>
                    <tbody> 
                        <tr class="text-center"> 
                            <td colspan="3"><p><strong>ITEM</strong></p></td> 
                            <td colspan="1"><p><strong>STD IL</strong></p></td> 
                            <td colspan="1"><p><strong>JAM</strong></p></td> 
                            <td colspan="1"><p><strong>IL</strong></p></td> 
                            <td colspan="1"><p><strong>Rata2</strong></p></td> 
                            <td colspan="1"><p><strong>JAM</strong></p></td> 
                            <td colspan="1"><p><strong>IL</strong></p></td> 
                            <td colspan="1"><p><strong>Rata2</strong></p></td> 
                            <td class="b-white" colspan="17"><p>&nbsp;</p></td> 
                        </tr>
                        <tr> 
                            <td colspan="3" rowspan="2" class="text-center vc"><p>PASIR FURNACE</p></td> 
                            <td colspan="1" rowspan="2" class="p-0 pt-2">
                                <p>≤ 0.20</p>
                            </td>
                            <td colspan="1" class="p-0">
                                <p><?= @$siang_jam[0]?>&nbsp;</p>
                            </td>
                            <td colspan="1" class="p-0">
                                <p><?= @$siang_il[0]?>&nbsp;</p>
                            </td> 
                            <td colspan="1" rowspan="2" class="p-0 pt-2">
                                <p><?= @$siang_avg[0]?>&nbsp;</p>
                            </td>
                            <td colspan="1" class="p-0">
                                <p><?= @$malam_jam[0]?>&nbsp;</p>
                            </td>
                            <td colspan="1" class="p-0">
                                <p><?= @$malam_il[0]?>&nbsp;</p>
                            </td>
                            <td colspan="1" rowspan="2" class="p-0 pt-2">
                                <p><?= @$malam_avg[0]?>&nbsp;</p>
                            </td>
                            <td class="b-white" colspan="17" style="border-bottom:#000!important"><p>&nbsp;</p></td> 
                        </tr>
                        <tr> 
                            <td colspan="1" class="p-0">
                                <p><?= @$siang_jam[1]?>&nbsp;</p>
                            </td> 
                            <td colspan="1" class="p-0">
                                <p><?= @$siang_il[1]?>&nbsp;</p>
                            </td> 
                            <td colspan="1" class="p-0">
                                <p><?= @$malam_jam[1]?>&nbsp;</p>
                            </td> 
                            <td colspan="1" class="p-0">
                                <p><?= @$malam_il[1]?>&nbsp;</p>
                            </td> 
                            <td colspan="9" style="border:0px"><p>&nbsp;</p></td> 
                            <td colspan="2" class="text-center" style="page-break-before:always"><p>Disetujui</p></td> <td colspan="2" class="text-center"><p>Disetujui</p></td> <td colspan="2" class="text-center"><p>Dicheck</p></td> <td colspan="2" class="text-center"><p>Dibuat</p></td> 
                        </tr>
                        <tr> 
                            <td colspan="3" rowspan="2" class="text-center vc"><p>PASIR RECLAMER</p></td> 
                            <td colspan="1" rowspan="2" class="p-0 pt-2">
                                <p>< 0.13</p>
                            </td>
                            <td colspan="1" class="p-0">
                                <p><?= @$siang_jam[2]?>&nbsp;</p>
                            </td>
                            <td colspan="1" class="p-0">
                                <p><?= @$siang_il[2]?>&nbsp;</p>
                            </td> 
                            <td colspan="1" rowspan="2" class="p-0 pt-2">
                                <p><?= @$siang_avg[1]?>&nbsp;</p>
                            </td>
                            <td colspan="1" class="p-0">
                                <p><?= @$malam_jam[2]?>&nbsp;</p>
                            </td>
                            <td colspan="1" class="p-0">
                                <p><?= @$malam_il[2]?>&nbsp;</p>
                            </td>
                            <td colspan="1" rowspan="2" class="p-0 pt-2">
                                <p><?= @$malam_avg[1]?>&nbsp;</p>
                            </td>
                            <td  style="border:0px" colspan="9"><p>&nbsp;</p></td>  
                            <td colspan="2" rowspan="4"><p>&nbsp;</p></td> 
                            <td colspan="2" rowspan="4"><p>&nbsp;</p></td> 
                            <td colspan="2" rowspan="4"><p>&nbsp;</p></td> 
                            <td colspan="2" rowspan="4"><p>&nbsp;</p></td> 
                        </tr>
                        <tr> 
                            <td colspan="1" class="p-0">
                                <p><?= @$siang_jam[3]?>&nbsp;</p>
                            </td> 
                            <td colspan="1" class="p-0">
                                <p><?= @$siang_il[3]?>&nbsp;</p>
                            </td> 
                            <td colspan="1" class="p-0">
                                <p><?= @$malam_jam[3]?>&nbsp;</p>
                            </td> 
                            <td colspan="1" class="p-0">
                                <p><?= @$malam_il[3]?>&nbsp;</p>
                            </td> 
                            <td class="b-white" colspan="9"><p>&nbsp;</p></td> 
                        </tr>
                        <tr> 
                            <td colspan="3" class="text-center vc"><p>GFN PASIR RECLAMER</p></td>
                            <td colspan="1"><p>59+1</p></td> 
                            <td colspan="1"><p>&nbsp;</p></td> 
                            <td colspan="1"><p>&nbsp;</p></td> 
                            <td colspan="1"><p>&nbsp;</p></td> 
                            <td colspan="1"><p>&nbsp;</p></td> 
                            <td colspan="1"><p>&nbsp;</p></td> 
                            <td colspan="1"><p>&nbsp;</p></td> 
                            <td class="b-white" colspan="9"><p>&nbsp;</p></td> 
                        </tr>
                        <tr> 
                            <td colspan="2" rowspan="2" class="text-center vc"><p>PASIR RCS</p></td> 
                            <td colspan="1" class="text-center"><p>A</p></td> 
                            <td colspan="1" class="p-0">
                                <p>≤ 1.90</p>
                            </td> 
                            <td colspan="1" class="p-0">
                                <p><?= @$siang_jam[4]?>&nbsp;</p>
                            </td> 
                            <td colspan="1" class="p-0">
                                <p><?= @$siang_il[4]?>&nbsp;</p>
                            </td> 
                            <td colspan="1" class="p-0">
                                <p><?= @$siang_avg[2]?>&nbsp;</p>
                            </td> 
                            <td colspan="1" class="p-0">
                                <p><?= @$malam_jam[4]?>&nbsp;</p>
                            </td> 
                            <td colspan="1" class="p-0">
                                <p><?= @$malam_il[4]?>&nbsp;</p>
                            </td> 
                            <td colspan="1" class="p-0">
                                <p><?= @$malam_avg[2]?>&nbsp;</p>
                            </td> 
                            <td class="b-white" colspan="9" style="border:0px"><p>&nbsp;</p></td> 
                        </tr>
                        <tr> 
                            <td colspan="1" class="text-center"><p>STR</p></td> 
                            <td colspan="1" class="p-0">
                                <p>≤ 2.2</p>
                            </td> 
                            <td colspan="1" class="p-0">
                                <p><?= @$siang_jam[5]?>&nbsp;</p>
                            </td> 
                            <td colspan="1" class="p-0">
                                <p><?= @$siang_il[5]?>&nbsp;</p>
                            </td> 
                            <td colspan="1" class="p-0">
                                <p><?= @$siang_avg[3]?>&nbsp;</p>
                            </td> 
                            <td colspan="1" class="p-0">
                                <p><?= @$malam_jam[5]?>&nbsp;</p>
                            </td> 
                            <td colspan="1" class="p-0">
                                <p><?= @$malam_il[5]?>&nbsp;</p>
                            </td> 
                            <td colspan="1" class="p-0">
                                <p><?= @$malam_avg[3]?>&nbsp;</p>
                            </td> 
                            <td  style="border:0px" colspan="9"><p>&nbsp;</p></td> 
                            <td colspan="2" class="text-center"><p>SH</p></td> <td colspan="2" class="text-center"><p>LH</p></td> <td colspan="2" class="text-center"><p>GH</p></td> <td colspan="2" class="text-center"><p>OPR</p></td> 
                        </tr>
                    </tbody>
                </table>
            <!-- 3rd Table -->

            
            <!-- 4th Table -->
                <table class="waffle no-grid table" cellspacing="0" cellpadding="0" style="page-break-before: always;">
                    <thead>
                        <tr>
                            <?php for ($i=0; $i < 27; $i++):?>
                                <td style="border-color:#fff!important;border-bottom:#000!important"></td>
                            <?php endfor;?>
                        </tr>
                        <tr class="text-center vc" style="border-bottom:2px solid #000;border-right:2px solid #000;border-left:2px solid #000;">
                            <td colspan="4" class="p-0">
                                <p>Jam</p>
                            </td>
                            <td colspan="8" class="p-0">
                                <p>Lampiran Foto</p>
                            </td>
                            <td colspan="9" class="p-0">
                                <p>Standard Perbandingan</p>
                            </td>
                            <td colspan="7" class="p-0">
                                <p>Judgement</p>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i=0; $i < 27; $i++):?>
                            <tr class="text-center vc">
                                <td colspan="4" class="p-0">
                                    <p>hh:mm:ss</p>
                                </td>
                                <td colspan="8" class="p-0">
                                </td>
                                <td colspan="9" class="p-0">
                                </td>
                                <td colspan="7" class="p-0" style="height:100px;">
                                    <p></p>
                                </td>
                            </tr>
                        <?php endfor;?>
                    </tbody>
                </table>
            <!-- 4th Table -->
        </div>
        <?php //exit;?>