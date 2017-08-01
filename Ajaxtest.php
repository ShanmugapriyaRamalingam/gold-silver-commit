
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php 
	$link	= 	base_url();
	$data = array(
	        3  =>  $link.'index.php/Area_demo',
	        7  => 'http://example.com/news/article/2006/06/07/',
	        13 => 'http://example.cjkjom/news/article/2006/06/13/',
	        26 => 'http://examffgfple.com/news/article/2006/06/26/'
	);
	//echo $this->calendar->generate(2006, 6, $data);
 ?>
<body>
	<?php echo $error;?> 
	<?php echo form_open_multipart('Calender_demo/do_upload');?> 
		<form name="show" method="post">
					<?php /*<label>Enter Mail</label>
					<input type="email" name="email_to"></input>
					<input type="submit" name="submit">*/?>
					<input type = "file" name = "userfile" size = "20" /> 
         			<br /><br /> 
                    <input type = "submit" value = "upload" /> 
                    <h3>Your file was successfully uploaded!</h3>
<!-- Uploaded file specification will show up here -->
<ul>
<?php foreach ($upload_data as $item => $value):?>
<li><?php echo $item;?>: <?php echo $value;?></li>
<?php endforeach; ?>
</ul>
<p><?php echo anchor('Calender_demo', 'Upload Another File!'); ?></p>
		</form>
</body>
</html>
