<?php
NameSpace APP\Services\Geolocation;
use APP\Services\Geolocation\Geolocation;
use Illuminate\Support\Facades\Facade;

Class GeolocationFacade extends Facade{
    protected Static function getFacadeAccessor(){
        return Geolocation::class;
    }

}


?>