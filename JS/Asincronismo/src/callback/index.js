function sum(num1, num2) {
    return num1 + num2;
}

function calc(num1, num2, callback) {
    return callback(num1, num2);
}

console.log(calc(2, 2, sum));

setTimeout(function () {            //Funcion anonima   
    console.log("hola JS");
}, 2000)


function gretting(name) {
    console.log(`hola ${name}`);
}
setTimeout(gretting, 2000, 'Musk')  //Settime se le pasa (funcion, tiempo, argumento)


/*
En este desafío tienes que crear una función que reciba un callback pero este tiene que ser ejecutado 2s despues.

Nota: Debes usar la función setTimeout con el namespace window para poder monitorear su uso en la ejecución de pruebas, ejemplo:
    window.setTimeout(() => {
  // code
})

La solución debería tener un input y output como los siguientes:

Input

runCode(() => console.log('Log after 2s'));

Output

// Execute function 2s after

SOLUCION:
    export function runCode(callback) {
    window.setTimeout(callback, 2000)
    }

*/
