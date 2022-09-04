// Truthy y Falsy 

// Son valores que son verdaderos o falsos 

// Falsy (False)

Boolean(0);         //false
Boolean(-0)         //false
Boolean(null);      //false
Boolean(NaN);       //false
Boolean(undefined); //false
Boolean(false);     //false
Boolean("");        //false
Boolean('');        //False
Boolean(``);        //False

//Truthy (true)

Boolean(1);             //true para 1 o cualquier número diferente de cero (0)
Boolean(-1);            //true para cualquier numero negativo excepto (-0)
Boolean("a");           //true para cualquier caracter o espacio en blanco en el string
Boolean(true);          //true
Boolean([1,3]);         //true aunque el array esté vacío
Boolean({a:1});         //true aunque el objeto esté vacío
Boolean(function(){});  //Cualquier función es verdadera también


