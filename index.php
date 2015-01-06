<?php
	class Cat {
		public $firstName = “default name”;
		public $lastName = “default last name”;
		public $gender = “male”;
		public $price = 0;
		function getName() {
		return “{$this>firstName}” .
		“{$this>lastName}”;
		}
}
	$cat1 = new Cat();
	$cat1>firstName = “Kitty”;
	$cat1>lastName = “Cat”;
	print “The cat’s name is {$cat1->getName()}.”;

	class Alligator {
		public $firstName = “default name”;
		public $lastName = “default last name”;
		public $gender = “male”;
		public $price = 0;
		function getName() {
		return “{$this>firstName}” .
		“{$this>lastName}”;
		}
}
	$al1 = new Alligator();
	$al1>firstName = “Alli”;
	$al1>lastName = “Gator”;
	print “The alligator’s name is {$al1->getName()}.”;

	class Fishy { 
		public $firstName = “default name”;
		public $lastName = “default last name”;
		public $gender = “male”;
		public $price = 0;
		function getName() {
		return “{$this>firstName}” .
		“{$this>lastName}”;
		}
}
	$fi1 = new Fishy();
	$fi1>firstName = “Fi”;
	$fi1>lastName = “Shy”;
	print “The fishy’s name is {$fi1->getName()}.”;