<?php
// URI:       extension/ezwt/design/standard/templates/parts/websitetoolbar/help.tpl
// Filename:  extension/ezwt/design/standard/templates/parts/websitetoolbar/help.tpl
// Timestamp: 1400615729 (Tue May 20 21:55:29 CEST 2014)
$oldSetArray_d6f78aa34d0fba5a3f80e830bad42db4 = isset( $setArray ) ? $setArray : array();
$setArray = array();
$tpl->Level++;
if ( $tpl->Level > 40 )
{
$text = $tpl->MaxLevelWarning;$tpl->Level--;
return;
}
$eZTemplateCompilerCodeDate = 1074699607;
if ( !defined( 'EZ_TEMPLATE_COMPILER_COMMON_CODE' ) )
include_once( 'var/ezdemo_site/cache/template/compiled/common.php' );

$text .= '<div id="ezwt-help">
<a href="http://ez.no/doc" title="Documentation" target="_blank"><span class="hide">Documentation</span>?</a>
</div>';

$setArray = $oldSetArray_d6f78aa34d0fba5a3f80e830bad42db4;
$tpl->Level--;
?>
