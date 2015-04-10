<?php
// URI:       design:node/ezflcontextmenu.tpl
// Filename:  extension/ezflow/design/standard/templates/node/ezflcontextmenu.tpl
// Timestamp: 1417010977 (Wed Nov 26 15:09:37 CET 2014)
$oldSetArray_2248d18cf7e9d0a2800d7a10d5f8701d = isset( $setArray ) ? $setArray : array();
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

$text .= '<script type="text/javascript">
menuArray[\'eZFlow\'] = new Array();
menuArray[\'eZFlow\'][\'depth\'] = 1; // this is a first level submenu of ContextMenu
menuArray[\'eZFlow\'][\'elements\'] = new Array();
menuArray[\'eZFlow\'][\'elements\'][\'push-to-block\'] = new Array();
menuArray[\'eZFlow\'][\'elements\'][\'push-to-block\'][\'url\'] = "/ezdemo_admin/ezflow/push/%nodeID%";
</script>

<hr />

<a id="menu-ezflow" class="more" href="#" onmouseover="ezpopmenu_showSubLevel( event, \'eZFlow\', \'menu-ezflow\' ); return false;">eZ Flow</a>';

$setArray = $oldSetArray_2248d18cf7e9d0a2800d7a10d5f8701d;
$tpl->Level--;
?>
