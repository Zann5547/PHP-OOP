<?php
class User
{
    public $name;
    public $age;

    /**
     * Runs when an object is created
     */
    public function __construct($name, $age)
    {
        // echo 'constructor ran...';
        echo 'Class ' . __CLASS__ . ' instantiated <br>';
        $this->name = $name;
        $this->age = $age;
    }

    public function sayHello()
    {
        return $this->name . ' Says Hello';
    }

    /**
     * Called when no other refrences to a certain object
     * Userd for cleanup, closing connections, etc
     */
    public function __destruct()
    {
        echo ' destructor ram';
    }
}

// $user1 = new User();
// $user2 = new User();

$user1 = new User('Zann', 36);
echo $user1->name . ' is ' . $user1->age . ' years old';
echo '<br>';
echo $user1->sayHello();

echo '<br>';

$user2 = new User('Estyaque', 30);
echo $user2->name . ' is ' . $user2->age . ' years old';
echo '<br>';
echo $user2->sayHello();
