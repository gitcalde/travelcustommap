<?php
$apiUrl = "http://www.infoclimat.fr/public-api/gfs/json?_ll=44.84044,-0.5805&_auth=BR8AF1UrVXcFKFFmA3ULIgRsDzoPeVJ1B3tRMglgBHkDaARkBGcGYFE6BnsGKQojUWIEeggyCDhXNAVnXC4DfwVlAGRVNVU2BW9ROwMxCyAEKA9yDzFSdQd7UTcJZwRiA34EYQRlBm1RIAZmBjUKOlF8BGUIPwg0VysFfVwwA2cFYgBgVTBVNAVvUToDMAs6BCgPcA82Um0HMlFiCWQEbwNhBDYENgY1UW0GNgZlCj5RfARjCDYIOVc1BWJcNgNoBWYAe1UpVU4FGVEuA3MLfQRiDykPLVI%2FBzpRYg%3D%3D&_c=cffa72cb3cb89cdf4ce256ab1cc2917b";

header('Content-Type: application/json');

echo file_get_contents($apiUrl);
?>