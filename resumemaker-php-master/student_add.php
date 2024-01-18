<?php

  require('connect.php');  //include connection file
require('function.php');
        //include 'includes/connection.php';
       // session_start();
        if(isset($_POST['insert_post']))
        {
        
                //getting the text data from the fields
                // $id = ($_POST['id']);
                $fname = strip_tags($_POST['fname']); 
                $lname = strip_tags($_POST['lname']); 
                $mail= strip_tags($_POST['mail']);
                $ps = strip_tags($_POST['ps']);
                $cps = strip_tags($_POST['cps']);
                $gen = strip_tags($_POST['gen']);
                $address = strip_tags($_POST['adress']);
                $city = strip_tags($_POST['city']);
                $state = strip_tags($_POST['State']);
           
              
                        if($ps==$cps){
                        $add_student= "INSERT INTO student(id,fname,lname,ps,cps,gen,mail,address,city,state)VALUES('','$fname','$lname','$ps','$cps','$gen','$mail','$address','$city','$state')";   

                        }
                        else{
                                echo "<h1>Your password didn't match</h1>";
                        }
           
                // $add_student= "INSERT INTO student(id,fname,lname,ps,cps,gen,mail,address,city,state)VALUES('','$fname','$lname','$ps','$cps','$gen','$mail','$address','$city','$state')";   
                
                if(mysqli_query($con, $add_student)){
                    
                echo "<script> alert('New Student has been inserted')</script>";
                // echo '<META  HTTP-EQUIV="Refresh" Content = "0.0000001 ; URL = index.php?view_profile">';
                }
                }
                
                        //echo "<script> window.open('index.php?insert_product.php','_parent')</script>";
                 
                
                
        //      }
        
        else
        {}
?>