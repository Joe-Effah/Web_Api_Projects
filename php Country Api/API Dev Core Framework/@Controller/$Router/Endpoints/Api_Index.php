<?php


$arr= ['message' => 'Welcome to a Collection of JSON based Data for Country',
    'ENDPOINTS'=>[
        ['/api/countries'],['/api/SearchCountry?country=$country Name'],
        ['/api/SearchCountryCode?country=$country Name'],
        ['/api/CountryCities?country=$country Name'],
    ]
];
$encoded = json_encode($arr);

print($encoded);