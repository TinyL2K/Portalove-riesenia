<?php
include_once "DB.php";

use cestovanie\DB;
$db = new DB('localhost', 'cestovatelskyblog', 'root', '');

global $db;

session_start();