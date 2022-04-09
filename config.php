<?php


class connect { 
   public $tamu,
          $tamuid,
          $tamupassword,
          $databasename;

    function __construct($host,$hostid,$hostpassword,$databasename)
    {
       $this->tamu = $host;
       $this->tamuid = $hostid;
       $this->tamupassword = $hostpassword;
       $this->databasename = $databasename;
    }      

 
} 

$newconnection = new connect("localhost","root","","cforumdb");




 $connectdb = mysqli_connect('$newconnection->tamu','$newconnection->tamuid','$newconnection->tamupassword','$newconnection->databasename');



 














?>