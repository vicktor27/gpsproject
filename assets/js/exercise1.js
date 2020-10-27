function cambiap1(){
    document.getElementById("p001").innerHTML = "HE REALIZADO UN CAMBIO EN LA PAGINA SIN NECESIDAD DE BE";
}

function cambiap2() {
    document.getElementById("p002").innerHTML = "dsadsadsadsa";
}

function sumar1(){
    var x1 = 20;  //entones mi variable es de tipo numerica
    var x2 = 30;

    var resultado = x1+x2;
    document.getElementById("p004").innerHTML = resultado;
}

function concatenacion(){
    var x1 = "20";  //entones mi variable es de tipo numerica
    var x2 = "30";

    var resultado = x1+x2;
    document.getElementById("p005").innerHTML = resultado;
}

function sumaconcat(){
    var x1 = 20;  //entones mi variable es de tipo numerica
    var x2 = parseInt("30");  //el string lleva la preferencia en las operaciones
    var x3 = 20;
    var x4 = x2;

    x4 = parseInt(x2);
    var resultado = x1+x4+x3;
    document.getElementById("p006").innerHTML = resultado;
}

function leervariables(){
    var x1 = parseInt(document.getElementById("p007").innerHTML);
    console.log("HOLA MUNDO");
    console.log(x1);
    var x2 = parseInt(document.getElementById("p008").innerHTML);
    console.log(x2);
    //var x3 = parseInt(document.getElementById("p009").innerHTML);
    var resultado = x1+x2;

    document.getElementById("presultadosuma").innerHTML = resultado;
    document.getElementById("presultadosuma").style.color = "#FFAA00";
    document.getElementById("presultadosuma").style.fontSize = "xx-large";
}

function arrays(){
    var a1 = ["MATUS","BRENDA", "ANIBAL", "LIZETH"];

    document.getElementById("p0010").innerHTML = a1[0];
    document.getElementById("p0011").innerHTML = a1[1];
    document.getElementById("p0012").innerHTML = a1[2];
    document.getElementById("p0013").innerHTML = a1[3];

    //a1.sort();
    a1.reverse();
    document.getElementById("p0014").innerHTML = a1.toString();


}

//50% DEL MERCADO
//                                    NODE.JS
//HTML5 CSS(BOOSTRAP) JS (JQUERY) || PHP(LARAVEL OO)  DB(MARIADB)
//JQUERY (LOGICA DE NEGOCIOS)


//INTEGRADORA(REACT O ANGULAR (OPTATIVA A FUERZAS))


//FRAMEWORK
//JS, JQUERY(BOOTSTRAPP CSS)
//logica de negocios
//businnes inteligence
//github CV
