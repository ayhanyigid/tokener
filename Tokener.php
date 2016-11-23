<?php

class Tokener
{
	private $key    = 'yusufkagan';
	public  $string = 'www.yuhhu.net'; 

	public function __construct()
	{
		if (empty($this->key)) {
			throw new Exception("The key is empty");						
		}
	}

	public function encrypt()
	{
		return base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($this->key), $this->string, MCRYPT_MODE_CBC, md5(md5($this->key))));
	}


	public function decrypted($encrypted)
	{
		if (empty($encrypted)) {
			throw new Exception("The encrypted key is empty");						
		}

		return rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($this->key), base64_decode($encrypted), MCRYPT_MODE_CBC, md5(md5($this->key))), "\0");
	}
}


$token = new Tokener(); 
$encrypted = $token->encrypt(); 
$decrypted = $token->decrypted($encrypted);

echo 'Encrypt : '.$encrypted . ' Decrypted : ' . $decrypted .'';
