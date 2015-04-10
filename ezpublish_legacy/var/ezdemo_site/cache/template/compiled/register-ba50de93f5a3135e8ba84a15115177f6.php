<?php
// URI:       design:user/register.tpl
// Filename:  extension/ezdemo/design/ezdemo/templates/user/register.tpl
// Timestamp: 1417102386 (Thu Nov 27 16:33:06 CET 2014)
$oldSetArray_4f47c6fef057ee410649744b1587268b = isset( $setArray ) ? $setArray : array();
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

$text .= '<div class="user-register">

<form enctype="multipart/form-data"  action="/user/register" method="post" name="Register">

<div class="attribute-header">
    <h1 class="long">Register user</h1>
</div>
';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'checkErrNodeId', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['checkErrNodeId'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = isset( $if_cond3 );unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'checkErrNodeId', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['checkErrNodeId'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
if ( !$if_cond2 )
    $if_cond1 = false;
else if ( !$if_cond3 )
    $if_cond1 = false;
else
    $if_cond1 = $if_cond3;
unset( $if_cond2, $if_cond3 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'checkErrNodeId', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['checkErrNodeId'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = ( ( $if_cond3 ) == ( true ) );
unset( $if_cond3 );
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
$text .= '    <div class="message-error">
        <h2><span class="time">[';
unset( $var );
// l10nTransformation begin
$locale = eZLocale::instance();
// l10nTransformation: static
unset( $var1 );
$var1 = time();
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

$var = $locale->formatShortDateTime( $var1 );
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ']</span> ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'errMsg', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['errMsg'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</h2>
    </div>';
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'validation', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['validation'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'processed' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '
    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'validation', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['validation'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'attributes' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond1Data = array( 'value' => $if_cond1 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond1Data, false, false );
$if_cond1 = $if_cond1Data['value'];
unset( $if_cond1Data );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) > ( 0 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        <div class="warning">
        <h2>Input did not validate</h2>
        <ul>
        ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_43f8dd0a335159b8aeea00512a06adf4_1 ) ) $fe_variable_stack_43f8dd0a335159b8aeea00512a06adf4_1 = array();
$fe_variable_stack_43f8dd0a335159b8aeea00512a06adf4_1[] = compact( 'fe_array_43f8dd0a335159b8aeea00512a06adf4_1', 'fe_array_keys_43f8dd0a335159b8aeea00512a06adf4_1', 'fe_n_items_43f8dd0a335159b8aeea00512a06adf4_1', 'fe_n_items_processed_43f8dd0a335159b8aeea00512a06adf4_1', 'fe_i_43f8dd0a335159b8aeea00512a06adf4_1', 'fe_key_43f8dd0a335159b8aeea00512a06adf4_1', 'fe_val_43f8dd0a335159b8aeea00512a06adf4_1', 'fe_offset_43f8dd0a335159b8aeea00512a06adf4_1', 'fe_max_43f8dd0a335159b8aeea00512a06adf4_1', 'fe_reverse_43f8dd0a335159b8aeea00512a06adf4_1', 'fe_first_val_43f8dd0a335159b8aeea00512a06adf4_1', 'fe_last_val_43f8dd0a335159b8aeea00512a06adf4_1' );
unset( $fe_array_43f8dd0a335159b8aeea00512a06adf4_1 );
unset( $fe_array_43f8dd0a335159b8aeea00512a06adf4_1 );
$fe_array_43f8dd0a335159b8aeea00512a06adf4_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'validation', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['validation'] : null;
$fe_array_43f8dd0a335159b8aeea00512a06adf4_11 = compiledFetchAttribute( $fe_array_43f8dd0a335159b8aeea00512a06adf4_1, 'attributes' );
unset( $fe_array_43f8dd0a335159b8aeea00512a06adf4_1 );
$fe_array_43f8dd0a335159b8aeea00512a06adf4_1 = $fe_array_43f8dd0a335159b8aeea00512a06adf4_11;
if (! isset( $fe_array_43f8dd0a335159b8aeea00512a06adf4_1 ) ) $fe_array_43f8dd0a335159b8aeea00512a06adf4_1 = NULL;
while ( is_object( $fe_array_43f8dd0a335159b8aeea00512a06adf4_1 ) and method_exists( $fe_array_43f8dd0a335159b8aeea00512a06adf4_1, 'templateValue' ) )
    $fe_array_43f8dd0a335159b8aeea00512a06adf4_1 = $fe_array_43f8dd0a335159b8aeea00512a06adf4_1->templateValue();

$fe_array_keys_43f8dd0a335159b8aeea00512a06adf4_1 = is_array( $fe_array_43f8dd0a335159b8aeea00512a06adf4_1 ) ? array_keys( $fe_array_43f8dd0a335159b8aeea00512a06adf4_1 ) : array();
$fe_n_items_43f8dd0a335159b8aeea00512a06adf4_1 = count( $fe_array_keys_43f8dd0a335159b8aeea00512a06adf4_1 );
$fe_n_items_processed_43f8dd0a335159b8aeea00512a06adf4_1 = 0;
$fe_offset_43f8dd0a335159b8aeea00512a06adf4_1 = 0;
$fe_max_43f8dd0a335159b8aeea00512a06adf4_1 = $fe_n_items_43f8dd0a335159b8aeea00512a06adf4_1 - $fe_offset_43f8dd0a335159b8aeea00512a06adf4_1;
$fe_reverse_43f8dd0a335159b8aeea00512a06adf4_1 = false;
if ( $fe_offset_43f8dd0a335159b8aeea00512a06adf4_1 < 0 || $fe_offset_43f8dd0a335159b8aeea00512a06adf4_1 >= $fe_n_items_43f8dd0a335159b8aeea00512a06adf4_1 )
{
    $fe_offset_43f8dd0a335159b8aeea00512a06adf4_1 = ( $fe_offset_43f8dd0a335159b8aeea00512a06adf4_1 < 0 ) ? 0 : $fe_n_items_43f8dd0a335159b8aeea00512a06adf4_1;
    if ( $fe_n_items_43f8dd0a335159b8aeea00512a06adf4_1 || $fe_offset_43f8dd0a335159b8aeea00512a06adf4_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_43f8dd0a335159b8aeea00512a06adf4_1'. Array count: $fe_n_items_43f8dd0a335159b8aeea00512a06adf4_1");   
}
}
if ( $fe_max_43f8dd0a335159b8aeea00512a06adf4_1 < 0 || $fe_offset_43f8dd0a335159b8aeea00512a06adf4_1 + $fe_max_43f8dd0a335159b8aeea00512a06adf4_1 > $fe_n_items_43f8dd0a335159b8aeea00512a06adf4_1 )
{
    if ( $fe_max_43f8dd0a335159b8aeea00512a06adf4_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_43f8dd0a335159b8aeea00512a06adf4_1");
    $fe_max_43f8dd0a335159b8aeea00512a06adf4_1 = $fe_n_items_43f8dd0a335159b8aeea00512a06adf4_1 - $fe_offset_43f8dd0a335159b8aeea00512a06adf4_1;
}
if ( $fe_reverse_43f8dd0a335159b8aeea00512a06adf4_1 )
{
    $fe_first_val_43f8dd0a335159b8aeea00512a06adf4_1 = $fe_n_items_43f8dd0a335159b8aeea00512a06adf4_1 - 1 - $fe_offset_43f8dd0a335159b8aeea00512a06adf4_1;
    $fe_last_val_43f8dd0a335159b8aeea00512a06adf4_1  = 0;
}
else
{
    $fe_first_val_43f8dd0a335159b8aeea00512a06adf4_1 = $fe_offset_43f8dd0a335159b8aeea00512a06adf4_1;
    $fe_last_val_43f8dd0a335159b8aeea00512a06adf4_1  = $fe_n_items_43f8dd0a335159b8aeea00512a06adf4_1 - 1;
}
// foreach
for ( $fe_i_43f8dd0a335159b8aeea00512a06adf4_1 = $fe_first_val_43f8dd0a335159b8aeea00512a06adf4_1; $fe_n_items_processed_43f8dd0a335159b8aeea00512a06adf4_1 < $fe_max_43f8dd0a335159b8aeea00512a06adf4_1 && ( $fe_reverse_43f8dd0a335159b8aeea00512a06adf4_1 ? $fe_i_43f8dd0a335159b8aeea00512a06adf4_1 >= $fe_last_val_43f8dd0a335159b8aeea00512a06adf4_1 : $fe_i_43f8dd0a335159b8aeea00512a06adf4_1 <= $fe_last_val_43f8dd0a335159b8aeea00512a06adf4_1 ); $fe_reverse_43f8dd0a335159b8aeea00512a06adf4_1 ? $fe_i_43f8dd0a335159b8aeea00512a06adf4_1-- : $fe_i_43f8dd0a335159b8aeea00512a06adf4_1++ )
{
$fe_key_43f8dd0a335159b8aeea00512a06adf4_1 = $fe_array_keys_43f8dd0a335159b8aeea00512a06adf4_1[$fe_i_43f8dd0a335159b8aeea00512a06adf4_1];
$fe_val_43f8dd0a335159b8aeea00512a06adf4_1 = $fe_array_43f8dd0a335159b8aeea00512a06adf4_1[$fe_key_43f8dd0a335159b8aeea00512a06adf4_1];
$vars[$rootNamespace]['attribute'] = $fe_val_43f8dd0a335159b8aeea00512a06adf4_1;
$text .= '            <li>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'name' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ': ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'description' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</li>
        ';
$fe_n_items_processed_43f8dd0a335159b8aeea00512a06adf4_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_43f8dd0a335159b8aeea00512a06adf4_1 ) ) extract( array_pop( $fe_variable_stack_43f8dd0a335159b8aeea00512a06adf4_1 ) );

else
{

unset( $fe_array_43f8dd0a335159b8aeea00512a06adf4_1 );

unset( $fe_array_keys_43f8dd0a335159b8aeea00512a06adf4_1 );

unset( $fe_n_items_43f8dd0a335159b8aeea00512a06adf4_1 );

unset( $fe_n_items_processed_43f8dd0a335159b8aeea00512a06adf4_1 );

unset( $fe_i_43f8dd0a335159b8aeea00512a06adf4_1 );

unset( $fe_key_43f8dd0a335159b8aeea00512a06adf4_1 );

unset( $fe_val_43f8dd0a335159b8aeea00512a06adf4_1 );

unset( $fe_offset_43f8dd0a335159b8aeea00512a06adf4_1 );

unset( $fe_max_43f8dd0a335159b8aeea00512a06adf4_1 );

unset( $fe_reverse_43f8dd0a335159b8aeea00512a06adf4_1 );

unset( $fe_first_val_43f8dd0a335159b8aeea00512a06adf4_1 );

unset( $fe_last_val_43f8dd0a335159b8aeea00512a06adf4_1 );

unset( $fe_variable_stack_43f8dd0a335159b8aeea00512a06adf4_1 );

}

// foreach ends
$text .= '        </ul>
        </div>
    ';
}
else
{
$text .= '        <div class="feedback">
        <h2>Input was stored successfully</h2>
        </div>
    ';
}
unset( $if_cond );
// if ends

}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond1 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond1Data = array( 'value' => $if_cond1 );
$tpl->processOperator( 'count',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'content_attributes',
      ),
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $if_cond1Data, false, false );
$if_cond1 = $if_cond1Data['value'];
unset( $if_cond1Data );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) > ( 0 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_43f8dd0a335159b8aeea00512a06adf4_2 ) ) $fe_variable_stack_43f8dd0a335159b8aeea00512a06adf4_2 = array();
$fe_variable_stack_43f8dd0a335159b8aeea00512a06adf4_2[] = compact( 'fe_array_43f8dd0a335159b8aeea00512a06adf4_2', 'fe_array_keys_43f8dd0a335159b8aeea00512a06adf4_2', 'fe_n_items_43f8dd0a335159b8aeea00512a06adf4_2', 'fe_n_items_processed_43f8dd0a335159b8aeea00512a06adf4_2', 'fe_i_43f8dd0a335159b8aeea00512a06adf4_2', 'fe_key_43f8dd0a335159b8aeea00512a06adf4_2', 'fe_val_43f8dd0a335159b8aeea00512a06adf4_2', 'fe_offset_43f8dd0a335159b8aeea00512a06adf4_2', 'fe_max_43f8dd0a335159b8aeea00512a06adf4_2', 'fe_reverse_43f8dd0a335159b8aeea00512a06adf4_2', 'fe_first_val_43f8dd0a335159b8aeea00512a06adf4_2', 'fe_last_val_43f8dd0a335159b8aeea00512a06adf4_2' );
unset( $fe_array_43f8dd0a335159b8aeea00512a06adf4_2 );
unset( $fe_array_43f8dd0a335159b8aeea00512a06adf4_2 );
$fe_array_43f8dd0a335159b8aeea00512a06adf4_2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_attributes'] : null;
if (! isset( $fe_array_43f8dd0a335159b8aeea00512a06adf4_2 ) ) $fe_array_43f8dd0a335159b8aeea00512a06adf4_2 = NULL;
while ( is_object( $fe_array_43f8dd0a335159b8aeea00512a06adf4_2 ) and method_exists( $fe_array_43f8dd0a335159b8aeea00512a06adf4_2, 'templateValue' ) )
    $fe_array_43f8dd0a335159b8aeea00512a06adf4_2 = $fe_array_43f8dd0a335159b8aeea00512a06adf4_2->templateValue();

$fe_array_keys_43f8dd0a335159b8aeea00512a06adf4_2 = is_array( $fe_array_43f8dd0a335159b8aeea00512a06adf4_2 ) ? array_keys( $fe_array_43f8dd0a335159b8aeea00512a06adf4_2 ) : array();
$fe_n_items_43f8dd0a335159b8aeea00512a06adf4_2 = count( $fe_array_keys_43f8dd0a335159b8aeea00512a06adf4_2 );
$fe_n_items_processed_43f8dd0a335159b8aeea00512a06adf4_2 = 0;
$fe_offset_43f8dd0a335159b8aeea00512a06adf4_2 = 0;
$fe_max_43f8dd0a335159b8aeea00512a06adf4_2 = $fe_n_items_43f8dd0a335159b8aeea00512a06adf4_2 - $fe_offset_43f8dd0a335159b8aeea00512a06adf4_2;
$fe_reverse_43f8dd0a335159b8aeea00512a06adf4_2 = false;
if ( $fe_offset_43f8dd0a335159b8aeea00512a06adf4_2 < 0 || $fe_offset_43f8dd0a335159b8aeea00512a06adf4_2 >= $fe_n_items_43f8dd0a335159b8aeea00512a06adf4_2 )
{
    $fe_offset_43f8dd0a335159b8aeea00512a06adf4_2 = ( $fe_offset_43f8dd0a335159b8aeea00512a06adf4_2 < 0 ) ? 0 : $fe_n_items_43f8dd0a335159b8aeea00512a06adf4_2;
    if ( $fe_n_items_43f8dd0a335159b8aeea00512a06adf4_2 || $fe_offset_43f8dd0a335159b8aeea00512a06adf4_2 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_43f8dd0a335159b8aeea00512a06adf4_2'. Array count: $fe_n_items_43f8dd0a335159b8aeea00512a06adf4_2");   
}
}
if ( $fe_max_43f8dd0a335159b8aeea00512a06adf4_2 < 0 || $fe_offset_43f8dd0a335159b8aeea00512a06adf4_2 + $fe_max_43f8dd0a335159b8aeea00512a06adf4_2 > $fe_n_items_43f8dd0a335159b8aeea00512a06adf4_2 )
{
    if ( $fe_max_43f8dd0a335159b8aeea00512a06adf4_2 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_43f8dd0a335159b8aeea00512a06adf4_2");
    $fe_max_43f8dd0a335159b8aeea00512a06adf4_2 = $fe_n_items_43f8dd0a335159b8aeea00512a06adf4_2 - $fe_offset_43f8dd0a335159b8aeea00512a06adf4_2;
}
if ( $fe_reverse_43f8dd0a335159b8aeea00512a06adf4_2 )
{
    $fe_first_val_43f8dd0a335159b8aeea00512a06adf4_2 = $fe_n_items_43f8dd0a335159b8aeea00512a06adf4_2 - 1 - $fe_offset_43f8dd0a335159b8aeea00512a06adf4_2;
    $fe_last_val_43f8dd0a335159b8aeea00512a06adf4_2  = 0;
}
else
{
    $fe_first_val_43f8dd0a335159b8aeea00512a06adf4_2 = $fe_offset_43f8dd0a335159b8aeea00512a06adf4_2;
    $fe_last_val_43f8dd0a335159b8aeea00512a06adf4_2  = $fe_n_items_43f8dd0a335159b8aeea00512a06adf4_2 - 1;
}
// foreach
for ( $fe_i_43f8dd0a335159b8aeea00512a06adf4_2 = $fe_first_val_43f8dd0a335159b8aeea00512a06adf4_2; $fe_n_items_processed_43f8dd0a335159b8aeea00512a06adf4_2 < $fe_max_43f8dd0a335159b8aeea00512a06adf4_2 && ( $fe_reverse_43f8dd0a335159b8aeea00512a06adf4_2 ? $fe_i_43f8dd0a335159b8aeea00512a06adf4_2 >= $fe_last_val_43f8dd0a335159b8aeea00512a06adf4_2 : $fe_i_43f8dd0a335159b8aeea00512a06adf4_2 <= $fe_last_val_43f8dd0a335159b8aeea00512a06adf4_2 ); $fe_reverse_43f8dd0a335159b8aeea00512a06adf4_2 ? $fe_i_43f8dd0a335159b8aeea00512a06adf4_2-- : $fe_i_43f8dd0a335159b8aeea00512a06adf4_2++ )
{
$fe_key_43f8dd0a335159b8aeea00512a06adf4_2 = $fe_array_keys_43f8dd0a335159b8aeea00512a06adf4_2[$fe_i_43f8dd0a335159b8aeea00512a06adf4_2];
$fe_val_43f8dd0a335159b8aeea00512a06adf4_2 = $fe_array_43f8dd0a335159b8aeea00512a06adf4_2[$fe_key_43f8dd0a335159b8aeea00512a06adf4_2];
$vars[$rootNamespace]['attribute'] = $fe_val_43f8dd0a335159b8aeea00512a06adf4_2;
$text .= '    <input type="hidden" name="ContentObjectAttribute_id[]" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
    <div class="block">
        <label>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'contentclass_attribute' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'name' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</label><div class="labelbreak"></div>
        ';
$textElements = array();
$tpl->processFunction( 'attribute_edit_gui', $textElements,
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
        2 => 'attribute',
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 39,
    1 => 8,
    2 => 1311,
  ),
  1 => 
  array (
    0 => 39,
    1 => 47,
    2 => 1350,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/user/register.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '    </div>
    ';
$fe_n_items_processed_43f8dd0a335159b8aeea00512a06adf4_2++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_43f8dd0a335159b8aeea00512a06adf4_2 ) ) extract( array_pop( $fe_variable_stack_43f8dd0a335159b8aeea00512a06adf4_2 ) );

else
{

unset( $fe_array_43f8dd0a335159b8aeea00512a06adf4_2 );

unset( $fe_array_keys_43f8dd0a335159b8aeea00512a06adf4_2 );

unset( $fe_n_items_43f8dd0a335159b8aeea00512a06adf4_2 );

unset( $fe_n_items_processed_43f8dd0a335159b8aeea00512a06adf4_2 );

unset( $fe_i_43f8dd0a335159b8aeea00512a06adf4_2 );

unset( $fe_key_43f8dd0a335159b8aeea00512a06adf4_2 );

unset( $fe_val_43f8dd0a335159b8aeea00512a06adf4_2 );

unset( $fe_offset_43f8dd0a335159b8aeea00512a06adf4_2 );

unset( $fe_max_43f8dd0a335159b8aeea00512a06adf4_2 );

unset( $fe_reverse_43f8dd0a335159b8aeea00512a06adf4_2 );

unset( $fe_first_val_43f8dd0a335159b8aeea00512a06adf4_2 );

unset( $fe_last_val_43f8dd0a335159b8aeea00512a06adf4_2 );

unset( $fe_variable_stack_43f8dd0a335159b8aeea00512a06adf4_2 );

}

// foreach ends
$text .= '
    <div class="buttonblock">
         <input class="button" type="hidden" name="UserID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_attributes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_attributes'] : null;
$var1 = compiledFetchAttribute( $var, 0 );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'contentobject_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'checkErrNodeId', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['checkErrNodeId'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = isset( $if_cond3 );unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'checkErrNodeId', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['checkErrNodeId'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
if ( !$if_cond2 )
    $if_cond1 = false;
else if ( !$if_cond3 )
    $if_cond1 = false;
else
    $if_cond1 = $if_cond3;
unset( $if_cond2, $if_cond3 );
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
$text .= '        <input class="button" type="submit" id="PublishButton" name="PublishButton" value="Register" onclick="window.setTimeout( disableButtons, 1 ); return true;" />
    ';
}
else
{
$text .= '    
           <input class="button" type="submit" id="PublishButton" name="PublishButton" disabled="disabled" value="Register" onclick="window.setTimeout( disableButtons, 1 ); return true;" />
    ';
}
unset( $if_cond );
// if ends

$text .= '    <input class="button" type="submit" id="CancelButton" name="CancelButton" value="Discard" onclick="window.setTimeout( disableButtons, 1 ); return true;" />
    </div>';
}
else
{
$text .= '    <div class="warning">
         <h2>Unable to register new user</h2>
    </div>
    <input class="button" type="submit" id="CancelButton" name="CancelButton" value="Back" onclick="window.setTimeout( disableButtons, 1 ); return true;" />';
}
unset( $if_cond );
// if ends

$text .= '</form>

</div>


<script type="text/javascript">
    function disableButtons()
    {
        document.getElementById( \'PublishButton\' ).disabled = true;
        document.getElementById( \'CancelButton\' ).disabled = true;
    }
</script>

';

$setArray = $oldSetArray_4f47c6fef057ee410649744b1587268b;
$tpl->Level--;
?>
