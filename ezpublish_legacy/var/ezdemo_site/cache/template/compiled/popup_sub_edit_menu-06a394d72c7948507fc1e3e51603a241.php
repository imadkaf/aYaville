<?php
// URI:       design/admin/templates/popupmenu/popup_sub_edit_menu.tpl
// Filename:  design/admin/templates/popupmenu/popup_sub_edit_menu.tpl
// Timestamp: 1416144920 (Sun Nov 16 14:35:20 CET 2014)
$oldSetArray_2092574695d34080092c3cf8392d9639 = isset( $setArray ) ? $setArray : array();
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

$text .= '<!-- Edit menu -->
<script type="text/javascript">
menuArray[\'EditSubmenu\'] = { \'depth\': 1 };
menuArray[\'EditSubmenu\'][\'elements\'] = {};
menuArray[\'EditSubmenu\'][\'elements\'][\'edit-languages\'] = { \'variable\': \'%languages%\' };
menuArray[\'EditSubmenu\'][\'elements\'][\'edit-languages\'][\'content\'] = \'<a href="/index.php/ezdemo_admin/content/edit/%objectID%/f/%locale%" onmouseover="ezpopmenu_mouseOver( \\\'EditSubmenu\\\' )">%name%<\\/a>\';
menuArray[\'EditSubmenu\'][\'elements\'][\'edit-languages-another\'] = { \'url\': "/index.php/ezdemo_admin/content/edit/%objectID%/a" };
</script>

<div class="popupmenu" id="EditSubmenu">
    <div id="edit-languages"></div>
    <hr />
    <a id="edit-languages-another" href="#" onmouseover="ezpopmenu_mouseOver( \'EditSubmenu\' )">New translation</a>
</div>';

$setArray = $oldSetArray_2092574695d34080092c3cf8392d9639;
$tpl->Level--;
?>
