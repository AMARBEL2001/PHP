<?php

  /*
  ============================================
  = Data Types
  = ----------
  = bool  => Boolean
    =        => True | False
  = int   => Integer
    =        => 100 | -200 | 0
  = float => Floating Point Number | double
    =        => 70.30 | -60.30
  = string
    = String
    =        => "AMAR" | 'AMAR'
  = array
    = Array
    =        => array("DZD" => "Algeria", "USA" => "United States")
    =        => array("Algeria", "United States")
    =        => ["Algeria", "United States"]
  = Other Types
    =        => NULL
    =        => Object
    =        => Resource
  = gettype()
    =        => Get Type Of Variable
  = var_dump()
    =        => Get Type And Value Of Variable
  = print_r()
    =        => Print Human Readable Information
  ============================================
  */

  echo gettype(True);
  echo '<br>';
  echo gettype(False);
  echo '<br>';
  echo gettype(true);
  echo '<br>';
  echo gettype(100);
  echo '<br>';
  echo gettype(-200);
  echo '<br>';
  echo gettype(0);
  echo '<br>';
  echo gettype(70.30);
  echo '<br>';
  echo gettype(-60.30);
  echo '<br>';
  echo gettype('Elzero');
  echo '<br>';
  echo gettype("Elzero");
  echo '<br>';
  echo gettype(array( "DZD" => "Algeria", "USA" => "United States"));
  echo '<br>';
  echo gettype(array("Algeria", "United States"));
  echo '<br>';
  echo gettype(["Algeria", "United States"]);
  echo '<br>';
    echo gettype(NULL);
    echo '<br>';
    echo gettype(null);
    echo '<br>';
    echo gettype(new stdClass());
    echo '<br>';
    echo gettype(fopen("index.php", "r"));
    // fopen() => Open a file or URL
    // fclose() => Close a file pointer
    echo '<br>';
    $a = new stdClass();
    echo   gettype( $a );
    // PDO => PHP Data Objects 
