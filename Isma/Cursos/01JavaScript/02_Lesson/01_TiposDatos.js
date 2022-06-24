/* Ejemplo de tipos de datos*/

// String
var nombre="NombreDePila";
console.log(nombre);

//Numérico
var num=100;
console.log(num);

//Objeto
var objeto={
    nombre: "Juan",
    apellidop: "Pérez",
    apellidom: "López",
    cel: "5544332211"    
}
console.log(objeto);

//Boolean (true or false)

var bandera=true;
console.log(bandera);

//Función
function miFuncion(){    
}
console.log(miFuncion);


//Symbol
var simbolo=Symbol(" mi símbolo");
console.log(simbolo)
console.log(typeof simbolo)


//Clase tipo de clase, persona
class Persona{
    constructor(nombre, apellido){
        this.nombre=nombre;
        this.apellido=apellido;
    }
}
console.log(Persona)
console.log(typeof Persona)

//Undefined
var x;
console.log(x);
console.log(typeof x);
x=undefined
console.log(x)
console.log(typeof x)

//null (ausencia de valor)
var y=null;
console.log(y);
console.log(typeof y);

//Arrays (Arreglos)

var autos=['BMW', 'Audi', 'Volvo'];
console.log(autos);
console.log(typeof autos)

//Variable con cadena vacía
var z='';
console.log(z);
console.log(typeof z);


