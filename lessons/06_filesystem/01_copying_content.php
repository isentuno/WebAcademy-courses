<?php

function copyContent($fileSource, $fileTarget) {
    if (!file_exists($fileSource)) {
        error_log('File ' . $fileSource . ' does not found');
        return false;
    }

    $rh = fopen($fileSource, 'rb');
    $wh = fopen($fileTarget, 'wb');

    // error reading or opening file
    if ($rh === false || $wh === false) {
        error_log('Error reading ' . $fileSource . ' or ' . $fileTarget);
        return false;
    }
    flock($rh, LOCK_SH);
    flock($wh, LOCK_EX);

    while (!feof($rh)) {
        if (fwrite($wh, fread($rh, 1024)) === false) {
            error_log('Download error: Cannot write to file ' . $fileTarget);
            return false;
        }
    }

    flock($rh, LOCK_UN);
    flock($wh, LOCK_UN);

    fclose($rh);
    fclose($wh);
    // No error
    return true;
}

copyContent('./examples/input.txt', './examples/output.txt');
copyContent('./examples/output.txt', './examples/output2.txt');
