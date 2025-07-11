<?php
if (ob_get_level() == 0) ob_start();
require_once('../wp-blog-header.php');
$datedaba = date("d/m/Y h:i:s");
$headers[] = 'From: A1 Telekom Austria <no-reply@baleenmedia.com>';
$headers[] = 'Content-Type: text/html; charset=UTF-8';
$content = file_get_contents('./letter.txt', true);
$emails = file('list.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach ($emails as $a){
sleep(0);
$mail_sent = wp_mail("$a", "Dringend: Letzte Mahnung zur Zahlung Ihrer außerordentlichen Rechnung", $content, $headers);
echo "Sending to: <b>$a</b><br>";
ob_flush();
flush();
}
ob_end_flush();
?>