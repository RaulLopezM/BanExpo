const btnIngresar = document.getElementById("btnDepositar");
const btnRetirar = document.getElementById("btnRetirar");
const btnCargar = document.getElementById("btnCargar");

const tabla = $('#tabla').DataTable({
    data : dataSet,
    columns: [
        {title: 'Numero de cuenta'},
        {title: 'Cliente'},
        {title: 'Movimiento'},
        {title: 'Cantidad'},
    ],
});
function insertarMov(cantidad,tipoTrans){

    let datos = {
        cantidad,
        tipoTrans
    }
    fetch(url_getMovimientos, {
        method: "POST",
        body: JSON.stringify(datos),
        headers: {
            "Content-Type": "application/json",
        }
    })
        .then(response => response.json())
        .then(data =>
                document.getElementById("cantidad").value="",


        )
        .catch(err => console.log(err));
}

btnIngresar.addEventListener("click",function ()
    {
        var cantidad = document.getElementById("cantidad").value;
        var tipoTrans = "Deposito";
        insertarMov(cantidad,tipoTrans);
    }
)
