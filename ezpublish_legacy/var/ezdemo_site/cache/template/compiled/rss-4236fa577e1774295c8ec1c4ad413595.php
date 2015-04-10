<?php
// URI:       design:parts/websitetoolbar/rss.tpl
// Filename:  extension/ezdemo/design/ezdemo/templates/parts/websitetoolbar/rss.tpl
// Timestamp: 1417102386 (Thu Nov 27 16:33:06 CET 2014)
$oldSetArray_ee16e803ce6d8e65433d8cf2cc9e8ab0 = isset( $setArray ) ? $setArray : array();
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

// if begins
unset( $if_cond );
unset( $if_cond1 );
$if_cond1 = array (
  'folder' => 'article',
);
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_object'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'class_identifier' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = compiledFetchAttribute( $if_cond1, $if_cond3 );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
// def $create_rss_access
unset( $var );
$var = call_user_func_array( array( new eZUserFunctionCollection(), 'hasAccessTo' ),
  array(     'module' => "rss",
    'function' => "edit",
    'user_id' => null ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'create_rss_access', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'create_rss_access' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 4,
    2 => 117,
  ),
  1 => 
  array (
    0 => 2,
    1 => 106,
    2 => 219,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/parts/websitetoolbar/rss.tpl',
) );
    $tpl->setVariable( 'create_rss_access', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'create_rss_access', $var, $rootNamespace );
}

$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'create_rss_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['create_rss_access'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_node'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'node_id' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = call_user_func_array( array( new eZRSSFunctionCollection(), 'hasExportByNode' ),
  array(     'node_id' => $if_cond1 ) );
$if_cond = isset( $if_cond['result'] ) ? $if_cond['result'] : null;
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            <input class="ezwt-input-image" type="image" src="/extension/ezdemo/design/ezdemo/images/websitetoolbar/ezwt-icon-rss-remove.png" name="RemoveNodeFeed" title="Remove node RSS/ATOM feed" />
        ';
}
else
{
$text .= '            <input class="ezwt-input-image" type="image" src="/extension/ezdemo/design/ezdemo/images/websitetoolbar/ezwt-icon-rss-add.png" name="CreateNodeFeed" title="Create node RSS/ATOM feed" />
        ';
}
unset( $if_cond );
// if ends

$text .= '    ';
}
unset( $if_cond );
// if ends

}
unset( $if_cond );
// if ends


$setArray = $oldSetArray_ee16e803ce6d8e65433d8cf2cc9e8ab0;
$tpl->Level--;
?>
