<div id='rss'>

<?php 
	$rss = "rss.xml";
	$parser = xml_parser_create();
	xml_set_element_handler($parser,"startTag","endTag");
	xml_set_character_data_handler($parser,"txtTag");
	$file = fopen($rss,"r") or die("Invalid RSS Feed: " . $rss);

	$itemtag = false;
	$titletag = false;
	$linktag  = false;
	$datetag = false;
	$desctag = false;
	$titletxt = null;
	$linktxt = null;
	$datetxt = null;
	$desctxt = null;

	if ($data=fread($file,filesize($rss))) {
	  xml_parse($parser,$data,feof($file)) or 
	  die (sprintf("XML Error: %s at line %d", 
	  xml_error_string(xml_get_error_code($parser)),
	  xml_get_current_line_number($parser)));
	}

	fclose($file);
	xml_parser_free($parser);

	function startTag( $parser, $tagName, $attrs ) {
	     switch( $tagName ) {
	      case 'ITEM':
		$GLOBALS['itemtag'] = true;
		break;
	      case 'TITLE':
		$GLOBALS['titletag'] = true;
		break;
	      case 'LINK':
		$GLOBALS['linktag'] = true;
		break;
	      case 'PUBDATE':
		$GLOBALS['datetag'] = true;
		break;
	      case 'DESCRIPTION':
		$GLOBALS['desctag'] = true;
		break;
	    }
	}

	function endTag( $parser, $tagName ) {
	     switch( $tagName ) {
     	      case 'TITLE':
		$GLOBALS['titletag'] = false;
		break;
	      case 'LINK':
		$GLOBALS['linktag'] = false;
		break;
	      case 'PUBDATE':
 	        $GLOBALS['datetag'] = false;
	        break;
	      case 'DESCRIPTION':
		$GLOBALS['desctag'] = false;
		break;
	      case 'ITEM':
		echo "<div style='margin: 25px 0;'>";
		echo "<strong><a href='" . $GLOBALS['linktxt'] . "'>". $GLOBALS['titletxt'] . "</a></strong><br/>";
		echo " <em> " . date("l, F jS, Y", strtotime($GLOBALS['datetxt'])) . "</em><br/>";
		echo "<p>" . $GLOBALS['desctxt'] . "</p></div>";
		$GLOBALS['titletxt'] = "";
		$GLOBALS['linktxt'] = "";
		$GLOBALS['datetxt'] = "";
		$GLOBALS['desctxt'] = "";
		break;
	    }
	}

	function txtTag( $parser, $text ) {
      $text = str_replace('http://www.backwaterburial.com/', '', $text);

      if( $GLOBALS['itemtag'] == false ) {
	    } else if( $GLOBALS['titletag'] == true ) {
		$GLOBALS['titletxt'] .= htmlspecialchars( trim($text) );
	    } else if( $GLOBALS['linktag'] == true ) {
		$GLOBALS['linktxt'] .= trim( $text );
	    } else if( $GLOBALS['datetag'] == true ) {
		$GLOBALS['datetxt'] .= htmlspecialchars( trim( $text ) );
	    } else if( $GLOBALS['desctag'] == true ) {
		$GLOBALS['desctxt'] .= htmlspecialchars( trim( $text ) );
	    }
	}
?>

</div>

