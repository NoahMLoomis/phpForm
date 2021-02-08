<?php

   //TODO
    // - Check all Reg
    // - Give specific err messages
    // - Test passwords match

    // Probably a way to test this without regex
    $emptyReg= "/^\s*$/"; 
    $nameReg = "/[A-Za-z][-'\s]/";
    $emailReg = "/^\w+[\w-.]*@\w+(-\w+)|(\w*)\.(com|org|ca)$/";


?>