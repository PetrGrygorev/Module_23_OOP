<?php
/*Практическое задание
Предположим, у нас есть игра в автотематике. У нас есть машины, танки, спецтехника,
которые имеют свой набор характеристик, умеют ехать вперед и назад, а некоторые могут даже размахивать ковшом.

На основе этой информации постройте классы с использованием абстрактного класса и интерфейса.
Напишите принимающую объект машины функцию, которая бы заставляла ее ехать и вызвала одну из способностей машины.
Пусть, если это легковое авто, будет закись азота, если это бульдозер, — управление ковшом.
Принимающая функция должна быть полиморфной. Необходимо реализовать только структуру.

Критерии оценки выполненного задания
0 баллов — задание не выполнено.

5 баллов — задание выполнено.

+5 дополнительных баллов — вы добавили машинам способность сигналить и включать дворники.

+5 дополнительных баллов — вы добавили машинам элементы индивидуализма, к примеру, отделку салона.
 */

 interface MachineInterface
 {
    public function forward();
    public function back();
    public function right();
    public function left();
    public function beep();
 }

 abstract class Machine implements MachineInterface
 {
    abstract public function forward();
    abstract public function right();
    abstract public function left();
    abstract public function back();
    abstract public function beep();
 }

 class Buldozer extends Machine
 {
    public function forward() {
        echo "Ехать вперёд на бульдозере\n";
    }

    public function right() {
        echo "Поворачивать вправо на бульдозере\n";
    }
    public function left() {
        echo "Поворачивать влево на бульдозере\n";
    }
    public function back() {
        echo "Ехать назад на бульдозере\n";
    }
    public function beep() {
        echo "Подавать звуковой сигнал на бульдозере\n";
    }
    public function buldozer() {
        echo "Управление ковшом бульдозера\n";
    }
    public function carWipersOn()
    {
        echo "Включить дворники для лобового стекла бульдозера\n";
    }
    public function carWipersOff()
    {
        echo "Выключить дворники для лобового стекла бульдозера\n";
    }
    public function buldozerTuning()
    {
        echo "Сделать отделку салона бульдозера, поставить шумоизоляцию кабины\n";
    }
 }

class Car extends Machine
{
    public function forward() {
        echo "Ехать вперёд на легковом автомобиле\n";
    }
    public function right() {
        echo "Поворачивать вправо на легковом автомобиле\n";
    }
    public function left() {
        echo "Поворачивать влево на легковом автомобиле\n";
    }
    public function back() {
        echo "Ехать назад на легковом автомобиле\n";
    }
    public function beep() {
        echo "Подавать звуковой сигнал на легковом автомобиле\n";
    }

    public function carNitrousOxide()
    {
        echo "Использовать закись азота для легкового автомобиля\n";
    }
    public function carWipersOn()
    {
        echo "Включить дворники для лобового стекла легкового автомобиля\n";
    }
    public function carWipersOff()
    {
        echo "Выключить дворники для лобового стекла легкового автомобиля\n";
    }
    public function carTuning()
    {
        echo "Тюнинговать салон легкового автомобиля\n";
    }
}

 class Tank extends Machine
 {
    public function forward() {
        echo "Ехать вперёд на танке\n";
    }

    public function right() {
        echo "Поворачивать вправо на танке\n";
    }
    public function left() {
        echo "Поворачивать влево на танке\n";
    }
    public function back() {
        echo "Ехать назад на танке\n";
    }
    public function beep() {
        echo "Подавать звуковой сигнал на танке\n";
    }
    public function moveTurretLeft() {
        echo ("Поворот башни танка влево\n");
    }

    public function moveTurretRigth() {
        echo ("Поворот башни танка вправо\n");
    }

    public function fire() {
        echo "Стрелять из пушки танка\n";
    }
 }

$buldozer = new Buldozer;
$car = new Car;
$tank = new Tank;

 function testMachine($buldozer, $car, $tank,) {
    $buldozer->forward();
    $buldozer->right();
    $buldozer->left();
    $buldozer->back();
    $buldozer->beep();
    $buldozer->carWipersOn();
    $buldozer->carWipersOff();
    $buldozer->buldozerTuning();
    $car->carNitrousOxide();
    $car->forward();
    $car->right();
    $car->left();
    $car->back();
    $car->beep();
    $car->carWipersOn();
    $car->carWipersOff();
    $car->carTuning();
    $tank->forward();
    $tank->right();
    $tank->left();
    $tank->back();
    $tank->beep();
    $tank->moveTurretLeft();
    $tank->moveTurretRigth();
    $tank->fire();
 }

testMachine($buldozer,$car,$tank,);
