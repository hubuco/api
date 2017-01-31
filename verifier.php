<?php 

// api key provided by HuBuCo
$api_key = '';

// email to verify
$email = '';
	
$api_url = 'https://api.hubuco.com/api/v2/?api='.$api_key.'&email='.$email;
	
$result = file_get_contents($api_url);

if(isset($result))
	{
		switch ($result)
		{
		case 'ok':
			// The email address exists.
			echo $email . ' exists';
			break;

		case 'catch_all':
			// The email server is set to catch all.
			echo $email . '\'s email server is set to catcha all emails';
			break;

		case 'invalid':
			// The email address doesn't exist.
			echo $email . ' is not an existing email address';
			break;

		case 'unknown':
			// The email server do not allow to check this email.
			echo $email . ' is unknown';
			break;

		case 'invalid_api':
			// You have used an invalid API key
			echo 'invalid API key used';
			break;
		
		case 'no_credit':
			// You don't have any credits left in your account.
			echo 'you don\'t have enough credits to perform this API call';
			break;

		case 'error_1':
			// An internal error. Please try later.
			echo 'internal error';
			break;

		case 'error_0':
			// An internal error. Please try later.
			echo 'internal error';
			break;

		case 'no_email':
			// Email address is missing from your link.
			echo 'email parameter missing';
			break;

		default:
			break;
			}
	}
