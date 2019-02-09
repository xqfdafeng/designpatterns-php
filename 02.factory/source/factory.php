<?php

// 商品抽象类
abstract class Product{
    abstract public function show();
}

// 商品实现类A
class ConcreteProductA extends Product{
    public function show(){
        echo "I'm A.\n";
    }
}

// 商品实现类B
class ConcreteProductB extends Product{
    public function show(){
        echo "I'm B.\n";
    }
}

// 创建者抽象类
abstract class Creator{

    // 抽象工厂方法
    abstract protected function FactoryMethod();

    // 操作方法
    public function AnOperation(){
        return $this->FactoryMethod();
    }
}

// 创建者实现类A
class ConcreteCreatorA extends Creator{
    // 实现操作方法
    protected function FactoryMethod(){
        return new ConcreteProductA();
    }
}

// 创建者实现类A
class ConcreteCreatorB extends Creator{
    // 实现操作方法
    protected function FactoryMethod(){
        return new ConcreteProductB();
    }
}

// A工厂方法生产的A商品
$factoryA = new ConcreteCreatorA();
$productA = $factoryA->AnOperation();

// B工厂方法生产的B商品
$factoryB = new ConcreteCreatorB();
$productB = $factoryB->AnOperation();

// 调用测试
$productA->show();
$productB->show();