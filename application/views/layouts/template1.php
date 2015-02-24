<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title><?php echo $this->layout->getTitle(); ?></title>
    
		<meta name="description" content="<?php echo $this->layout->getDescripcion(); ?>">

		<meta name="keywords" content="<?php echo $this->layout->getKeywords(); ?>" />
    <link href="<?php echo base_url()?>public/css/estilos.css" rel='stylesheet' type='text/css' media='all' />
  
        <!--*************auxiliares*****************-->

<?php echo $this->layout->css; ?> 

<?php echo $this->layout->js; ?> 

<!--**********fin auxiliares*****************-->
</head>

<body>

<?php echo $content_for_layout; ?>

</body>
</html>