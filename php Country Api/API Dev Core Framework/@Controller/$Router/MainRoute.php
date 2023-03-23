<?php

if('GET' === $_SERVER['REQUEST_METHOD']){
    $Route = $_SERVER['REQUEST_URI'];

    if(isset($_GET['country'])){
        $countryParam = $_GET['country'];
    }


    if($Route === '/api') {

        http_response_code(200);
        header('Content-Type:application/json;charset=utf-8');
        require('./@Controller/$Router/Endpoints/Api_Index.php');

    }
    //GetCountry
    else if($Route === '/api/countries') {

        http_response_code(200);
        header('Content-Type:application/json;charset=utf-8');
        require('./@Controller/$Router/Endpoints/GetCountry.php');

    }
    //Search Country
    else if($Route === "/api/SearchCountry?country=$countryParam"){
        http_response_code(200);
        header('Content-Type:application/json;charset=utf-8');
        require('./@Controller/$Router/Endpoints/SearchCountry.php');
    }
    //Search Country Code
    else if($Route === "/api/SearchCountryCode?country=$countryParam"){
        http_response_code(200);
        header('Content-Type:application/json;charset=utf-8');
        require('./@Controller/$Router/Endpoints/SearchCountryCode.php');
    }
    //Get Country Cites
    else if($Route === "/api/CountryCities?country=$countryParam"){
        http_response_code(200);
        header('Content-Type:application/json;charset=utf-8');
        require('./@Controller/$Router/Endpoints/GetCountryCity.php');
    }
    
     else{
            http_response_code(404);
            header('Content-Type:application/json;charset=utf-8');
            require('./@Controller/$Router/Endpoints/404.php');
        }

}

