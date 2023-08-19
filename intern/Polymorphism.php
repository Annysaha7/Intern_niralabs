<?php
// Base class Animal
class Animal {
    public function makeSound() {
        echo "Some generic sound\n";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "Woof woof!". "<br>";
    }
}


class Cat extends Animal {
    public function makeSound() {
        echo "Meow meow!". "<br>";
    }
}





$dog = new Dog();
$cat = new Cat();



$animals = [$dog, $cat];
for ($i = 0; $i < count($animals); $i++) {
    echo get_class($animals[$i]) . ": ";
    $animals[$i]->makeSound();
}
?>