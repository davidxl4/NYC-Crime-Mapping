<?php

// Variables
$api_url = 'https://data.cityofnewyork.us/resource/wkd5-g5vv.json';

// Get the data
$json = file_get_contents($api_url);

// Decode the JSON
$data = json_decode($json, true);