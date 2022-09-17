<?php

require_once  "../Models/Autoload.php";

$autoload = new Autoload;

$autoload->setPathSeparator(array("../", "../../", "./", "../../../"));

$autoload->setDirectories(array("Models", "Controller", "Config"));

$autoload->setRootPath("App/");

$autoload->autoload();
