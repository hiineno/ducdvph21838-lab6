<?php
require_once __DIR__ . "/../Models/SachModel.php";
require_once "Controller.php";


function index()
{
    __construct();
    $books = all();
    view('list', ['books' => $books]);
}
