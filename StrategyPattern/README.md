# Strategy Pattern in PHP  
Strategy pattern is a behavioural design pattern that enables selecting an algorithm at runtime.   
Behavioural design patterns are responsible to share communication and responsibilities between different objects. 
  
In general, it's composed of
- StrategyContext: It's the class that defines which algorithm to use
- Strategy: It's the interface that describes how strategies must be configured
- ConcreteStrategy: It's the implementation of the Strategy Interface

#### Code Example
1. There is `CarPainterContext` class which accepts a colour and its responsibility to define which algorithm to apply .
2. There is `CarPainter` class which could accept any `ConcreteStrategy` and apply the strategy behaviour.

So In our case `CarPainterContext` stands for the `StrategyContext` and `StrategyInterface` used as the `Strategy`  + different `ConcreteStrategy` like `RedStrategy` or `BlackStrategy`.
  
#### Tests
 1. You need to run 
 ```
  Composer install
 ```
     
2.  Run tests
```
 ./vendor/bin/phpunit --bootstrap vendor/autoload.php StrategyPattern/tests/
```

#### Resources
https://en.wikipedia.org/wiki/Strategy_pattern