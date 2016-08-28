<?php
/**************************************************************************************************************

    NAME
        CL.php

    DESCRIPTION
        Main include file for the CL sources.

    AUTHOR
        Christian Vigh, 08/2016.

    HISTORY
        [Version : 1.0]		[Date : 2016-08-27]     [Author : CV]
                Initial version.

 **************************************************************************************************************/

$__CLROOT__	=  dirname ( __FILE__ ) . '/CL' ;

require_once ( "$__CLROOT__/CLExceptions.phpclass" ) ;
require_once ( "$__CLROOT__/CL.phpclass" ) ;
require_once ( "$__CLROOT__/CLParser.phpclass" ) ;
require_once ( "$__CLROOT__/CLAbstractParameter.phpclass" ) ;
require_once ( "$__CLROOT__/CLValidators.phpclass" ) ;


if  ( ! function_exists ( 'warning' ) )
   {
	function  warning ( $message )
	   {
		trigger_error ( $message, E_USER_WARNING ) ;
	    }
    }


if  ( ! function_exists ( 'error' ) )
   {
	function  error ( $message )
	   {
		if  ( is_string ( $message ) )
			trigger_error ( $message, E_USER_ERROR ) ;
		else if (  is_a ( $message, '\Exception' ) )
			throw $message ;
	    }
    }


if  ( ! function_exists ( 'output' ) )
   {
	function  output ( $msg )
	   {
		echo ( "$msg\n" ) ;
	    }
    }


function  require_utility ( $file ) 
   {
	global		$__CLROOT__ ;

	require_once ( "$__CLROOT__/Utilities/$file" ) ;
    }

