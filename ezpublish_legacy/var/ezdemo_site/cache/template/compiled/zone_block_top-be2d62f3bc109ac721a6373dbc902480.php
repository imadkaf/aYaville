<?php
// URI:       extension/ezflow/design/standard/templates/parts/zone_block_top.tpl
// Filename:  extension/ezflow/design/standard/templates/parts/zone_block_top.tpl
// Timestamp: 1417010977 (Wed Nov 26 15:09:37 CET 2014)
$oldSetArray_184f78ef41b944856422c73fedb58362 = isset( $setArray ) ? $setArray : array();
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

$text .= '
';

$setArray = $oldSetArray_184f78ef41b944856422c73fedb58362;
$tpl->Level--;
?>
