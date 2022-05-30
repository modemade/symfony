<?php
    namespace App\Controller;
    
    use Symfony\Component\HttpFoundation\Response;

    class HelloCtrl{
    
        public function sayHello():Response{
            return new Response("Bonjour");
        }
        
        public function sayHelloUtil($name):Response{
            return new Response("Bonjour ".$name);
        }
    }
?> 