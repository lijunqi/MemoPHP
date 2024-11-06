<?php

$token = "Hello world!";
$token = "FTO-Some-Token";
#$token = base64_encode($token);

function encrypt($token)
{
    $cipher_method = 'aes-128-ctr';
    $enc_key = openssl_digest(php_uname(), 'SHA256', TRUE);
    $enc_iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($cipher_method));
    return openssl_encrypt($token, $cipher_method, $enc_key, 0, $enc_iv) . "::" . bin2hex($enc_iv);
}


function decrypt($cipher)
{
    $cipher_method = 'aes-128-ctr';
    list($cipher, $enc_iv) = explode("::", $cipher);;
    $enc_key = openssl_digest(php_uname(), 'SHA256', TRUE);
    return openssl_decrypt($cipher, $cipher_method, $enc_key, 0, hex2bin($enc_iv));
}

$ciphertext = encrypt($token);
echo "Encrypted token: $ciphertext\n";
$plaintext = decrypt($ciphertext);
echo "Decrypted token: $plaintext\n";

echo "1. =========================\n";
$ciphertext = base64_encode(encrypt($token));
echo "Encrypted token: $ciphertext\n";
$plaintext = decrypt(base64_decode($ciphertext));
echo "Decrypted token: $plaintext\n";


echo "2. =========================\n";
$b = base64_decode("UnZDMHlhZWYxcDB3Ty9iZXh0MHNraW4rZmExa3ZxOE5vT2p1OURrT000eFJiQUYzV29iQWRpdzEvczNtcGZiTktLUGZQZC9DZG9LSzlockE4Mmk5V3FvQ3gvUHhiaTBLeHQ0Y0pTQ1FrMGxWU3hNZUx4aHh3cVpmMmY0ekVRVm5JdGhEeTZkL3grN1QwNFdLdUZkOGtDb0ZaekdsYlRybGJybUJubEdtcmdFTStxQT06OjIwMmU5NTY2NjExOGJlZDg3MzIxMmNhMzJkOTMxYjlm");
echo "b = $b\n";


echo "uname: ".php_uname()."\n";
?>