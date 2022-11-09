const XMLHttpRequest = require('xmlhttprequest').XMLHttpRequest;    // Instanciamos xmlhttprequest
const API = 'https://api.escuelajs.co/api/v1';                      // API donde vamos a traer los datos

function fetchData(urlApi, callback) {  // Función donde generamos la conexión, recibe urlApi y un callback.
                                        // Si estamos trabajando sobre un mismo archivo usaremos urlApi xq no podemos nombrar la linea dos dentro de este archivo
    let xhttp = new XMLHttpRequest();   // Generamos una nueva instancia más corta en xhttp.

    xhttp.open('GET', urlApi, true)                         // Abrimos una conexión con el método GET, urlApi y true para asincronismo(habilitar)
    xhttp.onreadystatechange = function (event) {           // Cuando este cambio suceda, escuchamos el estado
        if (xhttp.readyState === 4){                        // 0 = No se a inicializado || 1 = Loading || 2 = Se a cargado, se ejecuto 
                                                            // 3 = Interactuando o trabajando con la solicitud || 4 = Se a completado la llamada
            if (xhttp.status === 200) {                     // Validar el estatus sobre el valor y el tipo 200 = solicitud correcta
                callback(null, JSON.parse(xhttp.responseText))  // Retornamos callback null en error. Parse de datos(transformacion de la informacion)
            }else {
                const error = new Error('Error' + urlApi);      // Generar un nuevo error en un elemento de la API
                return callback(error, null);                   // Retornamos callback con el error y null(para los datos). Null(xq no estoy regresando ningun valor)
            }
        }
    }
    xhttp.send();   // Enviamos el llamado o solitud.
}

        // En el ejemplo se hacen varios llamados a modo de ejemplo, en el setTimeout del final se muestra la misma
        // Información de otra posición solo con el primer llamado, incluyendo el precio
fetchData(`${API}/products`, function (error1, data1) {                                     // Llamamos la función con argumentos de url y func anónima
    if (error1) return console.error(error1);                                               // Si se genera error retornamos error, info en data 1
    fetchData(`${API}/products/${data1[0].id}`, function (error2, data2) {                  // Volvemos a llamar a la función. Argumentos a pasar API y la funcion en este caso callback
        if (error2) return console.error(error2);                                           // Retornamos error2 (si se produce) e info guardada en data2
        fetchData(`${API}/categories/${data2?.category?.id}`, function (error3, data3){     // 3er llamado a la funcion. Si nos equivocamos con el nombre podes colocar al final "?" que es optional chaining
            if (error3) return console.error(error3);                                       // Return. error3 (si se produce). Info guardada en data3
            console.log(data1[0]);                                                          // Mostramos los datos de la 1er llamada
            console.log(data2.title);                                                       // Mostramos los datos de la 2da llamada
            console.log(data3.name);                                                        // Mostramos los datos de la 3er llamada
        }); 
    });
    setTimeout( () => {                         // Agregué este setTimeout para mostrar los mismos datos solo con el primer llamado a 5 seg.
        console.log(data1[1]);                  // Se utilizó la posición 1 del array de la api para variar del ej. anterior.
        console.log(data1[1].title);
        console.log(data1[1].category.name);
        console.log(data1[1].price);
    }, 5000);                                   // Tiempo en milisegundos para ejecutar esos console.log.
});






/*
console.info("info");   //muestra un mensaje de información en la consola web
console.error("error"); //muestra mensaje de un error
console.warn("warn");   //muestra mensaje de advertencia
console.log("log");     //para mensajes generales de registro de información
*/