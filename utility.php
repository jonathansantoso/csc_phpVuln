<?php

$database = [
    "host" => "localhost",
    "username" => "root",
    "password" => "",
    "database" => "testing"
];

$db = new mysqli($database["host"], $database["username"], $database["password"], $database["database"]);