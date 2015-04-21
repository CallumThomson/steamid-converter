<?php
// ------------------------------------------------------------------------------------------------
function getcommunity($id)
{
	$accountarray = explode(":", $id);
	$idnum = $accountarray[1];
	$accountnum = $accountarray[2];
	$constant = '76561197960265728';

	$number = bcadd(bcmul($accountnum, 2), bcadd($idnum, $constant)); // ($accountnum *2)  + ($idnum + $constant)
	//echo $number;
	return $number;
}
// ------------------------------------------------------------------------------------------------
function getid($id)
{
$idnum='0';
$accnum='0';
$constant = '76561197960265728';
if (bcmod($id, '2')==0) {
	$idnum='0';
	$temp = bcsub($id, $constant);
}
else {
	$idnum='1';
	$temp = bcsub($id,bcadd($constant, '1'));
}
$accnum=bcdiv($temp, '2');
return $steam32="STEAM_0:".$idnum.":".number_format($accnum, 0, '', '');
}

?>