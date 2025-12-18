<?php

declare(strict_types=1);

namespace PizzaStoreApp;

use PizzaStoreLib\Pizza;
use PizzaStoreLib\PizzaStore;
use PizzaStoreLib\Pizzas\CheesePizza;
use PizzaStoreLib\Pizzas\PepperoniPizza;
use PizzaStoreLib\Pizzas\VegetarianPizza;

class CustomPizzaStore extends PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        switch (strtolower($type)) {
            case 'cheese':
                $pizza = new CheesePizza();
                $pizza->addTopping('базилик');
                return $pizza;
                
            case 'pepperoni':
                $pizza = new PepperoniPizza();
                $pizza->setSauce('острый томатный соус');
                return $pizza;
                
            case 'vegetarian':
                return new VegetarianPizza();
                
            case 'custom':
                $pizza = new \PizzaStoreLib\Pizza() {
                    public function __construct()
                    {
                        $this->name = 'Особая пицца';
                        $this->sauce = 'чесночный соус';
                        $this->toppings = ['ветчина', 'грибы', 'кукуруза'];
                    }
                };
                return $pizza;
                
            default:
                throw new \InvalidArgumentException("Неизвестный тип пиццы: {$type}");
        }
    }
}
