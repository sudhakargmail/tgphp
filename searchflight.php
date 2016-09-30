<?php
// parameters
$hubVerifyToken = 'mymessengertoken';
$accessToken = "EAAZAmqcuBqGoBAK13SY5H4KU7DnceRuBeOB8ymQqv5pufsqkTRl4gyXu2VVb7HfqbuWpA0lXtUio5sZARHS5RRX8d2Yf6G6UZBckHZBrZAiWZC7ZCzUnyrsRoJ6PzFnxIAwZCtku2fA9Y9aIZBDZBRM6ZA251lAuTvss9aLFsVL1hZCSdQZDZD";

// check token at setup
if ($_REQUEST['hub_verify_token'] === $hubVerifyToken) {
  echo $_REQUEST['hub_challenge'];
  exit;
}


String response = "{'messagingProvider': 'FACEBOOK', 'chatKey': '3648b2a2-1aee-4d5a-7ef4-13a0aa441cb1', 'attributes': {'redeye': true,                'twoWay': true}, 'departDateMax': '2016-05-31T00:00:00', 'departDateMin': '2016-05-31T00:00:00', 'returnDateMax': '2016-06-03T00:00:00', 'returnDateMin': '2016-06-03T00:00:00', 'origin': {'airports': ['LHR', 'LGW', 'LCY', 'STN'],            'allAirportsCode': 'LON',            'geoid': 2643743,            'latitude': 51.50853,            'longitude': -0.12574,            'name': 'London, United Kingdom',            'type': 'City'}, 'destination': {'airports': ['SVO', 'DME', 'VKO', 'BKA'],                 'allAirportsCode': 'MOW',                 'geoid': 524901,                 'latitude': 55.75222,                 'longitude': 37.61556,                 'name': 'Moscow, ussia',                 'type': 'City'}, 'travelers': {'adult': 3}}";


echo response;