<?php 
	$rss = "shows.xml";
	$parser = xml_parser_create();
	xml_set_element_handler($parser,"openShowTag","closeShowTag");
	xml_set_character_data_handler($parser,"readShowTag");
	$file = fopen($rss,"r") or die("Invalid RSS Feed: " . $rss);
	$yesterday = strtotime('-1 day');

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

	echo "<div id='calendar'>";
	echo " <table id='shows'>";
	echo "  <th width=200px>Date</th>";
	echo "  <th width=50px>Time</th>";
	echo "  <th width=100px>City</th>";

	if ($data=fread($file,filesize($rss))) {
	  xml_parse($parser,$data,feof($file)) or 
	  die (sprintf("XML Error: %s at line %d", 
	  xml_error_string(xml_get_error_code($parser)),
	  xml_get_current_line_number($parser)));
	}

	echo " </table>";
	echo "</div>";

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
			if( strtotime($GLOBALS['datetxt']) > $GLOBALS['yesterday'] ) {
				echo "  <tr>";
				echo "  <td><a href='shows.php?show=" . $GLOBALS['datetxt'] . "'>" . $GLOBALS['datetxt'] . "</a></td>";
				echo "  <td>" . $GLOBALS['timetxt'] . "</td>";
				echo "  <td>" . $GLOBALS['citytxt'] . "</td>";
				echo "  </tr>";
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
?>
