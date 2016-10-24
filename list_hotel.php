<?php
require 'core/init.php';
$db = Db::getInstance();
$hotels = $db->query("SELECT * FROM hotel");
if($hotels->results())
{
	echo '<option value="">Please Select</option>';
	foreach($hotels->results() as $hotel)
	{
		echo '<option value="'.$hotel->hotel_id.'">'.$hotel->hotel_location.'</option>';
	}
}

