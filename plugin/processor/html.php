<?php
// Copyright 2003-2008 Won-Kyu Park <wkpark at kldp.org>
// All rights reserved. Distributable under GPL see COPYING
// a sample plugin for the MoniWiki
//
// Author: Won-Kyu Park <wkpark@kldp.org>
// Date: 2003-04-10
// Name: Simple HTML Processor
// Description: HTML Processor plugin
// URL: MoniWiki:HTMLProcessor
// Version: $Revision: 1.1 $
// License: GPL
//
// Usage: {{{
// html code
// }}}
//
// $Id: html.php,v 1.1 2008/11/27 01:12:24 wkpark Exp $

function processor_html($formatter="",$value="") {
    if ($value[0]=='#' and $value[1]=='!')
        list($line,$value)=explode("\n",$value,2);
    return $value;
}

// vim:et:sts=4:sw=4:
?>
