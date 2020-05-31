<script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script> 
<?php if(isset($scripts)):?>
    <?php foreach($scripts as $script): ?>
        <script src="<?= base_url() ?>assets/js/<?=$script?>.js"></script>
    <?php endforeach;?>
<?php endif;?>

<script>
  $( function() {
    $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
  } );
  
  $( function() {
    $( "#start_prod" ).timepicker({ dateFormat: 'yy-mm-dd' });
  } );
 
  $( function() {
    $( "#end_prod" ).timepicker({ dateFormat: 'yy-mm-dd' });
  } );
</script>