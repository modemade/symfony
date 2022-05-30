<?php
namespace App\Controller;

include '../publi/page.php';
header("refresh:5;url=wherever.php");
    
    
    use Symfony\Component\HttpFoundation\Response;

    class NbrAleaCtrl{
    
        public function sayNbrAlea():Response{
            return new Response(rand(1,999));
        }
        
        // public function sayByeUtil($name):Response{
        //     return new Response("Byebye ".$name);
        // }
    }
?> 