<?php
class SteamID {
	private $id = "";
	private $community = "";
	
	public function __construct($id) {
		$this->set($id);
	}
	public function getCommunity() {
		return $this->community;
	}
	public function getID()	{
		return $this->id;
	}
	public function set($id) {
		if(strpos($id, 'STEAM')==false) { // It's a CommunityID
			$this->id = $this->getIDFromCommunity($id);
			$this->community = $id;
		} else { // It's a SteamID
			$this->id = $id;
			$this->community = $this->getCommunityFromID($id);
		}
	}
	
	private function getCommunityFromID($id)
	{
		$accountarray	=	explode(":", $id);
		$idnum			=	$accountarray[1];
		$accountnum		=	$accountarray[2];
		$constant		=	'76561197960265728';
	
		$number			=	bcadd(bcmul($accountnum, 2), bcadd($idnum, $constant)); // ($accountnum *2)  + ($idnum + $constant)
		return $number;
	}
	private function getIDFromCommunity($id)
	{
		$idnum		=	'0';
		$accnum		=	'0';
		$constant	=	'76561197960265728';
		if(bcmod($id, '2')==0) {
			$idnum	=	'0';
			$temp	=	bcsub($id, $constant);
		}
		else {
			$idnum	=	'1';
			$temp	=	bcsub($id,bcadd($constant, '1'));
		}
		$accnum	=	bcdiv($temp, '2');
		return 		"STEAM_0:".$idnum.":".number_format($accnum, 0, '', '');
	}
}
