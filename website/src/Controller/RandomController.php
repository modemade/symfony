<?php
    namespace App\Controller;
    
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class RandomController{
    /**
         * @Route("/hello")
        */
        public function randomNumber():Response{
            return new Response(random_int(1,50));
        }
        /**
         * @Route("/hello")
        */
        public function chooseRandomNumber($nbr1,$nbr2):Response{
            return new Response(random_int($nbr1,$nbr2));
        }
    }


?> 