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
</style>   
<div class="ritz grid-container" dir="ltr">
        <table class="waffle no-grid table" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <?php for ($i=0; $i < 21; $i++):?>
                        <td style="border-color:#fff!important;border-bottom:#000!important"></td>
                    <?php endfor;?>
                </tr>
                <tr class="text-center vc">
                    <td colspan="3" rowspan="3" class="text-center vc">
                        <h3><strong>PT. TMMIN</strong></h3>
                        <h3>Casting Division</h3>
                        <h3>Produksi II</h3>
                    </td>
                    <td colspan="12" rowspan="3" class="text-center vc">
                        <p><strong><h1>Laporan Produksi dan Check Temperature Furnace</h1></strong></p>
                        <p><h1><strong>CKS - AZC300 - RC015</strong> (REPORT AUTO GENERATE)</h1></p>
                    </td>
                    <td colspan="3">
                        <p>Hari / Tanggal</p>
                    </td>
                    <td colspan="2">
                        <p><?= date('D / d-m-Y ',strtotime($datetime))?></p>
                    </td>
                </tr>
                <tr class="text-center vc">
                    <td colspan="2">
                        <p>PIC</p>
                    </td>
                    <td colspan="3">
                        <p>Shift</p>
                    </td>
                </tr>
                <tr class="text-center vc">
                    <td colspan="2" class="p-0">
                        <p><input type="text" style="max-width:70px" name="pic_name" value="<?= @$pic_name ?>"/></p>
                    </td>
                    <td colspan="1"><p><?= strtoupper($color) ?></p></td>
                    <td colspan="2"><p><?= strtoupper($shift) ?></p></td>
                </tr>
                <tr class="text-center vc">
                    <td colspan="20" class="p-0">
                        <br>
                        <p><strong><h1>LAMPIRAN FOTO AND VISUAL SAMPLING CHECK</h1></strong></p>
                        <br>
                    </td> 
                </tr>
                <tr class="text-center vc">
                    <td class="p-0">
                        <p>Jam</p>
                    </td>
                    <td colspan="10" class="p-0">
                        <p>Lampiran Foto</p>
                    </td>
                    <td colspan="6" class="p-0">
                        <p>Standard Perbandingan</p>
                    </td>
                    <td colspan="3" class="p-0">
                        <p>Judgement</p>
                    </td>
                </tr>
            </thead>
            <tbody>
                <?php for ($i=0; $i < 21; $i++):?>
                    <tr class="text-center vc">
                        <td class="p-0">
                            <p>hh:mm:ss</p>
                        </td>
                        <td colspan="10" class="p-0">
                        </td>
                        <td colspan="6" class="p-0">
                        </td>
                        <td colspan="3" class="p-0">
                        </td>
                    </tr>
                <?php endfor;?>
            </tbody>
        </table>
    </div>