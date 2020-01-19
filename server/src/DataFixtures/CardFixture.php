<?php

namespace App\DataFixtures;

use App\Entity\Card;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class CardFixture extends BaseFixture implements DependentFixtureInterface {

    public function loadData(ObjectManager $manager) {

        $this->createMany("card", function ($i) {
            $card = new Card();
            $card
                ->setCreatedAt(new \DateTime())
                ->setModifiedAt(new \DateTime())
                ->setCreatedBy($this->getRandomReference("user"))
                ->setModifiedBy($this->getRandomReference("user"))
                ->setTitle($this->faker->word)
                ->setColor($this->faker->hexcolor);

            return $card;
        });

        $manager->flush();
    }

    /**
     * This method must return an array of fixtures classes
     * on which the implementing class depends on
     *
     * @return class-string[]
     */
    public function getDependencies() {
        return [
            UserFixture::class
        ];
    }
}
