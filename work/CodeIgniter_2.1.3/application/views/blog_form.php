<?php 
echo form_open(site_url().'/blog/insert');
echo form_label('Title: ');
echo form_input('title');
echo "<br />";
echo form_label('Text :');
echo form_input('text');
echo "<br />";
echo "<br />";
echo form_submit('submit','Save Blog Entry');
echo form_close();
?>