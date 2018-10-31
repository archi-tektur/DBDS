<?php
/**
 * ArchFramework (ArchFW in short) is universal template for server-side rendered applications and services.
 * ArchFW comes with pre-installed router and JSON API functionality.
 * Visit https://github.com/archi-tektur/ArchFW/ for more info.
 *
 * PHP version 7.2
 *
 * @category  Framework/Boilerplate
 * @package   ArchFW
 * @author    Oskar Barcz <kontakt@archi-tektur.pl>
 * @copyright 2018 Oskar 'archi_tektur' Barcz
 * @license   MIT
 * @version   4.0.0
 * @link      https://github.com/archi-tektur/ArchFW/
 */

return [
    # Add adresses to our router. Key here is a URL adress user enters, and value is name of wrapper and twig files.
    # When file is in subdirectory, you can use '/', e.g. 'login/recoverpassword'.
    'APProuter' => [
        '/'                  => 'panel',
        '/login'             => 'login/login',
        '/panel'             => 'panel',
        '/serviceplanner'    => 'serviceplanner/serviceplanner',
        '/startslot'         => 'serviceplanner/startslot',
        '/addslot'           => 'serviceplanner/addslot',
        '/requestslot'       => 'serviceplanner/requestslot',
        '/destinationboards' => 'destinationboards/destinationboard',
        '/displayboard'      => 'destinationboards/displayboard',
        '/maintenance'       => 'maintenance/panel',
        '/profiles'          => 'profilesmanagement/profiles',
        '/carriers'          => 'profilesmanagement/carriers',
        '/addobj'            => 'databasemanagement/insertnewobjects',
        '/drive'             => 'drive',
        '/about'             => 'about',
        '/logoff'            => 'login/logoff',
    ],

    # Router in API is matching URL (key here) and wrapper file name (value here)
    'APIrouter' => [
        '/test'        => 'test',
        '/routercheck' => 'routercheck',
        '/auth'        => 'auth',
        '/stationlist' => 'stationlist',
    ],
];