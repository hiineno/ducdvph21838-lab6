<?php
namespace App\Controllers;
 class Controller{
function view($path, $data = [])
{
    extract($data);
    include_once __DIR__ . "/../../views/$path.php";
}
 }
