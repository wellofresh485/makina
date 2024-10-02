<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization");

function modifyUrl($url) {
    // Replace 'https' with '333'
    $url = str_replace('https', '333', $url);
    
    // Replace '.' with '222'
    $url = str_replace('.', '222', $url);
    
    return $url;
}

function generateRandomMD5() {
    // Generate a unique ID with more entropy
    $randomString = uniqid(mt_rand(), true);

    // Convert the unique string to an MD5 hash
    $md5Hash = md5($randomString);

    return $md5Hash;
}

function generateRandomNumber($minLength, $maxLength) {
    // Generate a random length between the given min and max
    $length = mt_rand($minLength, $maxLength);

    // Generate a random number with the specific length
    $randomNumber = mt_rand(pow(10, $length - 1), pow(10, $length) - 1);

    return $randomNumber;
}


function generateRandomString() {
    // Define the character set
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    // Random length between 4 and 5
    $length = random_int(4, 5);
    
    // Shuffle the characters and return a substring of the desired length
    return substr(str_shuffle($characters), 0, $length);
}

$stt= generateRandomString();


// Example usage:
$randomMD5 = generateRandomMD5();
$randomNum = generateRandomNumber(7, 9);  // Generate a random number between 4 and 7 digits

$originalUrl = "https://pack-" . $stt . ".l3bk.com/#" . $randomMD5;
$modifiedUrl = modifyUrl($originalUrl);

echo $modifiedUrl;

?>
