<?php
// example 1
	class milkshakes {
		public $vanilla;
		public $chocolate;
		public $strawberry;
		public $bannana;
		public $strawberrybannana;
		public $chocolatestrawberry;
		public $vanillabannana;

		function __construct($vanilla, $chocolate, $strawberry, $bannana, $strawberrybannana, $chocolatestrawberry, $vanillabannana){
			$this->vanilla = $vanilla;
			$this->chocolate = $chocolate;
			$this->strawberry = $strawberry;
			$this->bannana = $bannana;
			$this->strawberrybannana = $strawberrybannana;
			$this->chocolatestrawberry = $chocolatestrawberry;
			$this->vanillabannana = $vanillabannana;
		}
		function getName(){
			return "MY favorite millshake is " . $this->vanilla . " and mu least favorite milkshake is " .$this->vanillabannana;
		}
	}
	class vanilla extends milkshakes{
	function flavor(){
		return $this->chocolate;
	}
	}
	$vanilla = new milkshakes("vanilla", "chocolate", "strawberry", "bannana", "strawberrybannana", "chocolatestrawberry", "vanillabannana");
	print "milkshakes 1:" . $vanilla->getName();
//example 2
	class cars {
		public $honda;
		public $toyota;
		public $mercedes;
		public $saturn;
		public $acura;
		public $bmw;
		public $buggy;

		function __construct($honda, $toyota, $mercedes, $saturn, $acura, $bmw, $buggy){
			$this->honda = $honda;
			$this->toyota = $toyota;
			$this->mercedes = $mercedes;
			$this->saturn = $saturn;
			$this->acura = $acura;
			$this->bmw = $bmw;
			$this->buggy = $buggy;
		}
		function getName(){
			return "MY favorite car is " . $this->honda . " and mu least favorite car is " .$this->buggy;
		}
	}
	class honda extends cars{
	function type(){
		return $this->mercedes;
	}
	}
	$honda = new cars("honda", "toyota", "mercedes", "saturn", "acura", "bmw", "buggy");
	print "cars 1:" . $honda->getName();
//example 3
	class trees {
		public $tall;
		public $short;
		public $pine;
		public $palm;
		public $big;
		public $small;
		public $wide;

		function __construct($tall, $short, $pine, $palm, $big, $small, $wide){
			$this->tall = $tall;
			$this->short = $short;
			$this->pine = $pine;
			$this->palm = $palm;
			$this->big = $big;
			$this->small = $small;
			$this->wide = $wide;
		}
		function getName(){
			return "MY favorite tree is " . $this->pine . " and mu least favorite tree is " .$this->palm;
		}
	}
	class pine extends trees{
	function type(){
		return $this->small;
	}
	}
	$pine = new trees("tall", "short", "pine", "palm", "big", "small", "wide");
	print "trees 1:" . $pine->getName();