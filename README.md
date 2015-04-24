# steamid-converter
PHP class to convert SteamID formats

Can convert between
* SteamID's (STEAM_X:X:XXXXXX)
* CommunityID's (XXXXXXXXXXXXXXXXX)

# example.php
```php
require_once 'SteamID.class.php';

$steamid = new SteamID("76561197998515277"); // You can send a SteamID or a CommunityID when instantiating the new object

echo $steamid->getID(); // Return SteamID converted from CommunityID

$steamid->set("STEAM_0:0:11101"); // You can send a SteamID or a CommunityID when setting

echo $steamid->getCommunity(); // Return CommunityID
```
