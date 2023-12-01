<?php

function sanitize_powershell_cmd_bak($cmd)
{
    $sanitized_cmd = '';
    $arg_kv_list = explode("-", $cmd);
    foreach ($arg_kv_list as $arg_kv) {
        $kv = explode(" ", trim($arg_kv));
        printf("argkv: %s\n", $arg_kv);
        print_r($kv);
        if (count($kv) > 1) {
            $lower_k = strtolower($kv[0]);
            if (str_contains($lower_k, 'pass') || str_contains($lower_k, 'token')) {
                $sanitized_cmd .= "-" . $kv[0] . " *****";
            } else {
                $sanitized_cmd .= "-" . $arg_kv;
                printf("cmd = %s\n", $sanitized_cmd);
            }
        } else {
            $sanitized_cmd .= $arg_kv;
        }
    }
    return $sanitized_cmd;
}

function sanitize_powershell_cmd($cmd)
{
    //$sep = " -";
    //$sanitized_list = [];
    //$arg_kv_list = explode($sep, $cmd);
    //foreach ($arg_kv_list as $arg_kv) {
    //    $kv = explode(" ", $arg_kv);
    //    print_r($kv);
    //    if (count($kv) > 0)
    //    {
    //        $lower_k = strtolower($kv[0]);
    //        if (str_contains($lower_k, 'pass') || str_contains($lower_k, 'token')) {
    //            $sanitized_list[] = $kv[0] . " *****";
    //        } else {
    //            $sanitized_list[] = $arg_kv;
    //        }
    //    }
    //}
    //return implode($sep, $sanitized_list);

    $sep = " -";
        $sanitized_list = [];
        $arg_kv_list = explode($sep, $cmd);
        foreach ($arg_kv_list as $arg_kv)
        {
            $kv = explode(" ", $arg_kv);
            if (count($kv) > 0)
            {
                $lower_k = strtolower($kv[0]);
                if (str_contains($lower_k, 'pass') || str_contains($lower_k, 'token') || str_contains($lower_k, 'auth'))
                {
                    $sanitized_list[] = $kv[0] . " "."*****";
                }
                else
                {
                    $sanitized_list[] = $arg_kv;
                }
            }
        }
        return implode($sep, $sanitized_list);
}

$ps_cmd = "powershell -A 123 -B 456 -password xxx -C 789 -D";
$ps_cmd = 'powershell -ExecutionPolicy Unrestricted C:/Apache24/htdocs/environment_setup/scripts/PrepMain.ps1 -projectName "ft-optix" -productVersion Beta/1.3.0.825 -downloadFirmware "false" -runtimeName "Emulator" -designtimeName "NativeIDE" -testSupportServer1IP "10.220.4.217" -cameraIP "10.220.31.251" -iisServerIp "10.220.4.22" -iisServerRootfolder "\\10.220.4.22\inetpub\wwwroot" -iisServerUsername "10.220.4.22\webuser" -iisServerPassword "Um9ja3dlbGwxUm9ja3dlbGwx" -adTestServerAddress "10.220.4.218" -adTestServerUsername "Q049QWRtaW5pc3RyYXRvcixDTj1Vc2VycyxEQz1ta2UsREM9cmEsREM9cm9ja3dlbGwsREM9Y29t" -adTestServerPassword "UkFLQ0VjdmJ0ZW1wbGF0ZTE=" -adTestServerDomain "CVB-Lab-ADTest.mke.ra.rockwell.com" -Id "e2e-tests" -testTool "pytest" -trace_logs 0 -subsessionId 993380 -vieweimage "na" -envSetupDirectory "C:/Apache24/htdocs/environment_setup"';
echo sanitize_powershell_cmd($ps_cmd) . "[Done]\n";
echo "======\n";
echo $ps_cmd;
