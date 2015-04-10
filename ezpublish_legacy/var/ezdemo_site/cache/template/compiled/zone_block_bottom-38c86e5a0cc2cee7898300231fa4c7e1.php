<?php
// URI:       extension/ezflow/design/standard/templates/parts/zone_block_bottom.tpl
// Filename:  extension/ezflow/design/standard/templates/parts/zone_block_bottom.tpl
// Timestamp: 1417010977 (Wed Nov 26 15:09:37 CET 2014)
$oldSetArray_a4d0bd427aab1508181c73d4414c022a = isset( $setArray ) ? $setArray : array();
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

$setArray = $oldSetArray_a4d0bd427aab1508181c73d4414c022a;
$tpl->Level--;
?>
