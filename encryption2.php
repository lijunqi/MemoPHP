<?php

$AGENT_VER = "20240507.01";
$ENC_KEY = "testcenter";

#function encryptText($plaintext, $enc_key=null, $cipher_method="aes-128-ctr")
#{
#    if ($plaintext == "")
#    {
#        return $plaintext;
#    }
#    if (is_null($enc_key))
#    {
#        $enc_key = $ENC_KEY;
#    }
#    $enc_key = openssl_digest($enc_key, 'SHA256', TRUE);
#    $enc_iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($cipher_method));
#    return openssl_encrypt($plaintext, $cipher_method, $enc_key, 0, $enc_iv) . "::" . bin2hex($enc_iv);
#}

/**
 * Decrypt cipher text
 * @param string $ciphertext
 * @param string $enc_key. Encryption key. Get it from DB by default.
 * @param string $cipher_method. Default is AES-128-CTR
 * @return string plaintext
 */
function decryptText($ciphertext, $enc_key=null, $cipher_method="aes-128-ctr")
{
    if ($ciphertext == "")
    {
        return $ciphertext;
    }
    $enc_key = "testcenter";
    $enc_key = openssl_digest($enc_key, 'SHA256', TRUE);
    list($crypted_token, $enc_iv) = explode("::", $ciphertext);
    echo $crypted_token."\n";
    echo $enc_iv."\n";
    return openssl_decrypt($crypted_token, $cipher_method, $enc_key, 0, hex2bin($enc_iv));
}

/**
 * Encrypt session variables for agent. Base64 encoding for sending data to agent.
 * @param string $project_id
 * @return array
 */
#function encryptSessionVariablesForAgent($project_id)
#{
#    $ret = array();
#    $new_key = base64_encode($AGENT_VER);
#    $enc_key = $ENC_KEY;
#    foreach (ORM::factory('session_variable')->where('project_id','=',$project_id)->find_all() as $sv)
#    {
#        $ret[$sv->name] = base64_encode(encryptText($sv->value.":::$enc_key", $new_key));
#    }
#    return $ret;
#}

/**
 * Decrypt session/user variables for agent.
 * @param array $variables session_variables or user_variables
 * @param string $new_enc_key. Encryption key.
 * @param string $cipher_method. Default is AES-128-CTR
 * @return array array of session variables with plaintext value
 */
function decryptVariablesForAgent($variables, $new_enc_key, $cipher_method="aes-128-ctr")
{
    $ret = array();
    foreach ($variables as $key => $val)
    {
        $inner_ciphertext = decryptText($val, $new_enc_key, $cipher_method);
        echo "inner_ciphertext: ".$inner_ciphertext."\n";
        list($crypted_text, $enc_key) = explode(":::", $inner_ciphertext);
		$ret[$key] = decryptText($crypted_text, $enc_key, $cipher_method);
    }
    return $ret;
}

$a = array(
    "0" => "fPo60xDcQSTwtqjCUxU=::f4bca9437d58b99e817f74ffaadd60d6",
    //"1" => "5qQ5V6dOGoXG09yNwBvzhA==::78ee5edabc10f70e1dad20d55dc5fed5",
    //"2" => "RIdCo8R+x1+NBYTJwMBs3TIB/achX6m+lJUIqTeYg3sDDbHjQkc8kizdWGV9kBiCPfHrcn9iW7i0d/qdL/Weogg1dQnbVonfOA==::0e2498a9fa07e9601b549601aad4b14f",
    //"3" => "pXJB5HlTQQ==::7744f3849c1567425ecf34301d096447",
);

$result = decryptVariablesForAgent($a, $AGENT_VER);
foreach ($result as $k => $v)
{
    echo "k = $k, v = $v\n";
}

/**
 * Encrypt user session variables for agent. Base64 encoding for sending data to agent.
 * @param string $user_id
 * @return array
 */
#function encryptUserSessionVariablesForAgent($user_id)
#{
#    $ret = array();
#    $new_key = base64_encode($AGENT_VER);
#    $enc_key = $ENC_KEY;
#    foreach (ORM::factory('usersessionvariable')->where('user_id','=',$user_id)->find_all() as $uv)
#    {
#        $ret[$uv->name] = base64_encode(encryptText($uv->value.":::$enc_key", $new_key));
#    }
#    return $ret;
#}
?>