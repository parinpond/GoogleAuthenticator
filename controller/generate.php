
<?php
declare(strict_types=1);
require 'vendor/autoload.php';
class Generate{
    function getQRcode(){
        $secret = 'XVQ2UIGO75XRUKJO';
        echo \Sonata\GoogleAuthenticator\GoogleQrUrl::generate('chregu', $secret, 'GoogleAuthenticatorExample');
    }
}

