<?php
namespace App;
use APP\Services\Geolocation\Geolocation;
use APP\Services\Geolocation\GeolocationFacade;

Class Playground
{
  public function __construct(Geolocation $gelocation){
    $result = GeolocationFacade::search('a');
    //dump($result);
  }
    
}

?>