<?php
// URI:       design:user/success.tpl
// Filename:  extension/ezdemo/design/ezdemo/templates/user/success.tpl
// Timestamp: 1417102386 (Thu Nov 27 16:33:06 CET 2014)
$oldSetArray_bb63789053b3d2b387a7a9d87f1cf5e2 = isset( $setArray ) ? $setArray : array();
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

$text .= '<div class="user-success">
';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'verify_user_email', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['verify_user_email'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<div class="attribute-header">
    <h1 class="long">User registered</h1>
</div>

<div class="feedback">
<p>
Your account was successfully created. An email will be sent to the specified address. Follow the instructions in that email to activate your account.
</p>
</div>';
}
else
{
$text .= '<div class="attribute-header">
    <h1 class="long">User registered</h1>
</div>

<div class="feedback">
    <h2>Your account was successfully created.</h2>
</div>';
}
unset( $if_cond );
// if ends

$text .= '
</div>
';

$setArray = $oldSetArray_bb63789053b3d2b387a7a9d87f1cf5e2;
$tpl->Level--;
?>
