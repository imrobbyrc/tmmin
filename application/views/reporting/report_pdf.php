<link type="text/css" rel="stylesheet" href="<?= FCPATH ?>assets/css/sheet.css" >
    <div class="ritz grid-container" dir="ltr">
        <table class="waffle no-grid" cellspacing="0" cellpadding="0">
            <tbody>
                <tr style="height: 19px;">
                    <th id="298766174R0" style="height: 19px;" class="row-headers-background"><div class="row-header-wrapper" style="line-height: 19px;"></div></th>
                    <td class="s0" colspan="4" rowspan="4">
                        <span style="font-size: 14px; font-family: Calibri, Arial; font-weight: bold; color: #000000;">PT. TMMIN</span>
                        <span style="font-size: 14px; font-family: Calibri, Arial; color: #000000;">
                            <br />
                            Casting Divison<br />
                            Produksi II
                        </span>
                    </td>
                    <td class="s1" colspan="18" rowspan="4">
                        Laporan Produksi dan Check Temperature Furnace<br />
                        CKS - AZC300 - RC015 <span style="font-size: 18px; font-family: Calibri, Arial; font-weight: normal; color: #000000;">(REPORT AUTO GENERATE)</span>
                    </td>
                    <td class="s2">Hari / Tanggal</td>
                    <td class="s3"></td>
                    <td class="s4" colspan="3"><?= $tanggal ?></td>
                </tr>
                <tr style="height: 19px;">
                    <th id="298766174R1" style="height: 19px;" class="row-headers-background"><div class="row-header-wrapper" style="line-height: 19px;"></div></th>
                    <td class="s5" rowspan="3">PIC</td>
                    <td class="s6" colspan="4">Shift</td>
                </tr>
                <tr style="height: 19px;">
                    <th id="298766174R2" style="height: 19px;" class="row-headers-background"><div class="row-header-wrapper" style="line-height: 19px;"></div></th>
                    <td class="s7" colspan="2"><?php if($color == "red") { echo "Red"; }?></td>
                    <td class="s8" colspan="2"><?php if($shift == "pagi") { echo "Siang"; } ?></td>
                    
                </tr>
                <tr style="height: 20px;">
                    <th id="298766174R3" style="height: 20px;" class="row-headers-background"><div class="row-header-wrapper" style="line-height: 20px;"></div></th>
                    <td class="s7" colspan="2"><?php if($color == "white") { echo "White"; }?></td>
                    <td class="s8" colspan="2"><?php if($shift == "malam") { echo "Malam"; }?></td>
                </tr>
            <thead>
                <tr style="height: 28px;">
                    <th id="298766174R4" style="height: 28px;" class="row-headers-background"><div class="row-header-wrapper" style="line-height: 28px;"></div></th>
                    <td class="s9" colspan="2" rowspan="3">
                        ITEM<br />
                        →
                    </td>
                    <td class="s6" colspan="12">Furnace</td>
                    <td class="s10" colspan="7">Sand Cooler</td>
                    <td class="s9" colspan="3">Gas Cooler</td>
                    <td class="s9" rowspan="2">Dust Collector</td>
                    <td class="s9" colspan="2" rowspan="2">Pneumatic Conveyor</td>
                </tr>
                <tr style="height: 43px;">
                    <th id="298766174R5" style="height: 43px;" class="row-headers-background"><div class="row-header-wrapper" style="line-height: 43px;"></div></th>
                    <td class="s11" colspan="4">TEMPERATURE</td>
                    <td class="s12" colspan="3">Blower Combustion Burner</td>
                    <td class="s12" colspan="2">Blower F&#39;ce Bubling</td>
                    <td class="s12" colspan="2">Auto Damper IDC 004</td>
                    <td class="s9" rowspan="2"><div class="rotate">Speed Screw Feeder</div></td>
                    <td class="s12" colspan="2">Sand Cooler Bubling</td>
                    <td class="s12" colspan="2">Auto Damper IDC 004</td>
                    <td class="s10" colspan="3">Spray Temperature</td>
                    <td class="s11" colspan="2">Spray Temp.</td>
                    <td class="s9">Fresh Air</td>
                </tr>
                <tr style="height: 101px;">
                    <th id="298766174R6" style="height: 101px;" class="row-headers-background"><div class="row-header-wrapper" style="line-height: 101px;"></div></th>
                    <td style="height:120px" class="s13"><div class="rotate">Fce Combustion</div></td>
                    <td style="height:120px" class="s13"><div class="rotate">Fce Outlet Sand</div></td>
                    <td style="height:120px" class="s13"><div class="rotate">Fce Inlet Sand</div></td>
                    <td style="height:120px" class="s14"><div class="rotate">Top Temp. Fce</div></td>
                    <td style="height:120px" class="s13"><div class="rotate">Pressure</div></td>
                    <td style="height:120px" class="s13"><div class="rotate">Damper Open</div></td>
                    <td style="height:120px" class="s12"><div class="rotate">Damper Open</div></td>
                    <td style="height:120px" class="s12"><div class="rotate">Pressure</div></td>
                    <td style="height:120px" class="s12"><div class="rotate">Damper Open</div></td>
                    <td style="height:120px" class="s12"><div class="rotate">Pressure</div></td>
                    <td style="height:120px" class="s12"><div class="rotate">Damper Open</div></td>
                    <td style="height:120px" class="s12"><div class="rotate">Pressure</div></td>
                    <td style="height:120px" class="s12"><div class="rotate">Damper Open</div></td>
                    <td style="height:120px" class="s12"><div class="rotate">Pressure</div></td>
                    <td style="height:120px" class="s15"><div class="rotate">Damper Open</div></td>
                    <td style="height:120px" class="s16"><div class="rotate">Nozzle No. 1</div></td>
                    <td style="height:120px" class="s16"><div class="rotate">Nozzle No. 2</div></td>
                    <td style="height:120px" class="s17"><div class="rotate">Nozzle No. 3</div></td>
                    <td style="height:120px" class="s12"><div class="rotate">Temp. No. 1</div></td>
                    <td style="height:120px" class="s12"><div class="rotate">Temp. No. 2</div></td>
                    <td style="height:120px" class="s9"><div class="rotate">Damper Open</div></td>
                    <td style="height:120px" class="s15"><div class="rotate">DC Inlet Temp. (T10b)</div></td>
                    <td style="height:120px" class="s16"><div class="rotate">Conveying</div></td>
                    <td style="height:120px" class="s16"><div class="rotate">ACCUM</div></td>
                </tr>
                <tr style="height: 25px;">
                    <th id="298766174R7" style="height: 25px;" class="row-headers-background"><div class="row-header-wrapper" style="line-height: 25px;"></div></th>
                    <td class="s9" colspan="2">Kode Sensor</td>
                    <td class="s18">(T1/S1)</td>
                    <td class="s19">(T2/S2)</td>
                    <td class="s19">(T3/S3)</td>
                    <td class="s20">(T4/S4)</td>
                    <td class="s21"></td>
                    <td class="s21">MOT2</td>
                    <td class="s14">MOT3</td>
                    <td class="s14">PT4</td>
                    <td class="s14">MOT4</td>
                    <td class="s20">PT6</td>
                    <td class="s20">MOT6</td>
                    <td class="s22">INV1</td>
                    <td class="s14">PT5</td>
                    <td class="s20">MOT5</td>
                    <td class="s20">PT7</td>
                    <td class="s20">MOT7</td>
                    <td class="s20">Tc2</td>
                    <td class="s20">Tc3</td>
                    <td class="s22">Tc4</td>
                    <td class="s20">Tc5</td>
                    <td class="s20">Tc6</td>
                    <td class="s22">MOT8</td>
                    <td class="s22">T10b</td>
                    <td class="s22"></td>
                    <td class="s22"></td>
                </tr>
                <tr style="height: 19px;">
                    <th id="298766174R8" style="height: 19px;" class="row-headers-background"><div class="row-header-wrapper" style="line-height: 19px;"></div></th>
                    <td class="s23" colspan="2">UNIT</td>
                    <td class="s24">°C</td>
                    <td class="s24">°C</td>
                    <td class="s24">°C</td>
                    <td class="s25">°C</td>
                    <td class="s24">mmAq</td>
                    <td class="s24">%</td>
                    <td class="s25">%</td>
                    <td class="s25">mmAq</td>
                    <td class="s25">%</td>
                    <td class="s25">mmAq</td>
                    <td class="s25">%</td>
                    <td class="s26">%</td>
                    <td class="s25">mmAq</td>
                    <td class="s25">%</td>
                    <td class="s25">mmAq</td>
                    <td class="s25">%</td>
                    <td class="s25">°C</td>
                    <td class="s25">°C</td>
                    <td class="s26">°C</td>
                    <td class="s25">°C</td>
                    <td class="s25">°C</td>
                    <td class="s26">%</td>
                    <td class="s26">°C</td>
                    <td class="s26"></td>
                    <td class="s26"></td>
                </tr>
                
            </thead>
                <tr style="height: 19px;">
                    <th id="298766174R9" style="height: 19px;" class="row-headers-background"><div class="row-header-wrapper" style="line-height: 19px;"></div></th>
                    <td class="s11" rowspan="2">STD.</td>
                    <td class="s10">LOW</td>
                    <?php
                    $i= 0;
                    foreach($standardValue as $row){
                        if($i == 11 || $i== 18 || $i > 20){
                            $css= 's31';
                        }elseif($i == 4){
                        $css= 's29';
                        }elseif($i <= 2 || $i == 5){
                        $css= 's27';
                        }else{
                        $css= 's28';
                        }
                        echo '<td class="'.$css.'">'.$row['lowval'].'</td>';
                        $i++;
                    }
                    ?>
                    <td class="s32"></td>
                    <td class="s32"></td>
                </tr>
                <tr style="height: 19px;">
                    <th id="298766174R10" style="height: 19px;" class="row-headers-background"><div class="row-header-wrapper" style="line-height: 19px;"></div></th>
                    <td class="s10">HIGH</td>
                    <?php
                    $i= 0;
                    foreach($standardValue as $row){
                        if($i == 11 || $i== 18 || $i > 20){
                            $css= 's31';
                        }elseif($i == 4){
                        $css= 's29';
                        }elseif($i <= 2 || $i == 5){
                        $css= 's27';
                        }else{
                        $css= 's28';
                        }
                        echo '<td class="'.$css.'">'.$row['highval'].'</td>';
                        $i++;
                    }
                    ?>
                    <td class="s32"></td>
                    <td class="s32"></td>
                </tr>
            <?php for ($i = 0 ; $i < count($arrayMaster) ; $i++){
                $data = $arrayMaster[$i];
            ?>
                <tr style="height: 19px;">
                    <th id="298766174R1"<?= $i+1?> style="height: 19px;" class="row-headers-background"><div class="row-header-wrapper" style="line-height: 19px;"></div></th>
                    <?php
                    if($i==0){
                        echo '<td class="s33" dir="ltr" rowspan="'.count($arrayMaster).'">JAM</td>';
                    }
                    ?>
                    <td class="s34" dir="ltr"><?= $data["Clock"]; ?></td>
                    <td class="s35"><?= $data["T1_S1"]; ?></td>
                    <td class="s35"><?= $data["T2_S2"]; ?></td>
                    <td class="s35"><?= $data["T3_S3"]; ?></td>
                    <td class="s36"><?= $data["T4_S4"]; ?></td>
                    <td class="s37"><?= $data["Self"]; ?></td>
                    <td class="s38"><?= $data["MOT2"]; ?></td>
                    <td class="s36"><?= $data["MOT3"]; ?></td>
                    <td class="s36"><?= $data["PT4"]; ?></td>
                    <td class="s36"><?= $data["MOT4"]; ?></td>
                    <td class="s36"><?= $data["PT6"]; ?></td>
                    <td class="s36"><?= $data["MOT6"]; ?></td>
                    <td class="s39"><?= $data["INV1"]; ?></td>
                    <td class="s36"><?= $data["PT5"]; ?></td>
                    <td class="s36"><?= $data["MOT5"]; ?></td>
                    <td class="s36"><?= $data["PT7"]; ?></td>
                    <td class="s36"><?= $data["MOT7"]; ?></td>
                    <td class="s40"><?= $data["Tc2"]; ?></td>
                    <td class="s40"><?= $data["Tc3"]; ?></td>
                    <td class="s39"><?= $data["Tc4"]; ?></td>
                    <td class="s36"><?= $data["Tc5"]; ?></td>
                    <td class="s36"><?= $data["Tc6"]; ?></td>
                    <td class="s39"><?= $data["MOT8"]; ?></td>
                    <td class="s39"><?= $data["T10b"]; ?></td>
                    <td class="s41"></td>
                    <td class="s41"></td>
                </tr>
            <?php }; ?>

                <tr style="height: 23px;">
                    <th id="298766174R24" style="height: 23px;" class="row-headers-background"><div class="row-header-wrapper" style="line-height: 23px;"></div></th>
                    <td class="s50" dir="ltr" colspan="2" rowspan="2">Konsumsi LNG (m3)</td>
                    <td class="s20" colspan="2">Start</td>
                    <td class="s20" colspan="2">Finish</td>
                    <td class="s22" colspan="2">Total</td>
                    <td class="s50" colspan="2" rowspan="2">Konsumsi Air (M3)</td>
                    <td class="s20" colspan="2">Start</td>
                    <td class="s20" colspan="2">Finish</td>
                    <td class="s20" colspan="2">Total</td>
                    <td class="s51" colspan="4">Start Prod. :</td>
                    <td class="s52" colspan="7">formatnya (hh : mm : ss)</td>
                </tr>
                <tr style="height: 20px;">
                    <th id="298766174R25" style="height: 20px;" class="row-headers-background"><div class="row-header-wrapper" style="line-height: 20px;"></div></th>
                    <td class="s53" colspan="2"></td>
                    <td class="s53" colspan="2"></td>
                    <td class="s54" colspan="2"></td>
                    <td class="s53" colspan="2"></td>
                    <td class="s53" colspan="2"></td>
                    <td class="s53" colspan="2"></td>
                    <td class="s55" colspan="4">Finish Prod. :</td>
                    <td class="s56" colspan="7">formatnya (hh : mm : ss)</td>
                </tr>
                <tr style="height: 20px;">
                </tr>
            </tbody>
        </table>
    </div> 
    
    
<div class="ritz grid-container" dir="ltr" style=" page-break-before: always;">
    <table class="waffle no-grid" cellspacing="0" cellpadding="0">
            <thead> 
                <tr style="height: 20px;">
                    <th id="298766174R26" style="height: 20px;" class="row-headers-background"><div class="row-header-wrapper" style="line-height: 20px;"></div></th>
                    <td class="s33" rowspan="2">No.</td>
                    <td class="s11" colspan="2">Jam</td>
                    <td class="s50" rowspan="2">Durasi (menit)</td>
                    <td class="s33" colspan="8" rowspan="2">Alarm Message</td>
                    <td class="s33" colspan="6" rowspan="2">Masalah</td>
                    <td class="s33" colspan="5" rowspan="2">Penanggulangan</td>
                    <td class="s33" colspan="2" rowspan="2">PIC</td>
                    <td class="s57" colspan="2" rowspan="2">Hasil</td>
                </tr>
                <tr style="height: 20px;">
                    <th id="298766174R27" style="height: 20px;" class="row-headers-background"><div class="row-header-wrapper" style="line-height: 20px;"></div></th>
                    <td class="s58">Start</td>
                    <td class="s33">End</td>
                </tr>
            </thead>
            <tbody>     
                <?php
                $no = 1;
                foreach($alarm as $row){
                ?>
                <tr style="height: 20px;">
                    <th id="298766174R28" style="height: 20px;" class="row-headers-background"><div class="row-header-wrapper" style="line-height: 20px;"></div></th>
                    <td class="s59"><?=$no++;?></td>
                    <td class="s59"><?=$row->starttime;?></td>
                    <td class="s59"><?=$row->endtime;?></td>
                    <td class="s59"><?=$row->duration;?></td>
                    <td class="s60"><?=$row->alarm_msg;?></td>
                    <td class="s60"></td>
                    <td class="s60"></td>
                    <td class="s60"></td>
                    <td class="s60"></td>
                    <td class="s60"></td>
                    <td class="s60"></td>
                    <td class="s61"></td>
                    <td class="s62" colspan="6"></td>
                    <td class="s63"></td>
                    <td class="s63"></td>
                    <td class="s63"></td>
                    <td class="s63"></td>
                    <td class="s64"></td>
                    <td class="s63"></td>
                    <td class="s64"></td>
                    <td class="s63"></td>
                    <td class="s41"></td>
                </tr>
                <?php }; ?>
                
                <tr style="height: 20px;">
                    <th id="298766174R32" style="height: 20px;" class="row-headers-background"><div class="row-header-wrapper" style="line-height: 20px;"></div></th>
                    <td class="s65"></td>
                    <td class="s65"></td>
                    <td class="s65"></td>
                    <td class="s65"></td>
                    <td class="s65" colspan="8"></td>
                    <td class="s66" colspan="6"></td>
                    <td class="s67"></td>
                    <td class="s67"></td>
                    <td class="s67"></td>
                    <td class="s67"></td>
                    <td class="s68"></td>
                    <td class="s67"></td>
                    <td class="s68"></td>
                    <td class="s67"></td>
                    <td class="s49"></td>
                </tr>
                <tr style="height: 20px;">
                    <th id="298766174R33" style="height: 20px;" class="row-headers-background"><div class="row-header-wrapper" style="line-height: 20px;"></div></th>
                    <td class="s69"></td>
                    <td class="s69"></td>
                    <td class="s69"></td>
                    <td class="s69"></td>
                    <td class="s69"></td>
                    <td class="s69"></td>
                    <td class="s69"></td>
                    <td class="s70"></td>
                    <td class="s71"></td>
                    <td class="s71"></td>
                    <td class="s71"></td>
                    <td class="s71"></td>
                    <td class="s71"></td>
                    <td class="s71"></td>
                    <td class="s69"></td>
                    <td class="s69"></td>
                    <td class="s69"></td>
                    <td class="s69"></td>
                    <td class="s71"></td>
                    <td class="s71"></td>
                    <td class="s71"></td>
                    <td class="s71"></td>
                    <td class="s72">Total Line Stop :</td>
                    <td class="s73"></td>
                    <td class="s74"></td>
                    <td class="s75"></td>
                    <td class="s76">menit</td>
                </tr>
                <tr style="height: 20px;">
                </tr>
            </tbody>
        </table>
</div> 


<div class="ritz grid-container" dir="ltr" style="page-break-before: always;    ">
    <table class="waffle no-grid" cellspacing="0" cellpadding="0">
            <thead> 
                <tr style="height: 20px;">
                    <th id="298766174R34" style="height: 20px;" class="row-headers-background"><div class="row-header-wrapper" style="line-height: 20px;"></div></th>
                    <td class="s33" colspan="4" rowspan="3">CHECK ANALYSIS</td>
                    <td class="s77">CYCLE TIME</td>
                    <td class="s78"></td>
                    <td class="s79">1 Tangki = 15 menit</td>
                    <td class="s80"></td>
                    <td class="s79"></td>
                    <td class="s78"></td>
                    <td class="s78"></td>
                    <td class="s81"></td>
                    <td class="s81"></td>
                    <td class="s82"></td>
                    <td class="s77">EFFICIENCY</td>
                    <td class="s83"></td>
                    <td class="s84"></td>
                    <td class="s85">=</td>
                    <td class="s86">0.25 x T. Conveying / Running Hour x 100%</td>
                    <td class="s87"></td>
                    <td class="s79"></td>
                    <td class="s79"></td>
                    <td class="s79"></td>
                    <td class="s79"></td>
                    <td class="s78"></td>
                    <td class="s78"></td>
                    <td class="s88"></td>
                </tr>
                <tr style="height: 20px;">
                    <th id="298766174R35" style="height: 20px;" class="row-headers-background"><div class="row-header-wrapper" style="line-height: 20px;"></div></th>
                    <td class="s81"></td>
                    <td class="s81"></td>
                    <td class="s86">1 Tangki = 300 kg</td>
                    <td class="s80"></td>
                    <td class="s79"></td>
                    <td class="s78"></td>
                    <td class="s78"></td>
                    <td class="s81"></td>
                    <td class="s81"></td>
                    <td class="s82"></td>
                    <td class="s81"></td>
                    <td class="s81"></td>
                    <td class="s81"></td>
                    <td class="s89">=</td>
                    <td class="s2">0.25 x</td>
                    <td class="s90"></td>
                    <td class="s79">Conveying x 100%</td>
                    <td class="s79"></td>
                    <td class="s79"></td>
                    <td class="s78"></td>
                    <td class="s78"></td>
                    <td class="s81"></td>
                    <td class="s88"></td>
                </tr>
                <tr style="height: 20px;">
                    <th id="298766174R36" style="height: 20px;" class="row-headers-background"><div class="row-header-wrapper" style="line-height: 20px;"></div></th>
                    <td class="s71"></td>
                    <td class="s71"></td>
                    <td class="s91">1 Jam = 1.2 Ton</td>
                    <td class="s92"></td>
                    <td class="s93"></td>
                    <td class="s93"></td>
                    <td class="s71"></td>
                    <td class="s71"></td>
                    <td class="s71"></td>
                    <td class="s76"></td>
                    <td class="s71"></td>
                    <td class="s71"></td>
                    <td class="s71"></td>
                    <td class="s94">=</td>
                    <td class="s68"></td>
                    <td class="s71">%</td>
                    <td class="s71"></td>
                    <td class="s71"></td>
                    <td class="s71"></td>
                    <td class="s71"></td>
                    <td class="s71"></td>
                    <td class="s71"></td>
                    <td class="s95"></td>
                </tr>
            </thead>
            <tbody>    
                <tr style="height: 20px;">
                    <th id="298766174R37" style="height: 20px;" class="row-headers-background"><div class="row-header-wrapper" style="line-height: 20px;"></div></th>
                    <td class="s96" colspan="4">SHIFT</td>
                    <td class="s96" colspan="3">SIANG:</td>
                    <td class="s96" colspan="3">MALAM :</td>
                    <td class="s81"></td>
                    <td class="s89"></td>
                    <td class="s89"></td>
                    <td class="s81"></td>
                    <td class="s81"></td>
                    <td class="s81"></td>
                    <td class="s81"></td>
                    <td class="s81"></td>
                    <td class="s81"></td>
                    <td class="s81"></td>
                    <td class="s81"></td>
                    <td class="s81"></td>
                    <td class="s81"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="height: 20px;">
                    <th id="298766174R38" style="height: 20px;" class="row-headers-background"><div class="row-header-wrapper" style="line-height: 20px;"></div></th>
                    <td class="s97" colspan="3">ITEM</td>
                    <td class="s98">STD IL</td>
                    <td class="s97">JAM</td>
                    <td class="s99">IL</td>
                    <td class="s100">Rata2</td>
                    <td class="s97">JAM</td>
                    <td class="s99">IL</td>
                    <td class="s101">Rata2</td>
                    <td class="s78"></td>
                    <td class="s102"></td>
                    <td class="s103"></td>
                    <td class="s81"></td>
                    <td class="s81"></td>
                    <td class="s81"></td>
                    <td class="s81"></td>
                    <td class="s81"></td>
                    <td class="s81"></td>
                    <td class="s81"></td>
                    <td class="s81"></td>
                    <td class="s81"></td>
                    <td class="s81"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="height: 20px;">
                    <th id="298766174R39" style="height: 20px;" class="row-headers-background"><div class="row-header-wrapper" style="line-height: 20px;"></div></th>
                    <td class="s104" colspan="3" rowspan="2">PASIR FURNACE</td>
                    <td class="s6" rowspan="2">≤ 0.20</td>
                    <td class="s105"></td>
                    <td class="s105"></td>
                    <td class="s106" rowspan="2"></td>
                    <td class="s105"></td>
                    <td class="s105"></td>
                    <td class="s106" rowspan="2"></td>
                    <td class="s81"></td>
                    <td class="s107"></td>
                    <td class="s107"></td>
                    <td class="s81"></td>
                    <td class="s81"></td>
                    <td class="s81"></td>
                    <td class="s81"></td>
                    <td class="s81"></td>
                    <td class="s81"></td>
                    <td class="s108"></td>
                    <td class="s108"></td>
                    <td class="s108"></td>
                    <td class="s108"></td>
                    <td class="s109"></td>
                    <td class="s109"></td>
                    <td class="s109"></td>
                    <td class="s109"></td>
                </tr>
                <tr style="height: 20px;">
                    <th id="298766174R40" style="height: 20px;" class="row-headers-background"><div class="row-header-wrapper" style="line-height: 20px;"></div></th>
                    <td class="s105"></td>
                    <td class="s105"></td>
                    <td class="s105"></td>
                    <td class="s105"></td>
                    <td class="s81"></td>
                    <td class="s107"></td>
                    <td class="s107"></td>
                    <td class="s81"></td>
                    <td class="s81"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="s110"></td>
                    <td class="s111" colspan="2">Disetujui</td>
                    <td class="s111" colspan="2">Disetujui</td>
                    <td class="s111" colspan="2">Dicheck</td>
                    <td class="s111" colspan="2">Dibuat</td>
                </tr>
                <tr style="height: 20px;">
                    <th id="298766174R41" style="height: 20px;" class="row-headers-background"><div class="row-header-wrapper" style="line-height: 20px;"></div></th>
                    <td class="s104" colspan="3" rowspan="2">PASIR RECLAMER</td>
                    <td class="s6" rowspan="2">&lt; 0.13</td>
                    <td class="s105"></td>
                    <td class="s105"></td>
                    <td class="s106" rowspan="2"></td>
                    <td class="s105"></td>
                    <td class="s105"></td>
                    <td class="s106" rowspan="2"></td>
                    <td class="s81"></td>
                    <td class="s107"></td>
                    <td class="s107"></td>
                    <td class="s81"></td>
                    <td class="s81"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="s110"></td>
                    <td class="s81"></td>
                    <td class="s82"></td>
                    <td class="s81"></td>
                    <td class="s82"></td>
                    <td class="s81"></td>
                    <td class="s82"></td>
                    <td class="s81"></td>
                    <td class="s82"></td>
                </tr>
                <tr style="height: 20px;">
                    <th id="298766174R42" style="height: 20px;" class="row-headers-background"><div class="row-header-wrapper" style="line-height: 20px;"></div></th>
                    <td class="s105"></td>
                    <td class="s105"></td>
                    <td class="s105"></td>
                    <td class="s105"></td>
                    <td class="s81"></td>
                    <td class="s107"></td>
                    <td class="s107"></td>
                    <td class="s81"></td>
                    <td class="s81"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="s110"></td>
                    <td class="s81"></td>
                    <td class="s82"></td>
                    <td class="s81"></td>
                    <td class="s82"></td>
                    <td class="s81"></td>
                    <td class="s82"></td>
                    <td class="s81"></td>
                    <td class="s82"></td>
                </tr>
                <tr style="height: 20px;">
                    <th id="298766174R43" style="height: 20px;" class="row-headers-background"><div class="row-header-wrapper" style="line-height: 20px;"></div></th>
                    <td class="s104" colspan="3">GFN PASIR RECLAMER</td>
                    <td class="s6">59<span style="font-size: 11px; font-family: Calibri, Arial; color: #000000;">±1</span></td>
                    <td class="s105"></td>
                    <td class="s105"></td>
                    <td class="s106"></td>
                    <td class="s105"></td>
                    <td class="s105"></td>
                    <td class="s106"></td>
                    <td class="s81"></td>
                    <td class="s107"></td>
                    <td class="s107"></td>
                    <td class="s81"></td>
                    <td class="s81"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="s110"></td>
                    <td class="s81"></td>
                    <td class="s82"></td>
                    <td class="s81"></td>
                    <td class="s82"></td>
                    <td class="s81"></td>
                    <td class="s82"></td>
                    <td class="s81"></td>
                    <td class="s82"></td>
                </tr>
                <tr style="height: 20px;">
                    <th id="298766174R44" style="height: 20px;" class="row-headers-background"><div class="row-header-wrapper" style="line-height: 20px;"></div></th>
                    <td class="s5" colspan="2" rowspan="2">PASIR RCS</td>
                    <td class="s111">A</td>
                    <td class="s112">≤ 1.90</td>
                    <td class="s105"></td>
                    <td class="s105"></td>
                    <td class="s106"></td>
                    <td class="s105"></td>
                    <td class="s105"></td>
                    <td class="s106"></td>
                    <td class="s81"></td>
                    <td class="s107"></td>
                    <td class="s107"></td>
                    <td class="s81"></td>
                    <td class="s81"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="s110"></td>
                    <td class="s108"></td>
                    <td class="s113"></td>
                    <td class="s108"></td>
                    <td class="s113"></td>
                    <td class="s108"></td>
                    <td class="s113"></td>
                    <td class="s108"></td>
                    <td class="s113"></td>
                </tr>
                <tr style="height: 20px;">
                    <th id="298766174R45" style="height: 20px;" class="row-headers-background"><div class="row-header-wrapper" style="line-height: 20px;"></div></th>
                    <td class="s94">S TR</td>
                    <td class="s114">≤ 2.2</td>
                    <td class="s115"></td>
                    <td class="s115"></td>
                    <td class="s116"></td>
                    <td class="s115"></td>
                    <td class="s115"></td>
                    <td class="s116"></td>
                    <td class="s81"></td>
                    <td class="s107"></td>
                    <td class="s107"></td>
                    <td class="s81"></td>
                    <td class="s81"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="s110"></td>
                    <td class="s111" colspan="2">SH</td>
                    <td class="s111" colspan="2">LH</td>
                    <td class="s111" colspan="2">GH</td>
                    <td class="s111" colspan="2">OPR</td>
                </tr>
                <tr style="height: 20px;">
                </tr>
            </tbody>
        </table>
    </div> 
  