<?php
// URI:       extension/ezwt/design/standard/templates/parts/websitetoolbar/logo.tpl
// Filename:  extension/ezwt/design/standard/templates/parts/websitetoolbar/logo.tpl
// Timestamp: 1400615729 (Tue May 20 21:55:29 CEST 2014)
$oldSetArray_0d59b66f7b7638a2400e330e94279333 = isset( $setArray ) ? $setArray : array();
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

$text .= '<div id="ezwt-ezlogo">
<a href="/ezinfo/about" title="About" target="_blank"><img src="/extension/ezwt/design/standard/images/websitetoolbar/ezwt-logo.png" width="66" height="25" alt="eZ" /></a>
</div>';

$setArray = $oldSetArray_0d59b66f7b7638a2400e330e94279333;
$tpl->Level--;
?>
