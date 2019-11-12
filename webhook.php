<?php

///////////////////////////////////////////////////////
// Zoom Cloud Recording download sample (Webhook)
// Written by yosuke.sawamura@zoom.us
// jwt.php will be needed to generate individual token
// wget is used help download recordings 
///////////////////////////////////////////////////////

$requestMethod = $_SERVER['REQUEST_METHOD'];

switch($requestMethod) {
    case 'POST':
        $body = file_get_contents("php://input");
        WriteToLog($body);

        $obj = json_decode($body, true);
        $event = $obj['event'];
        if($event == 'recording.completed')
            DownloadFile($body);
    break;
    case 'GET':
        WriteToLog("Got GET");
    break;
    default:
 }

function WriteToLog($a){
    $file = fopen('webhook.log', 'a') or die(print_r(error_get_last(),true));
    fwrite($file, $a . "\n");
    fclose($file);
};

function DownloadFile($v){
    
    $api_key = 'Bho3ffivQ4y7FcMKfVcB9w';                    // <----- USE YOUR KEY FROM MARKET PLACE
    $api_secret = 'jDv7WfNHkoL4s1GkDMPV1xnHIBhjVFBwVknq';   // <----- USE YOUR SECRET FROM MARKET PLACE 
    $exp = strtotime("+ 90 minutes");
    
    $obj = json_decode($v, true);
    
    //////// CHECK EVENT VAL AND PASS TO DOWNLOAD //////
    $url = $obj['payload']['object']['recording_files'][0]['download_url'];
    $fname = $obj['payload']['object']['id'];
    $genToken = genToken($api_key, $api_secret, $exp);

    $url2 = $url . '?access_token=' . $genToken;
        
    saveFile($fname, $url2);
}

////////// GENERATE TOKEN ///////////
function genToken($aa, $bb, $cc){
    require_once('jwt.php');
    
    $payloadArray = array();
    $payloadArray['iss'] = $aa;
    
    if (isset($cc)) {$payloadArray['exp'] = $cc;}
    
    $token = JWT::encode($payloadArray, $bb);
    return $token;
}

////////// SAVE FILE FROM ZOOM ///////////
function saveFile($a, $b){
    shell_exec('wget '  . $b . ' -O ./download/' . $a . '.mp4');
    echo 'done.';
}

?>
