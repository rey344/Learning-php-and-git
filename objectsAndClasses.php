<?php
	class Person{
	      public $name;

	function __construct($name) {
		 $this->name = $name;
	}


	function sayHello() {
		 echo "Hi, my name is, what?\n";
		 echo "Hi, my name is, who?\n";
		 echo "My name is, chka-chka, " .$this->name;
	}
       }

       $person = new Person("Slim Shady");
       $person->sayHello();