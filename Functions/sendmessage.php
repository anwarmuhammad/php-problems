<?php

$contact_lists = array("1", "2", "3");
$message = "I have some important message for u";

function send_msg($number, $msg = "Important Notification") {

	echo $number . $msg . "<br>";

}

foreach ($contact_lists as $contact_list) {

	send_msg($contact_list);
}
