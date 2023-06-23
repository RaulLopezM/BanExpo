const btnIngresar = document.getElementById("btnDepositar");
const btnRetirar = document.getElementById("btnRetirar")
const btnAcceder = document.getElementById("btnCargar");
const cantidadIn= document.getElementById("cantidad")
const cantidadR = document.getElementById("cantidadR")
const cuenta = document.getElementById("cuenta");
const nomre = document.getElementById("nomCliente")
const tabla = $('#tb_historial').DataTable();



document.addEventListener("DOMContentLoaded", function (event) {
    tabla.draw();
});

function insertarMov(cantidad,tipoTrans,noCuenta){

    let datos = {
        cantidad,
        tipoTrans,
        noCuenta
    };

    const  config = {
        method: "POST",
        body: JSON.stringify(datos),
        headers: {
            "Content-Type": "application/json",
        }
    };

    fetch(url_setMovimientos, config)
        .then(response => response.json())
        .then(data =>{

            noCuenta = data.data[0]['NoCuenta'];
            movimientos = data.data[0]['TipoTrans'];
            canti = data.data[0]['Cantidad'];
            console.log(data.data[0])
            tabla.row.add([
                noCuenta,
                movimientos,
                canti
            ]).draw()
        })
        .catch(err => console.log(err));
}

btnIngresar.addEventListener("click",function (event)
    {
        var cantidad = cantidadIn.value;
        var tipoTrans = "Deposito";
        var noCuenta = cuenta.value;
        insertarMov(cantidad,tipoTrans,noCuenta);
    }
);
btnRetirar.addEventListener("click",function (event)
    {

        var cantidad = cantidadR.value;
        var tipoTrans = "Retiro";
        var noCuenta = cuenta.value;
        insertarMov(cantidad,tipoTrans,noCuenta);
    }
);
btnAcceder.addEventListener("click",function (event)
{

    let ncuenta = cuenta.value

    let  datos = {
        ncuenta
    }

    const  config = {
        method: "POST",
        body: JSON.stringify(datos),
        headers: {
            "Content-Type": "application/json",
        }
    };

    fetch(url_getMovimientos,config)
        .then(response => response.json())
        .then(data =>{
            tabla.clear().draw();
            console.log(data);
            for(let i = 0; i<data.data.length; i++){
                noCuenta = data.data[i]['NoCuenta'];
                movimientos = data.data[i]['Movimientos'];
                canti = data.data[i]['Cantidad'];

                tabla.row.add([
                    noCuenta,
                    movimientos,
                    canti
                ]).draw();
            }
        });
});
