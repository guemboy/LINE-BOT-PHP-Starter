<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

//include ('line-bot-api/php/line-bot.php');

$channelSecret = 'e797689c9f1df5a32be4239b79dda174';
$access_token  = '94BkkcvLjVdd4fgFBpI8+IXfz2yCJbI4lij8EZojyCl+R92y6ZxqrEAbTtC8Ld9tFVhCAi6fa7YVYWJMSvWRqFaB/xNY2ziWMCk04yWXeLlH3IkNxeqMVe578CuZXmafInpy/+iQcXJCXv2glcvnugdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();

}
