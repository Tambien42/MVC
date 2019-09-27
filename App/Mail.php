<?php

namespace App;

use Mailgun\Mailgun;
use App\Config;

/**
 * Mail
 */
class Mail
{
	/**
	 * Send a message
	 *
	 * @param string $to recipient
	 * @param string $subject Subject
	 * @param string $text Text-only content of the message
	 * @param string $html HTML content of the message
	 *
	 * @return mixed
	 */
	public static function send($to, $subject, $text, $html)
	{
		# Instantiate the client.
		$mgClient = new Mailgun(Config::MAILGUN_API_KEY);
		$domain = Config::MAILGUN_DOMAIN;
		# Make the call to the client.
		$result = $mgClient->sendMessage($domain, array(
			'from'	=> 'fkchuc@gmail.com',
			'to'	=> $to,
			'subject' => $subject,
			'text'	=> $text
		));
	}
}
