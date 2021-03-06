<?php
	/***
		This example defines a command line accepting several parameters, each of them
		having aliases.

		However, this script will fail with a CLException exception, because the -integer_value
		and -float_value parameters all define an alias with the same name, "val"
	 ***/
	require_once ( dirname ( __FILE__ ) . '/../examples.inc.php' ) ;

	$definitions	=  <<<END
<command>
	<usage>
		This example defines a command line accepting several parameters, each of them
		having several unique aliases.
	</usage>

	<string name="string_value, strval, sv">
		Help for the string_value parameter (which can also be specified as -strval or -sv).
	</string>

	<integer name="integer_value, val, iv">
		Help for the -integer_value parameter (which can also be specified as -ival or -iv).
	</integer>

	<float name="float_value, val, fv">
		Help for the -float_value parameter (which can also be specified as -fval or -fv).
	</float>
</command>
END;

	$cl		=  new CLParser ( $definitions ) ;
	echo "Value of the -string_value parameter   : {$cl -> string_value}\n" ;
	echo "Value of the -integer_value parameter  : {$cl -> integer_value}\n" ;
	echo "Value of the -float_value parameter    : {$cl -> float_value}\n" ;
