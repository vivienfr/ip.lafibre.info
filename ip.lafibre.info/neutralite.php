<?php
include("include/en-tete1-fr.php");
echo '	<title>Contact</title>
	<meta name="description" content="Donne votre adresse IPv4, IPv6 et les infos associées" />
	<meta name="keywords" content="IPv4, IPv6, reverse DNS" />';
include("include/en-tete2-fr.php");
include("include/menu-fr.php");


echo '<h2>Tester la neutralité de votre accès à internet</h2>
<p>A vous de voir si il y a une différence visuelle entre les images de gauche (http) et les images de droite (http<strong>s</strong>)
<ul>
  <li>image de gauche (http): Elles peuvent avoir été manipulées par votre fournisseur d\'accès à Internet pour réduire leur taille.</li>
  <li>image de droite (http<strong>s</strong>): Elles ne peuvent pas avoir été modifiées (sauf man-in-the-middle attack).</li>
</ul>
<br />- Tutoriel pour supprimer la compression : <a href="https://lafibre.info/qos-mobile/desactiver-bytemobile/">Désactiver ByteMobile</a>
<br />- Images sources au format .zip : <a href="https://ipv4v6.lafibre.info/images_test/images_test.zip">images_test.zip</a>
<br />- Fichier md5sum pour vérifier l\'intégrité des images : <a href="https://ipv4v6.lafibre.info/images_test/md5sum.txt">md5sum.txt</a>
<br />- Fichier sha256sum pour vérifier l\'intégrité des images : <a href="https://ipv4v6.lafibre.info/images_test/sha256sum.txt">sha256sum.txt</a>
</p>


<table class="tableau">
  <tbody>
  <tr>
    <th>Image JPG qualité 100 en http</th>
    <th>Image JPG qualité 100 en http<strong>s</strong></th>
  </tr>
  <tr>
    <td>&nbsp;<a href="http://ipv4v6.lafibre.info/images_test/"><img src="http://ipv4v6.lafibre.info/images_test/image_quality_100.jpg" alt="image de test" width="450" height="260" /></a>&nbsp;</td>
    <td>&nbsp;<a href="https://ipv4v6.lafibre.info/images_test/"><img src="https://ipv4v6.lafibre.info/images_test/image_quality_100.jpg" alt="image de test" width="450" height="260" /></a>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">Taille des 2 images, si le réseau est neutre : <strong>43 225 octets</strong> (si la taille en http diffère, le réseau n\'est pas neutre)</td>
  </tr>
  <tr>
    <td class="lignevide" colspan="2"></td>
  </tr>
  <tr>
    <td class="lignevide" colspan="2"></td>
  </tr>
  <tr>
    <th>Image JPG qualité 90 en http</th>
    <th>Image JPG qualité 90 en http<strong>s</strong></th>
  </tr>
  <tr>
    <td>&nbsp;<a href="http://ipv4v6.lafibre.info/images_test/"><img src="http://ipv4v6.lafibre.info/images_test/image_quality_090.jpg" alt="image de test" width="450" height="260" /></a>&nbsp;</td>
    <td>&nbsp;<a href="https://ipv4v6.lafibre.info/images_test/"><img src="https://ipv4v6.lafibre.info/images_test/image_quality_090.jpg" alt="image de test" width="450" height="260" /></a>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">Taille des 2 images, si le réseau est neutre : <strong>16 313 octets</strong> (si la taille en http diffère, le réseau n\'est pas neutre)</td>
  </tr>
  <tr>
    <td class="lignevide" colspan="2"></td>
  </tr>
  <tr>
    <td class="lignevide" colspan="2"></td>
  </tr>
  <tr>
    <th>Image JPG qualité 80 en http</th>
    <th>Image JPG qualité 80 en http<strong>s</strong></th>
  </tr>
  <tr>
    <td>&nbsp;<a href="http://ipv4v6.lafibre.info/images_test/"><img src="http://ipv4v6.lafibre.info/images_test/image_quality_080.jpg" alt="image de test" width="450" height="260" /></a>&nbsp;</td>
    <td>&nbsp;<a href="https://ipv4v6.lafibre.info/images_test/"><img src="https://ipv4v6.lafibre.info/images_test/image_quality_080.jpg" alt="image de test" width="450" height="260" /></a>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">Taille des 2 images, si le réseau est neutre : <strong>10 681 octets</strong> (si la taille en http diffère, le réseau n\'est pas neutre)</td>
  </tr>
  <tr>
    <td class="lignevide" colspan="2"></td>
  </tr>
  <tr>
    <td class="lignevide" colspan="2"></td>
  </tr>
  <tr>
    <th>Image JPG qualité 70 en http</th>
    <th>Image JPG qualité 70 en http<strong>s</strong></th>
  </tr>
  <tr>
    <td>&nbsp;<a href="http://ipv4v6.lafibre.info/images_test/"><img src="http://ipv4v6.lafibre.info/images_test/image_quality_070.jpg" alt="image de test" width="450" height="260" /></a>&nbsp;</td>
    <td>&nbsp;<a href="https://ipv4v6.lafibre.info/images_test/"><img src="https://ipv4v6.lafibre.info/images_test/image_quality_070.jpg" alt="image de test" width="450" height="260" /></a>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">Taille des 2 images, si le réseau est neutre : <strong>8 317 octets</strong> (si la taille en http diffère, le réseau n\'est pas neutre)</td>
  </tr>
  <tr>
    <td class="lignevide" colspan="2"></td>
  </tr>
  <tr>
    <td class="lignevide" colspan="2"></td>
  </tr>
  <tr>
    <th>Image JPG qualité 60 en http</th>
    <th>Image JPG qualité 60 en http<strong>s</strong></th>
  </tr>
  <tr>
    <td>&nbsp;<a href="http://ipv4v6.lafibre.info/images_test/"><img src="http://ipv4v6.lafibre.info/images_test/image_quality_060.jpg" alt="image de test" width="450" height="260" /></a>&nbsp;</td>
    <td>&nbsp;<a href="https://ipv4v6.lafibre.info/images_test/"><img src="https://ipv4v6.lafibre.info/images_test/image_quality_060.jpg" alt="image de test" width="450" height="260" /></a>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">Taille des 2 images, si le réseau est neutre : <strong>7 202 octets</strong> (si la taille en http diffère, le réseau n\'est pas neutre)</td>
  </tr>
  <tr>
    <td class="lignevide" colspan="2"></td>
  </tr>
  <tr>
    <td class="lignevide" colspan="2"></td>
  </tr>
  <tr>
    <th>Image JPG qualité 50 en http</th>
    <th>Image JPG qualité 50 en http<strong>s</strong></th>
  </tr>
  <tr>
    <td>&nbsp;<a href="http://ipv4v6.lafibre.info/images_test/"><img src="http://ipv4v6.lafibre.info/images_test/image_quality_050.jpg" alt="image de test" width="450" height="260" /></a>&nbsp;</td>
    <td>&nbsp;<a href="https://ipv4v6.lafibre.info/images_test/"><img src="https://ipv4v6.lafibre.info/images_test/image_quality_050.jpg" alt="image de test" width="450" height="260" /></a>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">Taille des 2 images, si le réseau est neutre : <strong>6 253 octets</strong> (si la taille en http diffère, le réseau n\'est pas neutre)</td>
  </tr>
  <tr>
    <td class="lignevide" colspan="2"></td>
  </tr>
  <tr>
    <td class="lignevide" colspan="2"></td>
  </tr>
  <tr>
    <th>Image JPG qualité 40 en http</th>
    <th>Image JPG qualité 40 en http<strong>s</strong></th>
  </tr>
  <tr>
    <td>&nbsp;<a href="http://ipv4v6.lafibre.info/images_test/"><img src="http://ipv4v6.lafibre.info/images_test/image_quality_040.jpg" alt="image de test" width="450" height="260" /></a>&nbsp;</td>
    <td>&nbsp;<a href="https://ipv4v6.lafibre.info/images_test/"><img src="https://ipv4v6.lafibre.info/images_test/image_quality_040.jpg" alt="image de test" width="450" height="260" /></a>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">Taille des 2 images, si le réseau est neutre : <strong>5 508 octets</strong> (si la taille en http diffère, le réseau n\'est pas neutre)</td>
  </tr>
  <tr>
    <td class="lignevide" colspan="2"></td>
  </tr>
  <tr>
    <td class="lignevide" colspan="2"></td>
  </tr>
  <tr>
    <th>Image JPG qualité 30 en http</th>
    <th>Image JPG qualité 30 en http<strong>s</strong></th>
  </tr>
  <tr>
    <td>&nbsp;<a href="http://ipv4v6.lafibre.info/images_test/"><img src="http://ipv4v6.lafibre.info/images_test/image_quality_030.jpg" alt="image de test" width="450" height="260" /></a>&nbsp;</td>
    <td>&nbsp;<a href="https://ipv4v6.lafibre.info/images_test/"><img src="https://ipv4v6.lafibre.info/images_test/image_quality_030.jpg" alt="image de test" width="450" height="260" /></a>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">Taille des 2 images, si le réseau est neutre : <strong>4 787 octets</strong> (si la taille en http diffère, le réseau n\'est pas neutre)</td>
  </tr>
  <tr>
    <td class="lignevide" colspan="2"></td>
  </tr>
  <tr>
    <td class="lignevide" colspan="2"></td>
  </tr>
  <tr>
    <th>Image JPG qualité 20 en http</th>
    <th>Image JPG qualité 20 en http<strong>s</strong></th>
  </tr>
  <tr>
    <td>&nbsp;<a href="http://ipv4v6.lafibre.info/images_test/"><img src="http://ipv4v6.lafibre.info/images_test/image_quality_020.jpg" alt="image de test" width="450" height="260" /></a>&nbsp;</td>
    <td>&nbsp;<a href="https://ipv4v6.lafibre.info/images_test/"><img src="https://ipv4v6.lafibre.info/images_test/image_quality_020.jpg" alt="image de test" width="450" height="260" /></a>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">Taille des 2 images, si le réseau est neutre : <strong>4 013 octets</strong> (si la taille en http diffère, le réseau n\'est pas neutre)</td>
  </tr>
  <tr>
    <td class="lignevide" colspan="2"></td>
  </tr>
  <tr>
    <td class="lignevide" colspan="2"></td>
  </tr>
  <tr>
    <th>Image JPG qualité 10 en http</th>
    <th>Image JPG qualité 10 en http<strong>s</strong></th>
  </tr>
  <tr>
    <td>&nbsp;<a href="http://ipv4v6.lafibre.info/images_test/"><img src="http://ipv4v6.lafibre.info/images_test/image_quality_010.jpg" alt="image de test" width="450" height="260" /></a>&nbsp;</td>
    <td>&nbsp;<a href="https://ipv4v6.lafibre.info/images_test/"><img src="https://ipv4v6.lafibre.info/images_test/image_quality_010.jpg" alt="image de test" width="450" height="260" /></a>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">Taille des 2 images, si le réseau est neutre : <strong>2 906 octets</strong> (si la taille en http diffère, le réseau n\'est pas neutre)</td>
  </tr>
  <tr>
    <td class="lignevide" colspan="2"></td>
  </tr>
  <tr>
    <td class="lignevide" colspan="2"></td>
  </tr>
  <tr>
    <th>Image JPG qualité 0 en http</th>
    <th>Image JPG qualité 0 en http<strong>s</strong></th>
  </tr>
  <tr>
    <td>&nbsp;<a href="http://ipv4v6.lafibre.info/images_test/"><img src="http://ipv4v6.lafibre.info/images_test/image_quality_000.jpg" alt="image de test" width="450" height="260" /></a>&nbsp;</td>
    <td>&nbsp;<a href="https://ipv4v6.lafibre.info/images_test/"><img src="https://ipv4v6.lafibre.info/images_test/image_quality_000.jpg" alt="image de test" width="450" height="260" /></a>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">Taille des 2 images, si le réseau est neutre : <strong>2 045 octets</strong> (si la taille en http diffère, le réseau n\'est pas neutre)</td>
  </tr>
  <tr>
    <td class="lignevide" colspan="2"></td>
  </tr>
  <tr>
    <td class="lignevide" colspan="2"></td>
  </tr>
  <tr>
    <th>Image PNG en http</th>
    <th>Image PNG en http<strong>s</strong></th>
  </tr>
  <tr>
    <td>&nbsp;<a href="http://ipv4v6.lafibre.info/images_test/"><img src="http://ipv4v6.lafibre.info/images_test/image_original.png" alt="image de test" width="450" height="260" /></a>&nbsp;</td>
    <td>&nbsp;<a href="https://ipv4v6.lafibre.info/images_test/"><img src="https://ipv4v6.lafibre.info/images_test/image_original.png" alt="image de test" width="450" height="260" /></a>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">Taille des 2 images, si le réseau est neutre : <strong>8 664 octets</strong> (si la taille en http diffère, le réseau n\'est pas neutre)</td>
  </tr>
</tbody></table>
';


include("include/foot-fr.php");
?>

