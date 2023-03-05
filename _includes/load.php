<?php

include "classes/_gettextfile.php";
session_start();



function load_template($temp)
{
    include($_SERVER['DOCUMENT_ROOT'])."/micireds/_templates/$temp.php";
}
