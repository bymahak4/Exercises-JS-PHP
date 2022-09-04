// h1 { color: red }
// .parrafito { ... }
// #pid { ... }

const h1        = document.querySelector('h1');
const h2        = document.querySelector('h2');
const p         = document.querySelector('p');
const parrafito = document.getElementsByClassName('parrafito');      //Cuando ya estas diciendo que vas a pasar una clase o ID no es necesario el "." o "#" solo cuando usas querySelector
const pid       = document.getElementById('pid');                   //Cuando ya estas diciendo que vas a pasar una clase o ID no es necesario el "." o "#" solo cuando usas querySelector
const input     = document.querySelector('input');

 
//const p = document.querySelectorAll('p')  Selecciona todas las etiquetas p sin importar clase o id creando un conjunto.
console.log(input.value);
console.log({
    h1,
    p,
    parrafito,
    pid,
    input,
});

h1.innerHTML = 'Patito <br> feo'; //Modifica el HTML que este dentro de la etiqueta que estemos seleccionando
h1.innerText = 'Patito <br> feo';

// innerHTML convierte todo a html y el innerTxt solo convierte a texto.
// InnerTxt es mas seguro que innerHTML.


console.log(h1.getAttribute('pantalla'));
h2.setAttribute('class', 'rojo');   //Modificar atributos de nuestros elementos HTML

h2.classList.add('azul');       //Agregar una clase
h2.classList.remove('rojo');    //Remover una clase

//h1.classList.toggle('verde');   // si ya tiene la clase o no se la podemos poner o quitar poner o quitar
//h2.classList.contains('azul')  // Condicional true or false para ver si tenemos la clase que le estamos pasando.

//input.value = "456" //Modifica el value. 

const img = document.createElement('img');
img.setAttribute('src', 'https://www.caracteristicas.co/wp-content/uploads/2017/02/oso-pardo-e1562261812337.jpg');
console.log(img);

pid.appendChild(img); //Agregar un elemento al ID "pid" de nuestro parrafo, en este caso una etiqueta img que contiene una imagen.

const input1    = document.querySelector('#calculo1');
const input2    = document.querySelector('#calculo2');
const btn       = document.querySelector('#btnCalcular');
const pResult   = document.querySelector('#result');
const form   = document.querySelector('#form');

//btn.addEventListener('click', btnOnClick);     // Escucha cada ves que ocurra cierto evento y cada ves que pase ejecuta el codigo
form.addEventListener('submit', sumarInputValues);


function sumarInputValues() {
    //event.preventDefault();
    //console.log("escuchando"); // que esta escuchand
    const sumaInputs = Number(input1.value) + Number(input2.value);     // con Number lo que digo es que tome lo que hay adentri del inputp y lo convierta a tipo numero.
                                                                        // sin el Number solo seria texto y juntaria los dos numeros nada mas. Tambien se puede usar "parseInt" en ves de Number
    pResult.innerText = "Resultado: " + sumaInputs;
}




