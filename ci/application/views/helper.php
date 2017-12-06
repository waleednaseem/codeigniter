<?php

echo heading('this is heading');


echo form_open();
echo form_label('First Name','name');
$forminfo =array('placeholder'=>'type your name here');
echo form_input($forminfo);
echo "<br><br>";
echo form_label('Password','password');
echo form_password('password');


echo form_close();

?>