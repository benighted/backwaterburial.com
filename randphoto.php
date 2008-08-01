<?php
    $d = dir('./img/photos');
    $file = array();
    $n = 0;
    while (($f = $d->read()) != false) {
    	$f = "./img/photos/" . $f;
    	if(is_file($f)) {
		$file[++$n] = $f;
        }
    }
    $d->close();

    $img = $file[rand(1,$n)];
    echo "<div id='photo'>";
    echo "    <a href='" . $img . "' alt='Random Photo'>";
    echo "      <img src='" . $img . "' border=0 width='380px'>";
    echo "    </a>";
    echo "</div>";
?>

