<?php
// URI:       extension/ezdemo/design/ezdemo/templates/parts/blog/calendar.tpl
// Filename:  extension/ezdemo/design/ezdemo/templates/parts/blog/calendar.tpl
// Timestamp: 1417102386 (Thu Nov 27 16:33:06 CET 2014)
$oldSetArray_4b2ed1acd73ac050d09789e0c50249d6 = isset( $setArray ) ? $setArray : array();
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

$text .= '<!--START: CAL NAV -->
';
// def $blog_node
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'used_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['used_node'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'blog_node', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'blog_node' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 25,
  ),
  1 => 
  array (
    0 => 37,
    1 => 4,
    2 => 1156,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/parts/blog/calendar.tpl',
) );
    $tpl->setVariable( 'blog_node', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'blog_node', $var, $rootNamespace );
}

// def $blog_node_id
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'blog_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['blog_node'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'blog_node_id', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'blog_node_id' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 25,
  ),
  1 => 
  array (
    0 => 37,
    1 => 4,
    2 => 1156,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/parts/blog/calendar.tpl',
) );
    $tpl->setVariable( 'blog_node_id', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'blog_node_id', $var, $rootNamespace );
}

// def $curr_ts
unset( $var );
$var = time();
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'curr_ts', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'curr_ts' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 25,
  ),
  1 => 
  array (
    0 => 37,
    1 => 4,
    2 => 1156,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/parts/blog/calendar.tpl',
) );
    $tpl->setVariable( 'curr_ts', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'curr_ts', $var, $rootNamespace );
}

// def $curr_today
unset( $var );
$locale = eZLocale::instance();
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'curr_ts', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['curr_ts'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = $locale->formatDateTimeType( '%j', $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'curr_today', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'curr_today' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 25,
  ),
  1 => 
  array (
    0 => 37,
    1 => 4,
    2 => 1156,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/parts/blog/calendar.tpl',
) );
    $tpl->setVariable( 'curr_today', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'curr_today', $var, $rootNamespace );
}

// def $curr_year
unset( $var );
$locale = eZLocale::instance();
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'curr_ts', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['curr_ts'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = $locale->formatDateTimeType( '%Y', $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'curr_year', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'curr_year' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 25,
  ),
  1 => 
  array (
    0 => 37,
    1 => 4,
    2 => 1156,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/parts/blog/calendar.tpl',
) );
    $tpl->setVariable( 'curr_year', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'curr_year', $var, $rootNamespace );
}

// def $curr_month
unset( $var );
$locale = eZLocale::instance();
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'curr_ts', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['curr_ts'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = $locale->formatDateTimeType( '%n', $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'curr_month', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'curr_month' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 25,
  ),
  1 => 
  array (
    0 => 37,
    1 => 4,
    2 => 1156,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/parts/blog/calendar.tpl',
) );
    $tpl->setVariable( 'curr_month', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'curr_month', $var, $rootNamespace );
}

// def $temp_ts
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view_parameters'] : null;
$var4 = compiledFetchAttribute( $var3, 'month' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = ( ( $var3 ) != ( '' ) );
unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view_parameters'] : null;
$var5 = compiledFetchAttribute( $var4, 'year' );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = ( ( $var4 ) != ( '' ) );
unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
if ( !$var2 )
    $var1 = false;
else if ( !$var3 )
    $var1 = false;
else
    $var1 = $var3;
unset( $var2, $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( $var1 )
{
    unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "view_parameters", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["view_parameters"] : null;
$var4 = compiledFetchAttribute( $var3, "month" );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
unset( $var4 );
unset( $var5 );
unset( $var6 );
unset( $var6 );
$var6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "view_parameters", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["view_parameters"] : null;
$var7 = compiledFetchAttribute( $var6, "day" );
unset( $var6 );
$var6 = $var7;
if (! isset( $var6 ) ) $var6 = NULL;
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
$var5 = ( ( $var6 ) != ( "" ) );
unset( $var6 );
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
if ( $var5 )
{
    unset( $var6 );
unset( $var6 );
$var6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "view_parameters", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["view_parameters"] : null;
$var7 = compiledFetchAttribute( $var6, "day" );
unset( $var6 );
$var6 = $var7;
if (! isset( $var6 ) ) $var6 = NULL;
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();

    $var4 = $var6;
}
else
{
    unset( $var7 );
unset( $var8 );
unset( $var8 );
$var8 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "curr_month", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["curr_month"] : null;
if (! isset( $var8 ) ) $var8 = NULL;
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();
unset( $var9 );
unset( $var9 );
$var9 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "view_parameters", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["view_parameters"] : null;
$var10 = compiledFetchAttribute( $var9, "month" );
unset( $var9 );
$var9 = $var10;
if (! isset( $var9 ) ) $var9 = NULL;
while ( is_object( $var9 ) and method_exists( $var9, 'templateValue' ) )
    $var9 = $var9->templateValue();
while ( is_object( $var9 ) and method_exists( $var9, 'templateValue' ) )
    $var9 = $var9->templateValue();
$var7 = ( ( $var8 ) == ( $var9 ) );
unset( $var8, $var9 );
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();

    if ( $var7 )
    {
        unset( $var8 );
unset( $var8 );
$var8 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "curr_today", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["curr_today"] : null;
if (! isset( $var8 ) ) $var8 = NULL;
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();

        $var4 = $var8;
    }
    else
    {
        
        $var4 = 1;
    }
}
unset( $var5, $var6, $var7, $var8 );
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "view_parameters", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["view_parameters"] : null;
$var6 = compiledFetchAttribute( $var5, "year" );
unset( $var5 );
$var5 = $var6;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var2 = mktime( 0, 0, 0, $var3, $var4, $var5 );
unset( $var3, $var4, $var5 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

    $var = $var2;
}
else
{
    unset( $var3 );
$var3 = time();
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

    $var = $var3;
}
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'temp_ts', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'temp_ts' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 25,
  ),
  1 => 
  array (
    0 => 37,
    1 => 4,
    2 => 1156,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/parts/blog/calendar.tpl',
) );
    $tpl->setVariable( 'temp_ts', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'temp_ts', $var, $rootNamespace );
}

// def $temp_month
unset( $var );
$locale = eZLocale::instance();
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'temp_ts', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['temp_ts'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = $locale->formatDateTimeType( '%n', $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'temp_month', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'temp_month' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 25,
  ),
  1 => 
  array (
    0 => 37,
    1 => 4,
    2 => 1156,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/parts/blog/calendar.tpl',
) );
    $tpl->setVariable( 'temp_month', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'temp_month', $var, $rootNamespace );
}

// def $temp_year
unset( $var );
$locale = eZLocale::instance();
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'temp_ts', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['temp_ts'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = $locale->formatDateTimeType( '%Y', $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'temp_year', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'temp_year' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 25,
  ),
  1 => 
  array (
    0 => 37,
    1 => 4,
    2 => 1156,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/parts/blog/calendar.tpl',
) );
    $tpl->setVariable( 'temp_year', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'temp_year', $var, $rootNamespace );
}

// def $temp_today
unset( $var );
$locale = eZLocale::instance();
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'temp_ts', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['temp_ts'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = $locale->formatDateTimeType( '%j', $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'temp_today', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'temp_today' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 25,
  ),
  1 => 
  array (
    0 => 37,
    1 => 4,
    2 => 1156,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/parts/blog/calendar.tpl',
) );
    $tpl->setVariable( 'temp_today', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'temp_today', $var, $rootNamespace );
}

// def $days
unset( $var );
$locale = eZLocale::instance();
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'temp_ts', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['temp_ts'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = $locale->formatDateTimeType( '%t', $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'days', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'days' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 25,
  ),
  1 => 
  array (
    0 => 37,
    1 => 4,
    2 => 1156,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/parts/blog/calendar.tpl',
) );
    $tpl->setVariable( 'days', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'days', $var, $rootNamespace );
}

// def $first_ts
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'temp_month', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['temp_month'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'temp_year', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['temp_year'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var = mktime( 0, 0, 0, $var1, 1, $var3 );
unset( $var1, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'first_ts', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'first_ts' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 25,
  ),
  1 => 
  array (
    0 => 37,
    1 => 4,
    2 => 1156,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/parts/blog/calendar.tpl',
) );
    $tpl->setVariable( 'first_ts', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'first_ts', $var, $rootNamespace );
}

// def $dayone
unset( $var );
$locale = eZLocale::instance();
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'first_ts', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['first_ts'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = $locale->formatDateTimeType( '%w', $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'dayone', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'dayone' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 25,
  ),
  1 => 
  array (
    0 => 37,
    1 => 4,
    2 => 1156,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/parts/blog/calendar.tpl',
) );
    $tpl->setVariable( 'dayone', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'dayone', $var, $rootNamespace );
}

// def $last_ts
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'temp_month', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['temp_month'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'days', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['days'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'temp_year', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['temp_year'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var = mktime( 0, 0, 0, $var1, $var2, $var3 );
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'last_ts', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'last_ts' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 25,
  ),
  1 => 
  array (
    0 => 37,
    1 => 4,
    2 => 1156,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/parts/blog/calendar.tpl',
) );
    $tpl->setVariable( 'last_ts', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'last_ts', $var, $rootNamespace );
}

// def $daylast
unset( $var );
$locale = eZLocale::instance();
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'last_ts', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['last_ts'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = $locale->formatDateTimeType( '%w', $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'daylast', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'daylast' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 25,
  ),
  1 => 
  array (
    0 => 37,
    1 => 4,
    2 => 1156,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/parts/blog/calendar.tpl',
) );
    $tpl->setVariable( 'daylast', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'daylast', $var, $rootNamespace );
}

// def $span1
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'dayone', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['dayone'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'span1', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'span1' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 25,
  ),
  1 => 
  array (
    0 => 37,
    1 => 4,
    2 => 1156,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/parts/blog/calendar.tpl',
) );
    $tpl->setVariable( 'span1', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'span1', $var, $rootNamespace );
}

// def $span2
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'daylast', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['daylast'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = 7.000000 - $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'span2', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'span2' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 25,
  ),
  1 => 
  array (
    0 => 37,
    1 => 4,
    2 => 1156,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/parts/blog/calendar.tpl',
) );
    $tpl->setVariable( 'span2', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'span2', $var, $rootNamespace );
}

// def $dayofweek
if ( $tpl->hasVariable( 'dayofweek', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'dayofweek' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 25,
  ),
  1 => 
  array (
    0 => 37,
    1 => 4,
    2 => 1156,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/parts/blog/calendar.tpl',
) );
    $tpl->setVariable( 'dayofweek', 0, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'dayofweek', 0, $rootNamespace );
}

// def $day_array
if ( $tpl->hasVariable( 'day_array', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'day_array' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 25,
  ),
  1 => 
  array (
    0 => 37,
    1 => 4,
    2 => 1156,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/parts/blog/calendar.tpl',
) );
    $tpl->setVariable( 'day_array', ' ', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'day_array', ' ', $rootNamespace );
}

// def $loop_dayone
if ( $tpl->hasVariable( 'loop_dayone', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'loop_dayone' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 25,
  ),
  1 => 
  array (
    0 => 37,
    1 => 4,
    2 => 1156,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/parts/blog/calendar.tpl',
) );
    $tpl->setVariable( 'loop_dayone', 1, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'loop_dayone', 1, $rootNamespace );
}

// def $loop_daylast
if ( $tpl->hasVariable( 'loop_daylast', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'loop_daylast' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 25,
  ),
  1 => 
  array (
    0 => 37,
    1 => 4,
    2 => 1156,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/parts/blog/calendar.tpl',
) );
    $tpl->setVariable( 'loop_daylast', 1, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'loop_daylast', 1, $rootNamespace );
}

// def $day_blogs
if ( $tpl->hasVariable( 'day_blogs', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'day_blogs' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 25,
  ),
  1 => 
  array (
    0 => 37,
    1 => 4,
    2 => 1156,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/parts/blog/calendar.tpl',
) );
    $tpl->setVariable( 'day_blogs', array (
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'day_blogs', array (
), $rootNamespace );
}

// def $loop_count
if ( $tpl->hasVariable( 'loop_count', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'loop_count' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 25,
  ),
  1 => 
  array (
    0 => 37,
    1 => 4,
    2 => 1156,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/parts/blog/calendar.tpl',
) );
    $tpl->setVariable( 'loop_count', 0, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'loop_count', 0, $rootNamespace );
}

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'temp_month', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['temp_month'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) != ( 12 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'temp_month', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['temp_month'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = $var2 + 1.000000;
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'temp_year', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['temp_year'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var = mktime( 0, 0, 0, $var1, 1, $var3 );
unset( $var1, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'last_ts', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['last_ts'] = $var;
    unset( $var );
}
}
else
{
$text .= '    ';
unset( $var );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'temp_year', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['temp_year'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = $var4 + 1.000000;
unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var = mktime( 0, 0, 0, 1, 1, $var3 );
unset( $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'last_ts', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['last_ts'] = $var;
    unset( $var );
}
}
unset( $if_cond );
// if ends

// def $blog_items
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'blog_node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['blog_node_id'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var3 );
unset( $var4 );
unset( $var5 );
unset( $var6 );
unset( $var6 );
$var6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'first_ts', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['first_ts'] : null;
if (! isset( $var6 ) ) $var6 = NULL;
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
$var5 = $var6 + 1.000000;
unset( $var6 );
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
unset( $var6 );
unset( $var7 );
unset( $var7 );
$var7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'last_ts', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['last_ts'] : null;
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
$var6 = $var7 - 1.000000;
unset( $var7 );
if (! isset( $var6 ) ) $var6 = NULL;
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
$var4 = array( $var5, $var6 );unset( $var5, $var6 );
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = array( "blog_post/publication_date", "between", $var4 );unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( $var3 );unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchObjectTree' ),
  array(     'parent_node_id' => $var1,
    'sort_by' => array( "attribute",
       true,
       "blog_post/publication_date" ),
    'only_translated' => false,
    'language' => false,
    'offset' => false,
    'limit' => false,
    'depth' => 1,
    'depth_operator' => "le",
    'class_id' => false,
    'attribute_filter' => $var2,
    'extended_attribute_filter' => false,
    'class_filter_type' => "include",
    'class_filter_array' => array( "blog_post" ),
    'group_by' => false,
    'main_node_only' => true,
    'ignore_visibility' => false,
    'limitation' => null,
    'as_object' => null,
    'objectname_filter' => null,
    'load_data_map' => null ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'blog_items', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'blog_items' is already defined.", array (
  0 => 
  array (
    0 => 45,
    1 => 0,
    2 => 1317,
  ),
  1 => 
  array (
    0 => 58,
    1 => 0,
    2 => 2142,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/parts/blog/calendar.tpl',
) );
    $tpl->setVariable( 'blog_items', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'blog_items', $var, $rootNamespace );
}

// def $url_reload
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'blog_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['blog_node'] : null;
$var2 = compiledFetchAttribute( $var1, 'url_alias' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'temp_today', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['temp_today'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'temp_month', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['temp_month'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
unset( $var7 );
unset( $var7 );
$var7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'temp_year', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['temp_year'] : null;
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
$var = ( $var1 . '/(day)/' . $var3 . '/(month)/' . $var5 . '/(year)/' . $var7 . '/offset/2' );
unset( $var1, $var3, $var5, $var7 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'url_reload', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'url_reload' is already defined.", array (
  0 => 
  array (
    0 => 45,
    1 => 0,
    2 => 1317,
  ),
  1 => 
  array (
    0 => 58,
    1 => 0,
    2 => 2142,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/parts/blog/calendar.tpl',
) );
    $tpl->setVariable( 'url_reload', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'url_reload', $var, $rootNamespace );
}

// def $url_back
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'blog_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['blog_node'] : null;
$var2 = compiledFetchAttribute( $var1, 'url_alias' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'temp_month', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['temp_month'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = $var4 - 1.000000;
unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'temp_year', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['temp_year'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var = ( $var1 . '/(month)/' . $var3 . '/(year)/' . $var5 );
unset( $var1, $var3, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'url_back', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'url_back' is already defined.", array (
  0 => 
  array (
    0 => 45,
    1 => 0,
    2 => 1317,
  ),
  1 => 
  array (
    0 => 58,
    1 => 0,
    2 => 2142,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/parts/blog/calendar.tpl',
) );
    $tpl->setVariable( 'url_back', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'url_back', $var, $rootNamespace );
}

// def $url_forward
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'blog_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['blog_node'] : null;
$var2 = compiledFetchAttribute( $var1, 'url_alias' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'temp_month', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['temp_month'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = $var4 + 1.000000;
unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'temp_year', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['temp_year'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var = ( $var1 . '/(month)/' . $var3 . '/(year)/' . $var5 );
unset( $var1, $var3, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'url_forward', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'url_forward' is already defined.", array (
  0 => 
  array (
    0 => 45,
    1 => 0,
    2 => 1317,
  ),
  1 => 
  array (
    0 => 58,
    1 => 0,
    2 => 2142,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/parts/blog/calendar.tpl',
) );
    $tpl->setVariable( 'url_forward', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'url_forward', $var, $rootNamespace );
}

unset( $elseif_cond_08be395f059cda652bb023448458dcee_3 );
unset( $elseif_cond_08be395f059cda652bb023448458dcee_31 );
unset( $elseif_cond_08be395f059cda652bb023448458dcee_31 );
$elseif_cond_08be395f059cda652bb023448458dcee_31 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'temp_month', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['temp_month'] : null;
if (! isset( $elseif_cond_08be395f059cda652bb023448458dcee_31 ) ) $elseif_cond_08be395f059cda652bb023448458dcee_31 = NULL;
while ( is_object( $elseif_cond_08be395f059cda652bb023448458dcee_31 ) and method_exists( $elseif_cond_08be395f059cda652bb023448458dcee_31, 'templateValue' ) )
    $elseif_cond_08be395f059cda652bb023448458dcee_31 = $elseif_cond_08be395f059cda652bb023448458dcee_31->templateValue();
while ( is_object( $elseif_cond_08be395f059cda652bb023448458dcee_31 ) and method_exists( $elseif_cond_08be395f059cda652bb023448458dcee_31, 'templateValue' ) )
    $elseif_cond_08be395f059cda652bb023448458dcee_31 = $elseif_cond_08be395f059cda652bb023448458dcee_31->templateValue();
$elseif_cond_08be395f059cda652bb023448458dcee_3 = ( ( $elseif_cond_08be395f059cda652bb023448458dcee_31 ) == ( 12 ) );
unset( $elseif_cond_08be395f059cda652bb023448458dcee_31 );
if (! isset( $elseif_cond_08be395f059cda652bb023448458dcee_3 ) ) $elseif_cond_08be395f059cda652bb023448458dcee_3 = NULL;
while ( is_object( $elseif_cond_08be395f059cda652bb023448458dcee_3 ) and method_exists( $elseif_cond_08be395f059cda652bb023448458dcee_3, 'templateValue' ) )
    $elseif_cond_08be395f059cda652bb023448458dcee_3 = $elseif_cond_08be395f059cda652bb023448458dcee_3->templateValue();

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'temp_month', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['temp_month'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 1 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'blog_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['blog_node'] : null;
$var2 = compiledFetchAttribute( $var1, 'url_alias' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var5 );
unset( $var6 );
unset( $var6 );
$var6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'temp_year', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['temp_year'] : null;
if (! isset( $var6 ) ) $var6 = NULL;
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
$var5 = $var6 - 1.000000;
unset( $var6 );
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var = ( $var1 . '/(month)/' . '12' . '/(year)/' . $var5 );
unset( $var1, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'url_back', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['url_back'] = $var;
    unset( $var );
}
}
elseif ( $elseif_cond_08be395f059cda652bb023448458dcee_3 )
{
$text .= '    ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'blog_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['blog_node'] : null;
$var2 = compiledFetchAttribute( $var1, 'url_alias' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var5 );
unset( $var6 );
unset( $var6 );
$var6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'temp_year', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['temp_year'] : null;
if (! isset( $var6 ) ) $var6 = NULL;
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
$var5 = $var6 + 1.000000;
unset( $var6 );
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var = ( $var1 . '/(month)/' . '1' . '/(year)/' . $var5 );
unset( $var1, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'url_forward', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['url_forward'] = $var;
    unset( $var );
}
}
unset( $if_cond );
// if ends

unset( $elseif_cond_08be395f059cda652bb023448458dcee_3 );

// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_08be395f059cda652bb023448458dcee_3 ) ) $fe_variable_stack_08be395f059cda652bb023448458dcee_3 = array();
$fe_variable_stack_08be395f059cda652bb023448458dcee_3[] = compact( 'fe_array_08be395f059cda652bb023448458dcee_3', 'fe_array_keys_08be395f059cda652bb023448458dcee_3', 'fe_n_items_08be395f059cda652bb023448458dcee_3', 'fe_n_items_processed_08be395f059cda652bb023448458dcee_3', 'fe_i_08be395f059cda652bb023448458dcee_3', 'fe_key_08be395f059cda652bb023448458dcee_3', 'fe_val_08be395f059cda652bb023448458dcee_3', 'fe_offset_08be395f059cda652bb023448458dcee_3', 'fe_max_08be395f059cda652bb023448458dcee_3', 'fe_reverse_08be395f059cda652bb023448458dcee_3', 'fe_first_val_08be395f059cda652bb023448458dcee_3', 'fe_last_val_08be395f059cda652bb023448458dcee_3' );
unset( $fe_array_08be395f059cda652bb023448458dcee_3 );
unset( $fe_array_08be395f059cda652bb023448458dcee_3 );
$fe_array_08be395f059cda652bb023448458dcee_3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'blog_items', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['blog_items'] : null;
if (! isset( $fe_array_08be395f059cda652bb023448458dcee_3 ) ) $fe_array_08be395f059cda652bb023448458dcee_3 = NULL;
while ( is_object( $fe_array_08be395f059cda652bb023448458dcee_3 ) and method_exists( $fe_array_08be395f059cda652bb023448458dcee_3, 'templateValue' ) )
    $fe_array_08be395f059cda652bb023448458dcee_3 = $fe_array_08be395f059cda652bb023448458dcee_3->templateValue();

$fe_array_keys_08be395f059cda652bb023448458dcee_3 = is_array( $fe_array_08be395f059cda652bb023448458dcee_3 ) ? array_keys( $fe_array_08be395f059cda652bb023448458dcee_3 ) : array();
$fe_n_items_08be395f059cda652bb023448458dcee_3 = count( $fe_array_keys_08be395f059cda652bb023448458dcee_3 );
$fe_n_items_processed_08be395f059cda652bb023448458dcee_3 = 0;
$fe_offset_08be395f059cda652bb023448458dcee_3 = 0;
$fe_max_08be395f059cda652bb023448458dcee_3 = $fe_n_items_08be395f059cda652bb023448458dcee_3 - $fe_offset_08be395f059cda652bb023448458dcee_3;
$fe_reverse_08be395f059cda652bb023448458dcee_3 = false;
if ( $fe_offset_08be395f059cda652bb023448458dcee_3 < 0 || $fe_offset_08be395f059cda652bb023448458dcee_3 >= $fe_n_items_08be395f059cda652bb023448458dcee_3 )
{
    $fe_offset_08be395f059cda652bb023448458dcee_3 = ( $fe_offset_08be395f059cda652bb023448458dcee_3 < 0 ) ? 0 : $fe_n_items_08be395f059cda652bb023448458dcee_3;
    if ( $fe_n_items_08be395f059cda652bb023448458dcee_3 || $fe_offset_08be395f059cda652bb023448458dcee_3 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_08be395f059cda652bb023448458dcee_3'. Array count: $fe_n_items_08be395f059cda652bb023448458dcee_3");   
}
}
if ( $fe_max_08be395f059cda652bb023448458dcee_3 < 0 || $fe_offset_08be395f059cda652bb023448458dcee_3 + $fe_max_08be395f059cda652bb023448458dcee_3 > $fe_n_items_08be395f059cda652bb023448458dcee_3 )
{
    if ( $fe_max_08be395f059cda652bb023448458dcee_3 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_08be395f059cda652bb023448458dcee_3");
    $fe_max_08be395f059cda652bb023448458dcee_3 = $fe_n_items_08be395f059cda652bb023448458dcee_3 - $fe_offset_08be395f059cda652bb023448458dcee_3;
}
if ( $fe_reverse_08be395f059cda652bb023448458dcee_3 )
{
    $fe_first_val_08be395f059cda652bb023448458dcee_3 = $fe_n_items_08be395f059cda652bb023448458dcee_3 - 1 - $fe_offset_08be395f059cda652bb023448458dcee_3;
    $fe_last_val_08be395f059cda652bb023448458dcee_3  = 0;
}
else
{
    $fe_first_val_08be395f059cda652bb023448458dcee_3 = $fe_offset_08be395f059cda652bb023448458dcee_3;
    $fe_last_val_08be395f059cda652bb023448458dcee_3  = $fe_n_items_08be395f059cda652bb023448458dcee_3 - 1;
}
// foreach
for ( $fe_i_08be395f059cda652bb023448458dcee_3 = $fe_first_val_08be395f059cda652bb023448458dcee_3; $fe_n_items_processed_08be395f059cda652bb023448458dcee_3 < $fe_max_08be395f059cda652bb023448458dcee_3 && ( $fe_reverse_08be395f059cda652bb023448458dcee_3 ? $fe_i_08be395f059cda652bb023448458dcee_3 >= $fe_last_val_08be395f059cda652bb023448458dcee_3 : $fe_i_08be395f059cda652bb023448458dcee_3 <= $fe_last_val_08be395f059cda652bb023448458dcee_3 ); $fe_reverse_08be395f059cda652bb023448458dcee_3 ? $fe_i_08be395f059cda652bb023448458dcee_3-- : $fe_i_08be395f059cda652bb023448458dcee_3++ )
{
$fe_key_08be395f059cda652bb023448458dcee_3 = $fe_array_keys_08be395f059cda652bb023448458dcee_3[$fe_i_08be395f059cda652bb023448458dcee_3];
$fe_val_08be395f059cda652bb023448458dcee_3 = $fe_array_08be395f059cda652bb023448458dcee_3[$fe_key_08be395f059cda652bb023448458dcee_3];
$vars[$rootNamespace]['blog'] = $fe_val_08be395f059cda652bb023448458dcee_3;
$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'temp_month', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['temp_month'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = (int)$if_cond2;
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'blog', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['blog'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'data_map' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'publication_date' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'content' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'month' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = (int)$if_cond3;
unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond = ( ( $if_cond1 ) == ( $if_cond2 ) );
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'blog', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['blog'] : null;
$var1 = compiledFetchAttribute( $var, 'data_map' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'publication_date' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'content' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'day' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'loop_dayone', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['loop_dayone'] = $var;
    unset( $var );
}
$text .= '    ';
}
else
{
$text .= '        ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'loop_dayone', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['loop_dayone'] = 1;
}
$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'temp_month', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['temp_month'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = (int)$if_cond2;
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'blog', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['blog'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'data_map' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'publication_date' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'content' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'month' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = (int)$if_cond3;
unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond = ( ( $if_cond1 ) == ( $if_cond2 ) );
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'blog', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['blog'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'data_map' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'to_time' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'content' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_valid' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'blog', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['blog'] : null;
$var1 = compiledFetchAttribute( $var, 'data_map' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'publication_date' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'content' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'day' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'loop_daylast', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['loop_daylast'] = $var;
    unset( $var );
}
$text .= '        ';
}
else
{
$text .= '            ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'loop_dayone', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['loop_dayone'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'loop_daylast', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['loop_daylast'] = $var;
    unset( $var );
}
$text .= '        ';
}
unset( $if_cond );
// if ends

$text .= '    ';
}
else
{
$text .= '        ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'days', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['days'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'loop_daylast', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['loop_daylast'] = $var;
    unset( $var );
}
$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '    ';
// for begins
if ( !isset( $for_variable_stack_08be395f059cda652bb023448458dcee_1 ) ) $for_variable_stack_08be395f059cda652bb023448458dcee_1 = array();
$for_variable_stack_08be395f059cda652bb023448458dcee_1[] = compact( 'for_firstval_08be395f059cda652bb023448458dcee_1', 'for_lastval_08be395f059cda652bb023448458dcee_1', 'for_i_08be395f059cda652bb023448458dcee_1' );
unset( $for_firstval_08be395f059cda652bb023448458dcee_1 );
unset( $for_firstval_08be395f059cda652bb023448458dcee_11 );
unset( $for_firstval_08be395f059cda652bb023448458dcee_11 );
$for_firstval_08be395f059cda652bb023448458dcee_11 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'loop_dayone', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['loop_dayone'] : null;
if (! isset( $for_firstval_08be395f059cda652bb023448458dcee_11 ) ) $for_firstval_08be395f059cda652bb023448458dcee_11 = NULL;
while ( is_object( $for_firstval_08be395f059cda652bb023448458dcee_11 ) and method_exists( $for_firstval_08be395f059cda652bb023448458dcee_11, 'templateValue' ) )
    $for_firstval_08be395f059cda652bb023448458dcee_11 = $for_firstval_08be395f059cda652bb023448458dcee_11->templateValue();
$for_firstval_08be395f059cda652bb023448458dcee_1 = (int)$for_firstval_08be395f059cda652bb023448458dcee_11;
unset( $for_firstval_08be395f059cda652bb023448458dcee_11 );
if (! isset( $for_firstval_08be395f059cda652bb023448458dcee_1 ) ) $for_firstval_08be395f059cda652bb023448458dcee_1 = NULL;
while ( is_object( $for_firstval_08be395f059cda652bb023448458dcee_1 ) and method_exists( $for_firstval_08be395f059cda652bb023448458dcee_1, 'templateValue' ) )
    $for_firstval_08be395f059cda652bb023448458dcee_1 = $for_firstval_08be395f059cda652bb023448458dcee_1->templateValue();

unset( $for_lastval_08be395f059cda652bb023448458dcee_1 );
unset( $for_lastval_08be395f059cda652bb023448458dcee_11 );
unset( $for_lastval_08be395f059cda652bb023448458dcee_11 );
$for_lastval_08be395f059cda652bb023448458dcee_11 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'loop_daylast', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['loop_daylast'] : null;
if (! isset( $for_lastval_08be395f059cda652bb023448458dcee_11 ) ) $for_lastval_08be395f059cda652bb023448458dcee_11 = NULL;
while ( is_object( $for_lastval_08be395f059cda652bb023448458dcee_11 ) and method_exists( $for_lastval_08be395f059cda652bb023448458dcee_11, 'templateValue' ) )
    $for_lastval_08be395f059cda652bb023448458dcee_11 = $for_lastval_08be395f059cda652bb023448458dcee_11->templateValue();
$for_lastval_08be395f059cda652bb023448458dcee_1 = (int)$for_lastval_08be395f059cda652bb023448458dcee_11;
unset( $for_lastval_08be395f059cda652bb023448458dcee_11 );
if (! isset( $for_lastval_08be395f059cda652bb023448458dcee_1 ) ) $for_lastval_08be395f059cda652bb023448458dcee_1 = NULL;
while ( is_object( $for_lastval_08be395f059cda652bb023448458dcee_1 ) and method_exists( $for_lastval_08be395f059cda652bb023448458dcee_1, 'templateValue' ) )
    $for_lastval_08be395f059cda652bb023448458dcee_1 = $for_lastval_08be395f059cda652bb023448458dcee_1->templateValue();

$skipDelimiter = true;
for ( $for_i_08be395f059cda652bb023448458dcee_1 = $for_firstval_08be395f059cda652bb023448458dcee_1 ; ; $for_firstval_08be395f059cda652bb023448458dcee_1 < $for_lastval_08be395f059cda652bb023448458dcee_1 ? $for_i_08be395f059cda652bb023448458dcee_1++ : $for_i_08be395f059cda652bb023448458dcee_1-- )
{
$vars[$rootNamespace]['counter'] = $for_i_08be395f059cda652bb023448458dcee_1;
if ( !( $for_firstval_08be395f059cda652bb023448458dcee_1 < $for_lastval_08be395f059cda652bb023448458dcee_1 ? $for_i_08be395f059cda652bb023448458dcee_1 <= $for_lastval_08be395f059cda652bb023448458dcee_1 : $for_i_08be395f059cda652bb023448458dcee_1 >= $for_lastval_08be395f059cda652bb023448458dcee_1 ) )
   break;

$text .= '        ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'day_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['day_array'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'counter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['counter'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = ( $var1 . $var2 . ', ' );
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'day_array', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['day_array'] = $var;
    unset( $var );
}
$text .= '        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'counter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['counter'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'temp_today', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['temp_today'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond = ( ( $if_cond1 ) == ( $if_cond2 ) );
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'event', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['event'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'day_blogs', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['day_blogs'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( is_string( $var2 ) )
    $var = $var2 . implode( '', array( $var1 ) );
else if( is_array( $var2 ) )
    $var = array_merge( $var2, array( $var1 ) );
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'day_blogs', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['day_blogs'] = $var;
    unset( $var );
}
$text .= '        ';
}
unset( $if_cond );
// if ends

$text .= '    ';
} // for
if ( count( $for_variable_stack_08be395f059cda652bb023448458dcee_1 ) ) extract( array_pop( $for_variable_stack_08be395f059cda652bb023448458dcee_1 ) );

else
{

unset( $vars[$rootNamespace]['counter'] );
unset( $for_firstval_08be395f059cda652bb023448458dcee_1 );

unset( $for_lastval_08be395f059cda652bb023448458dcee_1 );

unset( $for_i_08be395f059cda652bb023448458dcee_1 );

unset( $for_variable_stack_08be395f059cda652bb023448458dcee_1 );

}

$skipDelimiter = false;
// for ends

$fe_n_items_processed_08be395f059cda652bb023448458dcee_3++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_08be395f059cda652bb023448458dcee_3 ) ) extract( array_pop( $fe_variable_stack_08be395f059cda652bb023448458dcee_3 ) );

else
{

unset( $fe_array_08be395f059cda652bb023448458dcee_3 );

unset( $fe_array_keys_08be395f059cda652bb023448458dcee_3 );

unset( $fe_n_items_08be395f059cda652bb023448458dcee_3 );

unset( $fe_n_items_processed_08be395f059cda652bb023448458dcee_3 );

unset( $fe_i_08be395f059cda652bb023448458dcee_3 );

unset( $fe_key_08be395f059cda652bb023448458dcee_3 );

unset( $fe_val_08be395f059cda652bb023448458dcee_3 );

unset( $fe_offset_08be395f059cda652bb023448458dcee_3 );

unset( $fe_max_08be395f059cda652bb023448458dcee_3 );

unset( $fe_reverse_08be395f059cda652bb023448458dcee_3 );

unset( $fe_first_val_08be395f059cda652bb023448458dcee_3 );

unset( $fe_last_val_08be395f059cda652bb023448458dcee_3 );

unset( $fe_variable_stack_08be395f059cda652bb023448458dcee_3 );

}

// foreach ends
$text .= '
<div class="calendar">

<div class="month">
<div class="previous">
<p><a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'url_back', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['url_back'] : null;
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

$text .= ' title="Previous month">&#8249;&#8249;<span class="hide"> Previous month</span></a></p>
</div>
<div class="next">
<p><a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'url_forward', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['url_forward'] : null;
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

$text .= ' title="Next month"><span class="hide">Next month </span>&#8250;&#8250;</a></p>
</div>
<h2>';
unset( $var );
unset( $var1 );
$locale = eZLocale::instance();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'temp_ts', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['temp_ts'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = $locale->formatDateTimeType( '%F', $var2 );
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$strlenFunc = 'mb_strlen'; $substrFunc = 'mb_substr';
$i18nIni = eZINI::instance( 'i18n.ini' );
                                                                  $hasMBString = ( $i18nIni->variable( 'CharacterSettings', 'MBStringExtension' ) == 'enabled' and
                                                                  function_exists( "mb_strtoupper" ) and
                                                                  function_exists( "mb_substr" ) and
                                                                  function_exists( "mb_strlen" ) );

                                                                  if ( $hasMBString )
                                                                  {
                                                                      $encoding = eZTextCodec::internalCharset();
                                                                      $firstLetter = mb_strtoupper( mb_substr( $var1, 0, 1, $encoding ), $encoding );
                                                                      $remainingText = mb_substr( $var1, 1, mb_strlen( $var1, $encoding ), $encoding );
                                                                      $var = $firstLetter . $remainingText;
                                                                  }
                                                                  else
                                                                  {
                                                                     $var = ucfirst( $var1 );
                                                                  }
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '&nbsp;';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'temp_year', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['temp_year'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</h2>
</div>

<table cellspacing="0" border="0" summary="Calendar" class="list table-colorized">
<tr class="top">
    <th class="left">Mon</th>
    <th>Tue</th>
    <th>Wed</th>
    <th>Thu</th>
    <th>Fri</th>
    <th>Sat</th>
    <th class="right">Sun</th>
</tr>';
// def $counter
if ( $tpl->hasVariable( 'counter', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'counter' is already defined.", array (
  0 => 
  array (
    0 => 111,
    1 => 0,
    2 => 4394,
  ),
  1 => 
  array (
    0 => 111,
    1 => 60,
    2 => 4454,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/parts/blog/calendar.tpl',
) );
    $tpl->setVariable( 'counter', 1, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'counter', 1, $rootNamespace );
}

// def $col_counter
if ( $tpl->hasVariable( 'col_counter', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'col_counter' is already defined.", array (
  0 => 
  array (
    0 => 111,
    1 => 0,
    2 => 4394,
  ),
  1 => 
  array (
    0 => 111,
    1 => 60,
    2 => 4454,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/parts/blog/calendar.tpl',
) );
    $tpl->setVariable( 'col_counter', 1, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'col_counter', 1, $rootNamespace );
}

// def $css_col_class
if ( $tpl->hasVariable( 'css_col_class', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'css_col_class' is already defined.", array (
  0 => 
  array (
    0 => 111,
    1 => 0,
    2 => 4394,
  ),
  1 => 
  array (
    0 => 111,
    1 => 60,
    2 => 4454,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/parts/blog/calendar.tpl',
) );
    $tpl->setVariable( 'css_col_class', '', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'css_col_class', '', $rootNamespace );
}

// def $col_end
if ( $tpl->hasVariable( 'col_end', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'col_end' is already defined.", array (
  0 => 
  array (
    0 => 111,
    1 => 0,
    2 => 4394,
  ),
  1 => 
  array (
    0 => 111,
    1 => 60,
    2 => 4454,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/parts/blog/calendar.tpl',
) );
    $tpl->setVariable( 'col_end', 0, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'col_end', 0, $rootNamespace );
}

$skipDelimiter = true;
while ( 1 ) // while
{
unset( $while_cond );
unset( $while_cond1 );
unset( $while_cond1 );
$while_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'counter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['counter'] : null;
if (! isset( $while_cond1 ) ) $while_cond1 = NULL;
while ( is_object( $while_cond1 ) and method_exists( $while_cond1, 'templateValue' ) )
    $while_cond1 = $while_cond1->templateValue();
unset( $while_cond2 );
unset( $while_cond2 );
$while_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'days', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['days'] : null;
if (! isset( $while_cond2 ) ) $while_cond2 = NULL;
while ( is_object( $while_cond2 ) and method_exists( $while_cond2, 'templateValue' ) )
    $while_cond2 = $while_cond2->templateValue();
$while_cond = ( ( $while_cond1 ) <= ( $while_cond2 ) );
unset( $while_cond1, $while_cond2 );
if (! isset( $while_cond ) ) $while_cond = NULL;
while ( is_object( $while_cond ) and method_exists( $while_cond, 'templateValue' ) )
    $while_cond = $while_cond->templateValue();

if ( ! $while_cond ) break;

$text .= '    ';
unset( $var );
$locale = eZLocale::instance();
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'temp_month', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['temp_month'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'counter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['counter'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'temp_year', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['temp_year'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var1 = mktime( 0, 0, 0, $var2, $var3, $var4 );
unset( $var2, $var3, $var4 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = $locale->formatDateTimeType( '%w', $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'dayofweek', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['dayofweek'] = $var;
    unset( $var );
}
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'css_col_class', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['css_col_class'] = '';
}
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'dayofweek', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['dayofweek'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = ( ( $var2 ) == ( 0 ) );
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'counter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['counter'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'days', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['days'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var2 = ( ( $var3 ) == ( $var4 ) );
unset( $var3, $var4 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( $var1 )
    $var = $var1;
else if ( $var2 )
    $var = $var2;
else
    $var = false;
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'col_end', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['col_end'] = $var;
    unset( $var );
}
$text .= '    ';
unset( $elseif_cond_08be395f059cda652bb023448458dcee_10 );
unset( $elseif_cond_08be395f059cda652bb023448458dcee_101 );
unset( $elseif_cond_08be395f059cda652bb023448458dcee_101 );
$elseif_cond_08be395f059cda652bb023448458dcee_101 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'col_end', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['col_end'] : null;
if (! isset( $elseif_cond_08be395f059cda652bb023448458dcee_101 ) ) $elseif_cond_08be395f059cda652bb023448458dcee_101 = NULL;
while ( is_object( $elseif_cond_08be395f059cda652bb023448458dcee_101 ) and method_exists( $elseif_cond_08be395f059cda652bb023448458dcee_101, 'templateValue' ) )
    $elseif_cond_08be395f059cda652bb023448458dcee_101 = $elseif_cond_08be395f059cda652bb023448458dcee_101->templateValue();
while ( is_object( $elseif_cond_08be395f059cda652bb023448458dcee_101 ) and method_exists( $elseif_cond_08be395f059cda652bb023448458dcee_101, 'templateValue' ) )
    $elseif_cond_08be395f059cda652bb023448458dcee_101 = $elseif_cond_08be395f059cda652bb023448458dcee_101->templateValue();
unset( $elseif_cond_08be395f059cda652bb023448458dcee_102 );
unset( $elseif_cond_08be395f059cda652bb023448458dcee_103 );
unset( $elseif_cond_08be395f059cda652bb023448458dcee_104 );
unset( $elseif_cond_08be395f059cda652bb023448458dcee_105 );
unset( $elseif_cond_08be395f059cda652bb023448458dcee_105 );
$elseif_cond_08be395f059cda652bb023448458dcee_105 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'counter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['counter'] : null;
if (! isset( $elseif_cond_08be395f059cda652bb023448458dcee_105 ) ) $elseif_cond_08be395f059cda652bb023448458dcee_105 = NULL;
while ( is_object( $elseif_cond_08be395f059cda652bb023448458dcee_105 ) and method_exists( $elseif_cond_08be395f059cda652bb023448458dcee_105, 'templateValue' ) )
    $elseif_cond_08be395f059cda652bb023448458dcee_105 = $elseif_cond_08be395f059cda652bb023448458dcee_105->templateValue();
while ( is_object( $elseif_cond_08be395f059cda652bb023448458dcee_105 ) and method_exists( $elseif_cond_08be395f059cda652bb023448458dcee_105, 'templateValue' ) )
    $elseif_cond_08be395f059cda652bb023448458dcee_105 = $elseif_cond_08be395f059cda652bb023448458dcee_105->templateValue();
unset( $elseif_cond_08be395f059cda652bb023448458dcee_106 );
unset( $elseif_cond_08be395f059cda652bb023448458dcee_106 );
$elseif_cond_08be395f059cda652bb023448458dcee_106 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'days', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['days'] : null;
if (! isset( $elseif_cond_08be395f059cda652bb023448458dcee_106 ) ) $elseif_cond_08be395f059cda652bb023448458dcee_106 = NULL;
while ( is_object( $elseif_cond_08be395f059cda652bb023448458dcee_106 ) and method_exists( $elseif_cond_08be395f059cda652bb023448458dcee_106, 'templateValue' ) )
    $elseif_cond_08be395f059cda652bb023448458dcee_106 = $elseif_cond_08be395f059cda652bb023448458dcee_106->templateValue();
while ( is_object( $elseif_cond_08be395f059cda652bb023448458dcee_106 ) and method_exists( $elseif_cond_08be395f059cda652bb023448458dcee_106, 'templateValue' ) )
    $elseif_cond_08be395f059cda652bb023448458dcee_106 = $elseif_cond_08be395f059cda652bb023448458dcee_106->templateValue();
$elseif_cond_08be395f059cda652bb023448458dcee_104 = ( ( $elseif_cond_08be395f059cda652bb023448458dcee_105 ) == ( $elseif_cond_08be395f059cda652bb023448458dcee_106 ) );
unset( $elseif_cond_08be395f059cda652bb023448458dcee_105, $elseif_cond_08be395f059cda652bb023448458dcee_106 );
if (! isset( $elseif_cond_08be395f059cda652bb023448458dcee_104 ) ) $elseif_cond_08be395f059cda652bb023448458dcee_104 = NULL;
while ( is_object( $elseif_cond_08be395f059cda652bb023448458dcee_104 ) and method_exists( $elseif_cond_08be395f059cda652bb023448458dcee_104, 'templateValue' ) )
    $elseif_cond_08be395f059cda652bb023448458dcee_104 = $elseif_cond_08be395f059cda652bb023448458dcee_104->templateValue();
unset( $elseif_cond_08be395f059cda652bb023448458dcee_105 );
unset( $elseif_cond_08be395f059cda652bb023448458dcee_106 );
unset( $elseif_cond_08be395f059cda652bb023448458dcee_106 );
$elseif_cond_08be395f059cda652bb023448458dcee_106 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'span2', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['span2'] : null;
if (! isset( $elseif_cond_08be395f059cda652bb023448458dcee_106 ) ) $elseif_cond_08be395f059cda652bb023448458dcee_106 = NULL;
while ( is_object( $elseif_cond_08be395f059cda652bb023448458dcee_106 ) and method_exists( $elseif_cond_08be395f059cda652bb023448458dcee_106, 'templateValue' ) )
    $elseif_cond_08be395f059cda652bb023448458dcee_106 = $elseif_cond_08be395f059cda652bb023448458dcee_106->templateValue();
while ( is_object( $elseif_cond_08be395f059cda652bb023448458dcee_106 ) and method_exists( $elseif_cond_08be395f059cda652bb023448458dcee_106, 'templateValue' ) )
    $elseif_cond_08be395f059cda652bb023448458dcee_106 = $elseif_cond_08be395f059cda652bb023448458dcee_106->templateValue();
$elseif_cond_08be395f059cda652bb023448458dcee_105 = ( ( $elseif_cond_08be395f059cda652bb023448458dcee_106 ) > ( 0 ) );
unset( $elseif_cond_08be395f059cda652bb023448458dcee_106 );
if (! isset( $elseif_cond_08be395f059cda652bb023448458dcee_105 ) ) $elseif_cond_08be395f059cda652bb023448458dcee_105 = NULL;
while ( is_object( $elseif_cond_08be395f059cda652bb023448458dcee_105 ) and method_exists( $elseif_cond_08be395f059cda652bb023448458dcee_105, 'templateValue' ) )
    $elseif_cond_08be395f059cda652bb023448458dcee_105 = $elseif_cond_08be395f059cda652bb023448458dcee_105->templateValue();
unset( $elseif_cond_08be395f059cda652bb023448458dcee_106 );
unset( $elseif_cond_08be395f059cda652bb023448458dcee_107 );
unset( $elseif_cond_08be395f059cda652bb023448458dcee_107 );
$elseif_cond_08be395f059cda652bb023448458dcee_107 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'span2', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['span2'] : null;
if (! isset( $elseif_cond_08be395f059cda652bb023448458dcee_107 ) ) $elseif_cond_08be395f059cda652bb023448458dcee_107 = NULL;
while ( is_object( $elseif_cond_08be395f059cda652bb023448458dcee_107 ) and method_exists( $elseif_cond_08be395f059cda652bb023448458dcee_107, 'templateValue' ) )
    $elseif_cond_08be395f059cda652bb023448458dcee_107 = $elseif_cond_08be395f059cda652bb023448458dcee_107->templateValue();
while ( is_object( $elseif_cond_08be395f059cda652bb023448458dcee_107 ) and method_exists( $elseif_cond_08be395f059cda652bb023448458dcee_107, 'templateValue' ) )
    $elseif_cond_08be395f059cda652bb023448458dcee_107 = $elseif_cond_08be395f059cda652bb023448458dcee_107->templateValue();
$elseif_cond_08be395f059cda652bb023448458dcee_106 = ( ( $elseif_cond_08be395f059cda652bb023448458dcee_107 ) != ( 7 ) );
unset( $elseif_cond_08be395f059cda652bb023448458dcee_107 );
if (! isset( $elseif_cond_08be395f059cda652bb023448458dcee_106 ) ) $elseif_cond_08be395f059cda652bb023448458dcee_106 = NULL;
while ( is_object( $elseif_cond_08be395f059cda652bb023448458dcee_106 ) and method_exists( $elseif_cond_08be395f059cda652bb023448458dcee_106, 'templateValue' ) )
    $elseif_cond_08be395f059cda652bb023448458dcee_106 = $elseif_cond_08be395f059cda652bb023448458dcee_106->templateValue();
if ( !$elseif_cond_08be395f059cda652bb023448458dcee_104 )
    $elseif_cond_08be395f059cda652bb023448458dcee_103 = false;
else if ( !$elseif_cond_08be395f059cda652bb023448458dcee_105 )
    $elseif_cond_08be395f059cda652bb023448458dcee_103 = false;
else if ( !$elseif_cond_08be395f059cda652bb023448458dcee_106 )
    $elseif_cond_08be395f059cda652bb023448458dcee_103 = false;
else
    $elseif_cond_08be395f059cda652bb023448458dcee_103 = $elseif_cond_08be395f059cda652bb023448458dcee_106;
unset( $elseif_cond_08be395f059cda652bb023448458dcee_104, $elseif_cond_08be395f059cda652bb023448458dcee_105, $elseif_cond_08be395f059cda652bb023448458dcee_106 );
if (! isset( $elseif_cond_08be395f059cda652bb023448458dcee_103 ) ) $elseif_cond_08be395f059cda652bb023448458dcee_103 = NULL;
while ( is_object( $elseif_cond_08be395f059cda652bb023448458dcee_103 ) and method_exists( $elseif_cond_08be395f059cda652bb023448458dcee_103, 'templateValue' ) )
    $elseif_cond_08be395f059cda652bb023448458dcee_103 = $elseif_cond_08be395f059cda652bb023448458dcee_103->templateValue();
$elseif_cond_08be395f059cda652bb023448458dcee_102 = !( $elseif_cond_08be395f059cda652bb023448458dcee_103 );
unset( $elseif_cond_08be395f059cda652bb023448458dcee_103 );
if (! isset( $elseif_cond_08be395f059cda652bb023448458dcee_102 ) ) $elseif_cond_08be395f059cda652bb023448458dcee_102 = NULL;
while ( is_object( $elseif_cond_08be395f059cda652bb023448458dcee_102 ) and method_exists( $elseif_cond_08be395f059cda652bb023448458dcee_102, 'templateValue' ) )
    $elseif_cond_08be395f059cda652bb023448458dcee_102 = $elseif_cond_08be395f059cda652bb023448458dcee_102->templateValue();
if ( !$elseif_cond_08be395f059cda652bb023448458dcee_101 )
    $elseif_cond_08be395f059cda652bb023448458dcee_10 = false;
else if ( !$elseif_cond_08be395f059cda652bb023448458dcee_102 )
    $elseif_cond_08be395f059cda652bb023448458dcee_10 = false;
else
    $elseif_cond_08be395f059cda652bb023448458dcee_10 = $elseif_cond_08be395f059cda652bb023448458dcee_102;
unset( $elseif_cond_08be395f059cda652bb023448458dcee_101, $elseif_cond_08be395f059cda652bb023448458dcee_102 );
if (! isset( $elseif_cond_08be395f059cda652bb023448458dcee_10 ) ) $elseif_cond_08be395f059cda652bb023448458dcee_10 = NULL;
while ( is_object( $elseif_cond_08be395f059cda652bb023448458dcee_10 ) and method_exists( $elseif_cond_08be395f059cda652bb023448458dcee_10, 'templateValue' ) )
    $elseif_cond_08be395f059cda652bb023448458dcee_10 = $elseif_cond_08be395f059cda652bb023448458dcee_10->templateValue();

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'counter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['counter'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = ( ( $if_cond2 ) == ( 1 ) );
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'dayofweek', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['dayofweek'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = ( ( $if_cond3 ) == ( 1 ) );
unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if ( $if_cond1 )
    $if_cond = $if_cond1;
else if ( $if_cond2 )
    $if_cond = $if_cond2;
else
    $if_cond = false;
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        <tr class="';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'days', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['days'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'counter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['counter'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond1 = $if_cond2 - $if_cond3;
unset( $if_cond2, $if_cond3 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) <= ( 7 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'bottom';
}
unset( $if_cond );
// if ends

$text .= '">
        ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'css_col_class', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['css_col_class'] = ' left';
}
$text .= '    ';
}
elseif ( $elseif_cond_08be395f059cda652bb023448458dcee_10 )
{
$text .= '        ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'css_col_class', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['css_col_class'] = ' right';
}
$text .= '    ';
}
unset( $if_cond );
// if ends

unset( $elseif_cond_08be395f059cda652bb023448458dcee_10 );

$text .= '    ';
unset( $elseif_cond_08be395f059cda652bb023448458dcee_14 );
unset( $elseif_cond_08be395f059cda652bb023448458dcee_141 );
unset( $elseif_cond_08be395f059cda652bb023448458dcee_142 );
unset( $elseif_cond_08be395f059cda652bb023448458dcee_142 );
$elseif_cond_08be395f059cda652bb023448458dcee_142 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'span1', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['span1'] : null;
if (! isset( $elseif_cond_08be395f059cda652bb023448458dcee_142 ) ) $elseif_cond_08be395f059cda652bb023448458dcee_142 = NULL;
while ( is_object( $elseif_cond_08be395f059cda652bb023448458dcee_142 ) and method_exists( $elseif_cond_08be395f059cda652bb023448458dcee_142, 'templateValue' ) )
    $elseif_cond_08be395f059cda652bb023448458dcee_142 = $elseif_cond_08be395f059cda652bb023448458dcee_142->templateValue();
while ( is_object( $elseif_cond_08be395f059cda652bb023448458dcee_142 ) and method_exists( $elseif_cond_08be395f059cda652bb023448458dcee_142, 'templateValue' ) )
    $elseif_cond_08be395f059cda652bb023448458dcee_142 = $elseif_cond_08be395f059cda652bb023448458dcee_142->templateValue();
$elseif_cond_08be395f059cda652bb023448458dcee_141 = ( ( $elseif_cond_08be395f059cda652bb023448458dcee_142 ) == ( 0 ) );
unset( $elseif_cond_08be395f059cda652bb023448458dcee_142 );
if (! isset( $elseif_cond_08be395f059cda652bb023448458dcee_141 ) ) $elseif_cond_08be395f059cda652bb023448458dcee_141 = NULL;
while ( is_object( $elseif_cond_08be395f059cda652bb023448458dcee_141 ) and method_exists( $elseif_cond_08be395f059cda652bb023448458dcee_141, 'templateValue' ) )
    $elseif_cond_08be395f059cda652bb023448458dcee_141 = $elseif_cond_08be395f059cda652bb023448458dcee_141->templateValue();
unset( $elseif_cond_08be395f059cda652bb023448458dcee_142 );
unset( $elseif_cond_08be395f059cda652bb023448458dcee_143 );
unset( $elseif_cond_08be395f059cda652bb023448458dcee_143 );
$elseif_cond_08be395f059cda652bb023448458dcee_143 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'counter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['counter'] : null;
if (! isset( $elseif_cond_08be395f059cda652bb023448458dcee_143 ) ) $elseif_cond_08be395f059cda652bb023448458dcee_143 = NULL;
while ( is_object( $elseif_cond_08be395f059cda652bb023448458dcee_143 ) and method_exists( $elseif_cond_08be395f059cda652bb023448458dcee_143, 'templateValue' ) )
    $elseif_cond_08be395f059cda652bb023448458dcee_143 = $elseif_cond_08be395f059cda652bb023448458dcee_143->templateValue();
while ( is_object( $elseif_cond_08be395f059cda652bb023448458dcee_143 ) and method_exists( $elseif_cond_08be395f059cda652bb023448458dcee_143, 'templateValue' ) )
    $elseif_cond_08be395f059cda652bb023448458dcee_143 = $elseif_cond_08be395f059cda652bb023448458dcee_143->templateValue();
$elseif_cond_08be395f059cda652bb023448458dcee_142 = ( ( $elseif_cond_08be395f059cda652bb023448458dcee_143 ) == ( 1 ) );
unset( $elseif_cond_08be395f059cda652bb023448458dcee_143 );
if (! isset( $elseif_cond_08be395f059cda652bb023448458dcee_142 ) ) $elseif_cond_08be395f059cda652bb023448458dcee_142 = NULL;
while ( is_object( $elseif_cond_08be395f059cda652bb023448458dcee_142 ) and method_exists( $elseif_cond_08be395f059cda652bb023448458dcee_142, 'templateValue' ) )
    $elseif_cond_08be395f059cda652bb023448458dcee_142 = $elseif_cond_08be395f059cda652bb023448458dcee_142->templateValue();
if ( !$elseif_cond_08be395f059cda652bb023448458dcee_141 )
    $elseif_cond_08be395f059cda652bb023448458dcee_14 = false;
else if ( !$elseif_cond_08be395f059cda652bb023448458dcee_142 )
    $elseif_cond_08be395f059cda652bb023448458dcee_14 = false;
else
    $elseif_cond_08be395f059cda652bb023448458dcee_14 = $elseif_cond_08be395f059cda652bb023448458dcee_142;
unset( $elseif_cond_08be395f059cda652bb023448458dcee_141, $elseif_cond_08be395f059cda652bb023448458dcee_142 );
if (! isset( $elseif_cond_08be395f059cda652bb023448458dcee_14 ) ) $elseif_cond_08be395f059cda652bb023448458dcee_14 = NULL;
while ( is_object( $elseif_cond_08be395f059cda652bb023448458dcee_14 ) and method_exists( $elseif_cond_08be395f059cda652bb023448458dcee_14, 'templateValue' ) )
    $elseif_cond_08be395f059cda652bb023448458dcee_14 = $elseif_cond_08be395f059cda652bb023448458dcee_14->templateValue();

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'span1', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['span1'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = ( ( $if_cond2 ) > ( 1 ) );
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'counter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['counter'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = ( ( $if_cond3 ) == ( 1 ) );
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
$text .= '        ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'col_counter', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['col_counter'] = 1;
}
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'css_col_class', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['css_col_class'] = '';
}
$text .= '        ';
$skipDelimiter = true;
while ( 1 ) // while
{
unset( $while_cond );
unset( $while_cond1 );
unset( $while_cond1 );
$while_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'col_counter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['col_counter'] : null;
if (! isset( $while_cond1 ) ) $while_cond1 = NULL;
while ( is_object( $while_cond1 ) and method_exists( $while_cond1, 'templateValue' ) )
    $while_cond1 = $while_cond1->templateValue();
unset( $while_cond2 );
unset( $while_cond2 );
$while_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'span1', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['span1'] : null;
if (! isset( $while_cond2 ) ) $while_cond2 = NULL;
while ( is_object( $while_cond2 ) and method_exists( $while_cond2, 'templateValue' ) )
    $while_cond2 = $while_cond2->templateValue();
$while_cond = ( ( $while_cond1 ) != ( $while_cond2 ) );
unset( $while_cond1, $while_cond2 );
if (! isset( $while_cond ) ) $while_cond = NULL;
while ( is_object( $while_cond ) and method_exists( $while_cond, 'templateValue' ) )
    $while_cond = $while_cond->templateValue();

if ( ! $while_cond ) break;

$text .= '            <td';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'col_counter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['col_counter'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 1 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' class="left"';
}
unset( $if_cond );
// if ends

$text .= '>&nbsp;</td>
            ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'col_counter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['col_counter'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = $var1 + 1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'col_counter', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['col_counter'] = $var;
    unset( $var );
}
$text .= '        ';
} // end of while

unset( $while_cond );

$skipDelimiter = false;
$text .= '    ';
}
elseif ( $elseif_cond_08be395f059cda652bb023448458dcee_14 )
{
$text .= '        ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'col_counter', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['col_counter'] = 1;
}
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'css_col_class', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['css_col_class'] = '';
}
$text .= '        ';
$skipDelimiter = true;
while ( 1 ) // while
{
unset( $while_cond );
unset( $while_cond1 );
unset( $while_cond1 );
$while_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'col_counter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['col_counter'] : null;
if (! isset( $while_cond1 ) ) $while_cond1 = NULL;
while ( is_object( $while_cond1 ) and method_exists( $while_cond1, 'templateValue' ) )
    $while_cond1 = $while_cond1->templateValue();
$while_cond = ( ( $while_cond1 ) <= ( 6 ) );
unset( $while_cond1 );
if (! isset( $while_cond ) ) $while_cond = NULL;
while ( is_object( $while_cond ) and method_exists( $while_cond, 'templateValue' ) )
    $while_cond = $while_cond->templateValue();

if ( ! $while_cond ) break;

$text .= '            <td';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'col_counter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['col_counter'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 1 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' class="right"';
}
unset( $if_cond );
// if ends

$text .= '>&nbsp;</td>
            ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'col_counter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['col_counter'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = $var1 + 1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'col_counter', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['col_counter'] = $var;
    unset( $var );
}
$text .= '        ';
} // end of while

unset( $while_cond );

$skipDelimiter = false;
$text .= '    ';
}
unset( $if_cond );
// if ends

unset( $elseif_cond_08be395f059cda652bb023448458dcee_14 );

$text .= '    <td class="';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'counter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['counter'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'temp_today', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['temp_today'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond = ( ( $if_cond1 ) == ( $if_cond2 ) );
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'currentselected';
}
unset( $if_cond );
// if ends

$text .= ' ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'counter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['counter'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'curr_today', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['curr_today'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond1 = ( ( $if_cond2 ) == ( $if_cond3 ) );
unset( $if_cond2, $if_cond3 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'curr_month', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['curr_month'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'temp_month', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['temp_month'] : null;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
$if_cond2 = ( ( $if_cond3 ) == ( $if_cond4 ) );
unset( $if_cond3, $if_cond4 );
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
$text .= 'today';
}
unset( $if_cond );
// if ends

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'css_col_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['css_col_class'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'day_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['day_array'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'counter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['counter'] : null;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
$if_cond2 = ( ' ' . $if_cond4 . ',' );
unset( $if_cond4 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if( is_string( $if_cond1 ) )
{
  $if_cond = ( strpos( $if_cond1, $if_cond2 ) !== false );
}
else if ( is_array( $if_cond1 ) )
{
  $if_cond = in_array( $if_cond2, $if_cond1 );
}
else
{
$if_cond = false;
}unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        <em><a href=';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'blog_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['blog_node'] : null;
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
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'counter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['counter'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
unset( $var6 );
unset( $var6 );
$var6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'temp_month', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['temp_month'] : null;
if (! isset( $var6 ) ) $var6 = NULL;
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
unset( $var8 );
unset( $var8 );
$var8 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'temp_year', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['temp_year'] : null;
if (! isset( $var8 ) ) $var8 = NULL;
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();
$var1 = ( $var2 . '/(day)/' . $var4 . '/(month)/' . $var6 . '/(year)/' . $var8 );
unset( $var2, $var4, $var6, $var8 );
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

$text .= '>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'counter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['counter'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</a></em>
    ';
}
else
{
$text .= '        ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'counter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['counter'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
    ';
}
unset( $if_cond );
// if ends

$text .= '    </td>
    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'counter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['counter'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'days', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['days'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond1 = ( ( $if_cond2 ) == ( $if_cond3 ) );
unset( $if_cond2, $if_cond3 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'span2', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['span2'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = ( ( $if_cond3 ) > ( 0 ) );
unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'span2', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['span2'] : null;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
$if_cond3 = ( ( $if_cond4 ) != ( 7 ) );
unset( $if_cond4 );
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else if ( !$if_cond3 )
    $if_cond = false;
else
    $if_cond = $if_cond3;
unset( $if_cond1, $if_cond2, $if_cond3 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'col_counter', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['col_counter'] = 1;
}
$text .= '        ';
$skipDelimiter = true;
while ( 1 ) // while
{
unset( $while_cond );
unset( $while_cond1 );
unset( $while_cond1 );
$while_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'col_counter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['col_counter'] : null;
if (! isset( $while_cond1 ) ) $while_cond1 = NULL;
while ( is_object( $while_cond1 ) and method_exists( $while_cond1, 'templateValue' ) )
    $while_cond1 = $while_cond1->templateValue();
unset( $while_cond2 );
unset( $while_cond2 );
$while_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'span2', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['span2'] : null;
if (! isset( $while_cond2 ) ) $while_cond2 = NULL;
while ( is_object( $while_cond2 ) and method_exists( $while_cond2, 'templateValue' ) )
    $while_cond2 = $while_cond2->templateValue();
$while_cond = ( ( $while_cond1 ) <= ( $while_cond2 ) );
unset( $while_cond1, $while_cond2 );
if (! isset( $while_cond ) ) $while_cond = NULL;
while ( is_object( $while_cond ) and method_exists( $while_cond, 'templateValue' ) )
    $while_cond = $while_cond->templateValue();

if ( ! $while_cond ) break;

$text .= '            <td';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'col_counter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['col_counter'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'span2', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['span2'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond = ( ( $if_cond1 ) == ( $if_cond2 ) );
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' class="right"';
}
unset( $if_cond );
// if ends

$text .= '>&nbsp;</td>
            ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'col_counter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['col_counter'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = $var1 + 1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'col_counter', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['col_counter'] = $var;
    unset( $var );
}
$text .= '        ';
} // end of while

unset( $while_cond );

$skipDelimiter = false;
$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'col_end', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['col_end'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        </tr>
    ';
}
unset( $if_cond );
// if ends

$text .= '    ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'counter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['counter'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = $var1 + 1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'counter', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['counter'] = $var;
    unset( $var );
}
} // end of while

unset( $while_cond );

$skipDelimiter = false;
$text .= '</table>

</div>
';
// undef all
$tpl->unsetLocalVariables();
$text .= '
<!-- END: CAL NAV -->
';

$setArray = $oldSetArray_4b2ed1acd73ac050d09789e0c50249d6;
$tpl->Level--;
?>
