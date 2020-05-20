<div class="centered">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5 px-2">
                <h2 class="ml-5">Report Automation</h2>
            </div>
            <div class="col-12"> 
                <form method="POST" action="<?= base_url('report/report-daily') ?>">
                    <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
                    <div class="form-group row">
                        <label class="col-2">Shift</label> 
                        <select class="form-control col-10" id="exampleFormControlSelect1">
                            <option value="pagi">Pagi</option>
                            <option value="malam">Malam</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-2">Color</label> 
                        <div class="col-10 pl-0">
                            <div class="form-check form-check-inline mr-3 btn btn-danger">
                                <input class="form-check-input" type="radio" name="color" id="red" value="red" checked>
                                <label class="form-check-label" for="red">RED</label>
                            </div>
                            <div class="form-check form-check-inline btn btn-secondary">
                                <input class="form-check-input" type="radio" name="color" id="white" value="white">
                                <label class="form-check-label" for="white">WHITE</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2">Date</label>
                        <input type="text" class="form-control col-10" id="datepicker" placeholder="yyyy-mm-dd" name="datetime"> 
                    </div>
                    <div class="row">
                        <label class="col-2"></label>
                        <div class="col-10 px-0">
                            <button class="btn btn-primary btn-block" type="submit">Generate</button>
                        </div>
                    </div>
                </form>			
            </div>
        </div>		
    </div>										
</div> 

																										
																										
																										

