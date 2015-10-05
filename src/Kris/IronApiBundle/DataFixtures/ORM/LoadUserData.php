<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 05/10/15
 * Time: 00:16
 */

namespace Kris\IronApiBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Kris\IronApiBundle\Entity\User;

class LoadUserData implements FixtureInterface{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $e1 = new User();
        $e1->setUsername('asdf');
        $e1->setPassword('asdf');
        $e1->setEmail('asdfasdf');

        $e2 = new User();
        $e2->setUsername('asdfasdf');
        $e2->setPassword('asdfasdf');
        $e2->setEmail('asdfasdasdff');

        $manager->persist($e1);
        $manager->persist($e2);

        $manager->flush();
    }

}