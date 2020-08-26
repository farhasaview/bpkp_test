<?php 
 
// $cookie_value = $_POST['file'];

// ambil data cookie yang telah di enkrip valuenya ambilkan atas nama cookie FebiArisRinaldi
$cookie_value = $_COOKIE['FebiArisRinaldi'];
// key untuk konfirmasi sebagai kunci saat mengirim
$key = pack('H*', "bcb04b7e103a0cd8b54763051cef08bc55abe029fdebae5e1d417e2ffb2a00a3");
// algoritma
$iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_ECB);
$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
$ciphertext_dec = base64_decode($cookie_value);
$iv_dec = substr($ciphertext_dec, 0, $iv_size);
$ciphertext_dec = substr($ciphertext_dec, $iv_size);
$plaintext_dec = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, $ciphertext_dec, MCRYPT_MODE_ECB, $iv_dec);
echo  $plaintext_dec;
 
?>