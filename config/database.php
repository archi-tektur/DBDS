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
 * @version   GIT: <git_id>
 * @link      https://github.com/archi-tektur/ArchFW/
 */

return [
    // Here enter database details, if you want to use our extention.
    'databaseType' => 'mysql',
    'databaseName' => 'digitaleschiene',
    'server'       => 'localhost',
    'user'         => 'root',
    'password'     => '',
    // additional PDO options - UTF8 by default
    'addInfo'      => [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    ],
];
