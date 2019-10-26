# Factory Pattern in PHP 
Factory pattern is a creational design pattern that delegates the object creation logic to a specific class.  
This pattern is very useful in different cases, for example:  
1. One of the big advantages of this pattern, that the client (client -> represents a class that will use this instantiated class) doesn't need to know anything about the instantiated class.   
It just need to know about the `Factory` class to know and any time you need to replace the old instantiated class with a new class, you need to change the `Factory` class only. S`O`LID Principle ;) 

3. Object instantiation is very complex like depending on different cases so moving this complex logic outside of the client 

4. Different classes need to use the same object, so it worse to move the creation logic of the object in a class instead of duplicated this code through different clients. Always remember DRY (Don't Repeat Yourself)

    
In general, your `Factory` class could contains  
-  Static method that instantiate the intended class
- OOP methods and you can DI the factory class in the client
  
#### Code Example 
In the Strategy Pattern example, [CarPainterContext](StrategyPattern/src/CarPainterContext.php) contains the logic to decide which Strategy Instance to create which could be a bad design in case would like to add more and more strategies.

Now we use `Factory` pattern to delegate the instantiation of the intended strategy to `PainterFactory` which checks the colour wanted and create the corresponding object.

At this point, one question could come to mind.
<b>What is the different between Strategy and Factory Pattern?</b>
- Factory Pattern: is a creational pattern, it's only response to instantiate an object and return that object to the client.
- Strategy Pattern: is a behavioural pattern, It's responsible to decide which strategy (algorithm) to use and apply the behaviour intended.

    
#### Tests  
 1. You need to run   
 ``` 
 Composer install 
 ```  
 2. Run tests  
```  
 ./vendor/bin/phpunit --bootstrap vendor/autoload.php FactoryPattern/tests/
 ```  
  
#### Resources  
[https://en.wikipedia.org/wiki/Factory_method_pattern](https://en.wikipedia.org/wiki/Factory_method_pattern)