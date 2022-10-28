<?php
if(strstr($_SERVER['REMOTE_ADDR'],":"))
	$IP = "IPv6";
else
	$IP = "IPv4";

echo '<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>IPv4 / IPv6 address</title>
  </head>
<body>';

if ("$IP" == "IPv6") {
        echo 'default:<strong>IPv6</strong><br />
IPv4:<strong id="ip">(no IPv4)</strong><br />
IPv6:<strong>',$_SERVER['REMOTE_ADDR'],'</strong>';
}
else {
        echo 'default:<strong>IPv4</strong><br />
IPv4:<strong>',$_SERVER['REMOTE_ADDR'],'</strong><br />
IPv6:<strong id="ip">(no IPv6)</strong>';
}

//JavaScript pour récupérer l'IPv4, pour ceux qui sont en IPv6
if ("$IP" == "IPv6")
	echo '
<script>
  var xhr = new XMLHttpRequest();
  xhr.open(\'GET\', \'//ipv4-json.lafibre.info/ipv4.php\', true);
  xhr.onload = function() { 
    var response = JSON.parse(xhr.responseText);
    for (var k in response) {
      if (response.hasOwnProperty(k)) {
      	var elem = document.getElementById(k);
        if (elem) elem.innerHTML = response[k];
      }
    }
  };
  xhr.send(null);
</script>';
//JavaScript pour récupérer l'IPv6, pour ceux qui sont en IPv4
if ("$IP" == "IPv4")
	echo '
<script>
  var xhr = new XMLHttpRequest();
  xhr.open(\'GET\', \'//ipv6-json.lafibre.info/ipv6.php\', true);
  xhr.onload = function() { 
    var response = JSON.parse(xhr.responseText);
    for (var k in response) {
      if (response.hasOwnProperty(k)) {
      	var elem = document.getElementById(k);
        if (elem) elem.innerHTML = response[k];
      }
    }
  };
  xhr.send(null);
</script>
</body>
</html>';
?>
