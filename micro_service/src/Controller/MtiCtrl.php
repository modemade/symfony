<?php
    namespace App\Controller;
    
    use Symfony\Component\HttpFoundation\Response;

    class MtiCtrl{
    
        public function sayGoodBye():Response{
            return new Response("Byebye");
        }
        
        public function sayByeUtil($name):Response{
            return new Response("Byebye ".$name);
        }
    }
?> 