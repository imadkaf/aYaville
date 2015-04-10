<?php
// URI:       design:content/datatype/view/ezkeyword.tpl
// Filename:  extension/ezdemo/design/ezdemo/templates/content/datatype/view/ezkeyword.tpl
// Timestamp: 1417102386 (Thu Nov 27 16:33:06 CET 2014)
$oldSetArray_e804282c9446ee7882cdeb4de869310a = isset( $setArray ) ? $setArray : array();
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
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'content' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'keywords' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();
$if_condData = array( 'value' => $if_cond );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_condData, false, false );
$if_cond = $if_condData['value'];
unset( $if_condData );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( '', $vars ) and array_key_exists( 'persistent_variable', $vars[''] ) ) ? $vars['']['persistent_variable'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'keywords' );
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
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( '', $vars ) and array_key_exists( 'persistent_variable', $vars[''] ) ) ? $vars['']['persistent_variable'] : null;
$var4 = compiledFetchAttribute( $var3, 'keywords' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var6 = compiledFetchAttribute( $var5, 'content' );
unset( $var5 );
$var5 = $var6;
$var6 = compiledFetchAttribute( $var5, 'keyword_string' );
unset( $var5 );
$var5 = $var6;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var2 = ( $var3 . ', ' . $var5 );
unset( $var3, $var5 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = array( 'keywords' => $var2 );unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( '', $vars ) and array_key_exists( 'persistent_variable', $vars[''] ) ) ? $vars['']['persistent_variable'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = array_merge( $var2, $var1 );
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( '', $vars ) && array_key_exists( 'persistent_variable', $vars[''] ) )
{
    $vars['']['persistent_variable'] = $var;
    unset( $var );
}
}
else
{
$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( '', $vars ) and array_key_exists( 'persistent_variable', $vars[''] ) ) ? $vars['']['persistent_variable'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = is_array( $if_cond2 );unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = !( $if_cond1 );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var2 = compiledFetchAttribute( $var1, 'content' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'keyword_string' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = array( 'keywords' => $var1 );unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( '', $vars ) && array_key_exists( 'persistent_variable', $vars[''] ) )
{
    $vars['']['persistent_variable'] = $var;
    unset( $var );
}
$text .= '    ';
}
else
{
$text .= '        ';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var3 = compiledFetchAttribute( $var2, 'content' );
unset( $var2 );
$var2 = $var3;
$var3 = compiledFetchAttribute( $var2, 'keyword_string' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = array( 'keywords' => $var2 );unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( '', $vars ) and array_key_exists( 'persistent_variable', $vars[''] ) ) ? $vars['']['persistent_variable'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = array_merge( $var2, $var1 );
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( '', $vars ) && array_key_exists( 'persistent_variable', $vars[''] ) )
{
    $vars['']['persistent_variable'] = $var;
    unset( $var );
}
$text .= '    ';
}
unset( $if_cond );
// if ends

}
unset( $if_cond );
// if ends

$text .= '<ul class="tags-wrapper">
    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_aebe3984920f706efbcbedcd0611af45_4 ) ) $fe_variable_stack_aebe3984920f706efbcbedcd0611af45_4 = array();
$fe_variable_stack_aebe3984920f706efbcbedcd0611af45_4[] = compact( 'fe_array_aebe3984920f706efbcbedcd0611af45_4', 'fe_array_keys_aebe3984920f706efbcbedcd0611af45_4', 'fe_n_items_aebe3984920f706efbcbedcd0611af45_4', 'fe_n_items_processed_aebe3984920f706efbcbedcd0611af45_4', 'fe_i_aebe3984920f706efbcbedcd0611af45_4', 'fe_key_aebe3984920f706efbcbedcd0611af45_4', 'fe_val_aebe3984920f706efbcbedcd0611af45_4', 'fe_offset_aebe3984920f706efbcbedcd0611af45_4', 'fe_max_aebe3984920f706efbcbedcd0611af45_4', 'fe_reverse_aebe3984920f706efbcbedcd0611af45_4', 'fe_first_val_aebe3984920f706efbcbedcd0611af45_4', 'fe_last_val_aebe3984920f706efbcbedcd0611af45_4' );
unset( $fe_array_aebe3984920f706efbcbedcd0611af45_4 );
unset( $fe_array_aebe3984920f706efbcbedcd0611af45_4 );
$fe_array_aebe3984920f706efbcbedcd0611af45_4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$fe_array_aebe3984920f706efbcbedcd0611af45_41 = compiledFetchAttribute( $fe_array_aebe3984920f706efbcbedcd0611af45_4, 'content' );
unset( $fe_array_aebe3984920f706efbcbedcd0611af45_4 );
$fe_array_aebe3984920f706efbcbedcd0611af45_4 = $fe_array_aebe3984920f706efbcbedcd0611af45_41;
$fe_array_aebe3984920f706efbcbedcd0611af45_41 = compiledFetchAttribute( $fe_array_aebe3984920f706efbcbedcd0611af45_4, 'keywords' );
unset( $fe_array_aebe3984920f706efbcbedcd0611af45_4 );
$fe_array_aebe3984920f706efbcbedcd0611af45_4 = $fe_array_aebe3984920f706efbcbedcd0611af45_41;
if (! isset( $fe_array_aebe3984920f706efbcbedcd0611af45_4 ) ) $fe_array_aebe3984920f706efbcbedcd0611af45_4 = NULL;
while ( is_object( $fe_array_aebe3984920f706efbcbedcd0611af45_4 ) and method_exists( $fe_array_aebe3984920f706efbcbedcd0611af45_4, 'templateValue' ) )
    $fe_array_aebe3984920f706efbcbedcd0611af45_4 = $fe_array_aebe3984920f706efbcbedcd0611af45_4->templateValue();

$fe_array_keys_aebe3984920f706efbcbedcd0611af45_4 = is_array( $fe_array_aebe3984920f706efbcbedcd0611af45_4 ) ? array_keys( $fe_array_aebe3984920f706efbcbedcd0611af45_4 ) : array();
$fe_n_items_aebe3984920f706efbcbedcd0611af45_4 = count( $fe_array_keys_aebe3984920f706efbcbedcd0611af45_4 );
$fe_n_items_processed_aebe3984920f706efbcbedcd0611af45_4 = 0;
$fe_offset_aebe3984920f706efbcbedcd0611af45_4 = 0;
$fe_max_aebe3984920f706efbcbedcd0611af45_4 = $fe_n_items_aebe3984920f706efbcbedcd0611af45_4 - $fe_offset_aebe3984920f706efbcbedcd0611af45_4;
$fe_reverse_aebe3984920f706efbcbedcd0611af45_4 = false;
if ( $fe_offset_aebe3984920f706efbcbedcd0611af45_4 < 0 || $fe_offset_aebe3984920f706efbcbedcd0611af45_4 >= $fe_n_items_aebe3984920f706efbcbedcd0611af45_4 )
{
    $fe_offset_aebe3984920f706efbcbedcd0611af45_4 = ( $fe_offset_aebe3984920f706efbcbedcd0611af45_4 < 0 ) ? 0 : $fe_n_items_aebe3984920f706efbcbedcd0611af45_4;
    if ( $fe_n_items_aebe3984920f706efbcbedcd0611af45_4 || $fe_offset_aebe3984920f706efbcbedcd0611af45_4 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_aebe3984920f706efbcbedcd0611af45_4'. Array count: $fe_n_items_aebe3984920f706efbcbedcd0611af45_4");   
}
}
if ( $fe_max_aebe3984920f706efbcbedcd0611af45_4 < 0 || $fe_offset_aebe3984920f706efbcbedcd0611af45_4 + $fe_max_aebe3984920f706efbcbedcd0611af45_4 > $fe_n_items_aebe3984920f706efbcbedcd0611af45_4 )
{
    if ( $fe_max_aebe3984920f706efbcbedcd0611af45_4 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_aebe3984920f706efbcbedcd0611af45_4");
    $fe_max_aebe3984920f706efbcbedcd0611af45_4 = $fe_n_items_aebe3984920f706efbcbedcd0611af45_4 - $fe_offset_aebe3984920f706efbcbedcd0611af45_4;
}
if ( $fe_reverse_aebe3984920f706efbcbedcd0611af45_4 )
{
    $fe_first_val_aebe3984920f706efbcbedcd0611af45_4 = $fe_n_items_aebe3984920f706efbcbedcd0611af45_4 - 1 - $fe_offset_aebe3984920f706efbcbedcd0611af45_4;
    $fe_last_val_aebe3984920f706efbcbedcd0611af45_4  = 0;
}
else
{
    $fe_first_val_aebe3984920f706efbcbedcd0611af45_4 = $fe_offset_aebe3984920f706efbcbedcd0611af45_4;
    $fe_last_val_aebe3984920f706efbcbedcd0611af45_4  = $fe_n_items_aebe3984920f706efbcbedcd0611af45_4 - 1;
}
// foreach
for ( $fe_i_aebe3984920f706efbcbedcd0611af45_4 = $fe_first_val_aebe3984920f706efbcbedcd0611af45_4; $fe_n_items_processed_aebe3984920f706efbcbedcd0611af45_4 < $fe_max_aebe3984920f706efbcbedcd0611af45_4 && ( $fe_reverse_aebe3984920f706efbcbedcd0611af45_4 ? $fe_i_aebe3984920f706efbcbedcd0611af45_4 >= $fe_last_val_aebe3984920f706efbcbedcd0611af45_4 : $fe_i_aebe3984920f706efbcbedcd0611af45_4 <= $fe_last_val_aebe3984920f706efbcbedcd0611af45_4 ); $fe_reverse_aebe3984920f706efbcbedcd0611af45_4 ? $fe_i_aebe3984920f706efbcbedcd0611af45_4-- : $fe_i_aebe3984920f706efbcbedcd0611af45_4++ )
{
$fe_key_aebe3984920f706efbcbedcd0611af45_4 = $fe_array_keys_aebe3984920f706efbcbedcd0611af45_4[$fe_i_aebe3984920f706efbcbedcd0611af45_4];
$fe_val_aebe3984920f706efbcbedcd0611af45_4 = $fe_array_aebe3984920f706efbcbedcd0611af45_4[$fe_key_aebe3984920f706efbcbedcd0611af45_4];
$vars[$rootNamespace]['keyword'] = $fe_val_aebe3984920f706efbcbedcd0611af45_4;
$text .= '    <li>
        <a href="';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'keyword', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['keyword'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = htmlspecialchars( $var4 );
unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( '/content/keyword/' . $var3 );
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

$text .= '">
            <span class="tag-title">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'keyword', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['keyword'] : null;
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

$text .= '</span>
            <span class="tag-amount">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'keyword', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['keyword'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchKeywordCount' ),
  array(     'alphabet' => $var1,
    'classid' => false,
    'owner' => false,
    'parent_node_id' => false,
    'include_duplicates' => true,
    'strict_matching' => false,
    'depth' => 1 ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</span>
        </a>
    </li>
    ';
$fe_n_items_processed_aebe3984920f706efbcbedcd0611af45_4++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_aebe3984920f706efbcbedcd0611af45_4 ) ) extract( array_pop( $fe_variable_stack_aebe3984920f706efbcbedcd0611af45_4 ) );

else
{

unset( $fe_array_aebe3984920f706efbcbedcd0611af45_4 );

unset( $fe_array_keys_aebe3984920f706efbcbedcd0611af45_4 );

unset( $fe_n_items_aebe3984920f706efbcbedcd0611af45_4 );

unset( $fe_n_items_processed_aebe3984920f706efbcbedcd0611af45_4 );

unset( $fe_i_aebe3984920f706efbcbedcd0611af45_4 );

unset( $fe_key_aebe3984920f706efbcbedcd0611af45_4 );

unset( $fe_val_aebe3984920f706efbcbedcd0611af45_4 );

unset( $fe_offset_aebe3984920f706efbcbedcd0611af45_4 );

unset( $fe_max_aebe3984920f706efbcbedcd0611af45_4 );

unset( $fe_reverse_aebe3984920f706efbcbedcd0611af45_4 );

unset( $fe_first_val_aebe3984920f706efbcbedcd0611af45_4 );

unset( $fe_last_val_aebe3984920f706efbcbedcd0611af45_4 );

unset( $fe_variable_stack_aebe3984920f706efbcbedcd0611af45_4 );

}

// foreach ends
$text .= '</ul>';
}
unset( $if_cond );
// if ends


$setArray = $oldSetArray_e804282c9446ee7882cdeb4de869310a;
$tpl->Level--;
?>
