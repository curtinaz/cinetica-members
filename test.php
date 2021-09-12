<?php

$ch = curl_init("https://hooknotifier.com/1631624501547/withered-sky");

  $data = array(
      'business' => 'teste',
      'object' => 'teste',
      'body' => 'teste',
      // anything you want...
  );

  $payload = json_encode(array("data" => $data));

  curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

  curl_exec($ch);
  curl_close($ch);