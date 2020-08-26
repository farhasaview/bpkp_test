<?php 
 
// set nama cookie
$cookie_name = 'FebiArisRinaldi';
// nama file
$cookie_value = $_FILES['file']['name'];
// key untuk konfirmasi sebagai kunci saat mengirim
$key = pack('H*', "bcb04b7e103a0cd8b54763051cef08bc55abe029fdebae5e1d417e2ffb2a00a3");
// nilai yang dikirim
$plaintext = $cookie_value;
// algorima
$iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_ECB);
$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
$ciphertext = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $plaintext, MCRYPT_MODE_ECB, $iv);
$ciphertext = $iv . $ciphertext;
$ciphertext_base64 = base64_encode($ciphertext);
// hasil enkrip disimpan di cookie
setcookie($cookie_name, $ciphertext_base64, time() + (86400 * 30), "/"); // 86400 = 1 day

// mengalihkan halaman kembali ke halaman inputan
header("location:belajarEnkripsiCookie.php");
 
?>