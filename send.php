<?php
Header("Content-Type: text/html; charset=utf8");

	if (isset($_POST[subject])){
		$subject = $_POST[subject];

		$message = '
		<html>
			<body>';
		$message .= '
				<b>Тема: </b> '.$_POST[subject].'<br>
				<b>Имя: </b> '.$_POST[name].'<br>
				<b>Телефон: </b> '.$_POST[phone];
		$message .= '
			</body>
		</html>';


		$to = 'info@mail.ru';

		$headers  = "Content-type: text/html; charset=utf-8 \r\n";
		$headers .= "From: Water <noreply@site.com>\r\n";


		mail($to, $subject, $message, $headers);
	}

?>