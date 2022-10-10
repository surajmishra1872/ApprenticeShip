<?php
$uri= $_SERVER['REQUEST_URI'];
//echo $uri;
$root_folder= 'public_html';
//echo $root_folder;
if(file_exists("{$root_folder}/{$uri}.php"))
{
include "{$root_folder}/{$uri}.php";
}
else{

echo "<br><br><h2>Server Error in '$uri' Application.</h2><h1>404 page not found</h1><hr><b> The resource cannot be found.</b><br><b>Description:</b><small> HTTP404. The resource you are looking for (or one of its dependencies) could have been removed, had its name changed, or is temporarily unavailable.  Please review the following URL and make sure that it is spelled correctly.</small><br><b>Requested URL: </b>$uri <br><hr><b>Version Information:</b> Microsoft .NET Framework Version:4.0.30319; ASP.NET Version:4.7.2623.0 ";
}
?>
