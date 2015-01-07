<!-- Lesson 1 -->
<?php
	class Cat {
		public $firstName = "first name";
		public $lastName = "last name";
		public $gender = "male";
		public $price = 0;

		function __construct() {

		}

		function getName() {
			return $this->firstName . $this->lastName;
		}
	}

	$cat1 = new Cat();
	$cat1->firstName = "Kitty";
	$cat1->lastName = "Cat";
	echo "The cat's name is " . $cat1->getName();

	class Alligator {
		public $firstName = "default name";
		public $lastName = "default last name";
		public $gender = "male";
		public $price = 0;
		function getName() {
		return "{$this->firstName}" .
		"{$this->lastName}";
		}
}
	$al1 = new Alligator();
	$al1->firstName = "Alli";
	$al1->lastName = "Gator";
	print "The alligator's name is {$al1->getName()}.";

	class Fishy { 
		public $firstName = "default name";
		public $lastName = "default last name";
		public $gender = "male";
		public $price = 0;
		function getName() {
		return "{$this->firstName}" .
		"{$this->lastName}";
		}
}
	$fi1 = new Fishy();
	$fi1->firstName = "Fi";
	$fi1->lastName = "Shy";
	print "The fishy's name is {$fi1->getName()}.";


//Lesson 2

	class Horse {
	public $firstName;
	public $lastName;
	public $breed;
	function __construct($title, $firstName, $lastName, $breed) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->breed = $breed;
	}
	function getName() {
	return "{$this->firstName}" .
	"{$this->lastName}";
	}
}
$horse1 = new Horse(“BooBoo”, “Iwao”, “EnglishBulldog”);
print “Horse 1: {$horse1->getName()}\n;
	class Pizza {
	public $flavor;
	public $name;
	public $toppings;
	function __construct($title, $flavor, $name, $toppings) {
		$this->flavor = $flavor;
		$this->name = $name;
		$this->toppings = $toppings;
	}
	function getName() {
	return "{$this->flavor}" .
	"{$this->name}";
	}
}
$pizza1 = new Pizza(“BooBoo”, “Iwao”, “EnglishBulldog”);
print “Pizza 1: {$pizza1->getName()}\n;

	class Snake {
	public $firstName;
	public $lastName;
	public $breed;
	function __construct($title, $firstName, $lastName, $breed) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->breed = $breed;
	}
	function getName() {
	return "{$this->firstName}" .
	"{$this->lastName}";
	}
}
$snake1 = new Snake(“BooBoo”, “Iwao”, “EnglishBulldog”);
print “Snake 1: {$snake1->getName()}\n;

