```sh
Example :

<?php

$token = new Tokener();

$encrypted = $token->encrypt();

$decrypted = $token->decrypted($encrypted);

echo 'Encrypt : <strong>'.$encrypted . '</strong> Decrypted : <strong>' . $decrypted .'</strong>';


Encrypt : 8PXw9GQn0e2IbkAPJCbsQjRN6KuFc+Um5swfb+KVeDM= 

Decrypted : www.yuhhu.net

```
