<?php
// Parent class
class Animal {
    public function makeSound() {
        // Default implementation for making sound
        echo "The animal makes a sound.\n";
    }
}

// Child classes inheriting from Animal
class Dog extends Animal {
    public function makeSound() {
        // Implementation specific to dogs
        echo "The dog barks.\n";
    }
}

class Cat extends Animal {
    public function makeSound() {
        // Implementation specific to cats
        echo "The cat meows.\n";
    }
}

// Interface
interface CanFly {
    public function fly();
}

// Class implementing the CanFly interface
class Bird extends Animal implements CanFly {
    public function makeSound() {
        // Implementation specific to birds
        echo "The bird chirps.\n";
    }

    public function fly() {
        // Implementation of the fly method from the CanFly interface
        echo "The bird is flying.\n";
    }
}

// Usage
$animal = new Animal();
$animal->makeSound();  // Output: The animal makes a sound.

$dog = new Dog();
$dog->makeSound();  // Output: The dog barks.

$cat = new Cat();
$cat->makeSound();  // Output: The cat meows.

$bird = new Bird();
$bird->makeSound();  // Output: The bird chirps.
$bird->fly();  // Output: The bird is flying.
