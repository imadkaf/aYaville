<?php
// URI:       design:node/ezflsubitemscontextmenu.tpl
// Filename:  extension/ezflow/design/standard/templates/node/ezflsubitemscontextmenu.tpl
// Timestamp: 1417010977 (Wed Nov 26 15:09:37 CET 2014)
$oldSetArray_423e34b38a83333c87774f42789914dd = isset( $setArray ) ? $setArray : array();
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
menuArray[\'eZFlow\'][\'elements\'][\'push-to-block\'][\'url\'] = "/index.php/ezdemo_admin/ezflow/push/%nodeID%";
</script>

<hr />

<a id="child-menu-ezflow" class="more" href="#" onmouseover="ezpopmenu_showSubLevel( event, \'eZFlow\', \'child-menu-ezflow\' ); return false;">eZ Flow</a>';

$setArray = $oldSetArray_423e34b38a83333c87774f42789914dd;
$tpl->Level--;
?>
