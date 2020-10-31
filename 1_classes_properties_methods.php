<?php

// Define a class
class User
{
    // Properties (attributes)
    public $name;
    // Methods (functions)
    public function sayHello()
    {
        return $this->name . ' Says Hello';
    }
}

// Instantiate a user object from ther user class
$user1 = new User();

$user1->name = 'Estyaque';
echo $user1->name;
echo '<br>';
echo $user1->sayHello();

echo '<br>';

// Create new User
$user2 = new User();

$user2->name = 'Zann';
echo $user2->name;
echo '<br>';
echo $user2->sayHello();
