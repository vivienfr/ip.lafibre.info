<?php
include("include/en-tete1-fr.php");
echo '	<title>Quelle est mon adresse IPv4 / IPv6 publique ?</title>
	<meta name="description" content="Donne votre adresse IPv4, IPv6 et les infos associées" />
	<meta name="keywords" content="IPv4, IPv6, reverse DNS" />';
include("include/en-tete2-fr.php");
include("include/menu-fr.php");

if(strstr($_SERVER['REMOTE_ADDR'],":"))
	$IP = "IPv6";
else
	$IP = "IPv4";
$hostname = htmlspecialchars(gethostbyaddr($_SERVER['REMOTE_ADDR']));
if(isset($_SERVER['HTTP_USER_AGENT']) != "" )
	$useragent = htmlspecialchars($_SERVER['HTTP_USER_AGENT']);
else
	$useragent = "";

// Informations Connectivite IPv4
echo '
<h2>Quelle est mon adresse IPv4 / IPv6 publique ?</h2>';

if ($_SERVER['SERVER_PORT'] == "80") {

  // Test réalisé en HTTP
  if ("$IP" == "IPv6") {
          echo '
<span class="textebig"><strong>Connectivité IP :&nbsp;&nbsp;&nbsp;&nbsp;</strong></span><span class="textevert">Bienvenue dans l’internet du futur !</span>
<ul>
<li><span class="textebig">Connectivité IPv4 (via requête DNS) <strong id="connectivity"><span class="texterouge">hors-service</span></strong><strong id="ip"></strong></span></li>
<li><span class="textebig">Connectivité IPv4 (<a href="https://lafibre.info/ipv6/connectivite-ipv6/" title="Test IPv4, en direct, sans utiliser de nom de domaine" target="_blank">via IPv4 littérale</a>) <strong id="literal-connectivity"><span class="texterouge">hors-service</span></strong><strong id="literal-ip"></strong></span></li>';
  }
  else {
          echo '
<span class="textebig"><strong>Connectivité IP :&nbsp;&nbsp;&nbsp;&nbsp;</strong></span><span class="texterouge">Attention : Vous n’avez pas de connectivité IPv6 native.</span>
<ul>
<li><span class="textebig">Connectivité IPv4 (via requête DNS) <strong><span class="textevert">OK</span></strong><strong> : IPv4 publique = ',$_SERVER['REMOTE_ADDR'],'</strong></span></li>
<li><span class="textebig">Connectivité IPv4 (<a href="https://lafibre.info/ipv6/connectivite-ipv6/" title="Test IPv4, en direct, sans utiliser de nom de domaine" target="_blank">via IPv4 littérale</a>) <strong id="literal-connectivity"><span class="texterouge">hors-service</span></strong><strong id="literal-ip"></strong></span></li>';
  }
}
else {
  // Test réalisé en HTTPS
  if ("$IP" == "IPv6") {
          echo '
<span class="textebig"><strong>Connectivité IP :&nbsp;&nbsp;&nbsp;&nbsp;</strong></span><span class="textevert">Bienvenue dans l’internet du futur !</span>
<ul>
<li><span class="textebig">Connectivité IPv4 (via requête DNS) <strong id="connectivity"><span class="texterouge">hors-service</span></strong><strong id="ip"></strong></span></li>
<li><span class="textebig">Connectivité IPv4 (<a href="https://lafibre.info/ipv6/connectivite-ipv6/" title="Test IPv4, en direct, sans utiliser de nom de domaine" target="_blank">via IPv4 littérale</a>) inconnue </span>(réalisez le <a href="http://ip.lafibre.info/" title="Test de connectivité IP en http">test en http</a> pour avoir la réponse)</li>';
  }
  else {
          echo '
<span class="textebig"><strong>Connectivité IP :&nbsp;&nbsp;&nbsp;&nbsp;</strong></span><span class="texterouge">Attention : Vous n’avez pas de connectivité IPv6 native.</span>
<ul>
<li><span class="textebig">Connectivité IPv4 (via requête DNS) <strong><span class="textevert">OK</span></strong><strong> : IPv4 publique = ',$_SERVER['REMOTE_ADDR'],'</strong></span></li>
<li><span class="textebig">Connectivité IPv4 (<a href="https://lafibre.info/ipv6/connectivite-ipv6/" title="Test IPv4, en direct, sans utiliser de nom de domaine" target="_blank">via IPv4 littérale</a>) inconnue </span>(réalisez le <a href="http://ip.lafibre.info/" title="Test de connectivité IP en http">test en http</a> pour avoir la réponse)</li>';
  }
}

// Informations Connectivite IPv6
if ("$IP" == "IPv6") {
        echo '
<li><span class="textebig">Connectivité IPv6 (via requête DNS) <strong><span class="textevert">OK</span></strong><strong> : IPv6 publique = ',$_SERVER['REMOTE_ADDR'],'</strong></span></li>
<li><span class="textebig">La version du protocole IP utilisée par défaut est <strong><span class="textevert">IPv6</span></strong></span></li>';
}
else {
        echo '
<li><span class="textebig">Connectivité IPv6 (via requête DNS) <strong id="connectivity"><span class="texterouge">hors-service</span></strong><strong id="ip"></strong></span></li>
<li><span class="textebig">La version du protocole IP utilisée par défaut est <strong><span class="texterouge">IPv4</span></strong></span></li>';
}


// Reverse DNS
echo '
</ul>
<span class="textebig"><strong>Reverse DNS :</strong></span>
<ul>';

if ("$IP" == "IPv6") {
        echo '
      <li>Reverse DNS IPv4 est <strong id="hostname">(Vous n\'avez pas de connectivité IPv4)</strong></li>
      <li>Reverse DNS IPv6 : <strong>',$hostname,'</strong></li>';
}
else {
        echo '
      <li>Reverse DNS IPv4 est <strong>',$hostname,'</strong></li>
      <li>Reverse DNS IPv6 est <strong id="hostname">(Vous n\'avez pas de connectivité IPv6)</strong></li>';
}

// Informations TCP
echo '
</ul>
<span class="textebig"><strong>Informations TCP :</strong></span>
<ul>';

if ("$IP" == "IPv6") {
        echo '
      <li>Port TCP source utilisé par votre connexion IPv4 : <strong id="remote_port">(Vous n\'avez pas de connectivité IPv4)</strong><strong id="literal-remote_port"></strong></li>
      <li>Port TCP source utilisé par votre connexion IPv6 : <strong>';
	if ($_SERVER['REMOTE_PORT'] < "32768")
		echo '<span class="texterouge">TCP ';
	else
		echo '<span class="textevert">TCP ';
	echo $_SERVER['REMOTE_PORT'],'</span></strong> <small>(<a href="https://lafibre.info/systeme-exploitation/local_port_range" title="Plage de ports dynamique du protocole TCP" target="_blank">Plus d\'informations</a>)</small></li>';
}
else {
        echo '
      <li>Port TCP source utilisé par votre connexion IPv4 : <strong>';
	if ($_SERVER['REMOTE_PORT'] < "32768")
		echo '<span class="texterouge">TCP ';
	else
		echo '<span class="textevert">TCP ';
	echo $_SERVER['REMOTE_PORT'],'</span></strong><strong id="literal-remote_port"></strong> <small>(<a href="https://lafibre.info/systeme-exploitation/local_port_range" title="Plage de ports dynamique du protocole TCP" target="_blank">Plus d\'informations</a>)</small></li>
      <li>Port TCP source utilisé par votre connexion IPv6 : <strong id="remote_port">(Vous n\'avez pas de connectivité IPv6)</strong></li>';
}
echo '
      <li>Port TCP destination utilisé : <strong>TCP ',$_SERVER['SERVER_PORT'],'</strong></li>';

// Informations HTTP
echo '
</ul>
<span class="textebig"><strong>Informations HTTP :</strong></span>
<ul>
      <li>La version du protocole HTTP utilisée est <strong>',$_SERVER['SERVER_PROTOCOL'],'</strong> <small>(Le serveur ne fait pas encore de HTTP/2)</small></li>
      <li>Votre connexion sur cette page <strong>';
if (isset($_SERVER['HTTPS']) == "on")
	echo 'est chiffrée avec https</strong></li>';
else
	echo 'n\'est pas chiffrée</strong></li>';
	echo '
</ul>';


// Informations Navigateur
echo '
<span class="textebig"><strong>Informations Navigateur :</strong></span>
<ul>
      <li>Votre <a href="https://fr.wikipedia.org/wiki/User-Agent" target="_blank">User-Agent</a> est <strong>',$useragent,'</strong></li>
      <li>IP <a href="https://fr.wikipedia.org/wiki/WebRTC" target="_blank">WebRTC</a> : <strong><span id="local-ips">inconnues (réalisez le test depuis un navigateur moderne avec WebRTC)</span></strong></li>
      <li id="webGLResult">[ On affichera ici le résultat de la détection du support <a href="https://fr.wikipedia.org/wiki/WebGL" target="_blank">WebGL</a> ]<button id="webGLButton">Cliquez ici pour détecter WebGL</button></li>
</ul>';

//JavaScript pour récupérer l'IPv4, pour ceux qui sont en IPv6
if ("$IP" == "IPv6")
	echo '
<script>
  var xhr = new XMLHttpRequest();
  xhr.open(\'GET\', \'//ipv4-json.lafibre.info/ipv4-host.php\', true);
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
  xhr.open(\'GET\', \'//ipv6-json.lafibre.info/ipv6-host.php\', true);
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

//JavaScript pour vérifier la connectivité IPv4 sans résolution DNS
if ($_SERVER['SERVER_PORT'] == "80")
	echo '
<script>
  var xhr2 = new XMLHttpRequest();
  xhr2.open(\'GET\', \'//51.158.154.169/connectivity.php\', true);
  xhr2.onload = function() { 
    var response = JSON.parse(xhr2.responseText);
    for (var k in response) {
      if (response.hasOwnProperty(k)) {
      	var elem = document.getElementById(k);
        if (elem) elem.innerHTML = response[k];
      }
    }
  };
  xhr2.send(null);
</script>';

//Leak de WebRTC pour récupérer les IP locales
	echo '
<script>
  getLocalIPs(function(ips) {
    var elem = document.getElementById("local-ips");
    if (elem) elem.innerHTML = ips.join(", ");
  });
  function getLocalIPs(callback) {
    var ips = [];
    var RTCPeerConnection = window.RTCPeerConnection ||
        window.webkitRTCPeerConnection || window.mozRTCPeerConnection;
    var pc = new RTCPeerConnection({
        iceServers: []
    });
    pc.createDataChannel(\'\');
    pc.onicecandidate = function(e) {
        if (!e.candidate) {
            pc.close();
            callback(ips);
            return;
        }
        var ip = /^candidate:.+ (\S+) \d+ typ/.exec(e.candidate.candidate)[1];
        if (ips.indexOf(ip) == -1)
            ips.push(ip);
    };
    pc.createOffer(function(sdp) {
        pc.setLocalDescription(sdp);
    }, function onerror() {});
  }
</script>';

//Détection du support WebGL
	echo '
<script>
window.addEventListener("load", function() { 
  var paragraph = document.querySelector("#webGLResult"),
    button = document.querySelector("#webGLButton");
  button.addEventListener("click", detectWebGLContext, false);
  function detectWebGLContext () {
    var canvas = document.createElement("canvas");
    var gl = canvas.getContext("webgl") 
      || canvas.getContext("experimental-webgl");
    if (gl && gl instanceof WebGLRenderingContext) {
      paragraph.innerHTML = 
        "<strong><span class=\"textevert\">Félicitations, votre navigateur supporte <a href=\"https://fr.wikipedia.org/wiki/WebGL\" target=\"_blank\">WebGL</a>.</span></strong>";
    } else {
      paragraph.innerHTML = "<strong><span class=\"texterouge\">Échec du contexte WebGL. "
        + "Votre navigateur peut ne pas supporter <a href=\"https://fr.wikipedia.org/wiki/WebGL\" target=\"_blank\">WebGL</a>.</span></strong>";
    }
  }
}, false);
</script>';

include("include/foot-fr-light.php");
?>
