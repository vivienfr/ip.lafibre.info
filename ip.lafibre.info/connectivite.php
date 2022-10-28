<?php
include("include/en-tete1-fr.php");
echo '	<title>Tester votre connectivité IPv4 et IPv6</title>
	<meta name="description" content="Donne votre adresse IPv4, IPv6 et les infos associées" />
	<meta name="keywords" content="IPv4, IPv6, reverse DNS" />';
include("include/en-tete2-fr.php");
include("include/menu-fr.php");

echo '<h2>Tester votre connectivité IPv4 et IPv6</h2>

<p>Le fichier de 1Mo (fortement compressible: il est rempli de zéros) et les pages de test peuvent être demandés de plusieurs façons différentes, pour tester votre connectivité IPv4 et IPv6 en même temps que la neutralié de votre accés à inernet :</p>

<table class="tableau">
  <tbody>
  <tr>
    <th>Type de test</th>
    <th>Nom de domaine<br />testé</th>
    <th>Protocole<br />http ou<br />https</th>
    <th>Téléchargement<br />fichier d\'un<br />fichier test</th>
    <th>Page avec<br />affichage de l\'IP<br />publique utilisée</th>
    <th>Page web<br />avec une liste<br />d\'images</th>
    <th>Page web<br />classique<br />(web citéFibre)</th>
  </tr>
  <tr>
    <td>Nom de domaine <strong>IPv4+IPv6</strong></td>
    <td>ip<strong>v4v6</strong>.lafibre.info</td>
    <td>http</td>
    <td><a href="http://ipv4v6.lafibre.info/1M.iso">1M.iso</a></td>
    <td><a href="http://ipv4v6.lafibre.info/" target="_blank">page info ip</a></td>
    <td><a href="http://ipv4v6.lafibre.info/images_test/" target="_blank">image test</a></td>
    <td><a href="http://ipv4v6.lafibre.info/citefibre/" target="_blank">page web test</a></td>
  </tr>
  <tr>
    <td>Nom de domaine <strong>IPv4+IPv6</strong></td>
    <td>ip<strong>v4v6</strong>.lafibre.info</td>
    <td>http<strong>s</strong></td>
    <td><a href="https://ipv4v6.lafibre.info/1M.iso">1M.iso</a></td>
    <td><a href="https://ipv4v6.lafibre.info/" target="_blank">page info ip</a></td>
    <td><a href="https://ipv4v6.lafibre.info/images_test/" target="_blank">image test</a></td>
    <td><a href="https://ipv4v6.lafibre.info/citefibre/" target="_blank">page web test</a></td>
  </tr>
  <tr>
    <td>Nom de domaine <strong>IPv4</strong> uniquement</td>
    <td>ip<strong>v4</strong>.lafibre.info</td>
    <td>http</td>
    <td><a href="http://ipv4.lafibre.info/1M.iso">1M.iso</a></td>
    <td><a href="http://ipv4.lafibre.info/" target="_blank">page info ip</a></td>
    <td><a href="http://ipv4.lafibre.info/images_test/" target="_blank">image test</a></td>
    <td><a href="http://ipv4.lafibre.info/citefibre/" target="_blank">page web test</a></td>
  </tr>
  <tr>
    <td>Nom de domaine <strong>IPv4</strong> uniquement</td>
    <td>ip<strong>v4</strong>.lafibre.info</td>
    <td>http<strong>s</strong></td>
    <td><a href="https://ipv4.lafibre.info/1M.iso">1M.iso</a></td>
    <td><a href="https://ipv4.lafibre.info/" target="_blank">page info ip</a></td>
    <td><a href="https://ipv4.lafibre.info/images_test/" target="_blank">image test</a></td>
    <td><a href="https://ipv4.lafibre.info/citefibre/" target="_blank">page web test</a></td>
  </tr>
  <tr>
    <td>Nom de domaine <strong>IPv6</strong> uniquement</td>
    <td>ip<strong>v6</strong>.lafibre.info</td>
    <td>http</td>
    <td><a href="http://ipv6.lafibre.info/1M.iso">1M.iso</a></td>
    <td><a href="http://ipv6.lafibre.info/" target="_blank">page info ip</a></td>
    <td><a href="http://ipv6.lafibre.info/images_test/" target="_blank">image test</a></td>
    <td><a href="http://ipv6.lafibre.info/citefibre/" target="_blank">page web test</a></td>
  </tr>
  <tr>
    <td>Nom de domaine <strong>IPv6</strong> uniquement</td>
    <td>ip<strong>v6</strong>.lafibre.info</td>
    <td>http<strong>s</strong></td>
    <td><a href="https://ipv6.lafibre.info/1M.iso">1M.iso</a></td>
    <td><a href="https://ipv6.lafibre.info/" target="_blank">page info ip</a></td>
    <td><a href="https://ipv6.lafibre.info/images_test/" target="_blank">image test</a></td>
    <td><a href="https://ipv6.lafibre.info/citefibre/" target="_blank">page web test</a></td>
  </tr>
  <tr>
    <td>CNAME <strong>IPv4+IPv6</strong></td>
    <td>ipv<strong>4v6-c</strong>.lafibre.info</td>
    <td>http</td>
    <td><a href="http://ipv4v6-c.lafibre.info/1M.iso">1M.iso</a></td>
    <td><a href="http://ipv4v6-c.lafibre.info/" target="_blank">page info ip</a></td>
    <td><a href="http://ipv4v6-c.lafibre.info/images_test/" target="_blank">image test</a></td>
    <td><a href="http://ipv4v6-c.lafibre.info/citefibre/" target="_blank">page web test</a></td>
  </tr>
  <tr>
    <td>CNAME <strong>IPv4+IPv6</strong></td>
    <td>ipv<strong>4v6-c</strong>.lafibre.info</td>
    <td>http<strong>s</strong></td>
    <td><a href="https://ipv4v6-c.lafibre.info/1M.iso">1M.iso</a></td>
    <td><a href="https://ipv4v6-c.lafibre.info/" target="_blank">page info ip</a></td>
    <td><a href="https://ipv4v6-c.lafibre.info/images_test/" target="_blank">image test</a></td>
    <td><a href="https://ipv4v6-c.lafibre.info/citefibre/" target="_blank">page web test</a></td>
  </tr>
  <tr>
    <td>CNAME <strong>IPv4</strong> uniquement</td>
    <td>ip<strong>v4-c</strong>.lafibre.info</td>
    <td>http</td>
    <td><a href="http://ipv4-c.lafibre.info/1M.iso">1M.iso</a></td>
    <td><a href="http://ipv4-c.lafibre.info/" target="_blank">page info ip</a></td>
    <td><a href="http://ipv4-c.lafibre.info/images_test/" target="_blank">image test</a></td>
    <td><a href="http://ipv4-c.lafibre.info/citefibre/" target="_blank">page web test</a></td>
  </tr>
  <tr>
    <td>CNAME <strong>IPv4</strong> uniquement</td>
    <td>ip<strong>v4-c</strong>.lafibre.info</td>
    <td>http<strong>s</strong></td>
    <td><a href="https://ipv4-c.lafibre.info/1M.iso">1M.iso</a></td>
    <td><a href="https://ipv4-c.lafibre.info/" target="_blank">page info ip</a></td>
    <td><a href="https://ipv4-c.lafibre.info/images_test/" target="_blank">image test</a></td>
    <td><a href="https://ipv4-c.lafibre.info/citefibre/" target="_blank">page web test</a></td>
  </tr>
  <tr>
    <td>CNAME <strong>IPv6</strong> uniquement</td>
    <td>ip<strong>v6-c</strong>.lafibre.info</td>
    <td>http</td>
    <td><a href="http://ipv6-c.lafibre.info/1M.iso">1M.iso</a></td>
    <td><a href="http://ipv6-c.lafibre.info/" target="_blank">page info ip</a></td>
    <td><a href="http://ipv6-c.lafibre.info/images_test/" target="_blank">image test</a></td>
    <td><a href="http://ipv6-c.lafibre.info/citefibre/" target="_blank">page web test</a></td>
  </tr>
  <tr>
    <td>CNAME <strong>IPv6</strong> uniquement</td>
    <td>ip<strong>v6-c</strong>.lafibre.info</td>
    <td>http<strong>s</strong></td>
    <td><a href="https://ipv6-c.lafibre.info/1M.iso">1M.iso</a></td>
    <td><a href="https://ipv6-c.lafibre.info/" target="_blank">page info ip</a></td>
    <td><a href="https://ipv6-c.lafibre.info/images_test/" target="_blank">image test</a></td>
    <td><a href="https://ipv6-c.lafibre.info/citefibre/" target="_blank">page web test</a></td>
  </tr>
  <tr>
    <td><strong>IPv4</strong> du serveur en direct</td>
    <td>51.158.154.169</td>
    <td>http</td>
    <td><a href="http://51.158.154.169/1M.iso">1M.iso</a></td>
    <td><a href="http://51.158.154.169/" target="_blank">page info ip</a></td>
    <td><a href="http://51.158.154.169/images_test/" target="_blank">image test</a></td>
    <td><a href="http://51.158.154.169/citefibre/" target="_blank">page web test</a></td>
  </tr>
  <tr>
    <td><strong>IPv6</strong> du serveur en direct</td>
    <td>[2001:bc8:1600:4:63f:72ff:feaf:a2de]</td>
    <td>http</td>
    <td><a href="http://[2001:bc8:1600:4:63f:72ff:feaf:a2de]/1M.iso">1M.iso</a></td>
    <td><a href="http://[2001:bc8:1600:4:63f:72ff:feaf:a2de]/" target="_blank">page info ip</a></td>
    <td><a href="http://[2001:bc8:1600:4:63f:72ff:feaf:a2de]/images_test/" target="_blank">image test</a></td>
    <td><a href="http://[2001:bc8:1600:4:63f:72ff:feaf:a2de]/citefibre/" target="_blank">page web test</a></td>
  </tr>
</tbody></table>

<h3>Note:</h3>
<ol>
    <li>l\'IPv4 du serveur en directne ne doit pas fonctionner derrière un <a href="https://fr.wikipedia.org/wiki/Transition_d\'IPv4_vers_IPv6#NAT64_et_DNS64" title="NAT64" target="_blank">NAT64</a>, sauf si vous avez <a href="https://sites.google.com/site/tmoipv6/464xlat" title="464XLAT" target="_blank">464XLAT</a>.</li>
    <li>l\'IPv6 ne fonctionne qu\'en présence de connectivité IPv6.</li>
</ol>';
include("include/foot-fr.php");
?>
