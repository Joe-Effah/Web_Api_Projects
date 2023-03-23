<?php

class DbExtensionMethods
{
    private  $DbObject;

    public function __construct($DbConnection)
    {
        $this->DbObject = $DbConnection;
    }


    public function GetCountry()
    {
        $Query  = 'SELECT * FROM COUNTRY INNER JOIN countrylanguage LIMIT  31;';

        $UserData = $this->DbObject->query($Query);

         $CountryData = mysqli_fetch_all($UserData,MYSQLI_ASSOC);


        return json_encode($CountryData);
    }


    public function GetCountryCity($CountryName)
    {

        $Query = "SELECT CITY.NAME,CountryCode ,CITY.Population ,CONTINENT  FROM CITY INNER JOIN country on city.CountryCode = country.Code WHERE country.Name ='$CountryName';";


        $UserData = $this->DbObject->query($Query);

        $CountryData =mysqli_fetch_all($UserData,MYSQLI_ASSOC);


        return json_encode($CountryData);

    }


    public function GetContinentCountrys()
    {

        return json_encode(['ASIA' => ['JAPAN', 'INDIA', 'KOREA']]);

    }

    public function searchCountry($country_Name)
    {

        $Query = "select  * from country where country.Name='$country_Name';";

        $searchData = $this->DbObject->query($Query);

        $CountryData = mysqli_fetch_all($searchData,MYSQLI_ASSOC);

        return json_encode($CountryData);
    }

    public function searchCountryCode($country_Name)
    {
        $Query = "select  country.code , country.code2 from country where country.Name='$country_Name';";

        $searchData = $this->DbObject->query($Query);

        $CountryData = mysqli_fetch_all($searchData,MYSQLI_ASSOC);

        return json_encode($CountryData);



    }

}