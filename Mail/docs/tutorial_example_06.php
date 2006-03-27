<?php
include( "tutorial_autoload.php" );

$mail = new ezcMail();
$mail->from = new ezcMailAddress( 'sender@example.com', 'Norwegian characters: ���', 'iso-8859-1' );
$mail->addTo( new ezcMailAddress( 'reciever@example.com', 'More norwegian characters: ���', 'iso-8859-1' ) );
$mail->subject = 'Oslo ligger s�r i Norge og har v�rt landets hovedstad i over 600 �r.';
$mail->subjectCharset = 'iso-8859-1';

$mail->body = new ezcMailText( 'Oslo be grunnlagt rundt 1048 av Harald Hardr�de.', 'iso-8859-1' );

$transport = new ezcMailMtaTransport();
$transport->send( $mail );

?>
