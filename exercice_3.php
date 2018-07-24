<?php

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $ok= true;
    if(strlen($_POST['Make'])<2)
    {
        echo 'the make must contain at least 2 characters';
        $ok= false;
    }
    if(strlen($_POST['Model'])<2)
    {
        echo 'the model must contain at least 2 characters';
        $ok= false;
    }
    if($_POST['Year']<1900 || $_POST['Year']>date('Y') )
    {
        echo "the year must be between 1900 and".date('Y');
        $ok= false;
    }
    if(strlen($_POST['Color'])<3)
    {
        echo 'the model must contain at least 3 characters';
        $ok= false;
    }

    if($ok)
    {
        echo "Everything ok";
    }
    else
    {
        http_response_code(400);
    }



}else{
    http_response_code(405);
    echo 'This method is not allowed';
}