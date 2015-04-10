<?php
// URI:       design:node/view/full.tpl
// Filename:  extension/ezdemo/design/ezdemo/override/templates/full/folder.tpl
// Timestamp: 1417102386 (Thu Nov 27 16:33:06 CET 2014)
$oldSetArray_87e1a4ffeea075e265b52bb63521cce1 = isset( $setArray ) ? $setArray : array();
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

$node = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "node", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["node"] : null;
if ( is_object( $node ) )
$object = $node->attribute( 'object' );
if ( isset( $object ) && is_object( $object ) )
$nod_87e1a4ffeea075e265b52bb63521cce1 = $object->attribute( 'data_map' );
else
$nod_87e1a4ffeea075e265b52bb63521cce1 = false;
unset( $node, $object );

if ( array_key_exists( '', $vars ) && array_key_exists( 'persistent_variable', $vars[''] ) )
{
    $vars['']['persistent_variable'] = array (
  'left_menu' => false,
  'extra_menu' => false,
);
}
// def $rss_export
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'node_id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZRSSFunctionCollection(), 'exportByNode' ),
  array(     'node_id' => $var1 ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'rss_export', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'rss_export' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 0,
    2 => 159,
  ),
  1 => 
  array (
    0 => 5,
    1 => 84,
    2 => 243,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/full/folder.tpl',
) );
    $tpl->setVariable( 'rss_export', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'rss_export', $var, $rootNamespace );
}

$text .= '
<section class="content-view-full">
    <div class="class-folder row">
        <div class="span8">
            ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'rss_export', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['rss_export'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            <div class="attribute-rss-icon">
                <a href="';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'rss_export', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['rss_export'] : null;
$var4 = compiledFetchAttribute( $var3, 'access_url' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( '/rss/feed/' . $var3 );
unset( $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" title="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'rss_export', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['rss_export'] : null;
$var2 = compiledFetchAttribute( $var1, 'title' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '"><img src="/extension/ezdemo/design/ezdemo/images/rss-icon.gif" alt="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'rss_export', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['rss_export'] : null;
$var2 = compiledFetchAttribute( $var1, 'title' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" /></a>
            </div>
            ';
}
unset( $if_cond );
// if ends

$text .= '
            <div class="attribute-header">
                <h1>';
$textElements = array();
$tpl->processFunction( 'attribute_view_gui', $textElements,
                       false,
                       array (
  'attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'node',
      ),
      2 => false,
    ),
    1 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'data_map',
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'name',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 17,
    1 => 20,
    2 => 729,
  ),
  1 => 
  array (
    0 => 17,
    1 => 68,
    2 => 777,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/full/folder.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '</h1>
            </div>

            ';
// if begins
$if_cond = true;
if ( $if_cond )
{
$text .= '                ';
// if begins
unset( $if_cond );
$if_cond = $nod_87e1a4ffeea075e265b52bb63521cce1;
if ( !$if_cond )
{
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'object' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'data_map' );
unset( $if_cond );
$if_cond = $if_cond1;
}
if ( !isset( $if_cond['short_description'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$if_cond['short_description'] does not exist, cannot fetch the value." );
    $if_cond = null;
}
else
    $if_cond = $if_cond['short_description'];
if ( !is_object( $if_cond ) )
{
    $if_cond = null;
}
else if ( $if_cond->hasAttribute( "has_content" ) )
{
    $if_cond = $if_cond->attribute( "has_content" );
}
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                    <div class="attribute-short">
                        ';
$textElements = array();
$tpl->processFunction( 'attribute_view_gui', $textElements,
                       false,
                       array (
  'attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'node',
      ),
      2 => false,
    ),
    1 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'data_map',
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'short_description',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 23,
    1 => 24,
    2 => 1040,
  ),
  1 => 
  array (
    0 => 23,
    1 => 85,
    2 => 1101,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/full/folder.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '                    </div>
                ';
}
unset( $if_cond );
// if ends

$text .= '            ';
}
unset( $if_cond );
// if ends

$text .= '
            ';
// if begins
unset( $if_cond );
$if_cond = $nod_87e1a4ffeea075e265b52bb63521cce1;
if ( !$if_cond )
{
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'object' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'data_map' );
unset( $if_cond );
$if_cond = $if_cond1;
}
if ( !isset( $if_cond['description'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$if_cond['description'] does not exist, cannot fetch the value." );
    $if_cond = null;
}
else
    $if_cond = $if_cond['description'];
if ( !is_object( $if_cond ) )
{
    $if_cond = null;
}
else if ( $if_cond->hasAttribute( "has_content" ) )
{
    $if_cond = $if_cond->attribute( "has_content" );
}
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                <div class="attribute-long">
                    ';
$textElements = array();
$tpl->processFunction( 'attribute_view_gui', $textElements,
                       false,
                       array (
  'attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'node',
      ),
      2 => false,
    ),
    1 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'data_map',
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'description',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 30,
    1 => 20,
    2 => 1300,
  ),
  1 => 
  array (
    0 => 30,
    1 => 75,
    2 => 1355,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/full/folder.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '                </div>
            ';
}
unset( $if_cond );
// if ends

$text .= '
                <div class="attribute-tags">
                    ';
$textElements = array();
$tpl->processFunction( 'attribute_view_gui', $textElements,
                       false,
                       array (
  'attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'node',
      ),
      2 => false,
    ),
    1 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'data_map',
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'tags',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 35,
    1 => 20,
    2 => 1465,
  ),
  1 => 
  array (
    0 => 35,
    1 => 68,
    2 => 1513,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/full/folder.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '                </div>

            ';
// if begins
unset( $if_cond );
$if_cond = $nod_87e1a4ffeea075e265b52bb63521cce1;
if ( !$if_cond )
{
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'object' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'data_map' );
unset( $if_cond );
$if_cond = $if_cond1;
}
if ( !isset( $if_cond['show_children'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$if_cond['show_children'] does not exist, cannot fetch the value." );
    $if_cond = null;
}
else
    $if_cond = $if_cond['show_children'];
if ( !is_object( $if_cond ) )
{
    $if_cond = null;
}
else if ( $if_cond->hasAttribute( "data_int" ) )
{
    $if_cond = $if_cond->attribute( "data_int" );
}
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                ';
// def $page_limit
if ( $tpl->hasVariable( 'page_limit', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'page_limit' is already defined.", array (
  0 => 
  array (
    0 => 39,
    1 => 16,
    2 => 1618,
  ),
  1 => 
  array (
    0 => 42,
    1 => 41,
    2 => 1819,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/full/folder.tpl',
) );
    $tpl->setVariable( 'page_limit', 10, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'page_limit', 10, $rootNamespace );
}

// def $classes
if ( $tpl->hasVariable( 'classes', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'classes' is already defined.", array (
  0 => 
  array (
    0 => 39,
    1 => 16,
    2 => 1618,
  ),
  1 => 
  array (
    0 => 42,
    1 => 41,
    2 => 1819,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/full/folder.tpl',
) );
    $tpl->setVariable( 'classes', array (
  0 => 'infobox',
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'classes', array (
  0 => 'infobox',
), $rootNamespace );
}

// def $children
if ( $tpl->hasVariable( 'children', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'children' is already defined.", array (
  0 => 
  array (
    0 => 39,
    1 => 16,
    2 => 1618,
  ),
  1 => 
  array (
    0 => 42,
    1 => 41,
    2 => 1819,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/full/folder.tpl',
) );
    $tpl->setVariable( 'children', array (
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'children', array (
), $rootNamespace );
}

// def $children_count
if ( $tpl->hasVariable( 'children_count', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'children_count' is already defined.", array (
  0 => 
  array (
    0 => 39,
    1 => 16,
    2 => 1618,
  ),
  1 => 
  array (
    0 => 42,
    1 => 41,
    2 => 1819,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/full/folder.tpl',
) );
    $tpl->setVariable( 'children_count', '', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'children_count', '', $rootNamespace );
}

$text .= '
                ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'depth' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) <= ( '3' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                    ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'classes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['classes'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = array_merge( $var1, array( "folder",
       "link" ) );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'classes', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['classes'] = $var;
    unset( $var );
}
$text .= '                ';
}
unset( $if_cond );
// if ends

$text .= '
                ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'node_id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'classes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['classes'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchObjectTreeCount' ),
  array(     'parent_node_id' => $var1,
    'only_translated' => false,
    'language' => false,
    'class_filter_type' => "exclude",
    'class_filter_array' => $var2,
    'attribute_filter' => false,
    'depth' => 1,
    'depth_operator' => "le",
    'ignore_visibility' => false,
    'limitation' => null,
    'main_node_only' => false,
    'extended_attribute_filter' => false,
    'objectname_filter' => null ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'children_count', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['children_count'] = $var;
    unset( $var );
}
$text .= '
                <section class="content-view-children">
                    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'children_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['children_count'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                        ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_2755685d204c7ed6d5bc3c61280019a5_1 ) ) $fe_variable_stack_2755685d204c7ed6d5bc3c61280019a5_1 = array();
$fe_variable_stack_2755685d204c7ed6d5bc3c61280019a5_1[] = compact( 'fe_array_2755685d204c7ed6d5bc3c61280019a5_1', 'fe_array_keys_2755685d204c7ed6d5bc3c61280019a5_1', 'fe_n_items_2755685d204c7ed6d5bc3c61280019a5_1', 'fe_n_items_processed_2755685d204c7ed6d5bc3c61280019a5_1', 'fe_i_2755685d204c7ed6d5bc3c61280019a5_1', 'fe_key_2755685d204c7ed6d5bc3c61280019a5_1', 'fe_val_2755685d204c7ed6d5bc3c61280019a5_1', 'fe_offset_2755685d204c7ed6d5bc3c61280019a5_1', 'fe_max_2755685d204c7ed6d5bc3c61280019a5_1', 'fe_reverse_2755685d204c7ed6d5bc3c61280019a5_1', 'fe_first_val_2755685d204c7ed6d5bc3c61280019a5_1', 'fe_last_val_2755685d204c7ed6d5bc3c61280019a5_1' );
unset( $fe_array_2755685d204c7ed6d5bc3c61280019a5_1 );
unset( $fe_array_2755685d204c7ed6d5bc3c61280019a5_11 );
unset( $fe_array_2755685d204c7ed6d5bc3c61280019a5_11 );
$fe_array_2755685d204c7ed6d5bc3c61280019a5_11 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$fe_array_2755685d204c7ed6d5bc3c61280019a5_12 = compiledFetchAttribute( $fe_array_2755685d204c7ed6d5bc3c61280019a5_11, 'node_id' );
unset( $fe_array_2755685d204c7ed6d5bc3c61280019a5_11 );
$fe_array_2755685d204c7ed6d5bc3c61280019a5_11 = $fe_array_2755685d204c7ed6d5bc3c61280019a5_12;
if (! isset( $fe_array_2755685d204c7ed6d5bc3c61280019a5_11 ) ) $fe_array_2755685d204c7ed6d5bc3c61280019a5_11 = NULL;
while ( is_object( $fe_array_2755685d204c7ed6d5bc3c61280019a5_11 ) and method_exists( $fe_array_2755685d204c7ed6d5bc3c61280019a5_11, 'templateValue' ) )
    $fe_array_2755685d204c7ed6d5bc3c61280019a5_11 = $fe_array_2755685d204c7ed6d5bc3c61280019a5_11->templateValue();
while ( is_object( $fe_array_2755685d204c7ed6d5bc3c61280019a5_11 ) and method_exists( $fe_array_2755685d204c7ed6d5bc3c61280019a5_11, 'templateValue' ) )
    $fe_array_2755685d204c7ed6d5bc3c61280019a5_11 = $fe_array_2755685d204c7ed6d5bc3c61280019a5_11->templateValue();
unset( $fe_array_2755685d204c7ed6d5bc3c61280019a5_12 );
unset( $fe_array_2755685d204c7ed6d5bc3c61280019a5_12 );
$fe_array_2755685d204c7ed6d5bc3c61280019a5_12 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$fe_array_2755685d204c7ed6d5bc3c61280019a5_13 = compiledFetchAttribute( $fe_array_2755685d204c7ed6d5bc3c61280019a5_12, 'sort_array' );
unset( $fe_array_2755685d204c7ed6d5bc3c61280019a5_12 );
$fe_array_2755685d204c7ed6d5bc3c61280019a5_12 = $fe_array_2755685d204c7ed6d5bc3c61280019a5_13;
if (! isset( $fe_array_2755685d204c7ed6d5bc3c61280019a5_12 ) ) $fe_array_2755685d204c7ed6d5bc3c61280019a5_12 = NULL;
while ( is_object( $fe_array_2755685d204c7ed6d5bc3c61280019a5_12 ) and method_exists( $fe_array_2755685d204c7ed6d5bc3c61280019a5_12, 'templateValue' ) )
    $fe_array_2755685d204c7ed6d5bc3c61280019a5_12 = $fe_array_2755685d204c7ed6d5bc3c61280019a5_12->templateValue();
while ( is_object( $fe_array_2755685d204c7ed6d5bc3c61280019a5_12 ) and method_exists( $fe_array_2755685d204c7ed6d5bc3c61280019a5_12, 'templateValue' ) )
    $fe_array_2755685d204c7ed6d5bc3c61280019a5_12 = $fe_array_2755685d204c7ed6d5bc3c61280019a5_12->templateValue();
unset( $fe_array_2755685d204c7ed6d5bc3c61280019a5_13 );
unset( $fe_array_2755685d204c7ed6d5bc3c61280019a5_13 );
$fe_array_2755685d204c7ed6d5bc3c61280019a5_13 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view_parameters'] : null;
$fe_array_2755685d204c7ed6d5bc3c61280019a5_14 = compiledFetchAttribute( $fe_array_2755685d204c7ed6d5bc3c61280019a5_13, 'offset' );
unset( $fe_array_2755685d204c7ed6d5bc3c61280019a5_13 );
$fe_array_2755685d204c7ed6d5bc3c61280019a5_13 = $fe_array_2755685d204c7ed6d5bc3c61280019a5_14;
if (! isset( $fe_array_2755685d204c7ed6d5bc3c61280019a5_13 ) ) $fe_array_2755685d204c7ed6d5bc3c61280019a5_13 = NULL;
while ( is_object( $fe_array_2755685d204c7ed6d5bc3c61280019a5_13 ) and method_exists( $fe_array_2755685d204c7ed6d5bc3c61280019a5_13, 'templateValue' ) )
    $fe_array_2755685d204c7ed6d5bc3c61280019a5_13 = $fe_array_2755685d204c7ed6d5bc3c61280019a5_13->templateValue();
while ( is_object( $fe_array_2755685d204c7ed6d5bc3c61280019a5_13 ) and method_exists( $fe_array_2755685d204c7ed6d5bc3c61280019a5_13, 'templateValue' ) )
    $fe_array_2755685d204c7ed6d5bc3c61280019a5_13 = $fe_array_2755685d204c7ed6d5bc3c61280019a5_13->templateValue();
unset( $fe_array_2755685d204c7ed6d5bc3c61280019a5_14 );
unset( $fe_array_2755685d204c7ed6d5bc3c61280019a5_14 );
$fe_array_2755685d204c7ed6d5bc3c61280019a5_14 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'page_limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['page_limit'] : null;
if (! isset( $fe_array_2755685d204c7ed6d5bc3c61280019a5_14 ) ) $fe_array_2755685d204c7ed6d5bc3c61280019a5_14 = NULL;
while ( is_object( $fe_array_2755685d204c7ed6d5bc3c61280019a5_14 ) and method_exists( $fe_array_2755685d204c7ed6d5bc3c61280019a5_14, 'templateValue' ) )
    $fe_array_2755685d204c7ed6d5bc3c61280019a5_14 = $fe_array_2755685d204c7ed6d5bc3c61280019a5_14->templateValue();
while ( is_object( $fe_array_2755685d204c7ed6d5bc3c61280019a5_14 ) and method_exists( $fe_array_2755685d204c7ed6d5bc3c61280019a5_14, 'templateValue' ) )
    $fe_array_2755685d204c7ed6d5bc3c61280019a5_14 = $fe_array_2755685d204c7ed6d5bc3c61280019a5_14->templateValue();
unset( $fe_array_2755685d204c7ed6d5bc3c61280019a5_15 );
unset( $fe_array_2755685d204c7ed6d5bc3c61280019a5_15 );
$fe_array_2755685d204c7ed6d5bc3c61280019a5_15 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'classes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['classes'] : null;
if (! isset( $fe_array_2755685d204c7ed6d5bc3c61280019a5_15 ) ) $fe_array_2755685d204c7ed6d5bc3c61280019a5_15 = NULL;
while ( is_object( $fe_array_2755685d204c7ed6d5bc3c61280019a5_15 ) and method_exists( $fe_array_2755685d204c7ed6d5bc3c61280019a5_15, 'templateValue' ) )
    $fe_array_2755685d204c7ed6d5bc3c61280019a5_15 = $fe_array_2755685d204c7ed6d5bc3c61280019a5_15->templateValue();
while ( is_object( $fe_array_2755685d204c7ed6d5bc3c61280019a5_15 ) and method_exists( $fe_array_2755685d204c7ed6d5bc3c61280019a5_15, 'templateValue' ) )
    $fe_array_2755685d204c7ed6d5bc3c61280019a5_15 = $fe_array_2755685d204c7ed6d5bc3c61280019a5_15->templateValue();
$fe_array_2755685d204c7ed6d5bc3c61280019a5_1 = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchObjectTree' ),
  array(     'parent_node_id' => $fe_array_2755685d204c7ed6d5bc3c61280019a5_11,
    'sort_by' => $fe_array_2755685d204c7ed6d5bc3c61280019a5_12,
    'only_translated' => false,
    'language' => false,
    'offset' => $fe_array_2755685d204c7ed6d5bc3c61280019a5_13,
    'limit' => $fe_array_2755685d204c7ed6d5bc3c61280019a5_14,
    'depth' => 1,
    'depth_operator' => "le",
    'class_id' => false,
    'attribute_filter' => false,
    'extended_attribute_filter' => false,
    'class_filter_type' => "exclude",
    'class_filter_array' => $fe_array_2755685d204c7ed6d5bc3c61280019a5_15,
    'group_by' => false,
    'main_node_only' => false,
    'ignore_visibility' => false,
    'limitation' => null,
    'as_object' => null,
    'objectname_filter' => null,
    'load_data_map' => null ) );
$fe_array_2755685d204c7ed6d5bc3c61280019a5_1 = isset( $fe_array_2755685d204c7ed6d5bc3c61280019a5_1['result'] ) ? $fe_array_2755685d204c7ed6d5bc3c61280019a5_1['result'] : null;
unset( $fe_array_2755685d204c7ed6d5bc3c61280019a5_11, $fe_array_2755685d204c7ed6d5bc3c61280019a5_12, $fe_array_2755685d204c7ed6d5bc3c61280019a5_13, $fe_array_2755685d204c7ed6d5bc3c61280019a5_14, $fe_array_2755685d204c7ed6d5bc3c61280019a5_15 );
if (! isset( $fe_array_2755685d204c7ed6d5bc3c61280019a5_1 ) ) $fe_array_2755685d204c7ed6d5bc3c61280019a5_1 = NULL;
while ( is_object( $fe_array_2755685d204c7ed6d5bc3c61280019a5_1 ) and method_exists( $fe_array_2755685d204c7ed6d5bc3c61280019a5_1, 'templateValue' ) )
    $fe_array_2755685d204c7ed6d5bc3c61280019a5_1 = $fe_array_2755685d204c7ed6d5bc3c61280019a5_1->templateValue();

$fe_array_keys_2755685d204c7ed6d5bc3c61280019a5_1 = is_array( $fe_array_2755685d204c7ed6d5bc3c61280019a5_1 ) ? array_keys( $fe_array_2755685d204c7ed6d5bc3c61280019a5_1 ) : array();
$fe_n_items_2755685d204c7ed6d5bc3c61280019a5_1 = count( $fe_array_keys_2755685d204c7ed6d5bc3c61280019a5_1 );
$fe_n_items_processed_2755685d204c7ed6d5bc3c61280019a5_1 = 0;
$fe_offset_2755685d204c7ed6d5bc3c61280019a5_1 = 0;
$fe_max_2755685d204c7ed6d5bc3c61280019a5_1 = $fe_n_items_2755685d204c7ed6d5bc3c61280019a5_1 - $fe_offset_2755685d204c7ed6d5bc3c61280019a5_1;
$fe_reverse_2755685d204c7ed6d5bc3c61280019a5_1 = false;
if ( $fe_offset_2755685d204c7ed6d5bc3c61280019a5_1 < 0 || $fe_offset_2755685d204c7ed6d5bc3c61280019a5_1 >= $fe_n_items_2755685d204c7ed6d5bc3c61280019a5_1 )
{
    $fe_offset_2755685d204c7ed6d5bc3c61280019a5_1 = ( $fe_offset_2755685d204c7ed6d5bc3c61280019a5_1 < 0 ) ? 0 : $fe_n_items_2755685d204c7ed6d5bc3c61280019a5_1;
    if ( $fe_n_items_2755685d204c7ed6d5bc3c61280019a5_1 || $fe_offset_2755685d204c7ed6d5bc3c61280019a5_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_2755685d204c7ed6d5bc3c61280019a5_1'. Array count: $fe_n_items_2755685d204c7ed6d5bc3c61280019a5_1");   
}
}
if ( $fe_max_2755685d204c7ed6d5bc3c61280019a5_1 < 0 || $fe_offset_2755685d204c7ed6d5bc3c61280019a5_1 + $fe_max_2755685d204c7ed6d5bc3c61280019a5_1 > $fe_n_items_2755685d204c7ed6d5bc3c61280019a5_1 )
{
    if ( $fe_max_2755685d204c7ed6d5bc3c61280019a5_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_2755685d204c7ed6d5bc3c61280019a5_1");
    $fe_max_2755685d204c7ed6d5bc3c61280019a5_1 = $fe_n_items_2755685d204c7ed6d5bc3c61280019a5_1 - $fe_offset_2755685d204c7ed6d5bc3c61280019a5_1;
}
if ( $fe_reverse_2755685d204c7ed6d5bc3c61280019a5_1 )
{
    $fe_first_val_2755685d204c7ed6d5bc3c61280019a5_1 = $fe_n_items_2755685d204c7ed6d5bc3c61280019a5_1 - 1 - $fe_offset_2755685d204c7ed6d5bc3c61280019a5_1;
    $fe_last_val_2755685d204c7ed6d5bc3c61280019a5_1  = 0;
}
else
{
    $fe_first_val_2755685d204c7ed6d5bc3c61280019a5_1 = $fe_offset_2755685d204c7ed6d5bc3c61280019a5_1;
    $fe_last_val_2755685d204c7ed6d5bc3c61280019a5_1  = $fe_n_items_2755685d204c7ed6d5bc3c61280019a5_1 - 1;
}
// foreach
for ( $fe_i_2755685d204c7ed6d5bc3c61280019a5_1 = $fe_first_val_2755685d204c7ed6d5bc3c61280019a5_1; $fe_n_items_processed_2755685d204c7ed6d5bc3c61280019a5_1 < $fe_max_2755685d204c7ed6d5bc3c61280019a5_1 && ( $fe_reverse_2755685d204c7ed6d5bc3c61280019a5_1 ? $fe_i_2755685d204c7ed6d5bc3c61280019a5_1 >= $fe_last_val_2755685d204c7ed6d5bc3c61280019a5_1 : $fe_i_2755685d204c7ed6d5bc3c61280019a5_1 <= $fe_last_val_2755685d204c7ed6d5bc3c61280019a5_1 ); $fe_reverse_2755685d204c7ed6d5bc3c61280019a5_1 ? $fe_i_2755685d204c7ed6d5bc3c61280019a5_1-- : $fe_i_2755685d204c7ed6d5bc3c61280019a5_1++ )
{
$fe_key_2755685d204c7ed6d5bc3c61280019a5_1 = $fe_array_keys_2755685d204c7ed6d5bc3c61280019a5_1[$fe_i_2755685d204c7ed6d5bc3c61280019a5_1];
$fe_val_2755685d204c7ed6d5bc3c61280019a5_1 = $fe_array_2755685d204c7ed6d5bc3c61280019a5_1[$fe_key_2755685d204c7ed6d5bc3c61280019a5_1];
$vars[$rootNamespace]['child'] = $fe_val_2755685d204c7ed6d5bc3c61280019a5_1;
$text .= '                            ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'child', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['child'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
$vars[$namespace]['node'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( 'design' );
    $dKeys = $resH->keys();
}
if ( !isset( $dKeysStack ) )
{
    $dKeysStack = array();
}
$dKeysStack[] = $dKeys;
unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'node_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["node"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'contentobject_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["object"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'contentclass_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'section_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["section"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'section_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["section_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'class_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'match_ingroup_id_list' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class_group"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'state_id_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'state_identifier_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent_node_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_node"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'depth' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["depth"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'url_alias' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["url_alias"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["node_remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'class_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_class_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_node_remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_object_remote_id"] = $dKey;
unset( $dKey );

if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/article-e0e08c86d2c256f6cff6daccfce59c30.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/article.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/article-e0e08c86d2c256f6cff6daccfce59c30.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/article.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "geo_article", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "geo_article" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/geo_article-287b00abc976f8220982fdd0a4c6cd6d.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/geo_article.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/geo_article-287b00abc976f8220982fdd0a4c6cd6d.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/geo_article.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article_mainpage", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article_mainpage" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/article_mainpage-9d2ed527f7830dc23efc52629d27e916.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/article_mainpage.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/article_mainpage-9d2ed527f7830dc23efc52629d27e916.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/article_mainpage.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article_subpage", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article_subpage" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/article_subpage-ac389003df993d753e5284c54477e51b.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/article_subpage.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/article_subpage-ac389003df993d753e5284c54477e51b.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/article_subpage.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "banner", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "banner" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/banner-f19b4a1a6e4697fa2667ee9ba009d0a3.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/banner.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/banner-f19b4a1a6e4697fa2667ee9ba009d0a3.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/banner.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "blog", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "blog" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/blog-4664cb704f754eb953697ea02c1abfbb.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/blog.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/blog-4664cb704f754eb953697ea02c1abfbb.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/blog.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "blog_post", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "blog_post" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/blog_post-b8c335bfc49ce32ae818ec0288dc7eb5.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/blog_post.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/blog_post-b8c335bfc49ce32ae818ec0288dc7eb5.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/blog_post.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "comment", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "comment" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/comment-2f1d6733d51738a57f0f662d87f71f2a.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/comment.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/comment-2f1d6733d51738a57f0f662d87f71f2a.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/comment.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "wiki_page", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "wiki_page" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/wiki_page-83c0f43d4afadbb49d84c2f96cf7f2bb.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/wiki_page.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/wiki_page-83c0f43d4afadbb49d84c2f96cf7f2bb.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/wiki_page.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "event_calendar", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "event_calendar" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/event_calendar-984f4d3a223592ea772622dc7b31d8c3.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/event_calendar.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/event_calendar-984f4d3a223592ea772622dc7b31d8c3.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/event_calendar.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "event", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "event" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/event-56836d1766955e6d444f96e820ee3e14.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/event.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/event-56836d1766955e6d444f96e820ee3e14.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/event.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "feedback_form", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "feedback_form" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/feedback_form-b48c6070b0f9c7d9cdbe1012b96ac5a9.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/feedback_form.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/feedback_form-b48c6070b0f9c7d9cdbe1012b96ac5a9.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/feedback_form.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "file", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "file" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/file-65cdc6eced31d7c2513afa1ff7fccfef.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/file.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/file-65cdc6eced31d7c2513afa1ff7fccfef.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/file.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "flash", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "flash" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/flash-294cff415414b067029da58552c85993.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/flash.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/flash-294cff415414b067029da58552c85993.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/flash.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "folder", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "folder" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/folder-fe79ecf39efbf96a5309513f9b524d94.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/folder.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/folder-fe79ecf39efbf96a5309513f9b524d94.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/folder.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forum", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forum" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/forum-f2843200e64b9e2c5530dd009b85a56b.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/forum.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/forum-f2843200e64b9e2c5530dd009b85a56b.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/forum.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forum_reply", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forum_reply" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/forum_reply-e8be7c23d4f0ae91d33f075608d24618.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/forum_reply.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/forum_reply-e8be7c23d4f0ae91d33f075608d24618.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/forum_reply.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forum_topic", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forum_topic" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/forum_topic-26eb682442f5fad7827a9da9d05b0891.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/forum_topic.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/forum_topic-26eb682442f5fad7827a9da9d05b0891.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/forum_topic.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forums", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forums" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/forums-75de34e8085573545d47249e96e9f0ed.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/forums.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/forums-75de34e8085573545d47249e96e9f0ed.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/forums.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "gallery", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "gallery" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/gallery-043935d7787b0a540f1f68a0512229b5.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/gallery.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/gallery-043935d7787b0a540f1f68a0512229b5.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/gallery.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "image", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "image" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/image-c36f894d64afffd658ab984be4af490f.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/image.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/image-c36f894d64afffd658ab984be4af490f.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/image.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "infobox", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "infobox" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/infobox-59dcea0c5e2856bd1f39a9cb167557ba.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/infobox.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/infobox-59dcea0c5e2856bd1f39a9cb167557ba.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/infobox.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "link", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "link" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/link-daeeec0b0fea9662297ad83b27f9f812.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/link.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/link-daeeec0b0fea9662297ad83b27f9f812.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/link.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "multicalendar", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "multicalendar" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/multicalendar-075a261c5e32cbcd578ac5883b2937b7.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/multicalendar.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/multicalendar-075a261c5e32cbcd578ac5883b2937b7.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/multicalendar.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "poll", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "poll" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/poll-948b7e3e18f83a8db169602d586aff0a.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/poll.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/poll-948b7e3e18f83a8db169602d586aff0a.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/poll.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "product", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "product" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/product-d03718d80ffa3a6ed47334d13abc483a.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/product.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/product-d03718d80ffa3a6ed47334d13abc483a.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/product.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "silverlight", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "silverlight" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/silverlight-98e67ab7e2460221e5843a72fe974e67.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/silverlight.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/silverlight-98e67ab7e2460221e5843a72fe974e67.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/silverlight.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "quicktime", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "quicktime" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/quicktime-81d3034053329cc5cf150801025005c8.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/quicktime.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/quicktime-81d3034053329cc5cf150801025005c8.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/quicktime.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "real_video", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "real_video" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/real_video-2ac28aa6bbbe54e23af3bdd114e1061b.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/real_video.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/real_video-2ac28aa6bbbe54e23af3bdd114e1061b.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/real_video.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "windows_media", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "windows_media" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/windows_media-c530354d1dcb5a337f4db8200f4c9427.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/windows_media.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/windows_media-c530354d1dcb5a337f4db8200f4c9427.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/windows_media.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "video", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "video" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/video-d43ad983df9bf87a120bb8fb38853d34.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/video.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/video-d43ad983df9bf87a120bb8fb38853d34.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/video.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else 
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/line-e84fbd4a6c92ae617f7900fc8ca0904b.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/templates/node/view/line.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/line-e84fbd4a6c92ae617f7900fc8ca0904b.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/templates/node/view/line.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
$dKeys = array_pop( $dKeysStack );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $vars[$namespace]['node'] );
$text .= '                        ';
$fe_n_items_processed_2755685d204c7ed6d5bc3c61280019a5_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_2755685d204c7ed6d5bc3c61280019a5_1 ) ) extract( array_pop( $fe_variable_stack_2755685d204c7ed6d5bc3c61280019a5_1 ) );

else
{

unset( $fe_array_2755685d204c7ed6d5bc3c61280019a5_1 );

unset( $fe_array_keys_2755685d204c7ed6d5bc3c61280019a5_1 );

unset( $fe_n_items_2755685d204c7ed6d5bc3c61280019a5_1 );

unset( $fe_n_items_processed_2755685d204c7ed6d5bc3c61280019a5_1 );

unset( $fe_i_2755685d204c7ed6d5bc3c61280019a5_1 );

unset( $fe_key_2755685d204c7ed6d5bc3c61280019a5_1 );

unset( $fe_val_2755685d204c7ed6d5bc3c61280019a5_1 );

unset( $fe_offset_2755685d204c7ed6d5bc3c61280019a5_1 );

unset( $fe_max_2755685d204c7ed6d5bc3c61280019a5_1 );

unset( $fe_reverse_2755685d204c7ed6d5bc3c61280019a5_1 );

unset( $fe_first_val_2755685d204c7ed6d5bc3c61280019a5_1 );

unset( $fe_last_val_2755685d204c7ed6d5bc3c61280019a5_1 );

unset( $fe_variable_stack_2755685d204c7ed6d5bc3c61280019a5_1 );

}

// foreach ends
$text .= '                    ';
}
unset( $if_cond );
// if ends

$text .= '                </section>

                ';
$oldRestoreIncludeArray_ec140852adcc573e86871956f3f7c360 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $namespace ) and isset( $vars[$namespace]['page_uri'] ) )
    $restoreIncludeArray[] = array( $namespace, 'page_uri', $vars[$namespace]['page_uri'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['page_uri'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'page_uri', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'url_alias' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "navigator";
else
    $namespace .= ':navigator';
$vars[$namespace]['page_uri'] = $var;
unset( $var );
if ( isset( $namespace ) and isset( $vars[$namespace]['item_count'] ) )
    $restoreIncludeArray[] = array( $namespace, 'item_count', $vars[$namespace]['item_count'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['item_count'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'item_count', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'children_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['children_count'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "navigator";
else
    $namespace .= ':navigator';
$vars[$namespace]['item_count'] = $var;
unset( $var );
if ( isset( $namespace ) and isset( $vars[$namespace]['view_parameters'] ) )
    $restoreIncludeArray[] = array( $namespace, 'view_parameters', $vars[$namespace]['view_parameters'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['view_parameters'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'view_parameters', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view_parameters'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "navigator";
else
    $namespace .= ':navigator';
$vars[$namespace]['view_parameters'] = $var;
unset( $var );
if ( isset( $namespace ) and isset( $vars[$namespace]['item_limit'] ) )
    $restoreIncludeArray[] = array( $namespace, 'item_limit', $vars[$namespace]['item_limit'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['item_limit'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'item_limit', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'page_limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['page_limit'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "navigator";
else
    $namespace .= ':navigator';
$vars[$namespace]['item_limit'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/google-0757318cefa611c821bdb48b406ef32a.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'navigator' : ( $currentNamespace . ':' . 'navigator' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/standard/templates/navigator/google.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/google-0757318cefa611c821bdb48b406ef32a.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'navigator' : ( $currentNamespace . ':' . 'navigator' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/standard/templates/navigator/google.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_ec140852adcc573e86871956f3f7c360;

$text .= '
            ';
}
unset( $if_cond );
// if ends

$text .= '        </div>
        <div class="span4">
            <aside>
                ';
// def $root_node
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'path_array' );
unset( $var1 );
$var1 = $var2;
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var4 = compiledFetchAttribute( $var3, 'depth' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = compiledFetchAttribute( $var1, $var3 );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchContentNode' ),
  array(     'node_id' => $var1,
    'node_path' => false,
    'language_code' => false,
    'remote_id' => false ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'root_node', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'root_node' is already defined.", array (
  0 => 
  array (
    0 => 76,
    1 => 16,
    2 => 3580,
  ),
  1 => 
  array (
    0 => 82,
    1 => 60,
    2 => 4291,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/full/folder.tpl',
) );
    $tpl->setVariable( 'root_node', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'root_node', $var, $rootNamespace );
}

// def $menu_items
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node'] : null;
$var2 = compiledFetchAttribute( $var1, 'node_id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node'] : null;
$var3 = compiledFetchAttribute( $var2, 'sort_array' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchObjectTree' ),
  array(     'parent_node_id' => $var1,
    'sort_by' => $var2,
    'only_translated' => false,
    'language' => false,
    'offset' => false,
    'limit' => false,
    'depth' => 1,
    'depth_operator' => "le",
    'class_id' => false,
    'attribute_filter' => false,
    'extended_attribute_filter' => false,
    'class_filter_type' => "include",
    'class_filter_array' => array( "folder",
       "feedback_form",
       "gallery",
       "forum",
       "wiki_page",
       "forums",
       "event_calendar",
       "link",
       "blog",
       "landing_page" ),
    'group_by' => false,
    'main_node_only' => false,
    'ignore_visibility' => false,
    'limitation' => null,
    'as_object' => null,
    'objectname_filter' => null,
    'load_data_map' => false ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'menu_items', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'menu_items' is already defined.", array (
  0 => 
  array (
    0 => 76,
    1 => 16,
    2 => 3580,
  ),
  1 => 
  array (
    0 => 82,
    1 => 60,
    2 => 4291,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/full/folder.tpl',
) );
    $tpl->setVariable( 'menu_items', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'menu_items', $var, $rootNamespace );
}

// def $menu_items_count
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'menu_items', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['menu_items'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'menu_items_count', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'menu_items_count' is already defined.", array (
  0 => 
  array (
    0 => 76,
    1 => 16,
    2 => 3580,
  ),
  1 => 
  array (
    0 => 82,
    1 => 60,
    2 => 4291,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/full/folder.tpl',
) );
    $tpl->setVariable( 'menu_items_count', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'menu_items_count', $var, $rootNamespace );
}

$text .= '                <section class="subnavigation row nav-collapse">
                    <div class="attribute-header">
                        <h2>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'name' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</h2>
                    </div>
                    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'menu_items_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['menu_items_count'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                    <ul class="span4">
                        ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_2755685d204c7ed6d5bc3c61280019a5_3 ) ) $fe_variable_stack_2755685d204c7ed6d5bc3c61280019a5_3 = array();
$fe_variable_stack_2755685d204c7ed6d5bc3c61280019a5_3[] = compact( 'fe_array_2755685d204c7ed6d5bc3c61280019a5_3', 'fe_array_keys_2755685d204c7ed6d5bc3c61280019a5_3', 'fe_n_items_2755685d204c7ed6d5bc3c61280019a5_3', 'fe_n_items_processed_2755685d204c7ed6d5bc3c61280019a5_3', 'fe_i_2755685d204c7ed6d5bc3c61280019a5_3', 'fe_key_2755685d204c7ed6d5bc3c61280019a5_3', 'fe_val_2755685d204c7ed6d5bc3c61280019a5_3', 'fe_offset_2755685d204c7ed6d5bc3c61280019a5_3', 'fe_max_2755685d204c7ed6d5bc3c61280019a5_3', 'fe_reverse_2755685d204c7ed6d5bc3c61280019a5_3', 'fe_first_val_2755685d204c7ed6d5bc3c61280019a5_3', 'fe_last_val_2755685d204c7ed6d5bc3c61280019a5_3' );
unset( $fe_array_2755685d204c7ed6d5bc3c61280019a5_3 );
unset( $fe_array_2755685d204c7ed6d5bc3c61280019a5_3 );
$fe_array_2755685d204c7ed6d5bc3c61280019a5_3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'menu_items', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['menu_items'] : null;
if (! isset( $fe_array_2755685d204c7ed6d5bc3c61280019a5_3 ) ) $fe_array_2755685d204c7ed6d5bc3c61280019a5_3 = NULL;
while ( is_object( $fe_array_2755685d204c7ed6d5bc3c61280019a5_3 ) and method_exists( $fe_array_2755685d204c7ed6d5bc3c61280019a5_3, 'templateValue' ) )
    $fe_array_2755685d204c7ed6d5bc3c61280019a5_3 = $fe_array_2755685d204c7ed6d5bc3c61280019a5_3->templateValue();

$fe_array_keys_2755685d204c7ed6d5bc3c61280019a5_3 = is_array( $fe_array_2755685d204c7ed6d5bc3c61280019a5_3 ) ? array_keys( $fe_array_2755685d204c7ed6d5bc3c61280019a5_3 ) : array();
$fe_n_items_2755685d204c7ed6d5bc3c61280019a5_3 = count( $fe_array_keys_2755685d204c7ed6d5bc3c61280019a5_3 );
$fe_n_items_processed_2755685d204c7ed6d5bc3c61280019a5_3 = 0;
$fe_offset_2755685d204c7ed6d5bc3c61280019a5_3 = 0;
$fe_max_2755685d204c7ed6d5bc3c61280019a5_3 = $fe_n_items_2755685d204c7ed6d5bc3c61280019a5_3 - $fe_offset_2755685d204c7ed6d5bc3c61280019a5_3;
$fe_reverse_2755685d204c7ed6d5bc3c61280019a5_3 = false;
if ( $fe_offset_2755685d204c7ed6d5bc3c61280019a5_3 < 0 || $fe_offset_2755685d204c7ed6d5bc3c61280019a5_3 >= $fe_n_items_2755685d204c7ed6d5bc3c61280019a5_3 )
{
    $fe_offset_2755685d204c7ed6d5bc3c61280019a5_3 = ( $fe_offset_2755685d204c7ed6d5bc3c61280019a5_3 < 0 ) ? 0 : $fe_n_items_2755685d204c7ed6d5bc3c61280019a5_3;
    if ( $fe_n_items_2755685d204c7ed6d5bc3c61280019a5_3 || $fe_offset_2755685d204c7ed6d5bc3c61280019a5_3 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_2755685d204c7ed6d5bc3c61280019a5_3'. Array count: $fe_n_items_2755685d204c7ed6d5bc3c61280019a5_3");   
}
}
if ( $fe_max_2755685d204c7ed6d5bc3c61280019a5_3 < 0 || $fe_offset_2755685d204c7ed6d5bc3c61280019a5_3 + $fe_max_2755685d204c7ed6d5bc3c61280019a5_3 > $fe_n_items_2755685d204c7ed6d5bc3c61280019a5_3 )
{
    if ( $fe_max_2755685d204c7ed6d5bc3c61280019a5_3 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_2755685d204c7ed6d5bc3c61280019a5_3");
    $fe_max_2755685d204c7ed6d5bc3c61280019a5_3 = $fe_n_items_2755685d204c7ed6d5bc3c61280019a5_3 - $fe_offset_2755685d204c7ed6d5bc3c61280019a5_3;
}
if ( $fe_reverse_2755685d204c7ed6d5bc3c61280019a5_3 )
{
    $fe_first_val_2755685d204c7ed6d5bc3c61280019a5_3 = $fe_n_items_2755685d204c7ed6d5bc3c61280019a5_3 - 1 - $fe_offset_2755685d204c7ed6d5bc3c61280019a5_3;
    $fe_last_val_2755685d204c7ed6d5bc3c61280019a5_3  = 0;
}
else
{
    $fe_first_val_2755685d204c7ed6d5bc3c61280019a5_3 = $fe_offset_2755685d204c7ed6d5bc3c61280019a5_3;
    $fe_last_val_2755685d204c7ed6d5bc3c61280019a5_3  = $fe_n_items_2755685d204c7ed6d5bc3c61280019a5_3 - 1;
}
// foreach
for ( $fe_i_2755685d204c7ed6d5bc3c61280019a5_3 = $fe_first_val_2755685d204c7ed6d5bc3c61280019a5_3; $fe_n_items_processed_2755685d204c7ed6d5bc3c61280019a5_3 < $fe_max_2755685d204c7ed6d5bc3c61280019a5_3 && ( $fe_reverse_2755685d204c7ed6d5bc3c61280019a5_3 ? $fe_i_2755685d204c7ed6d5bc3c61280019a5_3 >= $fe_last_val_2755685d204c7ed6d5bc3c61280019a5_3 : $fe_i_2755685d204c7ed6d5bc3c61280019a5_3 <= $fe_last_val_2755685d204c7ed6d5bc3c61280019a5_3 ); $fe_reverse_2755685d204c7ed6d5bc3c61280019a5_3 ? $fe_i_2755685d204c7ed6d5bc3c61280019a5_3-- : $fe_i_2755685d204c7ed6d5bc3c61280019a5_3++ )
{
$fe_key_2755685d204c7ed6d5bc3c61280019a5_3 = $fe_array_keys_2755685d204c7ed6d5bc3c61280019a5_3[$fe_i_2755685d204c7ed6d5bc3c61280019a5_3];
$fe_val_2755685d204c7ed6d5bc3c61280019a5_3 = $fe_array_2755685d204c7ed6d5bc3c61280019a5_3[$fe_key_2755685d204c7ed6d5bc3c61280019a5_3];
$vars[$rootNamespace]['item'] = $fe_val_2755685d204c7ed6d5bc3c61280019a5_3;
$vars[$rootNamespace]['key'] = $fe_key_2755685d204c7ed6d5bc3c61280019a5_3;
$text .= '                            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'class_identifier' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'link' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                                <li><a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var2 = compiledFetchAttribute( $var1, 'data_map' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'location' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'content' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'data_map' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'open_in_new_window' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = isset( $if_cond2 );unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'data_map' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'open_in_new_window' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'data_int' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else
    $if_cond = $if_cond2;
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' target="_blank"';
}
unset( $if_cond );
// if ends

$text .= ' title="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var2 = compiledFetchAttribute( $var1, 'data_map' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'location' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'data_text' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" class="menu-item-link" rel=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var2 = compiledFetchAttribute( $var1, 'url_alias' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '>';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'data_map' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'location' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'data_text' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var2 = compiledFetchAttribute( $var1, 'data_map' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'location' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'data_text' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

}
else
{
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var2 = compiledFetchAttribute( $var1, 'name' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

}
unset( $if_cond );
// if ends

$text .= '</a>
                            ';
}
else
{
$text .= '                                <li><a href="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var2 = compiledFetchAttribute( $var1, 'url_alias' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var2 = compiledFetchAttribute( $var1, 'name' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</a>
                            ';
}
unset( $if_cond );
// if ends

$text .= '                            ';
// def $sub_menu_items
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var2 = compiledFetchAttribute( $var1, 'node_id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var3 = compiledFetchAttribute( $var2, 'sort_array' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchObjectTree' ),
  array(     'parent_node_id' => $var1,
    'sort_by' => $var2,
    'only_translated' => false,
    'language' => false,
    'offset' => false,
    'limit' => false,
    'depth' => 1,
    'depth_operator' => "le",
    'class_id' => false,
    'attribute_filter' => false,
    'extended_attribute_filter' => false,
    'class_filter_type' => "include",
    'class_filter_array' => array( "folder",
       "feedback_form",
       "gallery",
       "forum",
       "wiki_page",
       "forums",
       "event_calendar",
       "link",
       "blog",
       "landing_page" ),
    'group_by' => false,
    'main_node_only' => false,
    'ignore_visibility' => false,
    'limitation' => null,
    'as_object' => null,
    'objectname_filter' => null,
    'load_data_map' => false ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'sub_menu_items', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'sub_menu_items' is already defined.", array (
  0 => 
  array (
    0 => 95,
    1 => 28,
    2 => 5320,
  ),
  1 => 
  array (
    0 => 100,
    1 => 78,
    2 => 6056,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/full/folder.tpl',
) );
    $tpl->setVariable( 'sub_menu_items', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'sub_menu_items', $var, $rootNamespace );
}

// def $sub_menu_items_count
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sub_menu_items', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sub_menu_items'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'sub_menu_items_count', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'sub_menu_items_count' is already defined.", array (
  0 => 
  array (
    0 => 95,
    1 => 28,
    2 => 5320,
  ),
  1 => 
  array (
    0 => 100,
    1 => 78,
    2 => 6056,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/full/folder.tpl',
) );
    $tpl->setVariable( 'sub_menu_items_count', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'sub_menu_items_count', $var, $rootNamespace );
}

$text .= '                            ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sub_menu_items_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sub_menu_items_count'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                                <ul>
                                    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_2755685d204c7ed6d5bc3c61280019a5_2 ) ) $fe_variable_stack_2755685d204c7ed6d5bc3c61280019a5_2 = array();
$fe_variable_stack_2755685d204c7ed6d5bc3c61280019a5_2[] = compact( 'fe_array_2755685d204c7ed6d5bc3c61280019a5_2', 'fe_array_keys_2755685d204c7ed6d5bc3c61280019a5_2', 'fe_n_items_2755685d204c7ed6d5bc3c61280019a5_2', 'fe_n_items_processed_2755685d204c7ed6d5bc3c61280019a5_2', 'fe_i_2755685d204c7ed6d5bc3c61280019a5_2', 'fe_key_2755685d204c7ed6d5bc3c61280019a5_2', 'fe_val_2755685d204c7ed6d5bc3c61280019a5_2', 'fe_offset_2755685d204c7ed6d5bc3c61280019a5_2', 'fe_max_2755685d204c7ed6d5bc3c61280019a5_2', 'fe_reverse_2755685d204c7ed6d5bc3c61280019a5_2', 'fe_first_val_2755685d204c7ed6d5bc3c61280019a5_2', 'fe_last_val_2755685d204c7ed6d5bc3c61280019a5_2' );
unset( $fe_array_2755685d204c7ed6d5bc3c61280019a5_2 );
unset( $fe_array_2755685d204c7ed6d5bc3c61280019a5_2 );
$fe_array_2755685d204c7ed6d5bc3c61280019a5_2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sub_menu_items', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sub_menu_items'] : null;
if (! isset( $fe_array_2755685d204c7ed6d5bc3c61280019a5_2 ) ) $fe_array_2755685d204c7ed6d5bc3c61280019a5_2 = NULL;
while ( is_object( $fe_array_2755685d204c7ed6d5bc3c61280019a5_2 ) and method_exists( $fe_array_2755685d204c7ed6d5bc3c61280019a5_2, 'templateValue' ) )
    $fe_array_2755685d204c7ed6d5bc3c61280019a5_2 = $fe_array_2755685d204c7ed6d5bc3c61280019a5_2->templateValue();

$fe_array_keys_2755685d204c7ed6d5bc3c61280019a5_2 = is_array( $fe_array_2755685d204c7ed6d5bc3c61280019a5_2 ) ? array_keys( $fe_array_2755685d204c7ed6d5bc3c61280019a5_2 ) : array();
$fe_n_items_2755685d204c7ed6d5bc3c61280019a5_2 = count( $fe_array_keys_2755685d204c7ed6d5bc3c61280019a5_2 );
$fe_n_items_processed_2755685d204c7ed6d5bc3c61280019a5_2 = 0;
$fe_offset_2755685d204c7ed6d5bc3c61280019a5_2 = 0;
$fe_max_2755685d204c7ed6d5bc3c61280019a5_2 = $fe_n_items_2755685d204c7ed6d5bc3c61280019a5_2 - $fe_offset_2755685d204c7ed6d5bc3c61280019a5_2;
$fe_reverse_2755685d204c7ed6d5bc3c61280019a5_2 = false;
if ( $fe_offset_2755685d204c7ed6d5bc3c61280019a5_2 < 0 || $fe_offset_2755685d204c7ed6d5bc3c61280019a5_2 >= $fe_n_items_2755685d204c7ed6d5bc3c61280019a5_2 )
{
    $fe_offset_2755685d204c7ed6d5bc3c61280019a5_2 = ( $fe_offset_2755685d204c7ed6d5bc3c61280019a5_2 < 0 ) ? 0 : $fe_n_items_2755685d204c7ed6d5bc3c61280019a5_2;
    if ( $fe_n_items_2755685d204c7ed6d5bc3c61280019a5_2 || $fe_offset_2755685d204c7ed6d5bc3c61280019a5_2 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_2755685d204c7ed6d5bc3c61280019a5_2'. Array count: $fe_n_items_2755685d204c7ed6d5bc3c61280019a5_2");   
}
}
if ( $fe_max_2755685d204c7ed6d5bc3c61280019a5_2 < 0 || $fe_offset_2755685d204c7ed6d5bc3c61280019a5_2 + $fe_max_2755685d204c7ed6d5bc3c61280019a5_2 > $fe_n_items_2755685d204c7ed6d5bc3c61280019a5_2 )
{
    if ( $fe_max_2755685d204c7ed6d5bc3c61280019a5_2 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_2755685d204c7ed6d5bc3c61280019a5_2");
    $fe_max_2755685d204c7ed6d5bc3c61280019a5_2 = $fe_n_items_2755685d204c7ed6d5bc3c61280019a5_2 - $fe_offset_2755685d204c7ed6d5bc3c61280019a5_2;
}
if ( $fe_reverse_2755685d204c7ed6d5bc3c61280019a5_2 )
{
    $fe_first_val_2755685d204c7ed6d5bc3c61280019a5_2 = $fe_n_items_2755685d204c7ed6d5bc3c61280019a5_2 - 1 - $fe_offset_2755685d204c7ed6d5bc3c61280019a5_2;
    $fe_last_val_2755685d204c7ed6d5bc3c61280019a5_2  = 0;
}
else
{
    $fe_first_val_2755685d204c7ed6d5bc3c61280019a5_2 = $fe_offset_2755685d204c7ed6d5bc3c61280019a5_2;
    $fe_last_val_2755685d204c7ed6d5bc3c61280019a5_2  = $fe_n_items_2755685d204c7ed6d5bc3c61280019a5_2 - 1;
}
// foreach
for ( $fe_i_2755685d204c7ed6d5bc3c61280019a5_2 = $fe_first_val_2755685d204c7ed6d5bc3c61280019a5_2; $fe_n_items_processed_2755685d204c7ed6d5bc3c61280019a5_2 < $fe_max_2755685d204c7ed6d5bc3c61280019a5_2 && ( $fe_reverse_2755685d204c7ed6d5bc3c61280019a5_2 ? $fe_i_2755685d204c7ed6d5bc3c61280019a5_2 >= $fe_last_val_2755685d204c7ed6d5bc3c61280019a5_2 : $fe_i_2755685d204c7ed6d5bc3c61280019a5_2 <= $fe_last_val_2755685d204c7ed6d5bc3c61280019a5_2 ); $fe_reverse_2755685d204c7ed6d5bc3c61280019a5_2 ? $fe_i_2755685d204c7ed6d5bc3c61280019a5_2-- : $fe_i_2755685d204c7ed6d5bc3c61280019a5_2++ )
{
$fe_key_2755685d204c7ed6d5bc3c61280019a5_2 = $fe_array_keys_2755685d204c7ed6d5bc3c61280019a5_2[$fe_i_2755685d204c7ed6d5bc3c61280019a5_2];
$fe_val_2755685d204c7ed6d5bc3c61280019a5_2 = $fe_array_2755685d204c7ed6d5bc3c61280019a5_2[$fe_key_2755685d204c7ed6d5bc3c61280019a5_2];
$vars[$rootNamespace]['subitem'] = $fe_val_2755685d204c7ed6d5bc3c61280019a5_2;
$vars[$rootNamespace]['subkey'] = $fe_key_2755685d204c7ed6d5bc3c61280019a5_2;
$text .= '                                        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'subitem', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['subitem'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'class_identifier' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'link' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                                            <li><a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'subitem', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['subitem'] : null;
$var2 = compiledFetchAttribute( $var1, 'data_map' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'location' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'content' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'subitem', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['subitem'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'data_map' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'open_in_new_window' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = isset( $if_cond2 );unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'subitem', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['subitem'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'data_map' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'open_in_new_window' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'data_int' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else
    $if_cond = $if_cond2;
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' target="_blank"';
}
unset( $if_cond );
// if ends

$text .= ' title="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'subitem', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['subitem'] : null;
$var2 = compiledFetchAttribute( $var1, 'data_map' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'location' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'data_text' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" class="menu-item-link" rel=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'subitem', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['subitem'] : null;
$var2 = compiledFetchAttribute( $var1, 'url_alias' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '>';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'subitem', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['subitem'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'data_map' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'location' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'data_text' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'subitem', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['subitem'] : null;
$var2 = compiledFetchAttribute( $var1, 'data_map' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'location' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'data_text' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

}
else
{
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'subitem', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['subitem'] : null;
$var2 = compiledFetchAttribute( $var1, 'name' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

}
unset( $if_cond );
// if ends

$text .= '</a></li>
                                        ';
}
else
{
$text .= '                                            <li><a href="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'subitem', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['subitem'] : null;
$var2 = compiledFetchAttribute( $var1, 'url_alias' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'subitem', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['subitem'] : null;
$var2 = compiledFetchAttribute( $var1, 'name' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</a></li>
                                        ';
}
unset( $if_cond );
// if ends

$text .= '                                    ';
$fe_n_items_processed_2755685d204c7ed6d5bc3c61280019a5_2++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_2755685d204c7ed6d5bc3c61280019a5_2 ) ) extract( array_pop( $fe_variable_stack_2755685d204c7ed6d5bc3c61280019a5_2 ) );

else
{

unset( $fe_array_2755685d204c7ed6d5bc3c61280019a5_2 );

unset( $fe_array_keys_2755685d204c7ed6d5bc3c61280019a5_2 );

unset( $fe_n_items_2755685d204c7ed6d5bc3c61280019a5_2 );

unset( $fe_n_items_processed_2755685d204c7ed6d5bc3c61280019a5_2 );

unset( $fe_i_2755685d204c7ed6d5bc3c61280019a5_2 );

unset( $fe_key_2755685d204c7ed6d5bc3c61280019a5_2 );

unset( $fe_val_2755685d204c7ed6d5bc3c61280019a5_2 );

unset( $fe_offset_2755685d204c7ed6d5bc3c61280019a5_2 );

unset( $fe_max_2755685d204c7ed6d5bc3c61280019a5_2 );

unset( $fe_reverse_2755685d204c7ed6d5bc3c61280019a5_2 );

unset( $fe_first_val_2755685d204c7ed6d5bc3c61280019a5_2 );

unset( $fe_last_val_2755685d204c7ed6d5bc3c61280019a5_2 );

unset( $fe_variable_stack_2755685d204c7ed6d5bc3c61280019a5_2 );

}

// foreach ends
$text .= '                                </ul>
                            ';
}
unset( $if_cond );
// if ends

$text .= '                            ';
// undef $sub_menu_items
$tpl->unsetLocalVariable( 'sub_menu_items', $rootNamespace );

// undef $sub_menu_items_count
$tpl->unsetLocalVariable( 'sub_menu_items_count', $rootNamespace );

$text .= '                            </li>
                        ';
$fe_n_items_processed_2755685d204c7ed6d5bc3c61280019a5_3++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_2755685d204c7ed6d5bc3c61280019a5_3 ) ) extract( array_pop( $fe_variable_stack_2755685d204c7ed6d5bc3c61280019a5_3 ) );

else
{

unset( $fe_array_2755685d204c7ed6d5bc3c61280019a5_3 );

unset( $fe_array_keys_2755685d204c7ed6d5bc3c61280019a5_3 );

unset( $fe_n_items_2755685d204c7ed6d5bc3c61280019a5_3 );

unset( $fe_n_items_processed_2755685d204c7ed6d5bc3c61280019a5_3 );

unset( $fe_i_2755685d204c7ed6d5bc3c61280019a5_3 );

unset( $fe_key_2755685d204c7ed6d5bc3c61280019a5_3 );

unset( $fe_val_2755685d204c7ed6d5bc3c61280019a5_3 );

unset( $fe_offset_2755685d204c7ed6d5bc3c61280019a5_3 );

unset( $fe_max_2755685d204c7ed6d5bc3c61280019a5_3 );

unset( $fe_reverse_2755685d204c7ed6d5bc3c61280019a5_3 );

unset( $fe_first_val_2755685d204c7ed6d5bc3c61280019a5_3 );

unset( $fe_last_val_2755685d204c7ed6d5bc3c61280019a5_3 );

unset( $fe_variable_stack_2755685d204c7ed6d5bc3c61280019a5_3 );

}

// foreach ends
$text .= '                    </ul>
                    ';
}
unset( $if_cond );
// if ends

$text .= '                    ';
// undef $root_node
$tpl->unsetLocalVariable( 'root_node', $rootNamespace );

// undef $menu_items
$tpl->unsetLocalVariable( 'menu_items', $rootNamespace );

// undef $menu_items_count
$tpl->unsetLocalVariable( 'menu_items_count', $rootNamespace );

$text .= '                </section>
                <section class="content-view-aside">
                    <div class="attribute-call-for-action">
                        ';
$textElements = array();
$tpl->processFunction( 'attribute_view_gui', $textElements,
                       false,
                       array (
  'attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'node',
      ),
      2 => false,
    ),
    1 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'data_map',
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'call_for_action',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 121,
    1 => 24,
    2 => 7545,
  ),
  1 => 
  array (
    0 => 121,
    1 => 83,
    2 => 7604,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/full/folder.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '                    </div>
                </section>
            </aside>
        </div>
    </div>
</section>
';

$setArray = $oldSetArray_87e1a4ffeea075e265b52bb63521cce1;
$tpl->Level--;
?>
