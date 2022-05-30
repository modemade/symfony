<?php
    namespace App\Controller;
    use Symfony\Component\HttpFoundation\Response;

    class TestController{
        public function test():Response{
            return new Response("le test à fonctionné");
        }
        public function nameTest($test):Response{
            return new Response("le $test à fonctionné");
        }
    }


?>