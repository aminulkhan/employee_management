<?php

function hash_password_function($password, $salt){
	if($password!=NULL && $salt!=NULL)
	{
                //echo $password;
                //echo "<br>";
                //echo $salt;
                //echo "<br>";
		// given password = ashish123, salt=kshgdkahdskadhlkd
    	$password_length = strlen($password); // $length = strlen("ashish123")  = 9
        $split_at = ceil($password_length / 2); // $split_at = ceil (9/2) = 5
        $password_array = str_split($password, $split_at); // $password_array = str_split("ashish123", 5) = array("ashis", "h123")
        $hash = sha1($password_array[0] . $salt . $password_array[1]); 
        //$hash = sha1("ashis". "kshgdkahdskadhlkd". "h123") = asydahskldjasldyaklajdladj 

        return $hash;
    }
    else
    	return NULL;
}

?>