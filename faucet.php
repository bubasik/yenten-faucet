<?php
//данные для добавления в таблицу логов
function get_ip()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
        $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
        $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
//получаем ip адрес юзера
$ip_adres=get_ip();
//преобразовали ip адрес в int
$ip_adres_int = ip2long($ip_adres);



//вместо крона, ждем и обновляем....
$cron_ips="cron_ips.inc";
if(file_exists($cron_ips)) {
      //если файл старей 1 часа, то очищаем его
      if ((time() - '7200') > filemtime($cron_ips)) {
      $fp_cron_1 = fopen($cron_ips, 'w'); fwrite($fp_cron_1, ''); fclose($fp_cron_1);
      $black_ips="black_ips.inc";
    $fp = fopen($black_ips, 'w');
    fwrite($fp, '
');
    fclose($fp);          
      }
    } else {$fp_cron_1 = fopen($cron_ips, 'w'); fwrite($fp_cron_1, ''); fclose($fp_cron_1);}
    

$cron_wallet="cron_wallet.inc";
if(file_exists($cron_wallet)) {
      //если файл старей 1 часа, то очищаем его
      if ((time() - '43200') > filemtime($cron_wallet)) {
      $fp_cron_2 = fopen($cron_wallet, 'w'); fwrite($fp_cron_2, ''); fclose($fp_cron_2);
      $black_wallet="black_wallet.inc";
    $fp2 = fopen($black_wallet, 'w');
    fwrite($fp2, '
');
    fclose($fp2);          
      }
    } else {$fp_cron_2 = fopen($cron_wallet, 'w'); fwrite($fp_cron_2, ''); fclose($fp_cron_2);}    
//вместо крона, ждем и обновляем....-----------END   




$black_ips="black_ips.inc";
if(file_exists($black_ips)) {
    //если файл старей 1 часа, то очищаем его
    if ((time() - '7200') > filemtime($black_ips)) {
    $fp = fopen($black_ips, 'w');
    fwrite($fp, '
');
    fclose($fp);    
    }
         $fileread  = fopen( $black_ips, 'r' );
         if (filesize( $black_ips )=="0") {
         echo "блэк файл равен 0<br><br>"; die;
         }
         else {
         $black_ips_text = fread( $fileread, filesize( $black_ips ) );
         fclose( $fileread );
         }
	 }
$black_tel_massiv = explode("
", $black_ips_text);

$black_tel_count=count($black_tel_massiv);

  for($i=0;$i<$black_tel_count;$i++) {
      if ($ip_adres_int==$black_tel_massiv[$i]) {
          
      $errors['human'] = 'Cool man! Wait 1 hour please.';
			$data['errors'] = true;
			$data['errors']  = $errors;
			echo json_encode($data);
      die;
      }
      
    }
    
    
//добавляем ip в черный список
$fp=fopen("$black_ips","a");  
fwrite($fp, "\r\n" . "$ip_adres_int");  
fclose($fp);



$response = $_POST["g-recaptcha-response"];

$url = 'https://www.google.com/recaptcha/api/siteverify';
	$data = array(
		'secret' => '6LfBGEIUAAAAAAWiZEnkaUC9K7T3H-79jafaemCn',
		'response' => $response
	);
	$options = array(
		'http' => array (
			'method' => 'POST',
			'content' => http_build_query($data)
		)
	);
	$context  = stream_context_create($options);
	$verify = file_get_contents($url, false, $context);
	$captcha_success=json_decode($verify);
	if ($captcha_success->success==false) {

			$errors['human'] = 'Human Test failed.';
			$data['errors'] = true;
			$data['errors']  = $errors;
			echo json_encode($data);


	} elseif ($captcha_success->success==true) {

require_once("jsonRPCClient.php");
		$alt = new jsonRPCClient('http://login:parol@127.0.0.1:9982'); //set to coin daemon user/pass/port
$min = 1; //set to minimum payout
$max = 10; //set to max payout
$amount = rand($min,$max);
$amount=$amount/10000;
		$username = $_POST['address'];
		$check = $alt->validateaddress($username);

		if($alt->getbalance() < 1){
						$errors['balance'] = 'The faucet is empty :s <br> Please let <a href="http://www.bubasik.com" target="_blank">www.bubasik.com</a> know';
						$data['errors'] = true;
						$data['errors']  = $errors;
						echo json_encode($data);
						}



		else {
    
            if($check->{'isvalid'} == 1){
						
                      //если человек за 12 часов выводит на один и тот-же кошелёк, то платим ему минималку
                      $black_wallet="black_wallet.inc";
                      if(file_exists($black_wallet)) {
                      //если файл старей 12 часов, то очищаем его
                      if ((time() - '43200') > filemtime($black_wallet)) {
                      $fp2 = fopen($black_wallet, 'w');
                      fwrite($fp2, '
');
                      fclose($fp2);    
                      }
                           $fileread2  = fopen( $black_wallet, 'r' );
                           if (filesize( $black_wallet )=="0") {
                           echo "блэк файл равен 0<br><br>"; die;
                           }
                           else {
                           $black_wallet_text = fread( $fileread2, filesize( $black_wallet ) );
                           fclose( $fileread2);
                           }
                  	 }
$black_wallet_massiv = explode("
", $black_wallet_text);

                      $black_wallet_count=count($black_wallet_massiv);
                      
                      for($i2=0;$i2<$black_wallet_count;$i2++) {
                      $black_wallet_massiv[$i2]=str_replace(" ", "", $black_wallet_massiv[$i2]);
                      $username_sravn=str_replace(" ", "", $username);
                      if ($username_sravn==$black_wallet_massiv[$i2]) {
                      $min_2 = 1; //set to minimum payout
                      $max_2 = 3; //set to max payout
                      $amount_2 = rand($min_2,$max_2);
                      $amount=$amount_2/10000;
                      break;
                          }
                      }
                      
                      //добавляем ip в черный список
                      $fp2=fopen("$black_wallet","a");  
                      fwrite($fp2, "\r\n" . "$username");  
                      fclose($fp2);            

            
            $alt->sendtoaddress($username, $amount);

						 $data['success'] = true;
						 $data['boa'] = "You got " . $amount . " YTN!";
						 echo json_encode($data);

						}
            
            else {
            $errors['address'] = 'Address error';
						$data['errors'] = true;
						$data['errors']  = $errors;
						echo json_encode($data);
            }

    }

}
