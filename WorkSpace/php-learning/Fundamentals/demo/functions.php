<?php
//die and dump function
function dd($data) {
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}