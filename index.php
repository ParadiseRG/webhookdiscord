<?php

$webhook = 'LIEN DU WEBHOOK';

$data = [
    'content' => 'MESSAGE ENVOYE',
    'username' => 'USERNAME DU MESSAGE',
    'avatar_url' => 'LIEN DE L IMAGE'
];

$options = [
    'http' => [
        'method' => 'POST',
        'header' => 'Content-Type: application/json',
        'content' => json_encode($data)
    ]
];

$context = stream_context_create($options);
$result = file_get_contents($webhook, false, $context);

?>
