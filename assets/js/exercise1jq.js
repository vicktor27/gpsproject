$(document).ready(function(){
        for(i = 1 ; i<9 ; i++){
            $("#btn00"+i).click(function () {
               console.log("LE AGREGUE LA FUNCION A LOS 8 DE JALON,BOTON BTN00"+i);
              });
        }

        $("#inp001").hover(function () {
                console.log("EL MOUSE ESTA SOBRE EL INP001");
        });

});


