<?php
namespace Vanderbilt\SharedLibraryExample;

class SharedLibraryExample{
	private static $number;

	public static function echoCachedRandomNumber(){
		echo "<br>";

		if(!isset(self::$number)){
			echo "This is the first call to " . __FUNCTION__ . "().  A new random number will be generated and cached.";
			self::$number = rand();
		}
		else{
			echo "This is a subsequent call to " . __FUNCTION__ . "().  The previously generated number will be returned.";
		}

		echo "<br>The number is: " . self::$number . "<br><br>";
	}	
}