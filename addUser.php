<?php
$post = [
    'api_action' => 'contact_sync',
    'api_key' => '0ffbcd9d710bd5199b6f9d420d9feec7fd8e081147a6bed10c84b08fa93c09485c0b84df',
    'email'   => 'xurasteio@xuragou.com',
    'first_name' => 'XHR',
    'p[15]' => '15',
];

$ch = curl_init('https://cineticaedu.api-us1.com/admin/api.php?api_action=contact_add');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

// execute!
$response = curl_exec($ch);

// close the connection, release resources used
curl_close($ch);

?>