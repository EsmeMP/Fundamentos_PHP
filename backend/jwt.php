<?php
require 'vendor/autoload.php';

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

function crearJWT($payload){
    $privateKey = file_get_contents('private.key');
    $payload['iat'] = time();
    $payload['exp'] = time() + 3600;

    $jwt = JWT::encode($payload, $privateKey, 'RS256');

    return $jwt;
};

function verificarJWT($token){
    $publicKey = file_get_contents('public.key');
    $JWTdecode = JWT::decode($token, new Key($publicKey, 'RS256'));
    return $JWTdecode;
};

$token = crearJWT([
    'id'=> 1,
    'name'=> 'Galletas',
    'type'=> 'Gato',
    'race'=>'Blanco',
    'age'=>12,
]);

print_r($token);

// $token = $token['token'];
$JWTdecode = verificarJWT($token);

print_r($JWTdecode);
