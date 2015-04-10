<?php
// URI:       extension/ezflow/design/standard/templates/parts/zone_block_top.tpl
// Filename:  extension/ezflow/design/standard/templates/parts/zone_block_top.tpl
// Timestamp: 1417010977 (Wed Nov 26 15:09:37 CET 2014)
$oldSetArray_6dfb982bb61bfc7c08cf3fcba158dab9 = isset( $setArray ) ? $setArray : array();
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

$setArray = $oldSetArray_6dfb982bb61bfc7c08cf3fcba158dab9;
$tpl->Level--;
?>
