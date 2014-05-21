<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="">
    <!-- Bootstrap core CSS -->
    <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/main_styles.css">

	<title></title>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="container">
        <div class="main">
            <?php $this->load->view('layouts/_header') ?>
            <?php $this->load->view('layouts/_navigation') ?>
            <?php if($this->session->flashdata('error') != '') : ?>
                <div class="alert alert-error"><?= $this->session->flashdata('error') ?></div>
            <?php endif; ?>

            <?php if($this->session->flashdata('message') != '') : ?>
                <div class="alert alert-success"><?= $this->session->flashdata('message') ?></div>
            <?php endif; ?>         
        	<?= $body ?>
            <?php $this->load->view('layouts/_footer'); ?>
        </div>
    </div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<script>
if (!window.jQuery) {
    document.write('<script src="<?= base_url() ?>assets/vendor/jquery.js"><\/script>');
}
</script>
<script src="<?= base_url() ?>assets/js/main.js"></script>
<?php if (isset($additional_javascripts)): ?>
   <?php foreach ($additional_javascripts as $js_file): ?>
        <script src="<?= base_url() ?>assets/<?= $js_file ?>.js"></script>
    <?php endforeach; ?>
<?php endif; ?>    
</body>

</html>