<?php
	echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd' />\n";
	echo "<html>";
	include('head.php');
	echo " <body>";
	echo "	<div class='top'></div>";
	echo "	<div class='middle'>";
	echo "			<div class='center'>";
	echo "				<div class='logo'></div>";
	include('menu.php');
    	echo "	  <div id='shows'>";
    	echo "	  <h2>Live Shows</h2>";
		$rss = "shows.xml";
		$parser = xml_parser_create();
		xml_set_element_handler($parser,"openShowTag","closeShowTag");
		xml_set_character_data_handler($parser,"readShowTag");
		$file = fopen($rss,"r") or die("Invalid RSS Feed: " . $rss);
		$yesterday = strtotime('-1 day');

		$showall = false;
		$showtag = false;
		$datetag = false;
		$timetag = false;
		$citytag = false;
		$venuetag = false;
		$infotag = false;

		$showtxt = null;
		$datetxt = null;
		$timetxt = null;
		$citytxt = null;
		$venuetxt = null;
		$infotxt = null;

		if( $_GET['show'] == 'all' ) {
			$viewshow = 'all';
			echo "<a href='shows.php'>Hide Past Shows</a>";
		} elseif ( $_GET['show'] ) {
			$viewshow = strtotime( $_GET['show'] );
			echo "<a href='shows.php'>Display All Upcoming Shows</a>";
		} else {
			echo "<a href='shows.php?show=all'>Display Past Shows</a>";
		}

		echo "<table id='shows'>";
		echo "<th width=150px>Date</th>";
		echo "<th width=100px>Time</th>";
		echo "<th width=150px>City</th>";
		echo "<th width=150px>Venue</th>";
		echo "<th width=200px>Info</th>";

		if ($data=fread($file,filesize($rss))) {
		  xml_parse($parser,$data,feof($file)) or 
		  die (sprintf("XML Error: %s at line %d", 
		  xml_error_string(xml_get_error_code($parser)),
		  xml_get_current_line_number($parser)));
		}

		echo "</table>";

		fclose($file);
		xml_parser_free($parser);

		function openShowTag( $parser, $tagName, $attrs ) {
			switch( $tagName ) {
			case 'SHOW':
				$GLOBALS['showtag'] = true;
			break;
			case 'DATE':
				$GLOBALS['datetag'] = true;
			break;
			case 'TIME':
				$GLOBALS['timetag'] = true;
			break;
			case 'CITY':
				$GLOBALS['citytag'] = true;
			break;
			case 'VENUE':
				$GLOBALS['venuetag'] = true;
			break;
			case 'INFO':
				$GLOBALS['infotag'] = true;
			break;
		     }
		}

		function readShowTag( $parser, $text ) {
			if( $GLOBALS['datetag'] ) {
				$GLOBALS['datetxt'] .= htmlspecialchars( trim($text) );
			} else if( $GLOBALS['timetag'] ) {
				$GLOBALS['timetxt'] .= htmlspecialchars( trim($text) );
			} else if( $GLOBALS['citytag'] ) {
				$GLOBALS['citytxt'] .= htmlspecialchars( trim($text) );
			} else if( $GLOBALS['venuetag'] ) {
				$GLOBALS['venuetxt'] .= htmlspecialchars( trim($text) );
			} else if( $GLOBALS['infotag'] ) {
				$GLOBALS['infotxt'] .= htmlspecialchars( trim($text) );
			}
		}

		function closeShowTag( $parser, $tagName ) {
			switch( $tagName ) {
			case 'DATE':
				$GLOBALS['datetag'] = false;
			break;
			case 'TIME':
				$GLOBALS['timetag'] = false;
			break;
			case 'CITY':
				$GLOBALS['citytag'] = false;
			break;
			case 'VENUE':
				$GLOBALS['venuetag'] = false;
			break;
			case 'INFO':
				$GLOBALS['infotag'] = false;
			break;
			case 'SHOW':
				global $viewshow, $yesterday;
				$showdate = strtotime($GLOBALS['datetxt']);

				if( $viewshow ) {
				       	if( $viewshow == 'all' || $viewshow == $showdate ) {
						$display = true;
					}
				} else if( $showdate > $yesterday ) {
					$display = true;
				}

				if ( $display ) {
					echo "<a name='" . $GLOBALS['datetxt'] . "'></a><tr>";
					echo "<td>" . $GLOBALS['datetxt'] . "</td>";
					echo "<td>" . $GLOBALS['timetxt'] . "</td>";
					echo "<td>" . $GLOBALS['citytxt'] . "</td>";
					echo "<td>" . $GLOBALS['venuetxt'] . "</td>";
					echo "<td>" . $GLOBALS['infotxt'] . "</td>";
					echo "</tr>";
				}

				$GLOBALS['datetxt'] = "";
				$GLOBALS['timetxt'] = "";
				$GLOBALS['citytxt'] = "";
				$GLOBALS['venuetxt'] = "";
				$GLOBALS['infotxt'] = "";
				$GLOBALS['showtag'] = false;
			break;
		    }
		}

	echo "  </div>";
	echo "			</div>";
	echo "	</div>";
	echo "	<div class='bottom'></div>";
	echo "	</body>";
	echo "</html>";
?>

