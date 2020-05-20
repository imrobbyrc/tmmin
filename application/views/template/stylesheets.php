<link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<?php if(isset($stylesheets)):?>
    <?php foreach($stylesheets as $stylesheet): ?>
        <link href="<?= base_url() ?>assets/css/<?=$stylesheet?>.css" rel="stylesheet">
    <?php endforeach;?>
<?php endif;?>