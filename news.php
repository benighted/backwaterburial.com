<?php  
        echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd' />\n";
        echo "<html>";
        include('head.php');
        echo " <body>";
        echo "  <div class='top'></div>";
        echo "  <div class='middle'>";
        echo "                  <div class='center' style='height: 600px'>";
        echo "                          <div class='logo'></div>";
        include('menu.php');
        echo "  <div id='news'>";
        if( $_GET['date'] ) {
                $fileName = 'news/' . $_GET['date'] . '.html';
                $fileData = file_get_contents($fileName);
                if ($fileData) {
                        $fileData = str_replace('http://www.backwaterburial.com/','',$fileData);
                }
                echo $fileData;
        } else {
                echo "<h2>News</h2>";
                include('rss.php');
        }
        echo "  </div>";
        echo "                  </div>";
        echo "  </div>";
        echo "  <div class='bottom'></div>";
        echo "  </body>";
        echo "</html>";
?>

