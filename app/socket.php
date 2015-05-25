<?php

$args = explode(";", $_POST['body']);

// Send message
if(strtolower($args[0]) == "send"){
        WA::send($args[1], $args[2]);
        die;
}

// WA send Message
WA::send($_POST['from_no'], implode(", ", $_POST));
// Email::send([
// 	'to_email' => "rochim@lingkar9.com",
// 	'to_name' => "Rochim",
// 	'subject' => 'keren',
// 	'html' => json_encode($_POST),
// ]);