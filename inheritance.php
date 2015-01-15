<?php
// example 1
	class milkshakes {
		public $vanilla;
		public $chocolate;
		//public $strawberry;
		//public $bannana;
		public $strawberrybannana;
		public $chocolatestrawberry;
		public $vanillabannana;

		function __construct($vanilla, $chocolate,/* $strawberry, $bannana,*/ $strawberrybannana, $chocolatestrawberry, $vanillabannana){
			$this->vanilla = $vanilla;
			$this->chocolate = $chocolate;
			//$this->strawberry = $strawberry;
			//$this->bannana = $bannana;
			$this->strawberrybannana = $strawberrybannana;
			$this->chocolatestrawberry = $chocolatestrawberry;
			$this->vanillabannana = $vanillabannana;
		}
		function getName(){
			return "MY favorite millshake is " . $this->vanilla . " and mu least favorite milkshake is " .$this->vanillabannana;
		}
	}
	class van extends milkshakes{
	function __construct($vanilla, $chocolate,/* $strawberry, $bannana,*/ $strawberrybannana, $chocolatestrawberry, $vanillabannana, $strawberry){
		parent::__construct($vanilla, $chocolate,/* $strawberry, $bannana,*/ $strawberrybannana, $chocolatestrawberry, $vanillabannana);
		$this->strawberry= $strawberry;
	}
	function greet(){
		return $this->strawberry;
	}
}
	class ban extends milkshakes{
	function __construct($vanilla, $chocolate,/* $strawberry, $bannana,*/ $strawberrybannana, $chocolatestrawberry, $vanillabannana, $bannana){
		parent::__construct($vanilla, $chocolate,/* $strawberry, $bannana,*/ $strawberrybannana, $chocolatestrawberry, $vanillabannana);
		$this->bannana= $bannana;
	}
	function greet(){
		return $bannana->bannana;
	}
}
	/*class vanilla extends milkshakes{
	function flavor(){
		return $this->chocolate;
			}
	}
	class chocolate extends milkshakes{
	function flavor(){
		return $this-> bannana;
			}
	}
	*/
		class strawberrybannana extends milkshakes{
			function type(){
				return $this-> chocolatestrawberry;
			}
			function hello(){
				return $this-> vanillabannana;
			}
		}
	$vanilla = new milkshakes("vanilla", "chocolate", "strawberry", "bannana", "strawberrybannana", "chocolatestrawberry", "vanillabannana");
	print "milkshakes 1:" . $vanilla->getName();
//example 2
	class cars {
		public $honda;
		public $toyota;
		public $mercedes;
		//public $saturn;
		//public $acura;
		public $bmw;
		public $buggy;

		function __construct($honda, $toyota, $mercedes, /*$saturn, $acura,*/ $bmw, $buggy){
			$this->honda = $honda;
			$this->toyota = $toyota;
			$this->mercedes = $mercedes;
			//$this->saturn = $saturn;
			//$this->acura = $acura;
			$this->bmw = $bmw;
			$this->buggy = $buggy;
		}
		function getName(){
			return "MY favorite car is " . $this->honda . " and mu least favorite car is " .$this->buggy;
		}
	}
	/*class honda extends cars{
	function type(){
		return $this-> mercedes;
			}
	}

	class toyota extends cars{
	function type(){
		return $this-> mercedes;
			}
	}
	*/
	class sat extends cars{
	function __construct($honda, $toyota, $mercedes, /*$saturn, $acura,*/ $bmw, $buggy, $saturn){
		parent::__construct($honda, $toyota, $mercedes, /*$saturn, $acura,*/ $bmw, $buggy);
		$this->satrun= $saturn;
	}
	function greet(){
		return $this->saturn;
	}
}
	class ac extends cars{
	function __construct($honda, $toyota, $mercedes, /*$saturn, $acura,*/ $bmw, $buggy, $acura){
		parent::__construct($honda, $toyota, $mercedes, /*$saturn, $acura,*/ $bmw, $buggy);
		$this->acura= $acura;
	}
	function greet(){
		return $acura->acura;
	}
}
		class mercedes extends cars{
			function type(){
				return $this-> buggy;
			}
			function hello(){
				return $this-> bmw;
			}
		}
		
	$honda = new cars("honda", "toyota", "mercedes", "saturn", "acura", "bmw", "buggy");
	print "cars 1:" . $honda->getName();
//example 3
	class trees {
		//public $tall;
		//public $short;
		public $pine;
		public $palm;
		public $big;
		public $small;
		public $wide;

		function __construct($pine, $palm, $big, $small, $wide){
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
	function __construct($pine, $palm, $big, $small, $wide, $tall){
		parent::__construct($pine, $palm, $big, $small, $wide);
		$this->tall= $tall;
	}
	function greet(){
		return $this->tall;
	}
}
	class sho extends trees{
	function __construct($pine, $palm, $big, $small, $wide, $short){
		parent::__construct($pine, $palm, $big, $small, $wide);
		$this->short= $short;
	}
	function greet(){
		return $short->short;
	}
}
		class palm extends trees{
			function type(){
				return $this-> big;
			}
			function hello(){
				return $this-> big;
			}
		}
	$pine = new trees("tall", "short", "pine", "palm", "big", "small", "wide");
	print "trees 1:" . $pine->getName();

