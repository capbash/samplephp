<?php
require_once('_config.php');

$GLOBALS["viewables"]["head_title"] = "Homepage";
$GLOBALS["viewables"]["route"] = "homepage";
$GLOBALS["viewables"]["h1"] = "Hello World";

require_view('layout/layout');