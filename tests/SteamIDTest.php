<?php
require_once __DIR__.'/../SteamIDConverter.php';
class SteamIDTest extends \PHPUnit_Framework_TestCase
{
	public function testCommunityFromID()
	{
		$this->assertEquals('76561197998515277', \SteamIDConverter::convert('STEAM_0:1:19124774'));
	}
	public function testIDFromCommunity()
	{
		$this->assertEquals(\SteamIDConverter::convert('STEAM_0:1:19124774'), '76561197998515277');
	}
}