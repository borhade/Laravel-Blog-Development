<?php
Namespace App\Services\Geolocation;
Use  App\Services\Map\Map;
Use App\Services\Satellite\Satellite;

Class Geolocation{
 
    public $map;
    public $satellite;
    public function __construct(Map $map, Satellite $satellite)
    {
        $this->map = $map;
        $this->satellite = $satellite;
    }

    public function search($name)
    {
        $mapDetails = $this->map->findAddress($name);
        return $satelliteDetails = $this->satellite->GetPingPoint($mapDetails);
    }


}



?>