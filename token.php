<?php

# © 2021 Avishkar Patil DO NOT EDIT ANYTHING TO KEEP RUNNING

# Here I Put Token which Available Publicly I Recommended Use Your Own Token Here 
# For Suppport @Avishkarpatil at Telegram or proavipatil@gmail.com



$jctBase = "cutibeau2ic";

$ssoToken = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1bmlxdWUiOiJmYTYyMDIzOC1kOTE0LTRhNTctYjI0ZS00ZjA2NDRiOTM2ZTkiLCJ1c2VyVHlwZSI6IlJJTHBlcnNvbiIsImF1dGhMZXZlbCI6IjQwIiwiZGV2aWNlSWQiOiI4ODAyNjZhY2I1NDcyYmJjYWYwZTY0ZWE2YmE0NWE2ZDM1ZTAxNzVkZWQ2NTk4OTIwNGM0NDRhNzlhN2U3MWM4MDA0YWVkNTJlMDgyYWYzN2JkYjk1NGJiNTYxYjM3YmMxOWViOWMzNWMwZmI2MWFjOWVlZjE2ZjM3OTMwOWExNiIsImp0aSI6ImUzMDZjZmUyLTE1NGUtNDc2Yy1iODI5LTE0Nzk1Yzk2ODRjOSIsImlhdCI6MTYyOTEyODE4OH0.ZdTef_fOP02ux6ef86qEs4eUPur2MTjvDaCBcC3cSu8"; #Change This with your SSOTOKEN 
function tokformat($str)
{
$str= base64_encode(md5($str,true));
return str_replace("\n","",str_replace("\r","",str_replace("/","_",str_replace("+","-",str_replace("=","",$str)))));
}
function generateJct($st, $pxe) 
{
 global $jctBase;
 return trim(tokformat($jctBase . $st . $pxe));
}
function generatePxe() {
return time() + 6000000;
}
function generateSt() {
global $ssoToken;
return tokformat($ssoToken);
}
function generateToken() {
$st = generateSt();
$pxe = generatePxe();
$jct = generateJct($st, $pxe);
return "?jct=" . $jct . "&pxe=" . $pxe . "&st=" . $st;
}

# © 2021 Avishkar Patil DO NOT EDIT ANYTHING TO KEEP RUNNING


echo generateToken();
?>