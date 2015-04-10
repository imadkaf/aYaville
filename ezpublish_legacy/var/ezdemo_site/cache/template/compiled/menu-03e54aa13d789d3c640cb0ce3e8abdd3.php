<?php
// URI:       design:parts/user/menu.tpl
// Filename:  design/admin/templates/parts/user/menu.tpl
// Timestamp: 1416144920 (Sun Nov 16 14:35:20 CET 2014)
$oldSetArray_1fece61ca020205bda6a43c5bab802a8 = isset( $setArray ) ? $setArray : array();
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
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'edit' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<div class="box-header"><div class="box-ml">

<h4>Role information</h4>

</div></div>

<div class="box-bc"><div class="box-ml"><div class="box-content">

<p>
<label>Name:</label>
';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'role', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['role'] : null;
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

$text .= '
</p>

<p>
<label>ID:</label>
';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'role', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['role'] : null;
$var2 = compiledFetchAttribute( $var1, 'id' );
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

$text .= '
</p>

</div></div></div>
';
}
else
{
$text .= '
<div id="content-tree">

<div class="box-header"><div class="box-ml">
<h4>User accounts</h4>
</div></div>

<div class="box-bc"><div class="box-ml"><div class="box-content">


<div id="contentstructure">
    ';
$oldRestoreIncludeArray_56ca4931574f56fb33392e5c215a2259 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['custom_root_node_id'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'custom_root_node_id', $vars[$currentNamespace]['custom_root_node_id'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['custom_root_node_id'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'custom_root_node_id', 'unset' );

$vars[$currentNamespace]['custom_root_node_id'] = '5';
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/content_structure_menu_dynamic-328eef75b7dbc30d88db339eb889f1ac.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/contentstructuremenu/content_structure_menu_dynamic.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/content_structure_menu_dynamic-328eef75b7dbc30d88db339eb889f1ac.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/admin/templates/contentstructuremenu/content_structure_menu_dynamic.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_56ca4931574f56fb33392e5c215a2259;

$text .= '</div>

';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) != ( 'browse' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<div id="trash">
<a class="image-text" href=';
unset( $var );
unset( $var1 );
$var1 = ( '/content/trash/' . 2 );
if (! isset( $var1 ) ) $var1 = NULL;
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

$text .= ' title="View and manage the contents of the trash bin."><img src="/design/admin/images/trash-icon-16x16.gif" width="16" height="16" alt="Trash" />&nbsp;<span>Trash</span></a>
</div>';
}
unset( $if_cond );
// if ends

$text .= '
</div></div></div>
</div>


';
$oldRestoreIncludeArray_081e17669b50964410f7c7764debc2fd = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['ini_section'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'ini_section', $vars[$currentNamespace]['ini_section'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['ini_section'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'ini_section', 'unset' );

$vars[$currentNamespace]['ini_section'] = 'Leftmenu_user';
if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['i18n_hash'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'i18n_hash', $vars[$currentNamespace]['i18n_hash'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['i18n_hash'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'i18n_hash', 'unset' );

$vars[$currentNamespace]['i18n_hash'] = array (
  'access_controll' => 'Access control',
  'roles_and_policies' => 'Roles and policies',
  'unactivated' => 'Unactivated users',
);
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/ini_menu-c1bb7017dcc6aedf96df254c0044847f.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/parts/ini_menu.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/ini_menu-c1bb7017dcc6aedf96df254c0044847f.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/admin/templates/parts/ini_menu.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_081e17669b50964410f7c7764debc2fd;

$text .= '

<div id="widthcontrol-links" class="widthcontrol">
<p>';
$textElements = array();
$tpl->processFunction( 'switch', $textElements,
                       array (
  0 => 
  array (
    0 => 2,
    1 => false,
    2 => '    ',
    3 => 
    array (
      0 => 
      array (
        0 => 58,
        1 => 51,
        2 => 2141,
      ),
      1 => 
      array (
        0 => 59,
        1 => 4,
        2 => 2146,
      ),
      2 => 'design/admin/templates/parts/user/menu.tpl',
    ),
  ),
  1 => 
  array (
    0 => 4,
    1 => 
    array (
      0 => 
      array (
        0 => 2,
        1 => false,
        2 => '    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 59,
            1 => 23,
            2 => 2167,
          ),
          1 => 
          array (
            0 => 60,
            1 => 12,
            2 => 2180,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      1 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 60,
            1 => 12,
            2 => 2181,
          ),
          1 => 
          array (
            0 => 60,
            1 => 68,
            2 => 2237,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      2 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 60,
            1 => 68,
            2 => 2238,
          ),
          1 => 
          array (
            0 => 60,
            1 => 76,
            2 => 2246,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      3 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to small size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 60,
            1 => 76,
            2 => 2247,
          ),
          1 => 
          array (
            0 => 60,
            1 => 158,
            2 => 2329,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      4 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 60,
            1 => 158,
            2 => 2330,
          ),
          1 => 
          array (
            0 => 60,
            1 => 160,
            2 => 2332,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      5 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 60,
            1 => 160,
            2 => 2333,
          ),
          1 => 
          array (
            0 => 60,
            1 => 206,
            2 => 2379,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      6 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    <span class="current">',
        3 => 
        array (
          0 => 
          array (
            0 => 60,
            1 => 206,
            2 => 2380,
          ),
          1 => 
          array (
            0 => 61,
            1 => 26,
            2 => 2411,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      7 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 61,
            1 => 26,
            2 => 2412,
          ),
          1 => 
          array (
            0 => 61,
            1 => 73,
            2 => 2459,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      8 => 
      array (
        0 => 2,
        1 => false,
        2 => '</span>
    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 61,
            1 => 73,
            2 => 2460,
          ),
          1 => 
          array (
            0 => 62,
            1 => 12,
            2 => 2480,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      9 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 62,
            1 => 12,
            2 => 2481,
          ),
          1 => 
          array (
            0 => 62,
            1 => 68,
            2 => 2537,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      10 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 62,
            1 => 68,
            2 => 2538,
          ),
          1 => 
          array (
            0 => 62,
            1 => 76,
            2 => 2546,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      11 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to large size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 62,
            1 => 76,
            2 => 2547,
          ),
          1 => 
          array (
            0 => 62,
            1 => 158,
            2 => 2629,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      12 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 62,
            1 => 158,
            2 => 2630,
          ),
          1 => 
          array (
            0 => 62,
            1 => 160,
            2 => 2632,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      13 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 62,
            1 => 160,
            2 => 2633,
          ),
          1 => 
          array (
            0 => 62,
            1 => 206,
            2 => 2679,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      14 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    ',
        3 => 
        array (
          0 => 
          array (
            0 => 62,
            1 => 206,
            2 => 2680,
          ),
          1 => 
          array (
            0 => 63,
            1 => 4,
            2 => 2689,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
    ),
    2 => 'case',
    3 => 
    array (
      'match' => 
      array (
        0 => 
        array (
          0 => 1,
          1 => 'medium',
          2 => false,
        ),
      ),
    ),
    4 => 
    array (
      0 => 
      array (
        0 => 59,
        1 => 4,
        2 => 2147,
      ),
      1 => 
      array (
        0 => 59,
        1 => 23,
        2 => 2166,
      ),
      2 => 'design/admin/templates/parts/user/menu.tpl',
    ),
  ),
  2 => 
  array (
    0 => 2,
    1 => false,
    2 => '
    ',
    3 => 
    array (
      0 => 
      array (
        0 => 63,
        1 => 8,
        2 => 2696,
      ),
      1 => 
      array (
        0 => 65,
        1 => 4,
        2 => 2702,
      ),
      2 => 'design/admin/templates/parts/user/menu.tpl',
    ),
  ),
  3 => 
  array (
    0 => 4,
    1 => 
    array (
      0 => 
      array (
        0 => 2,
        1 => false,
        2 => '    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 65,
            1 => 22,
            2 => 2722,
          ),
          1 => 
          array (
            0 => 66,
            1 => 12,
            2 => 2735,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      1 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 66,
            1 => 12,
            2 => 2736,
          ),
          1 => 
          array (
            0 => 66,
            1 => 68,
            2 => 2792,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      2 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 66,
            1 => 68,
            2 => 2793,
          ),
          1 => 
          array (
            0 => 66,
            1 => 76,
            2 => 2801,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      3 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to small size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 66,
            1 => 76,
            2 => 2802,
          ),
          1 => 
          array (
            0 => 66,
            1 => 158,
            2 => 2884,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      4 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 66,
            1 => 158,
            2 => 2885,
          ),
          1 => 
          array (
            0 => 66,
            1 => 160,
            2 => 2887,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      5 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 66,
            1 => 160,
            2 => 2888,
          ),
          1 => 
          array (
            0 => 66,
            1 => 206,
            2 => 2934,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      6 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 66,
            1 => 206,
            2 => 2935,
          ),
          1 => 
          array (
            0 => 67,
            1 => 12,
            2 => 2952,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      7 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 67,
            1 => 12,
            2 => 2953,
          ),
          1 => 
          array (
            0 => 67,
            1 => 69,
            2 => 3010,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      8 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 67,
            1 => 69,
            2 => 3011,
          ),
          1 => 
          array (
            0 => 67,
            1 => 77,
            2 => 3019,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      9 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to medium size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 67,
            1 => 77,
            2 => 3020,
          ),
          1 => 
          array (
            0 => 67,
            1 => 160,
            2 => 3103,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      10 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 67,
            1 => 160,
            2 => 3104,
          ),
          1 => 
          array (
            0 => 67,
            1 => 162,
            2 => 3106,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      11 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 67,
            1 => 162,
            2 => 3107,
          ),
          1 => 
          array (
            0 => 67,
            1 => 209,
            2 => 3154,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      12 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    <span class="current">',
        3 => 
        array (
          0 => 
          array (
            0 => 67,
            1 => 209,
            2 => 3155,
          ),
          1 => 
          array (
            0 => 68,
            1 => 26,
            2 => 3186,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      13 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 68,
            1 => 26,
            2 => 3187,
          ),
          1 => 
          array (
            0 => 68,
            1 => 72,
            2 => 3233,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      14 => 
      array (
        0 => 2,
        1 => false,
        2 => '</span>
    ',
        3 => 
        array (
          0 => 
          array (
            0 => 68,
            1 => 72,
            2 => 3234,
          ),
          1 => 
          array (
            0 => 69,
            1 => 4,
            2 => 3246,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
    ),
    2 => 'case',
    3 => 
    array (
      'match' => 
      array (
        0 => 
        array (
          0 => 1,
          1 => 'large',
          2 => false,
        ),
      ),
    ),
    4 => 
    array (
      0 => 
      array (
        0 => 65,
        1 => 4,
        2 => 2703,
      ),
      1 => 
      array (
        0 => 65,
        1 => 22,
        2 => 2721,
      ),
      2 => 'design/admin/templates/parts/user/menu.tpl',
    ),
  ),
  4 => 
  array (
    0 => 2,
    1 => false,
    2 => '
    ',
    3 => 
    array (
      0 => 
      array (
        0 => 69,
        1 => 8,
        2 => 3253,
      ),
      1 => 
      array (
        0 => 71,
        1 => 4,
        2 => 3259,
      ),
      2 => 'design/admin/templates/parts/user/menu.tpl',
    ),
  ),
  5 => 
  array (
    0 => 4,
    1 => 
    array (
      0 => 
      array (
        0 => 2,
        1 => false,
        2 => '    <span class="current">',
        3 => 
        array (
          0 => 
          array (
            0 => 71,
            1 => 32,
            2 => 3289,
          ),
          1 => 
          array (
            0 => 72,
            1 => 26,
            2 => 3316,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      1 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 72,
            1 => 26,
            2 => 3317,
          ),
          1 => 
          array (
            0 => 72,
            1 => 72,
            2 => 3363,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      2 => 
      array (
        0 => 2,
        1 => false,
        2 => '</span>
    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 72,
            1 => 72,
            2 => 3364,
          ),
          1 => 
          array (
            0 => 73,
            1 => 12,
            2 => 3384,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      3 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 73,
            1 => 12,
            2 => 3385,
          ),
          1 => 
          array (
            0 => 73,
            1 => 69,
            2 => 3442,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      4 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 73,
            1 => 69,
            2 => 3443,
          ),
          1 => 
          array (
            0 => 73,
            1 => 77,
            2 => 3451,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      5 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to medium size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 73,
            1 => 77,
            2 => 3452,
          ),
          1 => 
          array (
            0 => 73,
            1 => 160,
            2 => 3535,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      6 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 73,
            1 => 160,
            2 => 3536,
          ),
          1 => 
          array (
            0 => 73,
            1 => 162,
            2 => 3538,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      7 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 73,
            1 => 162,
            2 => 3539,
          ),
          1 => 
          array (
            0 => 73,
            1 => 209,
            2 => 3586,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      8 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 73,
            1 => 209,
            2 => 3587,
          ),
          1 => 
          array (
            0 => 74,
            1 => 12,
            2 => 3604,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      9 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 74,
            1 => 12,
            2 => 3605,
          ),
          1 => 
          array (
            0 => 74,
            1 => 68,
            2 => 3661,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      10 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 74,
            1 => 68,
            2 => 3662,
          ),
          1 => 
          array (
            0 => 74,
            1 => 76,
            2 => 3670,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      11 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to large size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 74,
            1 => 76,
            2 => 3671,
          ),
          1 => 
          array (
            0 => 74,
            1 => 158,
            2 => 3753,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      12 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 74,
            1 => 158,
            2 => 3754,
          ),
          1 => 
          array (
            0 => 74,
            1 => 160,
            2 => 3756,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      13 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 74,
            1 => 160,
            2 => 3757,
          ),
          1 => 
          array (
            0 => 74,
            1 => 206,
            2 => 3803,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      14 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    ',
        3 => 
        array (
          0 => 
          array (
            0 => 74,
            1 => 206,
            2 => 3804,
          ),
          1 => 
          array (
            0 => 75,
            1 => 4,
            2 => 3813,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
    ),
    2 => 'case',
    3 => 
    array (
      'in' => 
      array (
        0 => 
        array (
          0 => 6,
          1 => 
          array (
            0 => 'array',
            1 => 
            array (
              0 => 
              array (
                0 => 1,
                1 => 'small',
                2 => false,
              ),
            ),
            2 => 
            array (
              0 => 
              array (
                0 => 1,
                1 => '',
                2 => false,
              ),
            ),
          ),
          2 => false,
        ),
      ),
    ),
    4 => 
    array (
      0 => 
      array (
        0 => 71,
        1 => 4,
        2 => 3260,
      ),
      1 => 
      array (
        0 => 71,
        1 => 32,
        2 => 3288,
      ),
      2 => 'design/admin/templates/parts/user/menu.tpl',
    ),
  ),
  6 => 
  array (
    0 => 2,
    1 => false,
    2 => '
    ',
    3 => 
    array (
      0 => 
      array (
        0 => 75,
        1 => 8,
        2 => 3820,
      ),
      1 => 
      array (
        0 => 77,
        1 => 4,
        2 => 3826,
      ),
      2 => 'design/admin/templates/parts/user/menu.tpl',
    ),
  ),
  7 => 
  array (
    0 => 4,
    1 => 
    array (
      0 => 
      array (
        0 => 2,
        1 => false,
        2 => '    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 77,
            1 => 8,
            2 => 3832,
          ),
          1 => 
          array (
            0 => 78,
            1 => 12,
            2 => 3845,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      1 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 78,
            1 => 12,
            2 => 3846,
          ),
          1 => 
          array (
            0 => 78,
            1 => 68,
            2 => 3902,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      2 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 78,
            1 => 68,
            2 => 3903,
          ),
          1 => 
          array (
            0 => 78,
            1 => 76,
            2 => 3911,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      3 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to small size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 78,
            1 => 76,
            2 => 3912,
          ),
          1 => 
          array (
            0 => 78,
            1 => 158,
            2 => 3994,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      4 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 78,
            1 => 158,
            2 => 3995,
          ),
          1 => 
          array (
            0 => 78,
            1 => 160,
            2 => 3997,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      5 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 78,
            1 => 160,
            2 => 3998,
          ),
          1 => 
          array (
            0 => 78,
            1 => 206,
            2 => 4044,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      6 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 78,
            1 => 206,
            2 => 4045,
          ),
          1 => 
          array (
            0 => 79,
            1 => 12,
            2 => 4062,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      7 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 79,
            1 => 12,
            2 => 4063,
          ),
          1 => 
          array (
            0 => 79,
            1 => 69,
            2 => 4120,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      8 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 79,
            1 => 69,
            2 => 4121,
          ),
          1 => 
          array (
            0 => 79,
            1 => 77,
            2 => 4129,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      9 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to medium size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 79,
            1 => 77,
            2 => 4130,
          ),
          1 => 
          array (
            0 => 79,
            1 => 160,
            2 => 4213,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      10 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 79,
            1 => 160,
            2 => 4214,
          ),
          1 => 
          array (
            0 => 79,
            1 => 162,
            2 => 4216,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      11 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 79,
            1 => 162,
            2 => 4217,
          ),
          1 => 
          array (
            0 => 79,
            1 => 209,
            2 => 4264,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      12 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 79,
            1 => 209,
            2 => 4265,
          ),
          1 => 
          array (
            0 => 80,
            1 => 12,
            2 => 4282,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      13 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 80,
            1 => 12,
            2 => 4283,
          ),
          1 => 
          array (
            0 => 80,
            1 => 68,
            2 => 4339,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      14 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 80,
            1 => 68,
            2 => 4340,
          ),
          1 => 
          array (
            0 => 80,
            1 => 76,
            2 => 4348,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      15 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to large size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 80,
            1 => 76,
            2 => 4349,
          ),
          1 => 
          array (
            0 => 80,
            1 => 158,
            2 => 4431,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      16 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 80,
            1 => 158,
            2 => 4432,
          ),
          1 => 
          array (
            0 => 80,
            1 => 160,
            2 => 4434,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      17 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/user/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 80,
            1 => 160,
            2 => 4435,
          ),
          1 => 
          array (
            0 => 80,
            1 => 206,
            2 => 4481,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
      18 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    ',
        3 => 
        array (
          0 => 
          array (
            0 => 80,
            1 => 206,
            2 => 4482,
          ),
          1 => 
          array (
            0 => 81,
            1 => 4,
            2 => 4491,
          ),
          2 => 'design/admin/templates/parts/user/menu.tpl',
        ),
      ),
    ),
    2 => 'case',
    3 => 
    array (
    ),
    4 => 
    array (
      0 => 
      array (
        0 => 77,
        1 => 4,
        2 => 3827,
      ),
      1 => 
      array (
        0 => 77,
        1 => 8,
        2 => 3831,
      ),
      2 => 'design/admin/templates/parts/user/menu.tpl',
    ),
  ),
  8 => 
  array (
    0 => 2,
    1 => false,
    2 => false,
    3 => 
    array (
      0 => 
      array (
        0 => 81,
        1 => 8,
        2 => 4498,
      ),
      1 => 
      array (
        0 => 82,
        1 => 0,
        2 => 4499,
      ),
      2 => 'design/admin/templates/parts/user/menu.tpl',
    ),
  ),
),
                       array (
  'match' => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'ezpreference',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'admin_left_menu_size',
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 58,
    1 => 0,
    2 => 2089,
  ),
  1 => 
  array (
    0 => 58,
    1 => 51,
    2 => 2140,
  ),
  2 => 'design/admin/templates/parts/user/menu.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '</p>
</div>


<div id="widthcontrol-handler" class="hide">
<div class="widthcontrol-grippy"></div>
</div>
';
}
unset( $if_cond );
// if ends

$text .= '
';

$setArray = $oldSetArray_1fece61ca020205bda6a43c5bab802a8;
$tpl->Level--;
?>
