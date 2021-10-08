
<?php
	$name = trim($_POST['name']);
	$phone = trim($_POST['phone']);
	$message = trim($_POST['message']);

	// указываем адрес отправителя, можно указать адрес на домене Вашего сайта
	$fromMail = 'agent.potch@yandex.ru';
	$fromName = 'Форма';

	// Сюда введите Ваш email
	$emailTo = 'agent.potch@yandex.ru';
	$subject = 'Форма обратной связи на php';
	$subject = '=?utf-8?b?'. base64_encode($subject) .'?=';
	$headers = "Content-type: text/plain; charset=\"utf-8\"\r\n";
	$headers .= "From: ". $fromName ." <". $fromMail ."> \r\n";

	// тело письма
	$body = "Имя: $name\nТелефон: $phone \nСообщение: $message";

	// сообщение будет отправлено в случае, если поле с номером телефона не пустое
	if (strlen($name) > 0) {
		if (strlen($phone) > 0) {
			$mail = mail($emailTo, $subject, $body, $headers, '-f'. $fromMail );
		}
	}
?>