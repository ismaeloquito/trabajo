let a=3, b=2, c="3";

//En la siguiente expresión, el símbolo = es operador de asignación
//En el caso de ==, es un operador de comparación y se usa para comparar el valor de las variables sin importar su tipo
let z=a!=b;
console.log(z);
b=3;
z=a!=b;
console.log(z);

z=a!=c;
console.log(z);

//En el caso de ===, es un operador de comparación y se usa para comparar el valor de las variables y su tipo
//Cabe señalar que si los tipos son distintos entre las variables comparadas, no analizará sus valores. Es decir, se compara primero el tipo y después el valor.
z= a!==c;
console.log(z);