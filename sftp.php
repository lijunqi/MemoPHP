<?php
echo PHP_INT_SIZE;

print_r(get_loaded_extensions());

$ftp_server = "10.220.4.20";
$ftp_user = "Rockwell";
$ftp_pass = "Welcome1";

#$connection = ssh2_connect('10.220.4.20', 22);
#ssh2_auth_password($connection, 'Rockwell', 'Welcome1');
#$sftp = ssh2_sftp($connection);
#$stream = fopen('ssh2.sftp://' . intval($sftp) . '/path/to/file', 'r');


// set up basic ssl connection
$ftp = ftp_ssl_connect($ftp_server);

// login with username and password
$login_result = ftp_login($ftp, $ftp_user, $ftp_pass);

if (!$login_result) {
    // PHP will already have raised an E_WARNING level message in this case
    die("can't login");
}

echo ftp_pwd($ftp);

// close the ssl connection
ftp_close($ftp);

?>
