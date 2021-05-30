<?php
      function detect_sentiment($string){
      $string = urlencode($string);
      $api_key = "32c90d86b5ed1724a08e55d62a2d73";
      $url = 'https://api.paysify.com/sentiment?api_key='.$api_key.'&string='.$string.'';
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $result = curl_exec($ch);
      $response = json_decode($result,true);
      curl_close($ch);
      return $response;
      }
	  
      $string = "This Sentiment analysis api is very good!";
      $data = detect_sentiment($string);
      echo "<pre>";
      print_r($data);
      echo "</pre>";
?>