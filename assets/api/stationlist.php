<?php

$Service = new \DBLS\Controller\Base\Station(0);


try {
    $arr = $Service->getStationList(0, 30);
} catch (\DBLS\Exceptions\StationErrorException $e) {
    echo $e->getMessage();
}
return $arr;