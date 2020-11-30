<?php

function valley($incrementMe){

  "Should increment: " . $incrementMe++ . "<br />\n";
  "NOT!: " . $incrementMe . "<br />\n";
  return $incrementMe;
}

function makeArray($val){
  $myarr = explode("", $val);
  return $myarr;
}


if (! function_exists('getFileNameOnly')) {
    function getFileNameOnly($received)
    {
        return $received;
    }
}
