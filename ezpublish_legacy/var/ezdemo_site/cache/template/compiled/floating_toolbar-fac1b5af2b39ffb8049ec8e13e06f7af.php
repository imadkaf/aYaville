<?php
// URI:       extension/ezwt/design/standard/templates/parts/websitetoolbar/floating_toolbar.tpl
// Filename:  extension/ezwt/design/standard/templates/parts/websitetoolbar/floating_toolbar.tpl
// Timestamp: 1400615729 (Tue May 20 21:55:29 CEST 2014)
$oldSetArray_dffbc876e878005c7ed22ea976093fa7 = isset( $setArray ) ? $setArray : array();
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

<script type="text/javascript">
(function()
{
    var body = document.body, ezwt = document.getElementById( \'ezwt\' );
    if ( !ezwt ) return;
    if ( body.className.indexOf(\'ie6\') !== -1 ) return;

    if ( body.className )
        body.className += \' floating-wt\';
    else
        body.className = \'floating-wt\';

    // Set padding on header / body based on height of toolbar
    var page = document.getElementById( \'page\' )
    if ( page )
        page.getElementsByTagName(\'div\')[0].style.paddingTop = ezwt.offsetHeight + \'px\';
    else
        body.style.paddingTop = ezwt.offsetHeight + \'px\';
})();
</script>

';

$setArray = $oldSetArray_dffbc876e878005c7ed22ea976093fa7;
$tpl->Level--;
?>
