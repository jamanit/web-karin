<?php
function play_audio($filepath)
{
    if (!file_exists($filepath)) {
        http_response_code(404);
        die('File not found.');
    }

    header('Content-Type: audio/mpeg');
    header('Content-Disposition: inline; filename="' . basename($filepath) . '"');
    header('Accept-Ranges: bytes');
    header('Content-Length: ' . filesize($filepath));

    readfile($filepath);
}

$filepath = 'default-audio.mp3';
play_audio($filepath);
