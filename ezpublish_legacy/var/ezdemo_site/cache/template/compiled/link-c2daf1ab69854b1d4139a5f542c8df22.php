<?php
// URI:       design:parts/websitetoolbar/link.tpl
// Filename:  extension/ezwt/design/standard/templates/parts/websitetoolbar/link.tpl
// Timestamp: 1400615729 (Tue May 20 21:55:29 CEST 2014)
$oldSetArray_9e7bf915e59a281494ddb20734f4e946 = isset( $setArray ) ? $setArray : array();
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

$text .= '<input type="image" disabled="disabled" class="ezwt-input-image disabled" src="/extension/ezwt/design/standard/images/websitetoolbar/ezwt-icon-url.png" alt="Toggle menu link type edit." title="Toggle menu link type edit." id="ezwt-link-switcher" />

<script type="text/javascript">

(function( d )
{
    addEvent( window, \'load\', function(){
        var link = d.getElementById(\'ezwt-link-switcher\');
        link.disabled = false;
        link.className = \'ezwt-input-image\';

        addEvent( link, \'click\', function( e ){
            e = e || window.event;
            if( e.preventDefault ) e.preventDefault();
            else e.returnValue = false;
            var links = getByClass( d, \'menu-item-link\' );
            for (var i = 0, l = links.length; i < l; i++)
            {
                var rel = links[i].getAttribute(\'rel\'), href = links[i].getAttribute(\'href\'), target = links[i].getAttribute(\'target\'), rev = links[i].getAttribute(\'rev\');
                links[i].setAttribute(\'rel\',  href );
                links[i].setAttribute(\'href\', rel );
                links[i].setAttribute(\'target\', rev ? rev : \'\' );
                links[i].setAttribute(\'rev\', target ? target : \'\' );
            }
            return false;
        });
    });

    function getByClass( n, className )
    {
        if (n.getElementsByClassName)
          return n.getElementsByClassName(className);

        var hits = [], els = n.getElementsByTagName("*");
        for (var i = 0, l = els.length; i < l; i++)
        {
            if ( els[i].className && ( \' \' + els[i].className + \' \').indexOf( \' \' + className + \' \' ) !== -1 )
                hits.push( els[i] );
        }
        return hits;
    }

    function addEvent( n, trigger, handler )
    {
        if ( n.addEventListener ) n.addEventListener( trigger, handler, true );
        else if ( n.attachEvent ) n.attachEvent( \'on\' + trigger, handler );
    }
})( document );

</script>';

$setArray = $oldSetArray_9e7bf915e59a281494ddb20734f4e946;
$tpl->Level--;
?>
