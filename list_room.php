<?php
require 'core/init.php';
if($_POST['id'])
{
	$hotel_id = $_POST['id'];
	$db = Db::getInstance();
	$rooms = $db->query("SELECT * FROM room_type WHERE hotel = $hotel_id");

	foreach($rooms->results() as $room)
	{
		echo '<option value="'.$room->room_id.'">'.$room->room.'</option>';
	}
}