<?php
include("include/en-tete1-fr.php");
echo '	<title>Quelle est mon adresse IPv4 / IPv6 publique ?</title>
	<meta name="description" content="Donne votre adresse IPv4, IPv6 et les infos associées" />
	<meta name="keywords" content="IPv4, IPv6, reverse DNS" />';
include("include/en-tete2-fr.php");
include("include/menu-fr.php");

echo '<h2 id="telechargements">Téléchargements de toutes tailles IPv4 vs IPv6 :</h2>
<p>Voici des fichiers de différentes tailles, disponibles selon 2 protocoles (http/https), 12 ports différents et en IPv4 uniquement, IPv6 uniquement ou en automatique (IPv4 et IPv6 disponible)</p>

<p>Ces fichiers ne sont pas compressibles: il sont remplis de données vidéo avec le codec VP9 (Opus pour l\'audio).</p>

<p><strong>Un réseau neutre offre le même débit, quel que soit le protocole, port, extension du fichier ou taille du fichier.</strong></p>

<table class="tableau">
  <tbody>
  <tr>
    <th>Port</th>
    <th>TCP 80</th>
    <th>TCP 443</th>
    <th>TCP 554</th>
    <th>TCP 843</th>
    <th>TCP 1194</th>
    <th>TCP 1935</th>
    <th>TCP 5060</th>
    <th>TCP 6881</th>
    <th>TCP 8080</th>
    <th>TCP 8443</th>
    <th>TCP 51413</th>
    <th>TCP 53</th>
  </tr>
  <tr>
    <th>Portocole</th>
    <th>http</th>
    <th>https</th>
    <th>http</th>
    <th>http</th>
    <th>https</th>
    <th>http</th>
    <th>http</th>
    <th>https</th>
    <th>http</th>
    <th>https</th>
    <th>https</th>
    <th>https</th>
  </tr>
  <tr>
    <th>Protocole<br />d\'origine</th>
    <th>http standard</th>
    <th>https standard</th>
    <th>RTCP</th>
    <th>Adobe\'s Socket<br />Policy Server</th>
    <th>OpenVPN</th>
    <th>RTMP</th>
    <th>SIP</th>
    <th>BitTorrent</th>
    <th>SpeedTest Ookla<br />http proxy</th>
    <th>nPerf<br />Tomcat SSL</th>
    <th>BitTorrent</th>
    <th>DNSSEC</th>
  </tr>
  <tr>
    <th>Utilisation<br />habituelle</th>
    <th>Web non chiffré</th>
    <th>Web chiffré</th>
    <th>Contrôle<br />streaming</th>
    <th>Flash Player</th>
    <th>Réseau privé<br />virtuel chiffré</th>
    <th>Streaming Flash</th>
    <th>Téléphonie / VoIP</th>
    <th>Peer-to-peer<br />chiffré</th>
    <th>Test de débit<br />non chiffré</th>
    <th>Test de débit<br />chiffré</th>
    <th>Peer-to-peer<br />chiffré</th>
    <th>Résolution DNS<br />chiffré</th>
  </tr>
  <tr>
    <th>Note</th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th>Bridé par<br />certains réseaux</th>
    <th>Bridé par<br />certains réseaux</th>
    <th>Priorisé par<br />certains réseaux</th>
    <th>Priorisé par<br />certains réseaux</th>
    <th>Bridé par<br />certains réseaux</th>
    <th>Bloqué par les<br />navigateurs web</th>
  </tr>
  <tr>
    <td><strong>Fichiers de 1Mo</strong><br />Extension: <strong>.iso</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/1M.iso">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/1M.iso">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/1M.iso">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/1M.iso">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/1M.iso">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/1M.iso">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/1M.iso">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/1M.iso">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/1M.iso">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/1M.iso">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/1M.iso">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/1M.iso">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/1M.iso">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/1M.iso">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/1M.iso">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/1M.iso">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/1M.iso">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/1M.iso">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/1M.iso">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/1M.iso">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/1M.iso">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/1M.iso">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/1M.iso">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/1M.iso">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/1M.iso">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/1M.iso">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/1M.iso">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/1M.iso">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/1M.iso">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/1M.iso">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/1M.iso">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/1M.iso">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/1M.iso">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/1M.iso">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/1M.iso">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/1M.iso">1M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 5Mo</strong><br />Extension: <strong>.iso</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/5M.iso">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/5M.iso">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/5M.iso">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/5M.iso">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/5M.iso">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/5M.iso">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/5M.iso">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/5M.iso">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/5M.iso">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/5M.iso">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/5M.iso">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/5M.iso">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/5M.iso">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/5M.iso">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/5M.iso">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/5M.iso">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/5M.iso">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/5M.iso">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/5M.iso">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/5M.iso">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/5M.iso">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/5M.iso">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/5M.iso">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/5M.iso">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/5M.iso">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/5M.iso">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/5M.iso">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/5M.iso">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/5M.iso">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/5M.iso">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/5M.iso">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/5M.iso">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/5M.iso">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/5M.iso">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/5M.iso">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/5M.iso">5M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 10Mo</strong><br />Extension: <strong>.iso</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/10M.iso">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/10M.iso">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/10M.iso">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/10M.iso">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/10M.iso">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/10M.iso">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/10M.iso">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/10M.iso">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/10M.iso">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/10M.iso">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/10M.iso">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/10M.iso">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/10M.iso">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/10M.iso">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/10M.iso">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/10M.iso">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/10M.iso">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/10M.iso">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/10M.iso">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/10M.iso">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/10M.iso">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/10M.iso">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/10M.iso">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/10M.iso">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/10M.iso">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/10M.iso">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/10M.iso">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/10M.iso">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/10M.iso">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/10M.iso">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/10M.iso">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/10M.iso">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/10M.iso">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/10M.iso">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/10M.iso">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/10M.iso">10M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 50Mo</strong><br />Extension: <strong>.iso</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/50M.iso">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/50M.iso">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/50M.iso">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/50M.iso">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/50M.iso">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/50M.iso">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/50M.iso">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/50M.iso">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/50M.iso">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/50M.iso">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/50M.iso">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/50M.iso">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/50M.iso">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/50M.iso">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/50M.iso">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/50M.iso">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/50M.iso">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/50M.iso">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/50M.iso">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/50M.iso">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/50M.iso">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/50M.iso">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/50M.iso">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/50M.iso">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/50M.iso">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/50M.iso">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/50M.iso">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/50M.iso">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/50M.iso">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/50M.iso">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/50M.iso">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/50M.iso">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/50M.iso">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/50M.iso">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/50M.iso">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/50M.iso">50M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 100Mo</strong><br />Extension: <strong>.iso</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/100M.iso">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/100M.iso">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/100M.iso">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/100M.iso">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/100M.iso">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/100M.iso">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/100M.iso">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/100M.iso">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/100M.iso">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/100M.iso">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/100M.iso">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/100M.iso">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/100M.iso">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/100M.iso">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/100M.iso">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/100M.iso">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/100M.iso">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/100M.iso">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/100M.iso">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/100M.iso">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/100M.iso">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/100M.iso">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/100M.iso">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/100M.iso">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/100M.iso">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/100M.iso">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/100M.iso">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/100M.iso">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/100M.iso">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/100M.iso">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/100M.iso">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/100M.iso">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/100M.iso">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/100M.iso">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/100M.iso">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/100M.iso">100M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 500Mo</strong><br />Extension: <strong>.iso</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/500M.iso">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/500M.iso">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/500M.iso">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/500M.iso">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/500M.iso">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/500M.iso">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/500M.iso">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/500M.iso">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/500M.iso">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/500M.iso">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/500M.iso">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/500M.iso">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/500M.iso">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/500M.iso">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/500M.iso">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/500M.iso">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/500M.iso">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/500M.iso">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/500M.iso">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/500M.iso">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/500M.iso">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/500M.iso">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/500M.iso">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/500M.iso">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/500M.iso">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/500M.iso">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/500M.iso">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/500M.iso">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/500M.iso">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/500M.iso">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/500M.iso">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/500M.iso">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/500M.iso">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/500M.iso">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/500M.iso">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/500M.iso">500M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 1Go</strong><br />Extension: <strong>.iso</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/1G.iso">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/1G.iso">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/1G.iso">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/1G.iso">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/1G.iso">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/1G.iso">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/1G.iso">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/1G.iso">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/1G.iso">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/1G.iso">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/1G.iso">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/1G.iso">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/1G.iso">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/1G.iso">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/1G.iso">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/1G.iso">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/1G.iso">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/1G.iso">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/1G.iso">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/1G.iso">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/1G.iso">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/1G.iso">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/1G.iso">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/1G.iso">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/1G.iso">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/1G.iso">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/1G.iso">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/1G.iso">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/1G.iso">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/1G.iso">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/1G.iso">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/1G.iso">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/1G.iso">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/1G.iso">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/1G.iso">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/1G.iso">1G</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 5Go</strong><br />Extension: <strong>.iso</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/5G.iso">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/5G.iso">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/5G.iso">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/5G.iso">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/5G.iso">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/5G.iso">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/5G.iso">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/5G.iso">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/5G.iso">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/5G.iso">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/5G.iso">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/5G.iso">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/5G.iso">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/5G.iso">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/5G.iso">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/5G.iso">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/5G.iso">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/5G.iso">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/5G.iso">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/5G.iso">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/5G.iso">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/5G.iso">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/5G.iso">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/5G.iso">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/5G.iso">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/5G.iso">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/5G.iso">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/5G.iso">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/5G.iso">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/5G.iso">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/5G.iso">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/5G.iso">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/5G.iso">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/5G.iso">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/5G.iso">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/5G.iso">5G</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 1Mo</strong><br />Extension: <strong>.avi</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/1M/1M.avi">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/1M/1M.avi">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/1M/1M.avi">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/1M/1M.avi">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/1M/1M.avi">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/1M/1M.avi">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/1M/1M.avi">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/1M/1M.avi">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/1M/1M.avi">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/1M/1M.avi">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/1M/1M.avi">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/1M/1M.avi">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/1M/1M.avi">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/1M/1M.avi">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/1M/1M.avi">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/1M/1M.avi">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/1M/1M.avi">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/1M/1M.avi">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/1M/1M.avi">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/1M/1M.avi">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/1M/1M.avi">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/1M/1M.avi">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/1M/1M.avi">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/1M/1M.avi">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/1M/1M.avi">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/1M/1M.avi">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/1M/1M.avi">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/1M/1M.avi">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/1M/1M.avi">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/1M/1M.avi">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/1M/1M.avi">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/1M/1M.avi">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/1M/1M.avi">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/1M/1M.avi">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/1M/1M.avi">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/1M/1M.avi">1M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 5Mo</strong><br />Extension: <strong>.avi</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/5M/5M.avi">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/5M/5M.avi">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/5M/5M.avi">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/5M/5M.avi">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/5M/5M.avi">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/5M/5M.avi">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/5M/5M.avi">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/5M/5M.avi">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/5M/5M.avi">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/5M/5M.avi">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/5M/5M.avi">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/5M/5M.avi">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/5M/5M.avi">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/5M/5M.avi">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/5M/5M.avi">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/5M/5M.avi">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/5M/5M.avi">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/5M/5M.avi">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/5M/5M.avi">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/5M/5M.avi">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/5M/5M.avi">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/5M/5M.avi">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/5M/5M.avi">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/5M/5M.avi">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/5M/5M.avi">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/5M/5M.avi">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/5M/5M.avi">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/5M/5M.avi">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/5M/5M.avi">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/5M/5M.avi">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/5M/5M.avi">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/5M/5M.avi">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/5M/5M.avi">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/5M/5M.avi">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/5M/5M.avi">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/5M/5M.avi">5M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 10Mo</strong><br />Extension: <strong>.avi</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/10M/10M.avi">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/10M/10M.avi">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/10M/10M.avi">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/10M/10M.avi">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/10M/10M.avi">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/10M/10M.avi">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/10M/10M.avi">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/10M/10M.avi">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/10M/10M.avi">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/10M/10M.avi">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/10M/10M.avi">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/10M/10M.avi">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/10M/10M.avi">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/10M/10M.avi">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/10M/10M.avi">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/10M/10M.avi">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/10M/10M.avi">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/10M/10M.avi">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/10M/10M.avi">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/10M/10M.avi">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/10M/10M.avi">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/10M/10M.avi">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/10M/10M.avi">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/10M/10M.avi">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/10M/10M.avi">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/10M/10M.avi">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/10M/10M.avi">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/10M/10M.avi">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/10M/10M.avi">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/10M/10M.avi">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/10M/10M.avi">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/10M/10M.avi">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/10M/10M.avi">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/10M/10M.avi">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/10M/10M.avi">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/10M/10M.avi">10M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 50Mo</strong><br />Extension: <strong>.avi</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/50M/50M.avi">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/50M/50M.avi">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/50M/50M.avi">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/50M/50M.avi">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/50M/50M.avi">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/50M/50M.avi">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/50M/50M.avi">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/50M/50M.avi">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/50M/50M.avi">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/50M/50M.avi">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/50M/50M.avi">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/50M/50M.avi">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/50M/50M.avi">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/50M/50M.avi">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/50M/50M.avi">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/50M/50M.avi">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/50M/50M.avi">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/50M/50M.avi">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/50M/50M.avi">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/50M/50M.avi">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/50M/50M.avi">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/50M/50M.avi">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/50M/50M.avi">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/50M/50M.avi">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/50M/50M.avi">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/50M/50M.avi">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/50M/50M.avi">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/50M/50M.avi">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/50M/50M.avi">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/50M/50M.avi">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/50M/50M.avi">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/50M/50M.avi">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/50M/50M.avi">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/50M/50M.avi">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/50M/50M.avi">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/50M/50M.avi">50M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 100Mo</strong><br />Extension: <strong>.avi</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/100M/100M.avi">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/100M/100M.avi">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/100M/100M.avi">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/100M/100M.avi">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/100M/100M.avi">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/100M/100M.avi">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/100M/100M.avi">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/100M/100M.avi">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/100M/100M.avi">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/100M/100M.avi">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/100M/100M.avi">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/100M/100M.avi">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/100M/100M.avi">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/100M/100M.avi">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/100M/100M.avi">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/100M/100M.avi">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/100M/100M.avi">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/100M/100M.avi">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/100M/100M.avi">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/100M/100M.avi">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/100M/100M.avi">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/100M/100M.avi">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/100M/100M.avi">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/100M/100M.avi">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/100M/100M.avi">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/100M/100M.avi">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/100M/100M.avi">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/100M/100M.avi">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/100M/100M.avi">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/100M/100M.avi">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/100M/100M.avi">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/100M/100M.avi">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/100M/100M.avi">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/100M/100M.avi">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/100M/100M.avi">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/100M/100M.avi">100M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 500Mo</strong><br />Extension: <strong>.avi</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/500M/500M.avi">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/500M/500M.avi">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/500M/500M.avi">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/500M/500M.avi">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/500M/500M.avi">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/500M/500M.avi">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/500M/500M.avi">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/500M/500M.avi">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/500M/500M.avi">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/500M/500M.avi">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/500M/500M.avi">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/500M/500M.avi">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/500M/500M.avi">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/500M/500M.avi">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/500M/500M.avi">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/500M/500M.avi">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/500M/500M.avi">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/500M/500M.avi">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/500M/500M.avi">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/500M/500M.avi">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/500M/500M.avi">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/500M/500M.avi">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/500M/500M.avi">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/500M/500M.avi">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/500M/500M.avi">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/500M/500M.avi">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/500M/500M.avi">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/500M/500M.avi">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/500M/500M.avi">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/500M/500M.avi">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/500M/500M.avi">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/500M/500M.avi">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/500M/500M.avi">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/500M/500M.avi">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/500M/500M.avi">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/500M/500M.avi">500M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 1Go</strong><br />Extension: <strong>.avi</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/1G/1G.avi">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/1G/1G.avi">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/1G/1G.avi">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/1G/1G.avi">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/1G/1G.avi">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/1G/1G.avi">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/1G/1G.avi">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/1G/1G.avi">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/1G/1G.avi">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/1G/1G.avi">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/1G/1G.avi">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/1G/1G.avi">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/1G/1G.avi">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/1G/1G.avi">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/1G/1G.avi">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/1G/1G.avi">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/1G/1G.avi">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/1G/1G.avi">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/1G/1G.avi">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/1G/1G.avi">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/1G/1G.avi">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/1G/1G.avi">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/1G/1G.avi">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/1G/1G.avi">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/1G/1G.avi">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/1G/1G.avi">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/1G/1G.avi">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/1G/1G.avi">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/1G/1G.avi">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/1G/1G.avi">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/1G/1G.avi">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/1G/1G.avi">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/1G/1G.avi">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/1G/1G.avi">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/1G/1G.avi">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/1G/1G.avi">1G</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 5Go</strong><br />Extension: <strong>.avi</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/5G/5G.avi">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/5G/5G.avi">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/5G/5G.avi">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/5G/5G.avi">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/5G/5G.avi">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/5G/5G.avi">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/5G/5G.avi">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/5G/5G.avi">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/5G/5G.avi">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/5G/5G.avi">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/5G/5G.avi">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/5G/5G.avi">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/5G/5G.avi">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/5G/5G.avi">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/5G/5G.avi">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/5G/5G.avi">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/5G/5G.avi">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/5G/5G.avi">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/5G/5G.avi">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/5G/5G.avi">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/5G/5G.avi">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/5G/5G.avi">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/5G/5G.avi">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/5G/5G.avi">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/5G/5G.avi">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/5G/5G.avi">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/5G/5G.avi">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/5G/5G.avi">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/5G/5G.avi">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/5G/5G.avi">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/5G/5G.avi">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/5G/5G.avi">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/5G/5G.avi">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/5G/5G.avi">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/5G/5G.avi">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/5G/5G.avi">5G</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 1Mo</strong><br />Extension: <strong>.doc</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/1M/1M.doc">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/1M/1M.doc">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/1M/1M.doc">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/1M/1M.doc">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/1M/1M.doc">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/1M/1M.doc">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/1M/1M.doc">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/1M/1M.doc">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/1M/1M.doc">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/1M/1M.doc">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/1M/1M.doc">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/1M/1M.doc">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/1M/1M.doc">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/1M/1M.doc">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/1M/1M.doc">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/1M/1M.doc">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/1M/1M.doc">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/1M/1M.doc">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/1M/1M.doc">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/1M/1M.doc">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/1M/1M.doc">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/1M/1M.doc">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/1M/1M.doc">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/1M/1M.doc">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/1M/1M.doc">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/1M/1M.doc">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/1M/1M.doc">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/1M/1M.doc">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/1M/1M.doc">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/1M/1M.doc">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/1M/1M.doc">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/1M/1M.doc">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/1M/1M.doc">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/1M/1M.doc">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/1M/1M.doc">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/1M/1M.doc">1M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 5Mo</strong><br />Extension: <strong>.doc</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/5M/5M.doc">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/5M/5M.doc">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/5M/5M.doc">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/5M/5M.doc">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/5M/5M.doc">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/5M/5M.doc">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/5M/5M.doc">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/5M/5M.doc">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/5M/5M.doc">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/5M/5M.doc">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/5M/5M.doc">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/5M/5M.doc">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/5M/5M.doc">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/5M/5M.doc">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/5M/5M.doc">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/5M/5M.doc">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/5M/5M.doc">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/5M/5M.doc">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/5M/5M.doc">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/5M/5M.doc">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/5M/5M.doc">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/5M/5M.doc">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/5M/5M.doc">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/5M/5M.doc">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/5M/5M.doc">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/5M/5M.doc">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/5M/5M.doc">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/5M/5M.doc">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/5M/5M.doc">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/5M/5M.doc">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/5M/5M.doc">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/5M/5M.doc">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/5M/5M.doc">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/5M/5M.doc">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/5M/5M.doc">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/5M/5M.doc">5M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 10Mo</strong><br />Extension: <strong>.doc</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/10M/10M.doc">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/10M/10M.doc">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/10M/10M.doc">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/10M/10M.doc">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/10M/10M.doc">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/10M/10M.doc">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/10M/10M.doc">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/10M/10M.doc">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/10M/10M.doc">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/10M/10M.doc">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/10M/10M.doc">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/10M/10M.doc">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/10M/10M.doc">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/10M/10M.doc">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/10M/10M.doc">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/10M/10M.doc">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/10M/10M.doc">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/10M/10M.doc">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/10M/10M.doc">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/10M/10M.doc">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/10M/10M.doc">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/10M/10M.doc">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/10M/10M.doc">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/10M/10M.doc">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/10M/10M.doc">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/10M/10M.doc">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/10M/10M.doc">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/10M/10M.doc">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/10M/10M.doc">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/10M/10M.doc">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/10M/10M.doc">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/10M/10M.doc">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/10M/10M.doc">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/10M/10M.doc">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/10M/10M.doc">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/10M/10M.doc">10M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 50Mo</strong><br />Extension: <strong>.doc</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/50M/50M.doc">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/50M/50M.doc">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/50M/50M.doc">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/50M/50M.doc">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/50M/50M.doc">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/50M/50M.doc">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/50M/50M.doc">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/50M/50M.doc">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/50M/50M.doc">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/50M/50M.doc">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/50M/50M.doc">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/50M/50M.doc">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/50M/50M.doc">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/50M/50M.doc">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/50M/50M.doc">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/50M/50M.doc">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/50M/50M.doc">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/50M/50M.doc">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/50M/50M.doc">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/50M/50M.doc">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/50M/50M.doc">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/50M/50M.doc">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/50M/50M.doc">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/50M/50M.doc">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/50M/50M.doc">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/50M/50M.doc">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/50M/50M.doc">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/50M/50M.doc">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/50M/50M.doc">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/50M/50M.doc">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/50M/50M.doc">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/50M/50M.doc">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/50M/50M.doc">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/50M/50M.doc">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/50M/50M.doc">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/50M/50M.doc">50M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 100Mo</strong><br />Extension: <strong>.doc</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/100M/100M.doc">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/100M/100M.doc">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/100M/100M.doc">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/100M/100M.doc">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/100M/100M.doc">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/100M/100M.doc">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/100M/100M.doc">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/100M/100M.doc">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/100M/100M.doc">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/100M/100M.doc">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/100M/100M.doc">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/100M/100M.doc">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/100M/100M.doc">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/100M/100M.doc">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/100M/100M.doc">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/100M/100M.doc">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/100M/100M.doc">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/100M/100M.doc">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/100M/100M.doc">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/100M/100M.doc">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/100M/100M.doc">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/100M/100M.doc">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/100M/100M.doc">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/100M/100M.doc">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/100M/100M.doc">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/100M/100M.doc">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/100M/100M.doc">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/100M/100M.doc">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/100M/100M.doc">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/100M/100M.doc">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/100M/100M.doc">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/100M/100M.doc">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/100M/100M.doc">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/100M/100M.doc">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/100M/100M.doc">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/100M/100M.doc">100M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 500Mo</strong><br />Extension: <strong>.doc</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/500M/500M.doc">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/500M/500M.doc">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/500M/500M.doc">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/500M/500M.doc">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/500M/500M.doc">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/500M/500M.doc">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/500M/500M.doc">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/500M/500M.doc">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/500M/500M.doc">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/500M/500M.doc">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/500M/500M.doc">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/500M/500M.doc">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/500M/500M.doc">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/500M/500M.doc">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/500M/500M.doc">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/500M/500M.doc">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/500M/500M.doc">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/500M/500M.doc">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/500M/500M.doc">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/500M/500M.doc">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/500M/500M.doc">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/500M/500M.doc">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/500M/500M.doc">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/500M/500M.doc">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/500M/500M.doc">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/500M/500M.doc">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/500M/500M.doc">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/500M/500M.doc">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/500M/500M.doc">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/500M/500M.doc">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/500M/500M.doc">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/500M/500M.doc">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/500M/500M.doc">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/500M/500M.doc">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/500M/500M.doc">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/500M/500M.doc">500M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 1Go</strong><br />Extension: <strong>.doc</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/1G/1G.doc">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/1G/1G.doc">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/1G/1G.doc">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/1G/1G.doc">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/1G/1G.doc">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/1G/1G.doc">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/1G/1G.doc">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/1G/1G.doc">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/1G/1G.doc">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/1G/1G.doc">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/1G/1G.doc">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/1G/1G.doc">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/1G/1G.doc">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/1G/1G.doc">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/1G/1G.doc">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/1G/1G.doc">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/1G/1G.doc">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/1G/1G.doc">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/1G/1G.doc">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/1G/1G.doc">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/1G/1G.doc">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/1G/1G.doc">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/1G/1G.doc">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/1G/1G.doc">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/1G/1G.doc">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/1G/1G.doc">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/1G/1G.doc">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/1G/1G.doc">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/1G/1G.doc">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/1G/1G.doc">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/1G/1G.doc">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/1G/1G.doc">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/1G/1G.doc">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/1G/1G.doc">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/1G/1G.doc">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/1G/1G.doc">1G</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 5Go</strong><br />Extension: <strong>.doc</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/5G/5G.doc">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/5G/5G.doc">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/5G/5G.doc">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/5G/5G.doc">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/5G/5G.doc">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/5G/5G.doc">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/5G/5G.doc">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/5G/5G.doc">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/5G/5G.doc">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/5G/5G.doc">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/5G/5G.doc">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/5G/5G.doc">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/5G/5G.doc">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/5G/5G.doc">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/5G/5G.doc">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/5G/5G.doc">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/5G/5G.doc">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/5G/5G.doc">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/5G/5G.doc">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/5G/5G.doc">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/5G/5G.doc">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/5G/5G.doc">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/5G/5G.doc">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/5G/5G.doc">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/5G/5G.doc">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/5G/5G.doc">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/5G/5G.doc">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/5G/5G.doc">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/5G/5G.doc">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/5G/5G.doc">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/5G/5G.doc">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/5G/5G.doc">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/5G/5G.doc">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/5G/5G.doc">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/5G/5G.doc">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/5G/5G.doc">5G</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 1Mo</strong><br />Extension: <strong>.exe</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/1M/1M.exe">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/1M/1M.exe">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/1M/1M.exe">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/1M/1M.exe">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/1M/1M.exe">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/1M/1M.exe">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/1M/1M.exe">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/1M/1M.exe">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/1M/1M.exe">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/1M/1M.exe">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/1M/1M.exe">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/1M/1M.exe">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/1M/1M.exe">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/1M/1M.exe">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/1M/1M.exe">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/1M/1M.exe">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/1M/1M.exe">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/1M/1M.exe">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/1M/1M.exe">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/1M/1M.exe">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/1M/1M.exe">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/1M/1M.exe">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/1M/1M.exe">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/1M/1M.exe">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/1M/1M.exe">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/1M/1M.exe">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/1M/1M.exe">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/1M/1M.exe">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/1M/1M.exe">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/1M/1M.exe">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/1M/1M.exe">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/1M/1M.exe">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/1M/1M.exe">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/1M/1M.exe">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/1M/1M.exe">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/1M/1M.exe">1M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 5Mo</strong><br />Extension: <strong>.exe</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/5M/5M.exe">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/5M/5M.exe">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/5M/5M.exe">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/5M/5M.exe">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/5M/5M.exe">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/5M/5M.exe">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/5M/5M.exe">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/5M/5M.exe">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/5M/5M.exe">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/5M/5M.exe">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/5M/5M.exe">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/5M/5M.exe">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/5M/5M.exe">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/5M/5M.exe">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/5M/5M.exe">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/5M/5M.exe">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/5M/5M.exe">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/5M/5M.exe">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/5M/5M.exe">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/5M/5M.exe">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/5M/5M.exe">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/5M/5M.exe">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/5M/5M.exe">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/5M/5M.exe">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/5M/5M.exe">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/5M/5M.exe">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/5M/5M.exe">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/5M/5M.exe">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/5M/5M.exe">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/5M/5M.exe">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/5M/5M.exe">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/5M/5M.exe">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/5M/5M.exe">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/5M/5M.exe">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/5M/5M.exe">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/5M/5M.exe">5M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 10Mo</strong><br />Extension: <strong>.exe</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/10M/10M.exe">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/10M/10M.exe">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/10M/10M.exe">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/10M/10M.exe">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/10M/10M.exe">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/10M/10M.exe">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/10M/10M.exe">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/10M/10M.exe">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/10M/10M.exe">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/10M/10M.exe">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/10M/10M.exe">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/10M/10M.exe">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/10M/10M.exe">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/10M/10M.exe">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/10M/10M.exe">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/10M/10M.exe">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/10M/10M.exe">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/10M/10M.exe">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/10M/10M.exe">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/10M/10M.exe">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/10M/10M.exe">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/10M/10M.exe">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/10M/10M.exe">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/10M/10M.exe">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/10M/10M.exe">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/10M/10M.exe">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/10M/10M.exe">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/10M/10M.exe">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/10M/10M.exe">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/10M/10M.exe">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/10M/10M.exe">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/10M/10M.exe">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/10M/10M.exe">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/10M/10M.exe">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/10M/10M.exe">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/10M/10M.exe">10M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 50Mo</strong><br />Extension: <strong>.exe</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/50M/50M.exe">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/50M/50M.exe">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/50M/50M.exe">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/50M/50M.exe">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/50M/50M.exe">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/50M/50M.exe">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/50M/50M.exe">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/50M/50M.exe">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/50M/50M.exe">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/50M/50M.exe">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/50M/50M.exe">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/50M/50M.exe">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/50M/50M.exe">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/50M/50M.exe">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/50M/50M.exe">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/50M/50M.exe">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/50M/50M.exe">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/50M/50M.exe">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/50M/50M.exe">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/50M/50M.exe">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/50M/50M.exe">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/50M/50M.exe">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/50M/50M.exe">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/50M/50M.exe">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/50M/50M.exe">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/50M/50M.exe">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/50M/50M.exe">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/50M/50M.exe">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/50M/50M.exe">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/50M/50M.exe">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/50M/50M.exe">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/50M/50M.exe">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/50M/50M.exe">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/50M/50M.exe">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/50M/50M.exe">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/50M/50M.exe">50M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 100Mo</strong><br />Extension: <strong>.exe</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/100M/100M.exe">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/100M/100M.exe">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/100M/100M.exe">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/100M/100M.exe">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/100M/100M.exe">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/100M/100M.exe">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/100M/100M.exe">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/100M/100M.exe">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/100M/100M.exe">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/100M/100M.exe">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/100M/100M.exe">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/100M/100M.exe">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/100M/100M.exe">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/100M/100M.exe">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/100M/100M.exe">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/100M/100M.exe">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/100M/100M.exe">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/100M/100M.exe">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/100M/100M.exe">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/100M/100M.exe">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/100M/100M.exe">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/100M/100M.exe">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/100M/100M.exe">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/100M/100M.exe">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/100M/100M.exe">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/100M/100M.exe">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/100M/100M.exe">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/100M/100M.exe">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/100M/100M.exe">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/100M/100M.exe">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/100M/100M.exe">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/100M/100M.exe">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/100M/100M.exe">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/100M/100M.exe">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/100M/100M.exe">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/100M/100M.exe">100M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 500Mo</strong><br />Extension: <strong>.exe</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/500M/500M.exe">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/500M/500M.exe">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/500M/500M.exe">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/500M/500M.exe">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/500M/500M.exe">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/500M/500M.exe">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/500M/500M.exe">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/500M/500M.exe">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/500M/500M.exe">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/500M/500M.exe">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/500M/500M.exe">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/500M/500M.exe">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/500M/500M.exe">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/500M/500M.exe">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/500M/500M.exe">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/500M/500M.exe">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/500M/500M.exe">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/500M/500M.exe">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/500M/500M.exe">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/500M/500M.exe">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/500M/500M.exe">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/500M/500M.exe">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/500M/500M.exe">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/500M/500M.exe">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/500M/500M.exe">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/500M/500M.exe">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/500M/500M.exe">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/500M/500M.exe">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/500M/500M.exe">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/500M/500M.exe">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/500M/500M.exe">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/500M/500M.exe">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/500M/500M.exe">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/500M/500M.exe">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/500M/500M.exe">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/500M/500M.exe">500M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 1Go</strong><br />Extension: <strong>.exe</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/1G/1G.exe">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/1G/1G.exe">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/1G/1G.exe">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/1G/1G.exe">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/1G/1G.exe">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/1G/1G.exe">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/1G/1G.exe">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/1G/1G.exe">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/1G/1G.exe">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/1G/1G.exe">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/1G/1G.exe">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/1G/1G.exe">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/1G/1G.exe">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/1G/1G.exe">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/1G/1G.exe">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/1G/1G.exe">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/1G/1G.exe">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/1G/1G.exe">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/1G/1G.exe">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/1G/1G.exe">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/1G/1G.exe">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/1G/1G.exe">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/1G/1G.exe">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/1G/1G.exe">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/1G/1G.exe">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/1G/1G.exe">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/1G/1G.exe">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/1G/1G.exe">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/1G/1G.exe">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/1G/1G.exe">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/1G/1G.exe">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/1G/1G.exe">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/1G/1G.exe">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/1G/1G.exe">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/1G/1G.exe">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/1G/1G.exe">1G</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 5Go</strong><br />Extension: <strong>.exe</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/5G/5G.exe">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/5G/5G.exe">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/5G/5G.exe">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/5G/5G.exe">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/5G/5G.exe">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/5G/5G.exe">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/5G/5G.exe">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/5G/5G.exe">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/5G/5G.exe">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/5G/5G.exe">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/5G/5G.exe">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/5G/5G.exe">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/5G/5G.exe">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/5G/5G.exe">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/5G/5G.exe">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/5G/5G.exe">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/5G/5G.exe">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/5G/5G.exe">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/5G/5G.exe">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/5G/5G.exe">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/5G/5G.exe">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/5G/5G.exe">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/5G/5G.exe">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/5G/5G.exe">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/5G/5G.exe">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/5G/5G.exe">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/5G/5G.exe">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/5G/5G.exe">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/5G/5G.exe">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/5G/5G.exe">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/5G/5G.exe">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/5G/5G.exe">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/5G/5G.exe">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/5G/5G.exe">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/5G/5G.exe">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/5G/5G.exe">5G</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 1Mo</strong><br />Extension: <strong>.mp3</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/1M/1M.mp3">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/1M/1M.mp3">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/1M/1M.mp3">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/1M/1M.mp3">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/1M/1M.mp3">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/1M/1M.mp3">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/1M/1M.mp3">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/1M/1M.mp3">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/1M/1M.mp3">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/1M/1M.mp3">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/1M/1M.mp3">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/1M/1M.mp3">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/1M/1M.mp3">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/1M/1M.mp3">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/1M/1M.mp3">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/1M/1M.mp3">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/1M/1M.mp3">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/1M/1M.mp3">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/1M/1M.mp3">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/1M/1M.mp3">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/1M/1M.mp3">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/1M/1M.mp3">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/1M/1M.mp3">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/1M/1M.mp3">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/1M/1M.mp3">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/1M/1M.mp3">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/1M/1M.mp3">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/1M/1M.mp3">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/1M/1M.mp3">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/1M/1M.mp3">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/1M/1M.mp3">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/1M/1M.mp3">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/1M/1M.mp3">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/1M/1M.mp3">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/1M/1M.mp3">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/1M/1M.mp3">1M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 5Mo</strong><br />Extension: <strong>.mp3</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/5M/5M.mp3">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/5M/5M.mp3">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/5M/5M.mp3">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/5M/5M.mp3">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/5M/5M.mp3">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/5M/5M.mp3">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/5M/5M.mp3">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/5M/5M.mp3">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/5M/5M.mp3">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/5M/5M.mp3">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/5M/5M.mp3">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/5M/5M.mp3">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/5M/5M.mp3">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/5M/5M.mp3">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/5M/5M.mp3">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/5M/5M.mp3">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/5M/5M.mp3">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/5M/5M.mp3">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/5M/5M.mp3">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/5M/5M.mp3">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/5M/5M.mp3">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/5M/5M.mp3">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/5M/5M.mp3">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/5M/5M.mp3">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/5M/5M.mp3">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/5M/5M.mp3">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/5M/5M.mp3">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/5M/5M.mp3">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/5M/5M.mp3">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/5M/5M.mp3">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/5M/5M.mp3">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/5M/5M.mp3">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/5M/5M.mp3">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/5M/5M.mp3">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/5M/5M.mp3">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/5M/5M.mp3">5M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 10Mo</strong><br />Extension: <strong>.mp3</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/10M/10M.mp3">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/10M/10M.mp3">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/10M/10M.mp3">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/10M/10M.mp3">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/10M/10M.mp3">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/10M/10M.mp3">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/10M/10M.mp3">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/10M/10M.mp3">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/10M/10M.mp3">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/10M/10M.mp3">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/10M/10M.mp3">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/10M/10M.mp3">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/10M/10M.mp3">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/10M/10M.mp3">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/10M/10M.mp3">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/10M/10M.mp3">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/10M/10M.mp3">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/10M/10M.mp3">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/10M/10M.mp3">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/10M/10M.mp3">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/10M/10M.mp3">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/10M/10M.mp3">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/10M/10M.mp3">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/10M/10M.mp3">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/10M/10M.mp3">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/10M/10M.mp3">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/10M/10M.mp3">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/10M/10M.mp3">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/10M/10M.mp3">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/10M/10M.mp3">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/10M/10M.mp3">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/10M/10M.mp3">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/10M/10M.mp3">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/10M/10M.mp3">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/10M/10M.mp3">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/10M/10M.mp3">10M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 50Mo</strong><br />Extension: <strong>.mp3</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/50M/50M.mp3">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/50M/50M.mp3">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/50M/50M.mp3">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/50M/50M.mp3">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/50M/50M.mp3">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/50M/50M.mp3">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/50M/50M.mp3">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/50M/50M.mp3">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/50M/50M.mp3">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/50M/50M.mp3">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/50M/50M.mp3">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/50M/50M.mp3">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/50M/50M.mp3">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/50M/50M.mp3">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/50M/50M.mp3">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/50M/50M.mp3">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/50M/50M.mp3">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/50M/50M.mp3">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/50M/50M.mp3">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/50M/50M.mp3">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/50M/50M.mp3">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/50M/50M.mp3">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/50M/50M.mp3">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/50M/50M.mp3">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/50M/50M.mp3">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/50M/50M.mp3">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/50M/50M.mp3">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/50M/50M.mp3">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/50M/50M.mp3">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/50M/50M.mp3">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/50M/50M.mp3">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/50M/50M.mp3">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/50M/50M.mp3">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/50M/50M.mp3">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/50M/50M.mp3">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/50M/50M.mp3">50M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 100Mo</strong><br />Extension: <strong>.mp3</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/100M/100M.mp3">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/100M/100M.mp3">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/100M/100M.mp3">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/100M/100M.mp3">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/100M/100M.mp3">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/100M/100M.mp3">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/100M/100M.mp3">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/100M/100M.mp3">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/100M/100M.mp3">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/100M/100M.mp3">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/100M/100M.mp3">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/100M/100M.mp3">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/100M/100M.mp3">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/100M/100M.mp3">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/100M/100M.mp3">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/100M/100M.mp3">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/100M/100M.mp3">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/100M/100M.mp3">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/100M/100M.mp3">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/100M/100M.mp3">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/100M/100M.mp3">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/100M/100M.mp3">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/100M/100M.mp3">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/100M/100M.mp3">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/100M/100M.mp3">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/100M/100M.mp3">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/100M/100M.mp3">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/100M/100M.mp3">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/100M/100M.mp3">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/100M/100M.mp3">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/100M/100M.mp3">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/100M/100M.mp3">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/100M/100M.mp3">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/100M/100M.mp3">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/100M/100M.mp3">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/100M/100M.mp3">100M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 500Mo</strong><br />Extension: <strong>.mp3</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/500M/500M.mp3">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/500M/500M.mp3">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/500M/500M.mp3">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/500M/500M.mp3">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/500M/500M.mp3">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/500M/500M.mp3">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/500M/500M.mp3">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/500M/500M.mp3">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/500M/500M.mp3">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/500M/500M.mp3">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/500M/500M.mp3">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/500M/500M.mp3">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/500M/500M.mp3">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/500M/500M.mp3">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/500M/500M.mp3">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/500M/500M.mp3">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/500M/500M.mp3">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/500M/500M.mp3">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/500M/500M.mp3">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/500M/500M.mp3">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/500M/500M.mp3">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/500M/500M.mp3">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/500M/500M.mp3">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/500M/500M.mp3">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/500M/500M.mp3">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/500M/500M.mp3">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/500M/500M.mp3">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/500M/500M.mp3">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/500M/500M.mp3">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/500M/500M.mp3">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/500M/500M.mp3">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/500M/500M.mp3">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/500M/500M.mp3">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/500M/500M.mp3">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/500M/500M.mp3">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/500M/500M.mp3">500M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 1Go</strong><br />Extension: <strong>.mp3</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/1G/1G.mp3">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/1G/1G.mp3">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/1G/1G.mp3">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/1G/1G.mp3">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/1G/1G.mp3">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/1G/1G.mp3">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/1G/1G.mp3">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/1G/1G.mp3">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/1G/1G.mp3">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/1G/1G.mp3">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/1G/1G.mp3">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/1G/1G.mp3">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/1G/1G.mp3">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/1G/1G.mp3">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/1G/1G.mp3">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/1G/1G.mp3">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/1G/1G.mp3">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/1G/1G.mp3">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/1G/1G.mp3">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/1G/1G.mp3">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/1G/1G.mp3">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/1G/1G.mp3">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/1G/1G.mp3">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/1G/1G.mp3">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/1G/1G.mp3">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/1G/1G.mp3">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/1G/1G.mp3">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/1G/1G.mp3">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/1G/1G.mp3">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/1G/1G.mp3">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/1G/1G.mp3">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/1G/1G.mp3">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/1G/1G.mp3">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/1G/1G.mp3">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/1G/1G.mp3">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/1G/1G.mp3">1G</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 5Go</strong><br />Extension: <strong>.mp3</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/5G/5G.mp3">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/5G/5G.mp3">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/5G/5G.mp3">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/5G/5G.mp3">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/5G/5G.mp3">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/5G/5G.mp3">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/5G/5G.mp3">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/5G/5G.mp3">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/5G/5G.mp3">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/5G/5G.mp3">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/5G/5G.mp3">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/5G/5G.mp3">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/5G/5G.mp3">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/5G/5G.mp3">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/5G/5G.mp3">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/5G/5G.mp3">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/5G/5G.mp3">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/5G/5G.mp3">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/5G/5G.mp3">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/5G/5G.mp3">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/5G/5G.mp3">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/5G/5G.mp3">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/5G/5G.mp3">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/5G/5G.mp3">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/5G/5G.mp3">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/5G/5G.mp3">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/5G/5G.mp3">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/5G/5G.mp3">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/5G/5G.mp3">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/5G/5G.mp3">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/5G/5G.mp3">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/5G/5G.mp3">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/5G/5G.mp3">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/5G/5G.mp3">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/5G/5G.mp3">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/5G/5G.mp3">5G</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 1Mo</strong><br />Extension: <strong>.php</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/1M/1M.php">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/1M/1M.php">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/1M/1M.php">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/1M/1M.php">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/1M/1M.php">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/1M/1M.php">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/1M/1M.php">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/1M/1M.php">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/1M/1M.php">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/1M/1M.php">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/1M/1M.php">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/1M/1M.php">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/1M/1M.php">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/1M/1M.php">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/1M/1M.php">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/1M/1M.php">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/1M/1M.php">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/1M/1M.php">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/1M/1M.php">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/1M/1M.php">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/1M/1M.php">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/1M/1M.php">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/1M/1M.php">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/1M/1M.php">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/1M/1M.php">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/1M/1M.php">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/1M/1M.php">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/1M/1M.php">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/1M/1M.php">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/1M/1M.php">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/1M/1M.php">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/1M/1M.php">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/1M/1M.php">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/1M/1M.php">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/1M/1M.php">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/1M/1M.php">1M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 5Mo</strong><br />Extension: <strong>.php</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/5M/5M.php">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/5M/5M.php">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/5M/5M.php">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/5M/5M.php">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/5M/5M.php">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/5M/5M.php">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/5M/5M.php">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/5M/5M.php">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/5M/5M.php">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/5M/5M.php">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/5M/5M.php">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/5M/5M.php">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/5M/5M.php">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/5M/5M.php">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/5M/5M.php">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/5M/5M.php">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/5M/5M.php">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/5M/5M.php">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/5M/5M.php">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/5M/5M.php">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/5M/5M.php">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/5M/5M.php">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/5M/5M.php">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/5M/5M.php">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/5M/5M.php">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/5M/5M.php">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/5M/5M.php">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/5M/5M.php">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/5M/5M.php">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/5M/5M.php">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/5M/5M.php">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/5M/5M.php">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/5M/5M.php">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/5M/5M.php">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/5M/5M.php">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/5M/5M.php">5M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 10Mo</strong><br />Extension: <strong>.php</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/10M/10M.php">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/10M/10M.php">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/10M/10M.php">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/10M/10M.php">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/10M/10M.php">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/10M/10M.php">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/10M/10M.php">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/10M/10M.php">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/10M/10M.php">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/10M/10M.php">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/10M/10M.php">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/10M/10M.php">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/10M/10M.php">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/10M/10M.php">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/10M/10M.php">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/10M/10M.php">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/10M/10M.php">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/10M/10M.php">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/10M/10M.php">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/10M/10M.php">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/10M/10M.php">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/10M/10M.php">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/10M/10M.php">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/10M/10M.php">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/10M/10M.php">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/10M/10M.php">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/10M/10M.php">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/10M/10M.php">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/10M/10M.php">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/10M/10M.php">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/10M/10M.php">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/10M/10M.php">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/10M/10M.php">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/10M/10M.php">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/10M/10M.php">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/10M/10M.php">10M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 50Mo</strong><br />Extension: <strong>.php</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/50M/50M.php">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/50M/50M.php">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/50M/50M.php">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/50M/50M.php">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/50M/50M.php">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/50M/50M.php">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/50M/50M.php">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/50M/50M.php">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/50M/50M.php">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/50M/50M.php">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/50M/50M.php">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/50M/50M.php">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/50M/50M.php">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/50M/50M.php">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/50M/50M.php">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/50M/50M.php">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/50M/50M.php">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/50M/50M.php">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/50M/50M.php">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/50M/50M.php">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/50M/50M.php">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/50M/50M.php">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/50M/50M.php">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/50M/50M.php">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/50M/50M.php">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/50M/50M.php">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/50M/50M.php">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/50M/50M.php">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/50M/50M.php">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/50M/50M.php">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/50M/50M.php">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/50M/50M.php">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/50M/50M.php">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/50M/50M.php">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/50M/50M.php">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/50M/50M.php">50M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 100Mo</strong><br />Extension: <strong>.php</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/100M/100M.php">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/100M/100M.php">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/100M/100M.php">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/100M/100M.php">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/100M/100M.php">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/100M/100M.php">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/100M/100M.php">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/100M/100M.php">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/100M/100M.php">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/100M/100M.php">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/100M/100M.php">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/100M/100M.php">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/100M/100M.php">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/100M/100M.php">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/100M/100M.php">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/100M/100M.php">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/100M/100M.php">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/100M/100M.php">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/100M/100M.php">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/100M/100M.php">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/100M/100M.php">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/100M/100M.php">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/100M/100M.php">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/100M/100M.php">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/100M/100M.php">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/100M/100M.php">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/100M/100M.php">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/100M/100M.php">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/100M/100M.php">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/100M/100M.php">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/100M/100M.php">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/100M/100M.php">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/100M/100M.php">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/100M/100M.php">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/100M/100M.php">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/100M/100M.php">100M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 500Mo</strong><br />Extension: <strong>.php</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/500M/500M.php">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/500M/500M.php">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/500M/500M.php">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/500M/500M.php">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/500M/500M.php">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/500M/500M.php">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/500M/500M.php">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/500M/500M.php">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/500M/500M.php">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/500M/500M.php">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/500M/500M.php">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/500M/500M.php">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/500M/500M.php">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/500M/500M.php">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/500M/500M.php">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/500M/500M.php">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/500M/500M.php">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/500M/500M.php">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/500M/500M.php">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/500M/500M.php">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/500M/500M.php">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/500M/500M.php">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/500M/500M.php">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/500M/500M.php">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/500M/500M.php">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/500M/500M.php">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/500M/500M.php">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/500M/500M.php">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/500M/500M.php">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/500M/500M.php">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/500M/500M.php">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/500M/500M.php">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/500M/500M.php">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/500M/500M.php">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/500M/500M.php">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/500M/500M.php">500M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 1Go</strong><br />Extension: <strong>.php</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/1G/1G.php">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/1G/1G.php">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/1G/1G.php">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/1G/1G.php">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/1G/1G.php">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/1G/1G.php">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/1G/1G.php">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/1G/1G.php">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/1G/1G.php">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/1G/1G.php">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/1G/1G.php">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/1G/1G.php">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/1G/1G.php">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/1G/1G.php">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/1G/1G.php">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/1G/1G.php">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/1G/1G.php">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/1G/1G.php">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/1G/1G.php">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/1G/1G.php">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/1G/1G.php">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/1G/1G.php">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/1G/1G.php">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/1G/1G.php">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/1G/1G.php">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/1G/1G.php">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/1G/1G.php">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/1G/1G.php">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/1G/1G.php">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/1G/1G.php">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/1G/1G.php">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/1G/1G.php">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/1G/1G.php">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/1G/1G.php">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/1G/1G.php">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/1G/1G.php">1G</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 5Go</strong><br />Extension: <strong>.php</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/5G/5G.php">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/5G/5G.php">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/5G/5G.php">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/5G/5G.php">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/5G/5G.php">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/5G/5G.php">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/5G/5G.php">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/5G/5G.php">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/5G/5G.php">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/5G/5G.php">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/5G/5G.php">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/5G/5G.php">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/5G/5G.php">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/5G/5G.php">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/5G/5G.php">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/5G/5G.php">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/5G/5G.php">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/5G/5G.php">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/5G/5G.php">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/5G/5G.php">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/5G/5G.php">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/5G/5G.php">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/5G/5G.php">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/5G/5G.php">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/5G/5G.php">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/5G/5G.php">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/5G/5G.php">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/5G/5G.php">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/5G/5G.php">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/5G/5G.php">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/5G/5G.php">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/5G/5G.php">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/5G/5G.php">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/5G/5G.php">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/5G/5G.php">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/5G/5G.php">5G</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 1Mo</strong><br />Extension: <strong>.raw</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/1M/1M.raw">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/1M/1M.raw">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/1M/1M.raw">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/1M/1M.raw">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/1M/1M.raw">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/1M/1M.raw">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/1M/1M.raw">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/1M/1M.raw">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/1M/1M.raw">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/1M/1M.raw">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/1M/1M.raw">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/1M/1M.raw">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/1M/1M.raw">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/1M/1M.raw">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/1M/1M.raw">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/1M/1M.raw">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/1M/1M.raw">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/1M/1M.raw">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/1M/1M.raw">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/1M/1M.raw">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/1M/1M.raw">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/1M/1M.raw">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/1M/1M.raw">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/1M/1M.raw">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/1M/1M.raw">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/1M/1M.raw">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/1M/1M.raw">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/1M/1M.raw">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/1M/1M.raw">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/1M/1M.raw">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/1M/1M.raw">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/1M/1M.raw">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/1M/1M.raw">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/1M/1M.raw">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/1M/1M.raw">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/1M/1M.raw">1M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 5Mo</strong><br />Extension: <strong>.raw</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/5M/5M.raw">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/5M/5M.raw">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/5M/5M.raw">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/5M/5M.raw">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/5M/5M.raw">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/5M/5M.raw">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/5M/5M.raw">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/5M/5M.raw">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/5M/5M.raw">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/5M/5M.raw">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/5M/5M.raw">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/5M/5M.raw">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/5M/5M.raw">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/5M/5M.raw">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/5M/5M.raw">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/5M/5M.raw">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/5M/5M.raw">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/5M/5M.raw">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/5M/5M.raw">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/5M/5M.raw">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/5M/5M.raw">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/5M/5M.raw">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/5M/5M.raw">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/5M/5M.raw">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/5M/5M.raw">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/5M/5M.raw">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/5M/5M.raw">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/5M/5M.raw">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/5M/5M.raw">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/5M/5M.raw">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/5M/5M.raw">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/5M/5M.raw">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/5M/5M.raw">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/5M/5M.raw">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/5M/5M.raw">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/5M/5M.raw">5M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 10Mo</strong><br />Extension: <strong>.raw</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/10M/10M.raw">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/10M/10M.raw">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/10M/10M.raw">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/10M/10M.raw">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/10M/10M.raw">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/10M/10M.raw">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/10M/10M.raw">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/10M/10M.raw">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/10M/10M.raw">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/10M/10M.raw">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/10M/10M.raw">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/10M/10M.raw">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/10M/10M.raw">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/10M/10M.raw">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/10M/10M.raw">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/10M/10M.raw">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/10M/10M.raw">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/10M/10M.raw">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/10M/10M.raw">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/10M/10M.raw">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/10M/10M.raw">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/10M/10M.raw">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/10M/10M.raw">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/10M/10M.raw">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/10M/10M.raw">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/10M/10M.raw">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/10M/10M.raw">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/10M/10M.raw">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/10M/10M.raw">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/10M/10M.raw">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/10M/10M.raw">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/10M/10M.raw">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/10M/10M.raw">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/10M/10M.raw">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/10M/10M.raw">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/10M/10M.raw">10M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 50Mo</strong><br />Extension: <strong>.raw</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/50M/50M.raw">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/50M/50M.raw">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/50M/50M.raw">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/50M/50M.raw">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/50M/50M.raw">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/50M/50M.raw">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/50M/50M.raw">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/50M/50M.raw">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/50M/50M.raw">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/50M/50M.raw">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/50M/50M.raw">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/50M/50M.raw">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/50M/50M.raw">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/50M/50M.raw">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/50M/50M.raw">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/50M/50M.raw">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/50M/50M.raw">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/50M/50M.raw">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/50M/50M.raw">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/50M/50M.raw">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/50M/50M.raw">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/50M/50M.raw">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/50M/50M.raw">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/50M/50M.raw">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/50M/50M.raw">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/50M/50M.raw">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/50M/50M.raw">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/50M/50M.raw">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/50M/50M.raw">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/50M/50M.raw">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/50M/50M.raw">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/50M/50M.raw">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/50M/50M.raw">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/50M/50M.raw">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/50M/50M.raw">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/50M/50M.raw">50M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 100Mo</strong><br />Extension: <strong>.raw</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/100M/100M.raw">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/100M/100M.raw">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/100M/100M.raw">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/100M/100M.raw">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/100M/100M.raw">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/100M/100M.raw">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/100M/100M.raw">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/100M/100M.raw">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/100M/100M.raw">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/100M/100M.raw">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/100M/100M.raw">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/100M/100M.raw">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/100M/100M.raw">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/100M/100M.raw">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/100M/100M.raw">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/100M/100M.raw">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/100M/100M.raw">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/100M/100M.raw">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/100M/100M.raw">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/100M/100M.raw">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/100M/100M.raw">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/100M/100M.raw">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/100M/100M.raw">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/100M/100M.raw">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/100M/100M.raw">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/100M/100M.raw">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/100M/100M.raw">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/100M/100M.raw">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/100M/100M.raw">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/100M/100M.raw">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/100M/100M.raw">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/100M/100M.raw">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/100M/100M.raw">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/100M/100M.raw">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/100M/100M.raw">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/100M/100M.raw">100M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 500Mo</strong><br />Extension: <strong>.raw</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/500M/500M.raw">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/500M/500M.raw">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/500M/500M.raw">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/500M/500M.raw">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/500M/500M.raw">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/500M/500M.raw">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/500M/500M.raw">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/500M/500M.raw">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/500M/500M.raw">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/500M/500M.raw">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/500M/500M.raw">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/500M/500M.raw">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/500M/500M.raw">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/500M/500M.raw">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/500M/500M.raw">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/500M/500M.raw">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/500M/500M.raw">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/500M/500M.raw">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/500M/500M.raw">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/500M/500M.raw">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/500M/500M.raw">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/500M/500M.raw">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/500M/500M.raw">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/500M/500M.raw">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/500M/500M.raw">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/500M/500M.raw">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/500M/500M.raw">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/500M/500M.raw">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/500M/500M.raw">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/500M/500M.raw">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/500M/500M.raw">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/500M/500M.raw">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/500M/500M.raw">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/500M/500M.raw">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/500M/500M.raw">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/500M/500M.raw">500M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 1Go</strong><br />Extension: <strong>.raw</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/1G/1G.raw">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/1G/1G.raw">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/1G/1G.raw">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/1G/1G.raw">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/1G/1G.raw">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/1G/1G.raw">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/1G/1G.raw">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/1G/1G.raw">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/1G/1G.raw">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/1G/1G.raw">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/1G/1G.raw">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/1G/1G.raw">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/1G/1G.raw">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/1G/1G.raw">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/1G/1G.raw">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/1G/1G.raw">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/1G/1G.raw">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/1G/1G.raw">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/1G/1G.raw">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/1G/1G.raw">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/1G/1G.raw">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/1G/1G.raw">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/1G/1G.raw">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/1G/1G.raw">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/1G/1G.raw">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/1G/1G.raw">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/1G/1G.raw">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/1G/1G.raw">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/1G/1G.raw">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/1G/1G.raw">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/1G/1G.raw">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/1G/1G.raw">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/1G/1G.raw">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/1G/1G.raw">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/1G/1G.raw">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/1G/1G.raw">1G</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 5Go</strong><br />Extension: <strong>.raw</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/5G/5G.raw">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/5G/5G.raw">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/5G/5G.raw">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/5G/5G.raw">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/5G/5G.raw">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/5G/5G.raw">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/5G/5G.raw">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/5G/5G.raw">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/5G/5G.raw">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/5G/5G.raw">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/5G/5G.raw">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/5G/5G.raw">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/5G/5G.raw">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/5G/5G.raw">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/5G/5G.raw">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/5G/5G.raw">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/5G/5G.raw">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/5G/5G.raw">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/5G/5G.raw">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/5G/5G.raw">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/5G/5G.raw">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/5G/5G.raw">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/5G/5G.raw">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/5G/5G.raw">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/5G/5G.raw">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/5G/5G.raw">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/5G/5G.raw">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/5G/5G.raw">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/5G/5G.raw">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/5G/5G.raw">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/5G/5G.raw">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/5G/5G.raw">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/5G/5G.raw">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/5G/5G.raw">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/5G/5G.raw">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/5G/5G.raw">5G</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 1Mo</strong><br />Extension: <strong>.txt</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/1M/1M.txt">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/1M/1M.txt">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/1M/1M.txt">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/1M/1M.txt">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/1M/1M.txt">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/1M/1M.txt">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/1M/1M.txt">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/1M/1M.txt">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/1M/1M.txt">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/1M/1M.txt">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/1M/1M.txt">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/1M/1M.txt">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/1M/1M.txt">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/1M/1M.txt">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/1M/1M.txt">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/1M/1M.txt">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/1M/1M.txt">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/1M/1M.txt">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/1M/1M.txt">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/1M/1M.txt">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/1M/1M.txt">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/1M/1M.txt">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/1M/1M.txt">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/1M/1M.txt">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/1M/1M.txt">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/1M/1M.txt">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/1M/1M.txt">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/1M/1M.txt">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/1M/1M.txt">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/1M/1M.txt">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/1M/1M.txt">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/1M/1M.txt">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/1M/1M.txt">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/1M/1M.txt">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/1M/1M.txt">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/1M/1M.txt">1M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 5Mo</strong><br />Extension: <strong>.txt</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/5M/5M.txt">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/5M/5M.txt">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/5M/5M.txt">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/5M/5M.txt">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/5M/5M.txt">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/5M/5M.txt">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/5M/5M.txt">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/5M/5M.txt">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/5M/5M.txt">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/5M/5M.txt">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/5M/5M.txt">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/5M/5M.txt">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/5M/5M.txt">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/5M/5M.txt">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/5M/5M.txt">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/5M/5M.txt">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/5M/5M.txt">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/5M/5M.txt">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/5M/5M.txt">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/5M/5M.txt">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/5M/5M.txt">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/5M/5M.txt">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/5M/5M.txt">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/5M/5M.txt">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/5M/5M.txt">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/5M/5M.txt">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/5M/5M.txt">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/5M/5M.txt">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/5M/5M.txt">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/5M/5M.txt">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/5M/5M.txt">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/5M/5M.txt">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/5M/5M.txt">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/5M/5M.txt">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/5M/5M.txt">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/5M/5M.txt">5M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 10Mo</strong><br />Extension: <strong>.txt</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/10M/10M.txt">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/10M/10M.txt">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/10M/10M.txt">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/10M/10M.txt">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/10M/10M.txt">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/10M/10M.txt">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/10M/10M.txt">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/10M/10M.txt">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/10M/10M.txt">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/10M/10M.txt">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/10M/10M.txt">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/10M/10M.txt">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/10M/10M.txt">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/10M/10M.txt">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/10M/10M.txt">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/10M/10M.txt">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/10M/10M.txt">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/10M/10M.txt">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/10M/10M.txt">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/10M/10M.txt">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/10M/10M.txt">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/10M/10M.txt">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/10M/10M.txt">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/10M/10M.txt">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/10M/10M.txt">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/10M/10M.txt">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/10M/10M.txt">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/10M/10M.txt">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/10M/10M.txt">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/10M/10M.txt">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/10M/10M.txt">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/10M/10M.txt">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/10M/10M.txt">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/10M/10M.txt">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/10M/10M.txt">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/10M/10M.txt">10M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 50Mo</strong><br />Extension: <strong>.txt</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/50M/50M.txt">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/50M/50M.txt">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/50M/50M.txt">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/50M/50M.txt">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/50M/50M.txt">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/50M/50M.txt">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/50M/50M.txt">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/50M/50M.txt">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/50M/50M.txt">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/50M/50M.txt">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/50M/50M.txt">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/50M/50M.txt">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/50M/50M.txt">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/50M/50M.txt">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/50M/50M.txt">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/50M/50M.txt">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/50M/50M.txt">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/50M/50M.txt">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/50M/50M.txt">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/50M/50M.txt">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/50M/50M.txt">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/50M/50M.txt">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/50M/50M.txt">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/50M/50M.txt">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/50M/50M.txt">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/50M/50M.txt">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/50M/50M.txt">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/50M/50M.txt">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/50M/50M.txt">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/50M/50M.txt">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/50M/50M.txt">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/50M/50M.txt">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/50M/50M.txt">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/50M/50M.txt">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/50M/50M.txt">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/50M/50M.txt">50M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 100Mo</strong><br />Extension: <strong>.txt</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/100M/100M.txt">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/100M/100M.txt">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/100M/100M.txt">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/100M/100M.txt">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/100M/100M.txt">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/100M/100M.txt">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/100M/100M.txt">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/100M/100M.txt">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/100M/100M.txt">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/100M/100M.txt">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/100M/100M.txt">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/100M/100M.txt">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/100M/100M.txt">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/100M/100M.txt">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/100M/100M.txt">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/100M/100M.txt">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/100M/100M.txt">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/100M/100M.txt">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/100M/100M.txt">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/100M/100M.txt">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/100M/100M.txt">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/100M/100M.txt">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/100M/100M.txt">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/100M/100M.txt">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/100M/100M.txt">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/100M/100M.txt">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/100M/100M.txt">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/100M/100M.txt">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/100M/100M.txt">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/100M/100M.txt">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/100M/100M.txt">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/100M/100M.txt">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/100M/100M.txt">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/100M/100M.txt">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/100M/100M.txt">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/100M/100M.txt">100M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 500Mo</strong><br />Extension: <strong>.txt</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/500M/500M.txt">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/500M/500M.txt">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/500M/500M.txt">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/500M/500M.txt">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/500M/500M.txt">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/500M/500M.txt">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/500M/500M.txt">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/500M/500M.txt">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/500M/500M.txt">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/500M/500M.txt">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/500M/500M.txt">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/500M/500M.txt">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/500M/500M.txt">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/500M/500M.txt">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/500M/500M.txt">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/500M/500M.txt">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/500M/500M.txt">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/500M/500M.txt">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/500M/500M.txt">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/500M/500M.txt">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/500M/500M.txt">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/500M/500M.txt">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/500M/500M.txt">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/500M/500M.txt">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/500M/500M.txt">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/500M/500M.txt">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/500M/500M.txt">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/500M/500M.txt">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/500M/500M.txt">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/500M/500M.txt">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/500M/500M.txt">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/500M/500M.txt">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/500M/500M.txt">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/500M/500M.txt">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/500M/500M.txt">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/500M/500M.txt">500M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 1Go</strong><br />Extension: <strong>.txt</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/1G/1G.txt">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/1G/1G.txt">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/1G/1G.txt">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/1G/1G.txt">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/1G/1G.txt">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/1G/1G.txt">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/1G/1G.txt">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/1G/1G.txt">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/1G/1G.txt">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/1G/1G.txt">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/1G/1G.txt">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/1G/1G.txt">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/1G/1G.txt">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/1G/1G.txt">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/1G/1G.txt">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/1G/1G.txt">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/1G/1G.txt">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/1G/1G.txt">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/1G/1G.txt">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/1G/1G.txt">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/1G/1G.txt">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/1G/1G.txt">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/1G/1G.txt">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/1G/1G.txt">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/1G/1G.txt">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/1G/1G.txt">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/1G/1G.txt">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/1G/1G.txt">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/1G/1G.txt">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/1G/1G.txt">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/1G/1G.txt">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/1G/1G.txt">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/1G/1G.txt">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/1G/1G.txt">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/1G/1G.txt">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/1G/1G.txt">1G</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 5Go</strong><br />Extension: <strong>.txt</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/5G/5G.txt">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/5G/5G.txt">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/5G/5G.txt">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/5G/5G.txt">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/5G/5G.txt">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/5G/5G.txt">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/5G/5G.txt">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/5G/5G.txt">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/5G/5G.txt">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/5G/5G.txt">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/5G/5G.txt">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/5G/5G.txt">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/5G/5G.txt">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/5G/5G.txt">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/5G/5G.txt">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/5G/5G.txt">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/5G/5G.txt">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/5G/5G.txt">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/5G/5G.txt">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/5G/5G.txt">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/5G/5G.txt">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/5G/5G.txt">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/5G/5G.txt">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/5G/5G.txt">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/5G/5G.txt">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/5G/5G.txt">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/5G/5G.txt">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/5G/5G.txt">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/5G/5G.txt">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/5G/5G.txt">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/5G/5G.txt">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/5G/5G.txt">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/5G/5G.txt">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/5G/5G.txt">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/5G/5G.txt">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/5G/5G.txt">5G</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 1Mo</strong><br />Extension: <strong>.webm</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/1M/1M.webm">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/1M/1M.webm">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/1M/1M.webm">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/1M/1M.webm">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/1M/1M.webm">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/1M/1M.webm">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/1M/1M.webm">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/1M/1M.webm">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/1M/1M.webm">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/1M/1M.webm">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/1M/1M.webm">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/1M/1M.webm">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/1M/1M.webm">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/1M/1M.webm">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/1M/1M.webm">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/1M/1M.webm">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/1M/1M.webm">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/1M/1M.webm">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/1M/1M.webm">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/1M/1M.webm">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/1M/1M.webm">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/1M/1M.webm">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/1M/1M.webm">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/1M/1M.webm">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/1M/1M.webm">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/1M/1M.webm">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/1M/1M.webm">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/1M/1M.webm">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/1M/1M.webm">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/1M/1M.webm">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/1M/1M.webm">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/1M/1M.webm">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/1M/1M.webm">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/1M/1M.webm">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/1M/1M.webm">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/1M/1M.webm">1M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 5Mo</strong><br />Extension: <strong>.webm</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/5M/5M.webm">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/5M/5M.webm">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/5M/5M.webm">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/5M/5M.webm">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/5M/5M.webm">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/5M/5M.webm">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/5M/5M.webm">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/5M/5M.webm">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/5M/5M.webm">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/5M/5M.webm">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/5M/5M.webm">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/5M/5M.webm">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/5M/5M.webm">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/5M/5M.webm">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/5M/5M.webm">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/5M/5M.webm">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/5M/5M.webm">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/5M/5M.webm">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/5M/5M.webm">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/5M/5M.webm">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/5M/5M.webm">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/5M/5M.webm">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/5M/5M.webm">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/5M/5M.webm">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/5M/5M.webm">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/5M/5M.webm">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/5M/5M.webm">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/5M/5M.webm">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/5M/5M.webm">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/5M/5M.webm">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/5M/5M.webm">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/5M/5M.webm">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/5M/5M.webm">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/5M/5M.webm">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/5M/5M.webm">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/5M/5M.webm">5M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 10Mo</strong><br />Extension: <strong>.webm</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/10M/10M.webm">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/10M/10M.webm">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/10M/10M.webm">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/10M/10M.webm">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/10M/10M.webm">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/10M/10M.webm">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/10M/10M.webm">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/10M/10M.webm">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/10M/10M.webm">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/10M/10M.webm">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/10M/10M.webm">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/10M/10M.webm">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/10M/10M.webm">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/10M/10M.webm">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/10M/10M.webm">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/10M/10M.webm">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/10M/10M.webm">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/10M/10M.webm">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/10M/10M.webm">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/10M/10M.webm">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/10M/10M.webm">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/10M/10M.webm">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/10M/10M.webm">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/10M/10M.webm">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/10M/10M.webm">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/10M/10M.webm">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/10M/10M.webm">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/10M/10M.webm">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/10M/10M.webm">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/10M/10M.webm">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/10M/10M.webm">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/10M/10M.webm">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/10M/10M.webm">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/10M/10M.webm">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/10M/10M.webm">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/10M/10M.webm">10M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 50Mo</strong><br />Extension: <strong>.webm</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/50M/50M.webm">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/50M/50M.webm">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/50M/50M.webm">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/50M/50M.webm">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/50M/50M.webm">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/50M/50M.webm">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/50M/50M.webm">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/50M/50M.webm">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/50M/50M.webm">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/50M/50M.webm">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/50M/50M.webm">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/50M/50M.webm">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/50M/50M.webm">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/50M/50M.webm">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/50M/50M.webm">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/50M/50M.webm">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/50M/50M.webm">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/50M/50M.webm">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/50M/50M.webm">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/50M/50M.webm">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/50M/50M.webm">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/50M/50M.webm">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/50M/50M.webm">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/50M/50M.webm">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/50M/50M.webm">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/50M/50M.webm">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/50M/50M.webm">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/50M/50M.webm">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/50M/50M.webm">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/50M/50M.webm">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/50M/50M.webm">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/50M/50M.webm">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/50M/50M.webm">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/50M/50M.webm">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/50M/50M.webm">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/50M/50M.webm">50M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 100Mo</strong><br />Extension: <strong>.webm</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/100M/100M.webm">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/100M/100M.webm">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/100M/100M.webm">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/100M/100M.webm">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/100M/100M.webm">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/100M/100M.webm">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/100M/100M.webm">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/100M/100M.webm">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/100M/100M.webm">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/100M/100M.webm">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/100M/100M.webm">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/100M/100M.webm">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/100M/100M.webm">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/100M/100M.webm">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/100M/100M.webm">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/100M/100M.webm">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/100M/100M.webm">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/100M/100M.webm">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/100M/100M.webm">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/100M/100M.webm">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/100M/100M.webm">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/100M/100M.webm">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/100M/100M.webm">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/100M/100M.webm">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/100M/100M.webm">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/100M/100M.webm">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/100M/100M.webm">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/100M/100M.webm">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/100M/100M.webm">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/100M/100M.webm">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/100M/100M.webm">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/100M/100M.webm">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/100M/100M.webm">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/100M/100M.webm">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/100M/100M.webm">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/100M/100M.webm">100M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 500Mo</strong><br />Extension: <strong>.webm</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/500M/500M.webm">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/500M/500M.webm">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/500M/500M.webm">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/500M/500M.webm">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/500M/500M.webm">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/500M/500M.webm">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/500M/500M.webm">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/500M/500M.webm">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/500M/500M.webm">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/500M/500M.webm">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/500M/500M.webm">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/500M/500M.webm">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/500M/500M.webm">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/500M/500M.webm">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/500M/500M.webm">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/500M/500M.webm">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/500M/500M.webm">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/500M/500M.webm">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/500M/500M.webm">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/500M/500M.webm">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/500M/500M.webm">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/500M/500M.webm">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/500M/500M.webm">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/500M/500M.webm">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/500M/500M.webm">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/500M/500M.webm">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/500M/500M.webm">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/500M/500M.webm">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/500M/500M.webm">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/500M/500M.webm">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/500M/500M.webm">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/500M/500M.webm">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/500M/500M.webm">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/500M/500M.webm">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/500M/500M.webm">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/500M/500M.webm">500M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 1Go</strong><br />Extension: <strong>.webm</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/1G/1G.webm">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/1G/1G.webm">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/1G/1G.webm">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/1G/1G.webm">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/1G/1G.webm">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/1G/1G.webm">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/1G/1G.webm">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/1G/1G.webm">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/1G/1G.webm">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/1G/1G.webm">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/1G/1G.webm">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/1G/1G.webm">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/1G/1G.webm">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/1G/1G.webm">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/1G/1G.webm">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/1G/1G.webm">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/1G/1G.webm">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/1G/1G.webm">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/1G/1G.webm">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/1G/1G.webm">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/1G/1G.webm">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/1G/1G.webm">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/1G/1G.webm">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/1G/1G.webm">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/1G/1G.webm">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/1G/1G.webm">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/1G/1G.webm">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/1G/1G.webm">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/1G/1G.webm">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/1G/1G.webm">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/1G/1G.webm">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/1G/1G.webm">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/1G/1G.webm">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/1G/1G.webm">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/1G/1G.webm">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/1G/1G.webm">1G</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 5Go</strong><br />Extension: <strong>.webm</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/5G/5G.webm">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/5G/5G.webm">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/5G/5G.webm">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/5G/5G.webm">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/5G/5G.webm">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/5G/5G.webm">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/5G/5G.webm">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/5G/5G.webm">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/5G/5G.webm">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/5G/5G.webm">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/5G/5G.webm">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/5G/5G.webm">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/5G/5G.webm">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/5G/5G.webm">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/5G/5G.webm">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/5G/5G.webm">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/5G/5G.webm">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/5G/5G.webm">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/5G/5G.webm">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/5G/5G.webm">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/5G/5G.webm">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/5G/5G.webm">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/5G/5G.webm">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/5G/5G.webm">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/5G/5G.webm">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/5G/5G.webm">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/5G/5G.webm">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/5G/5G.webm">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/5G/5G.webm">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/5G/5G.webm">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/5G/5G.webm">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/5G/5G.webm">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/5G/5G.webm">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/5G/5G.webm">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/5G/5G.webm">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/5G/5G.webm">5G</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 1Mo</strong><br />Extension: <strong>.zip</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/1M/1M.zip">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/1M/1M.zip">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/1M/1M.zip">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/1M/1M.zip">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/1M/1M.zip">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/1M/1M.zip">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/1M/1M.zip">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/1M/1M.zip">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/1M/1M.zip">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/1M/1M.zip">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/1M/1M.zip">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/1M/1M.zip">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/1M/1M.zip">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/1M/1M.zip">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/1M/1M.zip">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/1M/1M.zip">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/1M/1M.zip">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/1M/1M.zip">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/1M/1M.zip">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/1M/1M.zip">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/1M/1M.zip">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/1M/1M.zip">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/1M/1M.zip">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/1M/1M.zip">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/1M/1M.zip">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/1M/1M.zip">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/1M/1M.zip">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/1M/1M.zip">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/1M/1M.zip">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/1M/1M.zip">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/1M/1M.zip">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/1M/1M.zip">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/1M/1M.zip">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/1M/1M.zip">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/1M/1M.zip">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/1M/1M.zip">1M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 5Mo</strong><br />Extension: <strong>.zip</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/5M/5M.zip">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/5M/5M.zip">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/5M/5M.zip">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/5M/5M.zip">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/5M/5M.zip">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/5M/5M.zip">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/5M/5M.zip">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/5M/5M.zip">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/5M/5M.zip">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/5M/5M.zip">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/5M/5M.zip">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/5M/5M.zip">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/5M/5M.zip">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/5M/5M.zip">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/5M/5M.zip">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/5M/5M.zip">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/5M/5M.zip">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/5M/5M.zip">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/5M/5M.zip">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/5M/5M.zip">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/5M/5M.zip">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/5M/5M.zip">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/5M/5M.zip">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/5M/5M.zip">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/5M/5M.zip">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/5M/5M.zip">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/5M/5M.zip">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/5M/5M.zip">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/5M/5M.zip">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/5M/5M.zip">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/5M/5M.zip">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/5M/5M.zip">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/5M/5M.zip">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/5M/5M.zip">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/5M/5M.zip">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/5M/5M.zip">5M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 10Mo</strong><br />Extension: <strong>.zip</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/10M/10M.zip">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/10M/10M.zip">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/10M/10M.zip">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/10M/10M.zip">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/10M/10M.zip">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/10M/10M.zip">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/10M/10M.zip">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/10M/10M.zip">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/10M/10M.zip">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/10M/10M.zip">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/10M/10M.zip">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/10M/10M.zip">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/10M/10M.zip">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/10M/10M.zip">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/10M/10M.zip">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/10M/10M.zip">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/10M/10M.zip">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/10M/10M.zip">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/10M/10M.zip">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/10M/10M.zip">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/10M/10M.zip">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/10M/10M.zip">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/10M/10M.zip">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/10M/10M.zip">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/10M/10M.zip">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/10M/10M.zip">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/10M/10M.zip">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/10M/10M.zip">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/10M/10M.zip">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/10M/10M.zip">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/10M/10M.zip">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/10M/10M.zip">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/10M/10M.zip">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/10M/10M.zip">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/10M/10M.zip">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/10M/10M.zip">10M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 50Mo</strong><br />Extension: <strong>.zip</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/50M/50M.zip">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/50M/50M.zip">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/50M/50M.zip">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/50M/50M.zip">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/50M/50M.zip">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/50M/50M.zip">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/50M/50M.zip">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/50M/50M.zip">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/50M/50M.zip">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/50M/50M.zip">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/50M/50M.zip">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/50M/50M.zip">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/50M/50M.zip">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/50M/50M.zip">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/50M/50M.zip">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/50M/50M.zip">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/50M/50M.zip">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/50M/50M.zip">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/50M/50M.zip">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/50M/50M.zip">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/50M/50M.zip">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/50M/50M.zip">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/50M/50M.zip">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/50M/50M.zip">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/50M/50M.zip">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/50M/50M.zip">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/50M/50M.zip">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/50M/50M.zip">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/50M/50M.zip">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/50M/50M.zip">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/50M/50M.zip">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/50M/50M.zip">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/50M/50M.zip">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/50M/50M.zip">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/50M/50M.zip">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/50M/50M.zip">50M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 100Mo</strong><br />Extension: <strong>.zip</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/100M/100M.zip">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/100M/100M.zip">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/100M/100M.zip">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/100M/100M.zip">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/100M/100M.zip">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/100M/100M.zip">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/100M/100M.zip">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/100M/100M.zip">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/100M/100M.zip">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/100M/100M.zip">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/100M/100M.zip">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/100M/100M.zip">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/100M/100M.zip">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/100M/100M.zip">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/100M/100M.zip">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/100M/100M.zip">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/100M/100M.zip">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/100M/100M.zip">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/100M/100M.zip">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/100M/100M.zip">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/100M/100M.zip">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/100M/100M.zip">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/100M/100M.zip">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/100M/100M.zip">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/100M/100M.zip">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/100M/100M.zip">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/100M/100M.zip">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/100M/100M.zip">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/100M/100M.zip">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/100M/100M.zip">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/100M/100M.zip">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/100M/100M.zip">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/100M/100M.zip">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/100M/100M.zip">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/100M/100M.zip">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/100M/100M.zip">100M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 500Mo</strong><br />Extension: <strong>.zip</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/500M/500M.zip">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/500M/500M.zip">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/500M/500M.zip">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/500M/500M.zip">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/500M/500M.zip">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/500M/500M.zip">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/500M/500M.zip">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/500M/500M.zip">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/500M/500M.zip">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/500M/500M.zip">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/500M/500M.zip">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/500M/500M.zip">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/500M/500M.zip">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/500M/500M.zip">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/500M/500M.zip">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/500M/500M.zip">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/500M/500M.zip">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/500M/500M.zip">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/500M/500M.zip">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/500M/500M.zip">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/500M/500M.zip">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/500M/500M.zip">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/500M/500M.zip">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/500M/500M.zip">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/500M/500M.zip">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/500M/500M.zip">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/500M/500M.zip">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/500M/500M.zip">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/500M/500M.zip">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/500M/500M.zip">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/500M/500M.zip">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/500M/500M.zip">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/500M/500M.zip">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/500M/500M.zip">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/500M/500M.zip">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/500M/500M.zip">500M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 1Go</strong><br />Extension: <strong>.zip</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/1G/1G.zip">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/1G/1G.zip">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/1G/1G.zip">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/1G/1G.zip">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/1G/1G.zip">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/1G/1G.zip">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/1G/1G.zip">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/1G/1G.zip">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/1G/1G.zip">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/1G/1G.zip">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/1G/1G.zip">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/1G/1G.zip">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/1G/1G.zip">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/1G/1G.zip">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/1G/1G.zip">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/1G/1G.zip">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/1G/1G.zip">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/1G/1G.zip">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/1G/1G.zip">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/1G/1G.zip">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/1G/1G.zip">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/1G/1G.zip">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/1G/1G.zip">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/1G/1G.zip">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/1G/1G.zip">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/1G/1G.zip">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/1G/1G.zip">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/1G/1G.zip">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/1G/1G.zip">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/1G/1G.zip">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/1G/1G.zip">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/1G/1G.zip">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/1G/1G.zip">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/1G/1G.zip">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/1G/1G.zip">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/1G/1G.zip">1G</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 5Go</strong><br />Extension: <strong>.zip</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/5G/5G.zip">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/5G/5G.zip">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/5G/5G.zip">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/5G/5G.zip">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/5G/5G.zip">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/5G/5G.zip">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/5G/5G.zip">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/5G/5G.zip">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/5G/5G.zip">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/5G/5G.zip">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/5G/5G.zip">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/5G/5G.zip">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/5G/5G.zip">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/5G/5G.zip">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/5G/5G.zip">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/5G/5G.zip">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/5G/5G.zip">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/5G/5G.zip">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/5G/5G.zip">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/5G/5G.zip">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/5G/5G.zip">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/5G/5G.zip">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/5G/5G.zip">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/5G/5G.zip">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/5G/5G.zip">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/5G/5G.zip">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/5G/5G.zip">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/5G/5G.zip">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/5G/5G.zip">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/5G/5G.zip">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/5G/5G.zip">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/5G/5G.zip">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/5G/5G.zip">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/5G/5G.zip">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/5G/5G.zip">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/5G/5G.zip">5G</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 1Mo</strong><br /><strong>Liste des autres<br />extensions</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/1M/">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/1M/">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/1M/">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/1M/">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/1M/">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/1M/">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/1M/">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/1M/">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/1M/">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/1M/">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/1M/">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/1M/">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/1M/">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/1M/">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/1M/">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/1M/">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/1M/">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/1M/">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/1M/">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/1M/">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/1M/">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/1M/">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/1M/">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/1M/">1M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/1M/">1M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/1M/">1M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/1M/">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/1M/">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/1M/">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/1M/">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/1M/">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/1M/">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/1M/">1M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/1M/">1M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/1M/">1M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/1M/">1M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 5Mo</strong><br /><strong>Liste des autres<br />extensions</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/5M/">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/5M/">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/5M/">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/5M/">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/5M/">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/5M/">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/5M/">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/5M/">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/5M/">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/5M/">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/5M/">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/5M/">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/5M/">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/5M/">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/5M/">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/5M/">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/5M/">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/5M/">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/5M/">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/5M/">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/5M/">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/5M/">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/5M/">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/5M/">5M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/5M/">5M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/5M/">5M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/5M/">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/5M/">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/5M/">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/5M/">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/5M/">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/5M/">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/5M/">5M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/5M/">5M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/5M/">5M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/5M/">5M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 10Mo</strong><br /><strong>Liste des autres<br />extensions</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/10M/">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/10M/">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/10M/">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/10M/">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/10M/">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/10M/">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/10M/">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/10M/">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/10M/">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/10M/">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/10M/">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/10M/">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/10M/">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/10M/">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/10M/">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/10M/">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/10M/">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/10M/">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/10M/">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/10M/">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/10M/">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/10M/">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/10M/">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/10M/">10M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/10M/">10M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/10M/">10M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/10M/">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/10M/">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/10M/">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/10M/">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/10M/">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/10M/">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/10M/">10M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/10M/">10M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/10M/">10M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/10M/">10M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 50Mo</strong><br /><strong>Liste des autres<br />extensions</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/50M/">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/50M/">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/50M/">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/50M/">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/50M/">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/50M/">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/50M/">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/50M/">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/50M/">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/50M/">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/50M/">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/50M/">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/50M/">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/50M/">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/50M/">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/50M/">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/50M/">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/50M/">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/50M/">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/50M/">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/50M/">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/50M/">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/50M/">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/50M/">50M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/50M/">50M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/50M/">50M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/50M/">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/50M/">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/50M/">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/50M/">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/50M/">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/50M/">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/50M/">50M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/50M/">50M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/50M/">50M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/50M/">50M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 100Mo</strong><br /><strong>Liste des autres<br />extensions</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/100M/">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/100M/">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/100M/">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/100M/">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/100M/">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/100M/">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/100M/">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/100M/">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/100M/">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/100M/">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/100M/">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/100M/">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/100M/">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/100M/">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/100M/">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/100M/">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/100M/">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/100M/">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/100M/">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/100M/">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/100M/">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/100M/">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/100M/">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/100M/">100M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/100M/">100M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/100M/">100M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/100M/">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/100M/">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/100M/">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/100M/">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/100M/">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/100M/">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/100M/">100M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/100M/">100M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/100M/">100M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/100M/">100M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 500Mo</strong><br /><strong>Liste des autres<br />extensions</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/500M/">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/500M/">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/500M/">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/500M/">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/500M/">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/500M/">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/500M/">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/500M/">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/500M/">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/500M/">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/500M/">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/500M/">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/500M/">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/500M/">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/500M/">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/500M/">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/500M/">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/500M/">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/500M/">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/500M/">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/500M/">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/500M/">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/500M/">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/500M/">500M</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/500M/">500M</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/500M/">500M</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/500M/">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/500M/">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/500M/">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/500M/">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/500M/">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/500M/">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/500M/">500M</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/500M/">500M</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/500M/">500M</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/500M/">500M</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 1Go</strong><br /><strong>Liste des autres<br />extensions</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/1G/">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/1G/">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/1G/">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/1G/">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/1G/">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/1G/">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/1G/">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/1G/">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/1G/">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/1G/">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/1G/">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/1G/">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/1G/">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/1G/">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/1G/">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/1G/">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/1G/">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/1G/">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/1G/">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/1G/">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/1G/">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/1G/">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/1G/">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/1G/">1G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/1G/">1G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/1G/">1G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/1G/">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/1G/">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/1G/">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/1G/">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/1G/">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/1G/">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/1G/">1G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/1G/">1G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/1G/">1G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/1G/">1G</a></td>
  </tr>
  <tr>
    <td><strong>Fichiers de 5Go</strong><br /><strong>Liste des autres<br />extensions</strong></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info/5G/">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info/5G/">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info/5G/">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info/5G/">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info/5G/">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info/5G/">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:554/5G/">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:554/5G/">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:554/5G/">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:843/5G/">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:843/5G/">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:843/5G/">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:1194/5G/">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:1194/5G/">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:1194/5G/">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:1935/5G/">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:1935/5G/">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:1935/5G/">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:5060/5G/">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:5060/5G/">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:5060/5G/">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:6881/5G/">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:6881/5G/">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:6881/5G/">5G</a></td>
    <td>v4/v6 auto:<a href="http://bouygues.testdebit.info:8080/5G/">5G</a><br />IPv4:<a href="http://ipv4.bouygues.testdebit.info:8080/5G/">5G</a><br />IPv6:<a href="http://ipv6.bouygues.testdebit.info:8080/5G/">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:8443/5G/">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:8443/5G/">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:8443/5G/">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:51413/5G/">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:51413/5G/">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:51413/5G/">5G</a></td>
    <td>v4/v6 auto:<a href="https://bouygues.testdebit.info:53/5G/">5G</a><br />IPv4:<a href="https://ipv4.bouygues.testdebit.info:53/5G/">5G</a><br />IPv6:<a href="https://ipv6.bouygues.testdebit.info:53/5G/">5G</a></td>
  </tr>
</tbody></table>

<br /><hr />

<p><strong>Valeurs de hachage SHA256 pour vérifier que le contenu du fichier n\'a pas été altéré :</strong></p>
<pre>043f8ef8336f2ff9decdc673deb728587166bf99f8e7360ddc929457c2b60607  1M.iso
4d811f6f0006394ed6e70ab287b0baa92e402b6f8bf374882a182bfb17d75c9a  5M.iso
bf4e1baf1f058da14bcbf8da5500a185ebce8855b8fc1885765a3c3d220a8c09  10M.iso
448dd247006cbb4ad29bd0ebb139e6533450971e55ecb36bf66b52d5fb1346b6  50M.iso
5bf613b4691a167c4e37dc9780ebfe6ffeff69bac5ae6598079041cc0bd5b99a  100M.iso
361571271aa891099a25fe617b08fa946f1a474376875228641eee67332dbe4c  500M.iso
b779fc0baa9691d3133852bbc0db874b3cf031f1aa44b193e23b66ab2a4e77dd  1G.iso
be8ddd321d656f7839474bf50928fae438600f091f1d915282ee92a07363b62d  5G.iso</pre>
<p>Note: Le contenu des fichiers est identique, quel que soit l\'extension ou le protocole utilisé pour le télécharger.</p>';

include("include/foot-fr.php");
?>
