
<!DOCTYPE html>
<html>
<head>
	<title>email form</title>
</head>
<body>
<?php  
echo form_open('Email/sent');

echo form_label('name');
echo form_input('name');
echo "<br>";
echo form_label('from');
echo form_input('from');
echo "<br>";
echo form_label('subject');
echo form_input('subject');
echo "<br>";
echo form_label('message');
$data =array(
	'name'=> 'textarea',
	'rows'=> 5,
	'col'=>32
	);

echo form_textarea($data);
echo "<br>";
echo form_submit('submit','sent email');
echo form_close();
?>
</body>
</html>