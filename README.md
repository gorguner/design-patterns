test4
# Design  Patterns

 1. Behavioural Patterns
     1. Strategy Pattern
  https://www.javacodegeeks.com/2013/08/strategy-design-pattern-in-java-example-tutorial.html
  Can be used when you have multiple ways of doing a task and the client decides during runtime which one to use.
 For instance in a ecommerce site if you have different kinds of payments Paypal, Credit Card etc then you can use this as follows:
    first you need an interface:
     interface PaymentStrategyInterface {
        public function pay(int $amount);
     }
     Then you create the actual implementations depending on your strategy:
     class CreditCardStrategy implements PaymentStrategyInterface {
        public function pay(int $amount) {
        echo "Paying with cc card number". $this->cardNumber. " amount: ". $amount;
        }
    


 2. Creational Patterns
     1. Factory Pattern:  Creating and delivering objects based on incoming parameters. 
        Factory Method Pattern enables you to use inheritance and polymorphism to encapsulate the creation of concrete products.
           - Simple Factory:
           - Static build method that returns a concrete class that is a subclass of a parent class based on parameters. 
     3. Factory Method:
         - Subclass creates the object but the factory class calls to common functions. 
         - For instance you create a AbstractFactory and then sub classes that inherit from the abstract factory. 
         - leave the object creation to the subclasses and  
	- Car::build(carName)
		- Sedan
		- Hatchback 
	
3. Structural Patterns
	 1. Facade Pattern 
		- A way of providing a simple clear interface to a complex system. 
	 2. Adapter Pattern
		- A way of providing a interface for an external API (interface and then call the methods on the interface)
	 3. Decorator Pattern https://github.com/samsam-026/Design_Patterns/tree/master/src/structural/decorator
	- Basically you create a new class which implements the method of the main class and then calls and 


**Command Pattern: https://github.com/samsam-026/Design_Patterns/tree/master/src/behavioral/command**

Observer Pattern: calls when a state changes
**Observer** is a behavioral design pattern that lets you define a subscription mechanism to notify multiple objects about any events that happen to the object they’re observing.

Model notifications in laravel such as create update delete.

Singleton Pattern: if 1 object should be created for a class.

[https://github.com/samsam-026/Design_Patterns/tree/master/src/creational/singleton](https://github.com/samsam-026/Design_Patterns/tree/master/src/creational/singleton)



Repository Pattern
