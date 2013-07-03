<?php
    #load the tourbuilder class
    require_once('tourbuilder.php');
    $builder = new Tourbuilder();
    #set xml headers so the browser recognizes this as xml
    header ("Content-Type:text/xml");
    header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
    echo $builder->compressXMLFile('accordion-menu.xml');
    #you could echo another xml if you want to
    exit;
?>
