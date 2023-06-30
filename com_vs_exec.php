<?php

$use_com = true;

if ($use_com) {
    $exec = new COM("WScript.Shell");
    // * [Async]NOT wait for exit
    //$exec->Run("cmd /C gvim.exe", 0, false);
    $exec->Exec("cmd /C gvim.exe");
    //$exec->Run("php.exe -S localhost:4567", 0, false);
}
else {
    // * [Sync]wait for exit
    //exec('php.exe -S localhost:6789');
    exec('ping 127.0.0.1 -n 10>nul');
}

echo "Done";

?>