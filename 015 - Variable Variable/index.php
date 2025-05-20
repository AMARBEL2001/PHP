<?php

  /*
    Variable Variable
    Takes The Value Of A Variable And Treats That As The Name Of A Variable
  */
  
    // start the session
    session_start();
    
    $a = "name";
    echo $a ; 

    echo "<br>";

    $$a = "php backend developer";



    echo $$a ; // this will print the value of $name
    echo "<br>";
    echo $name ; // this will print the value of $name

    $all_variables_name_with_values  = get_defined_vars();

    echo "<pre>";
    print_r($all_variables_name_with_values);
    echo "</pre>";


    $all_variables_name = array_keys($all_variables_name_with_values);

    echo "<pre>";
    print_r($all_variables_name);
    echo "</pre>";


    /* ------------------------------------------------*/

    $x = 'x1';
    $$x = 'x2';
    $$$x = 'x3';
    echo $x;

    echo "<br>";

    echo $$x ; 
    echo "<br>";
    echo $x1;
    echo "<br>";
    echo $$$x;
    echo "<br>";
    echo $$x1;
    echo "<br>";
    echo $x2;

    echo "<br>";
    echo "hello $x $x1 $x2 ";
    echo "<br>";
    echo "hello  $x {$$x} ${$$x} ";

    




    /* ------------------------------------------------*/

