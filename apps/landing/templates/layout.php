<?php sfConfig::set('sf_web_debug', false); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<?php include_http_metas() ?>
<?php include_metas() ?>

<?php include_title() ?>

<link rel="shortcut icon" href="/favicon.ico" />

</head>
<body class="goninis">
  <div class="container_24">
    <div class="bg">&nbsp;</div>
    <?php echo $sf_data->getRaw('sf_content') ?>
    <iframe class="grid_11" width="425" height="240" src="http://www.youtube.com/embed/_mO79hZaA2s" frameborder="0" allowfullscreen></iframe>
  </div>
  <div class="footer">&nbsp;</div>
</body>
</html>
