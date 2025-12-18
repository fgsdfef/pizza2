<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use PizzaStoreApp\CustomPizzaStore;

echo "=== Заказ пиццы через CustomPizzaStore ===" . PHP_EOL . PHP_EOL;

$store = new CustomPizzaStore();

try {
    echo "1. Заказ сырной пиццы:" . PHP_EOL;
    $pizza1 = $store->orderPizza('cheese');
    
    echo PHP_EOL . "2. Заказ пепперони:" . PHP_EOL;
    $pizza2 = $store->orderPizza('pepperoni');
    
    echo PHP_EOL . "3. Заказ вегетарианской пиццы:" . PHP_EOL;
    $pizza3 = $store->orderPizza('vegetarian');
    
    echo PHP_EOL . "4. Заказ особой пиццы:" . PHP_EOL;
    $pizza4 = $store->orderPizza('custom');
    
} catch (InvalidArgumentException $e) {
    echo "Ошибка: " . $e->getMessage() . PHP_EOL;
}

echo PHP_EOL . "=== Все заказы завершены ===" . PHP_EOL;
