<?php
    
    $x = 100;
    echo <<<"one"
    This is a heredoc string.
    It can span multiple lines and
    can contain variables like $x </br> ok 
    one;


    echo <<<'two'
    This is a nowdoc string.
    It also can span multiple lines but
    it does not parse variables like $x </br> ok
    two;