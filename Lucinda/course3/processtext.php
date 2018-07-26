<?php

require_once('helpers.php');

//variables declarations
$output = ''; //final output of the process
$name; //name of the user
$dataType; //BASIC or UDATA
$data; //data of the user
$input; //file read by program
$line; //each line in the loop
$modified; //the processed string in the loop
$outputFile; //the final output


//read in a text file
$input = fopen("input.txt", 'r'); //r - read

if($input){ //text file loaded okay
    //loop through each line in the text file
    while(($line = fgets($input)) !== false){ //'fgets' is a php function for 'file gets'
        //echo substr($line, 0, 5);
        
        //reset the modified varaible to a blank string
        $modified = '';
        //now get the name value from the line
        $name = between("NAME=",",",$line);
        //get the dataType
        if(strpos($line, 'BASIC')){
            //echo 'basic ';
            $dataType = '(BASIC)'; //set data type
            $data = after('BASIC=',$line); //function from helpers.php - grab data after 'BASIC='
        }else{
            //echo 'udata ';
            $dataType = '(UDATA)'; //set data type
            $data = after('UDATA=',$line); //function from helpers.php - grab data after 'UDATA='
        }
        
        //add substrings to output. '.=' which is the same as '+=' - add onto the end of it
        $output .= $name . ',' . $data . $dataType . " \n ";
        
        
    }//end while
    
    echo $output;
    
    //now write processed data to a file (end point)
    $outputFile = fopen('output.txt', 'w'); //if it doesn't exist it will create one, if it does it'll open. The 'w' makes it a writable file.
    fwrite($outputFile,$output);
    
    //close the file streams
    fclose($outputFile);
    fclose($input);
    
}else{ //text file did not load okay
    echo 'problem loading text file';
}







?>




