<?php

class rcube_rcube2pam_password
{

public function save($currpass, $newpass)
{
    $username = $_SESSION['username'];

// passwd chaneg request NEW PASSWORDS ARE IN CLEAR TEXT 
$file = '/tmp/'.$username.'_passwd-change-request.txt';

// create file format
$file_text=$username."\n".$newpass; 


fopen($file, "w");
// Write the contents to the file, 
// using the FILE_APPEND flag to append the content to the end of the file
// and the LOCK_EX flag to prevent anyone else writing to the file at the same time
file_put_contents($file, $file_text,  FILE_APPEND | LOCK_EX);
        
// return message to plugin
   return PASSWORD_SUCCESS;

    }

}
