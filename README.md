# steamid-converter
PHP class to convert SteamID formats

Can convert between
* SteamID's (STEAM_X:X:XXXXXX)
* CommunityID's (XXXXXXXXXXXXXXXXX)

# example.php
```php
<?php require_once 'SteamID.class.php';
$steamid = new SteamID("76561197998515277"); // You can send a SteamID or a CommunityID when instantiating the new object
	//$steamid = new SteamID("STEAM_0:1:19124774");
echo $steamid->getID(); // Return SteamID
$steamid->set("STEAM_0:0:11101"); // You can send a SteamID or a CommunityID when setting
	//$steamid->set("76561197960287930"); // You can send a SteamID or a CommunityID when setting
echo $steamid->getCommunity(); // Return CommunityID
```
