[![Build Status](https://travis-ci.org/callumthomson/steamid-converter.svg?branch=master)](https://travis-ci.org/CallumThomson/steamid-converter)
# steamid-converter
PHP class to convert SteamID formats. Useful for making authentication systems which auth via Steam's OpenID server. 

Can convert between
* SteamID's (STEAM_X:X:XXXXXX)
* CommunityID's (XXXXXXXXXXXXXXXXX)

# example.php
```php
require_once 'SteamIDConverter.php';


echo SteamIDConverter::convert('STEAM_0:0:11101'); // Return CommunityID converted from SteamID

echo SteamIDConverter::convert('76561197998515277'); // Return SteamID converted from CommunityID
```
