<?php
// parameters
$hubVerifyToken = 'mymessengertoken';
$accessToken = "EAAZAmqcuBqGoBAK13SY5H4KU7DnceRuBeOB8ymQqv5pufsqkTRl4gyXu2VVb7HfqbuWpA0lXtUio5sZARHS5RRX8d2Yf6G6UZBckHZBrZAiWZC7ZCzUnyrsRoJ6PzFnxIAwZCtku2fA9Y9aIZBDZBRM6ZA251lAuTvss9aLFsVL1hZCSdQZDZD";

// check token at setup
if ($_REQUEST['hub_verify_token'] === $hubVerifyToken) {
  echo $_REQUEST['hub_challenge'];
  exit;
}

// handle bot's anwser
$input = json_decode(file_get_contents('php://input'), true);

$senderId = $input['entry'][0]['messaging'][0]['sender']['id'];
$messageText = $input['entry'][0]['messaging'][0]['message']['text'];


$answer = "I don't understand. Ask me 'hi'.";
if($messageText == "hi") {
    $answer = "Here are three search results:";
}

$response = [
    'recipient' => [ 'id' => $senderId ],
    'message' => [ 'text' => $answer ]
];
$ch = curl_init('https://graph.facebook.com/v2.6/me/messages?access_token='.$accessToken);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($response));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_exec($ch);
curl_close($ch);

//based on http://stackoverflow.com/questions/36803518