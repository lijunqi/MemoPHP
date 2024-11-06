<?php

$use_com = false;

if ($use_com) {
    $exec = new COM("WScript.Shell");
    // * [Async]NOT wait for exit
    //$exec->Run("cmd /C gvim.exe", 0, false);
    $exec->Exec("cmd /C gvim.exe");
    //$exec->Run("php.exe -S localhost:4567", 0, false);
}
else {
    // * [Sync]wait for exit
    $output = null;
    $retval = null;
    //exec('php.exe -S localhost:6789');
    //exec('ping 127.0.0.1 -n 3', $output, $retval);
    exec('C:\Users\JLi21\Downloads\psftp_download.cmd _maintenance.txt', $output, $retval);
    echo "output: \n";
    print_r($output);
    echo "retval: $retval\n";
}

echo "Done";

?>