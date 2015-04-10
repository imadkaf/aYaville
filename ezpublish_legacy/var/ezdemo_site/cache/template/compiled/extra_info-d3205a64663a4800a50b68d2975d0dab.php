<?php
// URI:       design:parts/blog/extra_info.tpl
// Filename:  extension/ezdemo/design/ezdemo/templates/parts/blog/extra_info.tpl
// Timestamp: 1417102386 (Thu Nov 27 16:33:06 CET 2014)
$oldSetArray_7e6b404cc3ee1ee5701a117a11ed8b28 = isset( $setArray ) ? $setArray : array();
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

$text .= '<h2>Tag cloud</h2>
<article>
    <div class="attribute-tag-cloud">
    <p>
        ';
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'eztagcloud',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'hash',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'class_identifier',
            2 => false,
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'blog_post',
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'parent_node_id',
            2 => false,
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'used_node',
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
                1 => 'node_id',
                2 => false,
              ),
            ),
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
    </p>
    </div>
</article>
';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'used_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['used_node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'object' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'data_map' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'description' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'has_content' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<h2>Description</h2>
<article>
    <div class="attribute-description">
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
        2 => 'used_node',
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
          1 => 'object',
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
          1 => 'data_map',
          2 => false,
        ),
      ),
      2 => false,
    ),
    3 => 
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
    0 => 15,
    1 => 8,
    2 => 456,
  ),
  1 => 
  array (
    0 => 15,
    1 => 75,
    2 => 523,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/parts/blog/extra_info.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '    </div>
</article>';
}
unset( $if_cond );
// if ends

$text .= '
<h2>Tags</h2>
<article>
    <div class="attribute-tags">
        <ul>
        ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_0df575c880a3eedaa6e04088689e7f1c_1 ) ) $fe_variable_stack_0df575c880a3eedaa6e04088689e7f1c_1 = array();
$fe_variable_stack_0df575c880a3eedaa6e04088689e7f1c_1[] = compact( 'fe_array_0df575c880a3eedaa6e04088689e7f1c_1', 'fe_array_keys_0df575c880a3eedaa6e04088689e7f1c_1', 'fe_n_items_0df575c880a3eedaa6e04088689e7f1c_1', 'fe_n_items_processed_0df575c880a3eedaa6e04088689e7f1c_1', 'fe_i_0df575c880a3eedaa6e04088689e7f1c_1', 'fe_key_0df575c880a3eedaa6e04088689e7f1c_1', 'fe_val_0df575c880a3eedaa6e04088689e7f1c_1', 'fe_offset_0df575c880a3eedaa6e04088689e7f1c_1', 'fe_max_0df575c880a3eedaa6e04088689e7f1c_1', 'fe_reverse_0df575c880a3eedaa6e04088689e7f1c_1', 'fe_first_val_0df575c880a3eedaa6e04088689e7f1c_1', 'fe_last_val_0df575c880a3eedaa6e04088689e7f1c_1' );
unset( $fe_array_0df575c880a3eedaa6e04088689e7f1c_1 );
if (! isset( $fe_array_0df575c880a3eedaa6e04088689e7f1c_1 ) ) $fe_array_0df575c880a3eedaa6e04088689e7f1c_1 = NULL;
while ( is_object( $fe_array_0df575c880a3eedaa6e04088689e7f1c_1 ) and method_exists( $fe_array_0df575c880a3eedaa6e04088689e7f1c_1, 'templateValue' ) )
    $fe_array_0df575c880a3eedaa6e04088689e7f1c_1 = $fe_array_0df575c880a3eedaa6e04088689e7f1c_1->templateValue();
$fe_array_0df575c880a3eedaa6e04088689e7f1c_1Data = array( 'value' => $fe_array_0df575c880a3eedaa6e04088689e7f1c_1 );
$tpl->processOperator( 'ezkeywordlist',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'blog_post',
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'used_node',
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
          1 => 'node_id',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $fe_array_0df575c880a3eedaa6e04088689e7f1c_1Data, false, false );
$fe_array_0df575c880a3eedaa6e04088689e7f1c_1 = $fe_array_0df575c880a3eedaa6e04088689e7f1c_1Data['value'];
unset( $fe_array_0df575c880a3eedaa6e04088689e7f1c_1Data );
if (! isset( $fe_array_0df575c880a3eedaa6e04088689e7f1c_1 ) ) $fe_array_0df575c880a3eedaa6e04088689e7f1c_1 = NULL;
while ( is_object( $fe_array_0df575c880a3eedaa6e04088689e7f1c_1 ) and method_exists( $fe_array_0df575c880a3eedaa6e04088689e7f1c_1, 'templateValue' ) )
    $fe_array_0df575c880a3eedaa6e04088689e7f1c_1 = $fe_array_0df575c880a3eedaa6e04088689e7f1c_1->templateValue();

$fe_array_keys_0df575c880a3eedaa6e04088689e7f1c_1 = is_array( $fe_array_0df575c880a3eedaa6e04088689e7f1c_1 ) ? array_keys( $fe_array_0df575c880a3eedaa6e04088689e7f1c_1 ) : array();
$fe_n_items_0df575c880a3eedaa6e04088689e7f1c_1 = count( $fe_array_keys_0df575c880a3eedaa6e04088689e7f1c_1 );
$fe_n_items_processed_0df575c880a3eedaa6e04088689e7f1c_1 = 0;
$fe_offset_0df575c880a3eedaa6e04088689e7f1c_1 = 0;
$fe_max_0df575c880a3eedaa6e04088689e7f1c_1 = $fe_n_items_0df575c880a3eedaa6e04088689e7f1c_1 - $fe_offset_0df575c880a3eedaa6e04088689e7f1c_1;
$fe_reverse_0df575c880a3eedaa6e04088689e7f1c_1 = false;
if ( $fe_offset_0df575c880a3eedaa6e04088689e7f1c_1 < 0 || $fe_offset_0df575c880a3eedaa6e04088689e7f1c_1 >= $fe_n_items_0df575c880a3eedaa6e04088689e7f1c_1 )
{
    $fe_offset_0df575c880a3eedaa6e04088689e7f1c_1 = ( $fe_offset_0df575c880a3eedaa6e04088689e7f1c_1 < 0 ) ? 0 : $fe_n_items_0df575c880a3eedaa6e04088689e7f1c_1;
    if ( $fe_n_items_0df575c880a3eedaa6e04088689e7f1c_1 || $fe_offset_0df575c880a3eedaa6e04088689e7f1c_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_0df575c880a3eedaa6e04088689e7f1c_1'. Array count: $fe_n_items_0df575c880a3eedaa6e04088689e7f1c_1");   
}
}
if ( $fe_max_0df575c880a3eedaa6e04088689e7f1c_1 < 0 || $fe_offset_0df575c880a3eedaa6e04088689e7f1c_1 + $fe_max_0df575c880a3eedaa6e04088689e7f1c_1 > $fe_n_items_0df575c880a3eedaa6e04088689e7f1c_1 )
{
    if ( $fe_max_0df575c880a3eedaa6e04088689e7f1c_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_0df575c880a3eedaa6e04088689e7f1c_1");
    $fe_max_0df575c880a3eedaa6e04088689e7f1c_1 = $fe_n_items_0df575c880a3eedaa6e04088689e7f1c_1 - $fe_offset_0df575c880a3eedaa6e04088689e7f1c_1;
}
if ( $fe_reverse_0df575c880a3eedaa6e04088689e7f1c_1 )
{
    $fe_first_val_0df575c880a3eedaa6e04088689e7f1c_1 = $fe_n_items_0df575c880a3eedaa6e04088689e7f1c_1 - 1 - $fe_offset_0df575c880a3eedaa6e04088689e7f1c_1;
    $fe_last_val_0df575c880a3eedaa6e04088689e7f1c_1  = 0;
}
else
{
    $fe_first_val_0df575c880a3eedaa6e04088689e7f1c_1 = $fe_offset_0df575c880a3eedaa6e04088689e7f1c_1;
    $fe_last_val_0df575c880a3eedaa6e04088689e7f1c_1  = $fe_n_items_0df575c880a3eedaa6e04088689e7f1c_1 - 1;
}
// foreach
for ( $fe_i_0df575c880a3eedaa6e04088689e7f1c_1 = $fe_first_val_0df575c880a3eedaa6e04088689e7f1c_1; $fe_n_items_processed_0df575c880a3eedaa6e04088689e7f1c_1 < $fe_max_0df575c880a3eedaa6e04088689e7f1c_1 && ( $fe_reverse_0df575c880a3eedaa6e04088689e7f1c_1 ? $fe_i_0df575c880a3eedaa6e04088689e7f1c_1 >= $fe_last_val_0df575c880a3eedaa6e04088689e7f1c_1 : $fe_i_0df575c880a3eedaa6e04088689e7f1c_1 <= $fe_last_val_0df575c880a3eedaa6e04088689e7f1c_1 ); $fe_reverse_0df575c880a3eedaa6e04088689e7f1c_1 ? $fe_i_0df575c880a3eedaa6e04088689e7f1c_1-- : $fe_i_0df575c880a3eedaa6e04088689e7f1c_1++ )
{
$fe_key_0df575c880a3eedaa6e04088689e7f1c_1 = $fe_array_keys_0df575c880a3eedaa6e04088689e7f1c_1[$fe_i_0df575c880a3eedaa6e04088689e7f1c_1];
$fe_val_0df575c880a3eedaa6e04088689e7f1c_1 = $fe_array_0df575c880a3eedaa6e04088689e7f1c_1[$fe_key_0df575c880a3eedaa6e04088689e7f1c_1];
$vars[$rootNamespace]['keyword'] = $fe_val_0df575c880a3eedaa6e04088689e7f1c_1;
$text .= '            <li><a href=';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'used_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['used_node'] : null;
$var3 = compiledFetchAttribute( $var2, 'url_alias' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var4 );
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'keyword', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['keyword'] : null;
$var6 = compiledFetchAttribute( $var5, 'keyword' );
unset( $var5 );
$var5 = $var6;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var4 = rawurlencode( $var5 );
unset( $var5 );
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var1 = ( $var2 . '/(tag)/' . $var4 );
unset( $var2, $var4 );
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

$text .= ' title="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'keyword', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['keyword'] : null;
$var1 = compiledFetchAttribute( $var, 'keyword' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'keyword', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['keyword'] : null;
$var1 = compiledFetchAttribute( $var, 'keyword' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' (';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'keyword', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['keyword'] : null;
$var2 = compiledFetchAttribute( $var1, 'keyword' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'used_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['used_node'] : null;
$var3 = compiledFetchAttribute( $var2, 'node_id' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchKeywordCount' ),
  array(     'alphabet' => $var1,
    'classid' => "blog_post",
    'owner' => false,
    'parent_node_id' => $var2,
    'include_duplicates' => true,
    'strict_matching' => false,
    'depth' => 1 ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ')</a></li>
        ';
$fe_n_items_processed_0df575c880a3eedaa6e04088689e7f1c_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_0df575c880a3eedaa6e04088689e7f1c_1 ) ) extract( array_pop( $fe_variable_stack_0df575c880a3eedaa6e04088689e7f1c_1 ) );

else
{

unset( $fe_array_0df575c880a3eedaa6e04088689e7f1c_1 );

unset( $fe_array_keys_0df575c880a3eedaa6e04088689e7f1c_1 );

unset( $fe_n_items_0df575c880a3eedaa6e04088689e7f1c_1 );

unset( $fe_n_items_processed_0df575c880a3eedaa6e04088689e7f1c_1 );

unset( $fe_i_0df575c880a3eedaa6e04088689e7f1c_1 );

unset( $fe_key_0df575c880a3eedaa6e04088689e7f1c_1 );

unset( $fe_val_0df575c880a3eedaa6e04088689e7f1c_1 );

unset( $fe_offset_0df575c880a3eedaa6e04088689e7f1c_1 );

unset( $fe_max_0df575c880a3eedaa6e04088689e7f1c_1 );

unset( $fe_reverse_0df575c880a3eedaa6e04088689e7f1c_1 );

unset( $fe_first_val_0df575c880a3eedaa6e04088689e7f1c_1 );

unset( $fe_last_val_0df575c880a3eedaa6e04088689e7f1c_1 );

unset( $fe_variable_stack_0df575c880a3eedaa6e04088689e7f1c_1 );

}

// foreach ends
$text .= '        </ul>
    </div>
</article>

<h2>Archive</h2>
<article>
    <div class="attribute-archive">
        <ul>
        ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_0df575c880a3eedaa6e04088689e7f1c_2 ) ) $fe_variable_stack_0df575c880a3eedaa6e04088689e7f1c_2 = array();
$fe_variable_stack_0df575c880a3eedaa6e04088689e7f1c_2[] = compact( 'fe_array_0df575c880a3eedaa6e04088689e7f1c_2', 'fe_array_keys_0df575c880a3eedaa6e04088689e7f1c_2', 'fe_n_items_0df575c880a3eedaa6e04088689e7f1c_2', 'fe_n_items_processed_0df575c880a3eedaa6e04088689e7f1c_2', 'fe_i_0df575c880a3eedaa6e04088689e7f1c_2', 'fe_key_0df575c880a3eedaa6e04088689e7f1c_2', 'fe_val_0df575c880a3eedaa6e04088689e7f1c_2', 'fe_offset_0df575c880a3eedaa6e04088689e7f1c_2', 'fe_max_0df575c880a3eedaa6e04088689e7f1c_2', 'fe_reverse_0df575c880a3eedaa6e04088689e7f1c_2', 'fe_first_val_0df575c880a3eedaa6e04088689e7f1c_2', 'fe_last_val_0df575c880a3eedaa6e04088689e7f1c_2' );
unset( $fe_array_0df575c880a3eedaa6e04088689e7f1c_2 );
if (! isset( $fe_array_0df575c880a3eedaa6e04088689e7f1c_2 ) ) $fe_array_0df575c880a3eedaa6e04088689e7f1c_2 = NULL;
while ( is_object( $fe_array_0df575c880a3eedaa6e04088689e7f1c_2 ) and method_exists( $fe_array_0df575c880a3eedaa6e04088689e7f1c_2, 'templateValue' ) )
    $fe_array_0df575c880a3eedaa6e04088689e7f1c_2 = $fe_array_0df575c880a3eedaa6e04088689e7f1c_2->templateValue();
$fe_array_0df575c880a3eedaa6e04088689e7f1c_2Data = array( 'value' => $fe_array_0df575c880a3eedaa6e04088689e7f1c_2 );
$tpl->processOperator( 'ezarchive',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'blog_post',
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'used_node',
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
          1 => 'node_id',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $fe_array_0df575c880a3eedaa6e04088689e7f1c_2Data, false, false );
$fe_array_0df575c880a3eedaa6e04088689e7f1c_2 = $fe_array_0df575c880a3eedaa6e04088689e7f1c_2Data['value'];
unset( $fe_array_0df575c880a3eedaa6e04088689e7f1c_2Data );
if (! isset( $fe_array_0df575c880a3eedaa6e04088689e7f1c_2 ) ) $fe_array_0df575c880a3eedaa6e04088689e7f1c_2 = NULL;
while ( is_object( $fe_array_0df575c880a3eedaa6e04088689e7f1c_2 ) and method_exists( $fe_array_0df575c880a3eedaa6e04088689e7f1c_2, 'templateValue' ) )
    $fe_array_0df575c880a3eedaa6e04088689e7f1c_2 = $fe_array_0df575c880a3eedaa6e04088689e7f1c_2->templateValue();

$fe_array_keys_0df575c880a3eedaa6e04088689e7f1c_2 = is_array( $fe_array_0df575c880a3eedaa6e04088689e7f1c_2 ) ? array_keys( $fe_array_0df575c880a3eedaa6e04088689e7f1c_2 ) : array();
$fe_n_items_0df575c880a3eedaa6e04088689e7f1c_2 = count( $fe_array_keys_0df575c880a3eedaa6e04088689e7f1c_2 );
$fe_n_items_processed_0df575c880a3eedaa6e04088689e7f1c_2 = 0;
$fe_offset_0df575c880a3eedaa6e04088689e7f1c_2 = 0;
$fe_max_0df575c880a3eedaa6e04088689e7f1c_2 = $fe_n_items_0df575c880a3eedaa6e04088689e7f1c_2 - $fe_offset_0df575c880a3eedaa6e04088689e7f1c_2;
$fe_reverse_0df575c880a3eedaa6e04088689e7f1c_2 = false;
if ( $fe_offset_0df575c880a3eedaa6e04088689e7f1c_2 < 0 || $fe_offset_0df575c880a3eedaa6e04088689e7f1c_2 >= $fe_n_items_0df575c880a3eedaa6e04088689e7f1c_2 )
{
    $fe_offset_0df575c880a3eedaa6e04088689e7f1c_2 = ( $fe_offset_0df575c880a3eedaa6e04088689e7f1c_2 < 0 ) ? 0 : $fe_n_items_0df575c880a3eedaa6e04088689e7f1c_2;
    if ( $fe_n_items_0df575c880a3eedaa6e04088689e7f1c_2 || $fe_offset_0df575c880a3eedaa6e04088689e7f1c_2 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_0df575c880a3eedaa6e04088689e7f1c_2'. Array count: $fe_n_items_0df575c880a3eedaa6e04088689e7f1c_2");   
}
}
if ( $fe_max_0df575c880a3eedaa6e04088689e7f1c_2 < 0 || $fe_offset_0df575c880a3eedaa6e04088689e7f1c_2 + $fe_max_0df575c880a3eedaa6e04088689e7f1c_2 > $fe_n_items_0df575c880a3eedaa6e04088689e7f1c_2 )
{
    if ( $fe_max_0df575c880a3eedaa6e04088689e7f1c_2 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_0df575c880a3eedaa6e04088689e7f1c_2");
    $fe_max_0df575c880a3eedaa6e04088689e7f1c_2 = $fe_n_items_0df575c880a3eedaa6e04088689e7f1c_2 - $fe_offset_0df575c880a3eedaa6e04088689e7f1c_2;
}
if ( $fe_reverse_0df575c880a3eedaa6e04088689e7f1c_2 )
{
    $fe_first_val_0df575c880a3eedaa6e04088689e7f1c_2 = $fe_n_items_0df575c880a3eedaa6e04088689e7f1c_2 - 1 - $fe_offset_0df575c880a3eedaa6e04088689e7f1c_2;
    $fe_last_val_0df575c880a3eedaa6e04088689e7f1c_2  = 0;
}
else
{
    $fe_first_val_0df575c880a3eedaa6e04088689e7f1c_2 = $fe_offset_0df575c880a3eedaa6e04088689e7f1c_2;
    $fe_last_val_0df575c880a3eedaa6e04088689e7f1c_2  = $fe_n_items_0df575c880a3eedaa6e04088689e7f1c_2 - 1;
}
// foreach
for ( $fe_i_0df575c880a3eedaa6e04088689e7f1c_2 = $fe_first_val_0df575c880a3eedaa6e04088689e7f1c_2; $fe_n_items_processed_0df575c880a3eedaa6e04088689e7f1c_2 < $fe_max_0df575c880a3eedaa6e04088689e7f1c_2 && ( $fe_reverse_0df575c880a3eedaa6e04088689e7f1c_2 ? $fe_i_0df575c880a3eedaa6e04088689e7f1c_2 >= $fe_last_val_0df575c880a3eedaa6e04088689e7f1c_2 : $fe_i_0df575c880a3eedaa6e04088689e7f1c_2 <= $fe_last_val_0df575c880a3eedaa6e04088689e7f1c_2 ); $fe_reverse_0df575c880a3eedaa6e04088689e7f1c_2 ? $fe_i_0df575c880a3eedaa6e04088689e7f1c_2-- : $fe_i_0df575c880a3eedaa6e04088689e7f1c_2++ )
{
$fe_key_0df575c880a3eedaa6e04088689e7f1c_2 = $fe_array_keys_0df575c880a3eedaa6e04088689e7f1c_2[$fe_i_0df575c880a3eedaa6e04088689e7f1c_2];
$fe_val_0df575c880a3eedaa6e04088689e7f1c_2 = $fe_array_0df575c880a3eedaa6e04088689e7f1c_2[$fe_key_0df575c880a3eedaa6e04088689e7f1c_2];
$vars[$rootNamespace]['archive'] = $fe_val_0df575c880a3eedaa6e04088689e7f1c_2;
$text .= '            <li><a href=';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'used_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['used_node'] : null;
$var3 = compiledFetchAttribute( $var2, 'url_alias' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'archive', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['archive'] : null;
$var5 = compiledFetchAttribute( $var4, 'month' );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
unset( $var6 );
unset( $var6 );
$var6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'archive', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['archive'] : null;
$var7 = compiledFetchAttribute( $var6, 'year' );
unset( $var6 );
$var6 = $var7;
if (! isset( $var6 ) ) $var6 = NULL;
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
$var1 = ( $var2 . '/(month)/' . $var4 . '/(year)/' . $var6 );
unset( $var2, $var4, $var6 );
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

$text .= ' title="">';
unset( $var );
$locale = eZLocale::instance();
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'archive', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['archive'] : null;
$var2 = compiledFetchAttribute( $var1, 'timestamp' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = $locale->formatDateTimeType( '%F %Y', $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</a></li>
        ';
$fe_n_items_processed_0df575c880a3eedaa6e04088689e7f1c_2++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_0df575c880a3eedaa6e04088689e7f1c_2 ) ) extract( array_pop( $fe_variable_stack_0df575c880a3eedaa6e04088689e7f1c_2 ) );

else
{

unset( $fe_array_0df575c880a3eedaa6e04088689e7f1c_2 );

unset( $fe_array_keys_0df575c880a3eedaa6e04088689e7f1c_2 );

unset( $fe_n_items_0df575c880a3eedaa6e04088689e7f1c_2 );

unset( $fe_n_items_processed_0df575c880a3eedaa6e04088689e7f1c_2 );

unset( $fe_i_0df575c880a3eedaa6e04088689e7f1c_2 );

unset( $fe_key_0df575c880a3eedaa6e04088689e7f1c_2 );

unset( $fe_val_0df575c880a3eedaa6e04088689e7f1c_2 );

unset( $fe_offset_0df575c880a3eedaa6e04088689e7f1c_2 );

unset( $fe_max_0df575c880a3eedaa6e04088689e7f1c_2 );

unset( $fe_reverse_0df575c880a3eedaa6e04088689e7f1c_2 );

unset( $fe_first_val_0df575c880a3eedaa6e04088689e7f1c_2 );

unset( $fe_last_val_0df575c880a3eedaa6e04088689e7f1c_2 );

unset( $fe_variable_stack_0df575c880a3eedaa6e04088689e7f1c_2 );

}

// foreach ends
$text .= '        </ul>
    </div>
</article>
';
$oldRestoreIncludeArray_533a47bbadf661de6d2ebab563aa8c8a = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/calendar-0bcbc9eff707837ea66131da1baa4fce.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/templates/parts/blog/calendar.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/calendar-0bcbc9eff707837ea66131da1baa4fce.php' );
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
$tpl->processURI( 'extension/ezdemo/design/ezdemo/templates/parts/blog/calendar.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_533a47bbadf661de6d2ebab563aa8c8a;


$setArray = $oldSetArray_7e6b404cc3ee1ee5701a117a11ed8b28;
$tpl->Level--;
?>
