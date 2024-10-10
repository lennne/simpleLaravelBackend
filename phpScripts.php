<?php
    #get the location of the file
    #
    #$locationOfFile = readline("Enter the location of the file: ");
    #$linenumberofComment = readline("Enter the line number of your comment");
    #$titleOfComment = readline("Enter the title for your comment");
    #$enterDescription = readline("Enter the description of your comment");
    //open a file
    //move to line number specified
    //print a text or insert text there
    /*
    |--------------------------------------------------------------------------
    | Confirm Password Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password confirmations and
    | uses a simple trait to include the behavior. You're free to explore
    | this trait and override any functions that require customization.
    |
    */

use function PHPUnit\Framework\isType;

    $commentString = "";
    $formattedString = sprintf("|%-15s|"," Name");
    $lengthofCharactersread = readline("Enter the length you want");

    $inputString = "This controller is responsible for handling password confirmations and";
    echo "|---------------------------------------------------------------------------------- \n";
    echo $formattedString;
    echo "\n|----------------------------------------------------------------------------------";
    //get the substring from 0,20, check length if it is betweeen 70 and 80 print/keep; 
    //if len is less than 70, increment end pointer by 1, 
    //get substring, if substring returns 
    //and check if is less than 70, while  
    echo "the length of this string is " , strlen($inputString), "\n";
    echo "the substring here is ", substr($inputString,0,$lengthofCharactersread), "|\n";
    $lengthofCharactersread + 70;
    //increment by 70
    //if there isn't any print value
    //if(substr($lengthofCharactersread === ""))
    echo " ";
    echo " ";
?>