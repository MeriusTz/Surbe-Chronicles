<?php

namespace App\DataFixtures;

use App\Entity\Character;
use App\Entity\Enemy;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $NameUser = "TestU";
        $Email = "Test@Test.com";
        $Password = "Test";
        $Score = 100000;

        $user = new User();

        $user->setNameUser($NameUser);
        $user->setEmail($Email);
        $user->setPassword($Password);
        $user->setScore($Score);


        $manager->persist($user);
        $manager->flush();

        $NameCharacter = "TestC";
        $LevelCharacter = 1;
        $StrengthCharacter = 5;
        $DexterityCharacter = 5;
        $EnduranceCharacter = 5;


        $character = new Character();

        $character->setIdUser($user);
        $character->setNameCharacter($NameCharacter);
        $character->setLevelCharacter($LevelCharacter);
        $character->setStrengthCharacter($StrengthCharacter);
        $character->setDexterityCharacter($DexterityCharacter);
        $character->setEnduranceCharacter($EnduranceCharacter);


        $manager->persist($character);
        $manager->flush();

        $NameEnemy = "Orc";
        $LevelEnemy = 1;
        $StrengthEnemy = 8;
        $DexterityEnemy = 2;
        $EnduranceEnemy = 5;

        $enemy = new Enemy();

        $enemy->setNameEnemy($NameEnemy);
        $enemy->setLevelEnemy($LevelEnemy);
        $enemy->setStrengthEnemy($StrengthEnemy);
        $enemy->setDexterityEnemy($DexterityEnemy);
        $enemy->setEnduranceEnemy($EnduranceEnemy);

        $manager->persist($enemy);
        $manager->flush();

        $NameEnemy = "Goblin";
        $LevelEnemy = 1;
        $StrengthEnemy = 5;
        $DexterityEnemy = 5;
        $EnduranceEnemy = 5;


        $enemy = new Enemy();

        $enemy->setNameEnemy($NameEnemy);
        $enemy->setLevelEnemy($LevelEnemy);
        $enemy->setStrengthEnemy($StrengthEnemy);
        $enemy->setDexterityEnemy($DexterityEnemy);
        $enemy->setEnduranceEnemy($EnduranceEnemy);

        $manager->persist($enemy);
        $manager->flush();


        $NameEnemy = "Wolf";
        $LevelEnemy = 1;
        $StrengthEnemy = 5;
        $DexterityEnemy = 7;
        $EnduranceEnemy = 3;

        $enemy = new Enemy();

        $enemy->setNameEnemy($NameEnemy);
        $enemy->setLevelEnemy($LevelEnemy);
        $enemy->setStrengthEnemy($StrengthEnemy);
        $enemy->setDexterityEnemy($DexterityEnemy);
        $enemy->setEnduranceEnemy($EnduranceEnemy);

        $manager->persist($enemy);
        $manager->flush();


    }
}
