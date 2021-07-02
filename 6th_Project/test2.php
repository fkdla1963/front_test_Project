<?php

$p2 = array('copier' => "Copier & Multipurpose",
                'inkjet' => "Inkjet Printer",
                'laser' => "Laser Printer",
                'photo' => "Photographic Paper");

while (list($item, $de) = each($p2))
{
    echo "$item : $de<br>";
}

?>