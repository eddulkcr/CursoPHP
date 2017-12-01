<?php

/*Clase es un modelo que se utiliza para crear objetos que comparten un mismo comportamiento
un mismo estado y una misma identidad*/

class Automovil{

    /*Propiedades
    son las caracteristicas que puede tener un objeto*/

    public $marca;
    public $modelo;

    /*Metodo, es el algoritmo asociado a un objeto,
    indica la capacidad de lo que este puede hacer es decir es una funcion que hace tareas 
    con las propiedades que le estoy asignando a la clase
    la unica diferencia entre un metodo y una funcion es que llammos metodo
    a las funciones de una clase (en la POO),
    mientras que llamamos funciones, a los algoritmos de la programacion estructurada.*/

    public function mostrar(){

        echo "<p>hola soy un: $this->marca,modelo $this->modelo</p>";

    }

}
 /*el Objeto es una entidad provista de metodos o mensajes los cuales
 responde propiedades con valores concretos*/

$a= new Automovil();
$a -> marca = "toyota";
$a -> modelo = "corola";
$a -> mostrar();

$b= new Automovil();
$b -> marca = "Hiunday";
$b -> modelo = "accent";
$b -> mostrar();

/*Principios de la POO :
ABSTRACCION: Nuevos tipos de datos (el que quieras, tu lo creas)
ENCAPSULAMIENTO: organizar el código en grupos lógicos
OCULTAMIENTO: Oculatar detalles de implementacion y exponer sólo los detalles 
que sean necesarios para el resto del sistema */


?> 