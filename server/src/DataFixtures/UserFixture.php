<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;

class UserFixture extends BaseFixture
{
    public function loadData(ObjectManager $manager)
    {
        $this->createMany("user", function ($i) {
            $user = new User();
            $user
                ->setUsername($this->faker->username)
                ->setPassword($this->faker->password)
                ->setCreatedAt(new \DateTime())
                ->setModifiedAt(new \DateTime())
                ->setFirstname($this->faker->firstname)
                ->setLastname($this->faker->lastname);
            return $user;
        });

        $manager->flush();
    }
}
