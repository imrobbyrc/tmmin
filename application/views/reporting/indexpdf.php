<link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<style> 
.vc {
    vertical-align: middle !important;
}
input{
    width:100%;
    border:none;  
    padding-left:.25rem;
}
.pt-custom-1{
    height:90px;
    padding-top:.5rem!important;
}
.pt-custom-2{
    padding-top:.5rem!important;
}
.pt-custom-3{
    padding-top:.75rem!important;
}
.pt-custom-4{
    padding-top:.75rem!important;
}
.pt-custom-5{
    padding-top:1.5rem!important;
}
.pt-custom-6{
    padding-top:.75rem!important;
}
.pt-custom-7{
    padding-top:.75rem!important;
}
.pt-custom-8{
    padding-top:1.5rem!important;
}
.pt-custom-9{
    padding-top:.75rem!important;
}
.pt-custom-10{
    padding-top:1.5rem!important;
}
.pt-custom-11{
    padding-top:.75rem!important;
}
.pt-custom-12{
    padding-top:1.5rem!important;
}
.pt-custom-13{
    padding-top:.75rem!important;
}
.pt-custom-14{
    padding-top:1.5rem!important;
}
.pt-custom-15{
    padding-top:.75rem!important;
}
.pt-custom-16{
    padding-top:1rem!important;
}
.pt-custom-17{
    padding-top:1rem!important;
}
.pt-custom-18{
    padding-top:1rem!important;
}
.pt-custom-19{
    padding-top:1rem!important;
}
.pt-custom-20{
    padding-top:1rem!important;
}
.pt-custom-21{
    padding-top:.75rem!important;
}
.pt-custom-22{
    padding-top:.5rem!important;
}
.pt-custom-23{
    padding-top:1.5rem!important;
}
.pt-custom-24{
    padding-top:1.75rem!important;
}
.rotate {
   width:0px;
  white-space:nowrap;
  -webkit-writing-mode: vertical-rl;
  -ms-writing-mode: tb-rl;
  writing-mode: vertical-rl;
  transform: rotate(180deg) /* you want */
} 
.table td, .table th{
    border: 1px SOLID #000000;
    color: #000000; 
    font-size: 11px;
    padding: 0px 3px 0px 3px;
}
h1 { font-family: Calibri; font-size: 18px; font-style: normal; font-variant: normal; line-height: 15.4px; } 
h3 { font-family: Calibri, Candara, Segoe, "Segoe UI", Optima, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 700; line-height: 15.4px; } 
p { font-family: Calibri, Candara, Segoe, "Segoe UI", Optima, Arial, sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; line-height: 15px; } 
.b-white{
    border-color:#fff!important
}
p{
    margin-bottom:0px!important;
}
</style> 

<form id="reportForm" method="POST" action="">
    <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
    <input type="hidden" name="old_date" value="<?=@$datetime.$shift?>" style="display: none">

    <div class="">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5 px-2">
                    <h2 class="ml-5">Report Automation</h2>
                </div>
                <div class="col-12"> 
                    <div class="form-group row">
                        <label class="col-2">Shift</label> 
                        <select class="form-control col-10" id="exampleFormControlSelect1" name="shift">
                            <option value="pagi" <?php if($shift == "pagi") { echo "selected"; }?> >Pagi</option>
                            <option value="malam"<?php if($shift == "malam") { echo "selected"; }?> >Malam</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-2">Color</label> 
                        <div class="col-10 pl-0">
                            <div class="form-check form-check-inline mr-3 btn btn-danger">
                                <input class="form-check-input" type="radio" name="color" id="red" value="red" <?php if($color == "red") { echo "checked"; }?> >
                                <label class="form-check-label" for="red">RED</label>
                            </div>
                            <div class="form-check form-check-inline btn btn-secondary">
                                <input class="form-check-input" type="radio" name="color" id="white" value="white" <?php if($color == "white") { echo "checked"; }?> >
                                <label class="form-check-label" for="white">WHITE</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2">Date</label>
                        <input type="text" class="form-control col-10" id="datepicker" placeholder="yyyy-mm-dd" name="datetime" value="<?= $datetime ?>"> 
                    </div>
                    <div class="row">
                        <label class="col-2"></label>
                        <div class="col-10 px-0">
                            <button class="btn btn-primary btn-block" type="submit">Generate</button>
                        </div>
                    </div>		
                </div>
            </div>		
        </div>										
    </div> 

    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <?php for ($i=0; $i < 27; $i++):?>
                                <td style="border-color:#fff!important;border-bottom:#000!important"></td>
                            <?php endfor;?>
                        </tr>
                        <tr>
                            <td colspan="4" rowspan="3" class="text-center">
                                <h3><strong>PT. TMMIN</strong></h3>
                                <h3>Casting Division</h3>
                                <h3>Produksi II</h3>
                            </td>
                            <td colspan="17" rowspan="3" class="text-center">
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
                                <p><input type="text" style="max-width:70px" name="pic_name" value="<?= @$pic_name ?>"/></p>
                            </td>
                            <td colspan="2"><p><?= strtoupper($color) ?></p></td>
                            <td colspan="2"><p><?= strtoupper($shift) ?></p></td>
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
                            <td colspan="4" class="text-center"><p><strong>TEMPERATURE</strong></p></td>
                            <td colspan="3" class="text-center"><p><strong><p>Blower Combustion</p><p>Burner</p></strong></p></td>
                            <td colspan="2" class="text-center"><p><strong><p>Blower F'ce</p><p>Bubling</p></strong></p></td>
                            <td colspan="2" class="text-center"><p><strong><p>Auto Damper</p><p>IDC 004</p></strong></p></td>
                            <td rowspan="2" class="text-center" style="padding-top:1rem;padding-right:1.2rem"><p class="rotate"><strong>Speed Screw Feeder</strong></p></td>
                            <td colspan="2" class="text-center"><p><strong><p>Sand Cooler</p><p>Bubling</p></strong></p></td>
                            <td colspan="2" class="text-center"><p><strong><p>Auto Damper</p><p>IDC 004</p></strong></p></td>
                            <td colspan="3" class="text-center"><p><strong>Spray Temperature</strong></p></td>
                            <td colspan="2" class="text-center"><p><strong>Spray Temp.</strong></p></td>
                            <td class="text-center"><p><strong>Fresh Air</strong></p></td>
                        </tr>
                        <tr>
                            <?php $cls=1; foreach($fces as $fce):?>
                                <td class="pt-custom-<?=$cls?>"><p class="rotate"><strong><?=$fce?></strong></p></td>
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
                            <td class="text-right"><p><?= $row['lowval'] ?></p></td>
                            <?php endforeach;?>
                            <td class="p-0"><p><input type="text" style="max-width:50px" name="stdlow[]" value="<?= @$stdlow[0] ?>"/></p></td>
                            <td class="p-0"><p><input type="text" style="max-width:50px" name="stdlow[]" value="<?= @$stdlow[1] ?>"/></p></td>
                        </tr>
                        <tr>
                            <td class="text-center"><p><strong>HIGH</strong></p></td>
                            <?php foreach($standardValue as $row):?>
                            <td class="text-right"><p><?= $row['highval'] ?></p></td>
                            <?php endforeach;?>
                            <td class="p-0"><p><input type="text" style="max-width:50px" name="stdhigh[]" value="<?= @$stdhigh[0] ?>"/></p></td>
                            <td class="p-0"><p><input type="text" style="max-width:50px" name="stdhigh[]" value="<?= @$stdhigh[1] ?>"/></p></td>
                        </tr>
                            <tr>
                                <?php for ($i = 0 ; $i < count($arrayMaster) ; $i++):?>
                                <?php $data = $arrayMaster[$i]; ?>
                                <?php if($i==0):?>
                                <td rowspan="<?=count($arrayMaster)?>" style="padding-top:6rem"><p class="rotate"><strong>JAM</strong></p></td>
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
                                    <p><input type="text" style="max-width:50px" name="conveying[]" value="<?= @$conveying[$i] ?>"/></p>
                                </td>
                                <td class="p-0">
                                    <p><input type="text" style="max-width:50px" name="accum[]" value="<?= @$accum[$i] ?>"/></p>
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
                                <td colspan="7" class="p-0">
                                    <p><input placeholder="07 : 54 : 00" type="text" name="time_prod[]" value="<?= @$time_prod[0] ?>"/></p>
                                </td>
                        </tr>
                        <tr class="text-center"> 
                                <td colspan="2" class="p-0">
                                    <p><input type="text" name="lng[]" value="<?= @$lng[0] ?>"/></p>
                                    </td>
                                <td colspan="2" class="p-0">
                                    <p><input type="text" name="lng[]" value="<?= @$lng[1] ?>"/></p>
                                </td>
                                <td colspan="2" class="p-0">
                                    <p><input type="text" name="lng[]" value="<?= @$lng[2] ?>"/></p>
                                </td>
                                <td colspan="2" class="p-0">
                                    <p><input type="text" name="lng[]" value="<?= @$lng[3] ?>"/></p>
                                </td>
                                <td colspan="2" class="p-0">
                                    <p><input type="text" name="lng[]" value="<?= @$lng[4] ?>"/></p>
                                </td>
                                <td colspan="2" class="p-0">
                                    <p><input type="text" name="lng[]" value="<?= @$lng[5] ?>"/></p>
                                </td>
                                <td colspan="4"><p><strong>Finish Prod. : </strong></p></td>
                                <td colspan="7" class="p-0"><p><input placeholder="formatnya (hh : mm : ss)" type="text" name="time_prod[]" value="<?= @$time_prod[1] ?>" /></p></td>
                        </tr>
                    </tbody>
                </table>

                <!-- 2nd Table -->
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <?php for ($i=0; $i < 27; $i++):?>
                                <td style="border-color:#fff!important;border-bottom:#000!important"><p></p></td>
                            <?php endfor;?>
                        </tr>
                        <tr class="text-center">
                            <td rowspan="2" class="vc"><p><strong>No.</strong></p></td>
                            <td colspan="2"><p><strong>Jam</strong></p></td> 
                            <td rowspan="2" class="vc"><p><strong>Durasi</strong></p></td>
                            <td colspan="6" rowspan="2" class="vc"><p><strong>Alarm Message</strong></p></td>
                            <td colspan="7" rowspan="2" class="vc"><p><strong>Masalah</strong></p></td>
                            <td colspan="6" rowspan="2" class="vc"><p><strong>Penanggulangan</strong></p></td>
                            <td colspan="2" rowspan="2" class="vc"><p><strong>PIC</strong></p></td>
                            <td colspan="2" rowspan="2" class="vc"><p><strong>Hasil</strong></p></td>
                        </tr>
                        <tr class="text-center">
                            <td><p><strong>Start</strong></p></td>
                            <td><p><strong>End</strong></p></td>
                        </tr>
                    </thead>
                    <tbody> 
                        <?php $i = 0;
                        foreach($alarm as $row):
                            
                        ?>
                        <tr>
                            <td><?=$i+1;?></td>
                            <td><p><?=substr($row->starttime,11,8);?></p></td>
                            <td><p><?=substr($row->endtime,11,8);?></p></td>
                            <td><p><?=$row->duration;?></p></td>
                            <td colspan="6"><p><?=$row->alarm_msg;?></p></td>
                            <td colspan="7" class="p-0">
                                <p><input type="text" name="alarm_mslh[]" value="<?= @$alarm_mslh[$i] ?>"/></p>
                            </td>
                            <td colspan="6" class="p-0">
                                <p><input type="text" name="alarm_solve[]" value="<?= @$alarm_solve[$i] ?>"/></p>
                            </td>
                            <td colspan="2" class="p-0">
                                <p><input type="text" name="alarm_pic[]" value="<?= @$alarm_pic[$i] ?>"/></p>
                            </td>
                            <td colspan="2" class="p-0">
                                <p><input type="text" name="alarm_hasil[]" value="<?= @$alarm_hasil[$i] ?>"/></p>
                            </td>
                        </tr>
                        <?php $i++ ; endforeach;?>
                        <tr>
                            <td colspan="25" class="text-right"><p><strong>Total Line Stop : </strong></p></td>
                            <td class="p-0"><p><input type="text" width="auto" name="line_stop" value="<?= @$line_stop ?>"/></p></td>
                            <td><p>menit</p></td>
                        </tr>
                    </tbody>
                </table>
                <!-- 2nd Table -->
                
                <!-- 3rd Table -->
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <?php for ($i=0; $i < 27; $i++):?>
                                <td style="border-color:#fff!important;border-bottom:#000!important"></td>
                            <?php endfor;?>
                        </tr>
                        <tr> 
                            <td colspan="4" rowspan="3" class="text-center vc"><p><strong>CHECK ANALYSIS</strong></p></td> 
                            <td colspan="2" style="border:none;border-top:1px solid #000000"><p><strong>CYCLE TIME</strong></p></td> 
                            <td colspan="3" style="border:none;border-top:1px solid #000000"><p>1 Tangki = 15 menit</p></td> 
                            <td colspan="5" style="border:none;border-top:1px solid #000000;border-right:1px solid #000000"><p></p></td> 
                            <td colspan="6" style="border:none;border-top:1px solid #000000"><p><strong>EFFICIENCY</strong></p></td> 
                            <td colspan="1" style="border:none;border-top:1px solid #000000"><p>=</p></td> 
                            <td colspan="1" style="border:none;border-top:1px solid #000000"><p>0.25 x</p></td> 
                            <td colspan="5" style="border:none;border-top:1px solid #000000;border-right:1px solid #000000"><p>T. Conveying / Running Hour  x  100%</p></td> 
                        </tr>
                        <tr> 
                            <td colspan="2" style="border:none"><p></p></td> 
                            <td colspan="3" style="border:none"><p>1 Tangki = 300 kg</p></td> 
                            <td colspan="5" style="border:none;border-right:1px solid #000000"><p></p></td> 
                            <td colspan="6" style="border:none"><p></p></td> 
                            <td colspan="1" style="border:none"><p>=</p></td> 
                            <td colspan="1" style="border:none"><p>0.25 x</p></td> 
                            <td colspan="1" style="border:none" class="p-0">
                                <p><input type="text" name="efficiency[]" value="<?= @$efficiency[0] ?>"/></p>
                            </td>
                            <td colspan="5" style="border:none;border-right:1px solid #000000"><p>Conveying  x  100%</p></td> 
                        </tr>
                        <tr> 
                            <td colspan="2" style="border:none;border-bottom:2px solid #000000"><p></p></td> 
                            <td colspan="3" style="border:none;border-bottom:2px solid #000000"><p>1 Jam = 1.2 Ton</p></td> 
                            <td colspan="5" style="border:none;border-bottom:2px solid #000000;border-right:1px solid #000000"><p></p></td> 
                            <td colspan="6" style="border:none;border-bottom:2px solid #000000"><p></p></td> 
                            <td colspan="1" style="border:none;border-bottom:2px solid #000000"><p>=</p></td> 
                            <td colspan="1" style="border:none;border-bottom:2px solid #000000" class="p-0">
                                <p><input type="text" name="efficiency[]" value="<?= @$efficiency[1] ?>"/></p>
                            </td>
                            <td colspan="1" style="border:none;border-bottom:2px solid #000000"><p>%</p></td> 
                            <td colspan="5" style="border:none;border-bottom:2px solid #000000;border-right:1px solid #000000"><p></p></td> 
                        </tr>
                        <tr class="text-center"> 
                            <td colspan="4"><p><strong>SHIFT</strong></p></td> 
                            <td colspan="3"><p><strong>SIANG : </strong></p></td> 
                            <td colspan="3"><p><strong>MALAM : </strong></p></td> 
                            <td class="b-white" colspan="17"><p></p></td> 
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
                            <td class="b-white" colspan="17"><p></p></td> 
                        </tr>
                        <tr> 
                            <td colspan="3" rowspan="2" class="text-center vc"><p>PASIR FURNACE</p></td> 
                            <td colspan="1" rowspan="2" class="p-0 pt-2">
                                <p><input type="text" name="std_il[]" value="<?= @$std_il[0] ?>"/></p>
                            </td>
                            <td colspan="1" class="p-0">
                                <p><input type="text" name="siang_jam[]" value="<?= @$siang_jam[0] ?>"/></p>
                            </td>
                            <td colspan="1" class="p-0">
                                <p><input type="text" name="siang_il[]" value="<?= @$siang_il[0] ?>"/></p>
                            </td> 
                            <td colspan="1" rowspan="2" class="p-0 pt-2">
                                <p><input type="text" name="siang_avg[]" value="<?= @$siang_avg[0] ?>"/></p>
                            </td>
                            <td colspan="1" class="p-0">
                                <p><input type="text" name="malam_jam[]" value="<?= @$malam_jam[0] ?>" /></p>
                            </td>
                            <td colspan="1" class="p-0">
                                <p><input type="text" name="malam_il[]" value="<?= @$malam_il[0] ?>" /></p>
                            </td>
                            <td colspan="1" rowspan="2" class="p-0 pt-2">
                                <p><input type="text" name="malam_avg[]" value="<?= @$malam_avg[0] ?>" /></p>
                            </td>
                            <td class="b-white" colspan="17" style="border-bottom:#000!important"><p></p></td> 
                        </tr>
                        <tr> 
                            <td colspan="1" class="p-0">
                                <p><input type="text" name="siang_jam[]" value="<?= @$siang_jam[1] ?>"/></p>
                            </td> 
                            <td colspan="1" class="p-0">
                                <p><input type="text" name="siang_il[]" value="<?= @$siang_il[1] ?>"/></p>
                            </td> 
                            <td colspan="1" class="p-0">
                                <p><input type="text" name="malam_jam[]" value="<?= @$malam_jam[1] ?>"/></p>
                            </td> 
                            <td colspan="1" class="p-0">
                                <p><input type="text" name="malam_il[]" value="<?= @$malam_il[1] ?>"/></p>
                            </td> 
                            <td colspan="9" style="border-top:0px;border-bottom:0px"><p></p></td> 
                            <td colspan="2" class="text-center"><p>Disetujui</p></td> <td colspan="2" class="text-center"><p>Disetujui</p></td> <td colspan="2" class="text-center"><p>Dicheck</p></td> <td colspan="2" class="text-center"><p>Dibuat</p></td> 
                        </tr>
                        <tr> 
                            <td colspan="3" rowspan="2" class="text-center vc"><p>PASIR RECLAMER</p></td> 
                            <td colspan="1" rowspan="2" class="p-0 pt-2">
                                <p><input type="text" name="std_il[]" value="<?= @$std_il[1] ?>"/></p>
                            </td>
                            <td colspan="1" class="p-0">
                                <p><input type="text" name="siang_jam[]" value="<?= @$siang_jam[2] ?>"/></p>
                            </td>
                            <td colspan="1" class="p-0">
                                <p><input type="text" name="siang_il[]" value="<?= @$siang_il[2] ?>"/></p>
                            </td> 
                            <td colspan="1" rowspan="2" class="p-0 pt-2">
                                <p><input type="text" name="siang_avg[]" value="<?= @$siang_avg[1] ?>"/></p>
                            </td>
                            <td colspan="1" class="p-0">
                                <p><input type="text" name="malam_jam[]" value="<?= @$malam_jam[2] ?>" /></p>
                            </td>
                            <td colspan="1" class="p-0">
                                <p><input type="text" name="malam_il[]" value="<?= @$malam_il[2] ?>" /></p>
                            </td>
                            <td colspan="1" rowspan="2" class="p-0 pt-2">
                                <p><input type="text" name="malam_avg[]" value="<?= @$malam_avg[1] ?>" /></p>
                            </td>
                            <td style="border-top:0px;border-bottom:0px" colspan="9"><p></p></td>  
                            <td colspan="2" rowspan="4"><p></p></td> 
                            <td colspan="2" rowspan="4"><p></p></td> 
                            <td colspan="2" rowspan="4"><p></p></td> 
                            <td colspan="2" rowspan="4"><p></p></td> 
                        </tr>
                        <tr> 
                            <td colspan="1" class="p-0">
                                <p><input type="text" name="siang_jam[]" value="<?= @$siang_jam[3] ?>"/></p>
                            </td> 
                            <td colspan="1" class="p-0">
                                <p><input type="text" name="siang_il[]" value="<?= @$siang_il[3] ?>"/></p>
                            </td> 
                            <td colspan="1" class="p-0">
                                <p><input type="text" name="malam_jam[]" value="<?= @$malam_jam[3] ?>"/></p>
                            </td> 
                            <td colspan="1" class="p-0">
                                <p><input type="text" name="malam_il[]" value="<?= @$malam_il[3] ?>"/></p>
                            </td> 
                            <td class="b-white" colspan="9"><p></p></td> 
                        </tr>
                        <tr> 
                            <td colspan="3"><p></p></td> 
                            <td colspan="1"><p></p></td> 
                            <td colspan="1"><p></p></td> 
                            <td colspan="1"><p></p></td> 
                            <td colspan="1"><p></p></td> 
                            <td colspan="1"><p></p></td> 
                            <td colspan="1"><p></p></td> 
                            <td colspan="1"><p></p></td> 
                            <td class="b-white" colspan="9"><p></p></td> 
                        </tr>
                        <tr> 
                            <td colspan="2" rowspan="2" class="text-center vc"><p>PASIR RCS</p></td> 
                            <td colspan="1" class="text-center"><p>A</p></td> 
                            <td colspan="1" class="p-0">
                                <p><input type="text" name="std_il[]" value="<?= @$std_il[2] ?>"/></p>
                            </td> 
                            <td colspan="1" class="p-0">
                                <p><input type="text" name="siang_jam[]" value="<?= @$siang_jam[4] ?>"/></p>
                            </td> 
                            <td colspan="1" class="p-0">
                                <p><input type="text" name="siang_il[]" value="<?= @$siang_il[4] ?>"/></p>
                            </td> 
                            <td colspan="1" class="p-0">
                                <p><input type="text" name="siang_avg[]" value="<?= @$siang_avg[2] ?>"/></p>
                            </td> 
                            <td colspan="1" class="p-0">
                                <p><input type="text" name="malam_jam[]" value="<?= @$malam_jam[4] ?>" /></p>
                            </td> 
                            <td colspan="1" class="p-0">
                                <p><input type="text" name="malam_il[]" value="<?= @$malam_il[4] ?>"/></p>
                            </td> 
                            <td colspan="1" class="p-0">
                                <p><input type="text" name="malam_avg[]" value="<?= @$malam_avg[2] ?>"/></p>
                            </td> 
                            <td class="b-white" colspan="9"><p></p></td> 
                        </tr>
                        <tr> 
                            <td colspan="1" class="text-center"><p>STR</p></td> 
                            <td colspan="1" class="p-0">
                                <p><input type="text" name="std_il[]" value="<?= @$std_il[3] ?>"/></p>
                            </td> 
                            <td colspan="1" class="p-0">
                                <p><input type="text" name="siang_jam[]" value="<?= @$siang_jam[5] ?>"/></p>
                            </td> 
                            <td colspan="1" class="p-0">
                                <p><input type="text" name="siang_il[]" value="<?= @$siang_il[5] ?>"/></p>
                            </td> 
                            <td colspan="1" class="p-0">
                                <p><input type="text" name="siang_avg[]" value="<?= @$siang_avg[3] ?>"/></p>
                            </td> 
                            <td colspan="1" class="p-0">
                                <p><input type="text" name="malam_jam[]" value="<?= @$malam_jam[5] ?>"/></p>
                            </td> 
                            <td colspan="1" class="p-0">
                                <p><input type="text" name="malam_il[]" value="<?= @$malam_il[5] ?>"/></p>
                            </td> 
                            <td colspan="1" class="p-0">
                                <p><input type="text" name="malam_avg[]" value="<?= @$malam_avg[3] ?>"/></p>
                            </td> 
                            <td  style="border-top:0px;border-bottom:0px" colspan="9"><p></p></td> 
                            <td colspan="2" class="text-center"><p>SH</p></td> <td colspan="2" class="text-center"><p>LH</p></td> <td colspan="2" class="text-center"><p>GH</p></td> <td colspan="2" class="text-center"><p>OPR</p></td> 
                        </tr>
                    </tbody>
                </table>
                <!-- 3rd Table -->
            </div>
        </div>
    </div>
    
</form>