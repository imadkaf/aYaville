<?php
// URI:       design:content/datatype/view/ezxmltext.tpl
// Filename:  design/standard/templates/content/datatype/view/ezxmltext.tpl
// Timestamp: 1416144920 (Sun Nov 16 14:35:20 CET 2014)
$oldSetArray_5e3760cc4ae85eb1586406a253d90b39 = isset( $setArray ) ? $setArray : array();
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
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'content' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'output' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'output_text' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );


$setArray = $oldSetArray_5e3760cc4ae85eb1586406a253d90b39;
$tpl->Level--;
?>
