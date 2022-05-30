<?php

// namespace App\DataFixtures;

// use Doctrine\Bundle\FixturesBundle\Fixture;
// use Doctrine\Persistence\ObjectManager;

// class AppFixtures extends Fixture
// {
//     public function load(ObjectManager $manager): void
//     {
//         // $product = new Product();
//         // $manager->persist($product);

//         $manager->flush();
//     }
// }
namespace App\DataFixtures;
use Faker\Factory;
use App\Entity\User;
use App\Entity\Article;
use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;
class AppFixtures extends Fixture
{
public function load(ObjectManager $manager): void
{
//création d'une variable qui va contenir
$faker = Faker\Factory::create();
//Tableau vide qui va stocker les utilisateurs que l’on génère
$users = [];
//Boucle qui va itérer 20 utilisateurs factices
for($i=0; $i<20; $i++){
$user = new User();
//génération d'un utilisateur factice
$user‐>setName($faker‐>name());
$user‐>setFirstName($faker‐>firstname());
$user‐>setMail($faker‐>email());
$user‐>setPassword($faker‐>password());
$user‐>setCreateAt(new \DateTime());
//stockage dans le manager
$manager‐>persist($user);
$users[] = $user;
}
$manager‐>flush();

$arts = [];
for($i=0; $i<20; $i++){
    $art = new Article();
    $art->setTitle($faker->title());
    $art->setContenu($faker->contenu());
    $art->setImage($faker->image());
    $art->setCreateThe(new \DateTime());
    $manager‐>persist($arts);
$arts[] = $arts;
}

$cats =[];
for($i=0; $i<20; $i++){
    $art = new Category();
    $art->setTitle($faker->title());
    $art->setDescription($faker->description());
    $art->setCreateThe(new \DateTime());
    $manager‐>persist($cats);
$cats[] = $cats;
}
}
}
