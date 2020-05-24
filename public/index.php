<?php
    
    require __DIR__."/../vendor/autoload.php";
    
    use \huangjj\composer\Game;
    
    var_dump( (new Game)->run() );
    
    var_dump( view() );
?>