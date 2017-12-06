<!DOCTYPE html>
<html>
<head>
	<title>insert record</title>
</head>
<body>
<?php


echo heading('Insert your record here',4);
echo "<br>";
echo form_open('insert/submitted');
echo form_label('Books','book');
echo form_input('name');
echo "<br>";

echo form_label('Author','author');
echo form_input('author');
echo "<br>";

echo form_submit('submit','save');
echo form_close();

?>
</body>
</html>
