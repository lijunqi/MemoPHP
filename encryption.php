<?php

$token = "Hello world!";

$cipher_method = 'aes-128-ctr';
$enc_key = openssl_digest(php_uname(), 'SHA256', TRUE);
$enc_iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($cipher_method));
$crypted_token = openssl_encrypt($token, $cipher_method, $enc_key, 0, $enc_iv) . "::" . bin2hex($enc_iv);

echo "Encrypted token: $crypted_token\n";

list($crypted_token, $enc_iv) = explode("::", $crypted_token);;
$cipher_method = 'aes-128-ctr';
$enc_key = openssl_digest(php_uname(), 'SHA256', TRUE);
$plaintext = openssl_decrypt($crypted_token, $cipher_method, $enc_key, 0, hex2bin($enc_iv));
echo "Plaintext token: $plaintext\n";

?>