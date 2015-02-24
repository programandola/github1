

<h1>Formularios en Codeigniter !!!</h1>

<?php
$atributos = array('id' => 'miformulario','name'=>'form');

//echo form_open(null, $atributos);
//para envió de archivos
//se puede indicar la ruta o manejarlo en null para que cargue en la misma pagina
echo form_open_multipart(null, $atributos);?>
<p>Campo Oculto:<?php echo form_hidden('id', 'prueba');?></p>
<?php
$datos = array(
              'name'        => 'username',
              'id'          => 'username',
              'maxlength'   => '100',
            );
//se pasa como tercer parametro los javascript
$js = 'onClick="alguna_funcion()"';
?>

<p>Campo de tipo input text:<?php echo form_input($datos,'', $js); ?></p>

<?php
$datos1 = array(
              'name'        => 'pass',
              'type' 		=> 'password',
              'id'          => 'pass',
              'maxlength'   => '100',
            );
?>

<p>Campo de tipo input password:<?php echo form_password($datos1); ?></p>

<?php
$datos1 = array(
              'name'        => 'archivo',
              'type' 		=> 'file',
              'id'          => 'archivo',
              'maxlength'   => '100',
            );
?>

<p>Campo de tipo file:<?php echo form_upload($datos1); ?></p>

<?php
$datos1 = array(
              'name'        => 'text',
              'type' 		=> 'textarea',
              'id'          => 'text',
              'rows'   		=> '5',
              'cols'	 	=> '20',
            );
?>

<p>Campo de tipo textarea:<?php echo form_textarea($datos1); ?></p>

<p>Campo de tipo select<select id="estados" name="estados">
	<option value="1">México</option>
	<option value="2">Guadalajara</option>
	<option value="3">Estado de México</option>
	<option value="4">Chiapas</option>
</select></p>

<?php

echo form_submit('mienvio', 'Enviar mensaje!');
?>

<?php echo form_close(); ?>


