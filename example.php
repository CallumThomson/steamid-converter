<?php
require_once 'SteamIDConverter.php';


echo SteamIDConverter::convert('STEAM_0:0:11101'); // Return CommunityID converted from SteamID

echo SteamIDConverter::convert('76561197998515277'); // Return SteamID converted from CommunityID
