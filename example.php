<?php
require_once 'SteamID.class.php';


echo SteamID::convert('STEAM_0:0:11101'); // Return CommunityID converted from Steamid

echo SteamID::convert('76561197998515277'); // Return SteamID converted from CommunityID
