<?php

namespace App\DataFixtures;

use App\Entity\Bibliotheque;
use App\Entity\Exercice;
use App\Entity\FAQ;
use App\Entity\Kine;
use App\Entity\Patient;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use phpDocumentor\Reflection\Types\Boolean;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $userPasswordHasherInterface)
    {
        $this->passwordHasher = $userPasswordHasherInterface;
    }
    public function load(ObjectManager $manager): void
    {
        $bibliotheque= new Bibliotheque();
        $bibliotheque->setNom('Grenouille Statique');
        $bibliotheque->setLien("truc");
        $bibliotheque->setType("Machin");
        $manager->persist($bibliotheque);

       
    //    for ($i=1; $i < 4 ; $i++) { 
           
        $exercice = new Exercice();
        $exercice->setDescription("La grenouille statique nous permet de travailler les jambes en poussée de manière très analytique avec un travail de la chaîne latérale des jambes. Nous travaillons les muscles stabilisateurs du bassin, le transfert de poids et la poussée des jambes. C’est un exercice pour étirer la chaîne postérieure et interne et donne à l’enfant une réelle sensation de pousser ses jambes.
        ");
        $exercice->setDuree(5);
        $exercice->setRepetition(3);
        $exercice->setType("genoux");
        $exercice->setExperience(2);
        $manager->persist($exercice);            
        
        $patient1 = new Patient();
        $patient1->setNom("Poloni");
        $patient1->setPrenom("Marin");
        $patient1->setAdresse("rue hounau");
        $patient1->setEmail("marin@poloni.fr");
        $hash = $this->passwordHasher->hashPassword($patient1, "toto");
        $patient1->setPassword($hash);
        $patient1->setPhoto("patient1.png");
        $patient1->setAge(34);
        $patient1->setLangue("Français");
        $patient1->setLuminosite(True);
        $patient1->setNotification(True);
        $patient1->setAccessibilite(True);
        $patient1->setNiveau(22);
        $patient1->setDescription("Content");
        $patient1->setExperience(22);
        $manager->persist($patient1);

        $kine = new Kine();
        $kine->setNom("Mille");
        $kine->setPrenom("troie");
        $kine->setAdresse("helioparc");
        $kine->setEmail("troie@mille.fr");
        $hash = $this->passwordHasher->hashPassword($kine, "troie");
        $kine->setPassword($hash); 
        $manager->persist($kine);

        $question = new FAQ();
        $question->setQuestion("Ca va ?");
        $question->setReponse("Neutre");
        $manager->persist($question);
        $manager->flush();
}
}