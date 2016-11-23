Example :

<?php
$token = new Tokener();
$encrypted = $token->encrypt();
$decrypted = $token->decrypted($encrypted);

echo 'Encrypt : <strong>'.$encrypted . '</strong> Decrypted : <strong>' . $decrypted .'</strong>';
