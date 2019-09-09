<?php
function nabila($a,$no,$kata,$key)
{
    $hp   = "".$no."";
    $hp0  = substr_replace($hp,"",0,1);
    $teks = "".$kata."";
    $str  = str_replace(" "," ",$teks);
    $ch   = curl_init();

    curl_setopt($ch,CURLOPT_URL,"https://uat.ewallet.walletfactory.com/sms.php?sender=INFO&no=".$hp0."&msg=".$teks."");
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_CUSTOMREQUEST,"GET");
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,true);

    $headers   = array();
    $headers[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3";
    $headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 8.1.0; Redmi 6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36";
    $headers[] = "Host: uat.ewallet.walletfactory.com";
    $headers[] = "Connection: keep-alive";

    curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
    $result = curl_exec($ch);
    return $result;
}

print "SMS Masking - Random Quotes\n";
print "Thanks To : Angga ID ft Nabila Tools\n";
echo "Nomor HP : ";
$no   = trim(fgets(STDIN));
echo "Pesan SMS : ";
$kata = trim(fgets(STDIN));
echo "Key : ";
$key  = trim(fgets(STDIN));

if ($key == "sms") {
    for($a = 0; $a < 1; $a++) {
        echo "\n";
        $oce = nabila($a,$no,$kata,$key);
        echo "".$oce."\n";
    }
}
?>
