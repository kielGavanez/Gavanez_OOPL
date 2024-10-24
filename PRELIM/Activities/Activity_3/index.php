<?php
    require ('authors.php');    

    $author1 = new Authors();
    $author1 -> add('Richard','ricardo','manila','6910857','alamat ng saging');
    $author1 -> edit('Richard','ricardo','manila','5555555','alamat ng saging');
    
    $author2 = new Authors();
    $author2 -> add('Richard','ricardo','manila','6910857','alamat ng saging');
    
    $author3 = new Authors();
    $author3 -> add('Richard','ricardo','manila','6910857','alamat ng saging');
    
    $author4 = new Authors();
    $author4 -> add('Richard','ricardo','manila','6910857','alamat ng saging');
    
    $author5 = new Authors();
    $author5 -> add('Richard','ricardo','manila','6910857','alamat ng saging');
    
    
    $author1 -> display();
    $author2 -> display();
    $author3 -> display();
    $author4 -> display();
    $author5 -> display();

    

?>