<?php

$Shortcut = "[InternetShortcut]

URL=http://fslicn/

IDList=http://fslicn/favicon.ico

IconIndex=43

IconFile=http://fslicn/favicon.ico

Hotkey=1626

[{000214A0-0000-0000-C000-000000000046}]

Prop3=19,2

";

Header("Content-type: application/octet-stream"); 

header("Content-Disposition: attachment; filename=放射力影视.url;"); 

echo $Shortcut; 

?>