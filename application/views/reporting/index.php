<html>

    <form method="POST" action="<?php echo base_url('report/report-daily') ?>">
        <div class="form-group">
            <label>Shift</label>
            <input type="text" class="form-control" name="shift">
        </div>
        <div class="form-group">
            <label>Color</label>
            <input type="text" class="form-control" name="color">
        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="text" class="form-control datemask" placeholder="YYYY-MM-DD" name="datetime">
        </div>
        <button class="btn btn-primary mr-1" type="submit">Submit</button>
    </form>
    
</html>																			
                        


																										
																										
																										

