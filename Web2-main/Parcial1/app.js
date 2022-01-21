
let boton = document.getElementById("btnCalcular");

boton.onclick = function() {
    
    let Hamburguesas = document.getElementById("cantidadH").value;
    let Perros = document.getElementById("cantidadP").value;
    let Salchipapas = document.getElementById("cantidadS").value;
    let Chorizos = document.getElementById("cantidadC").value;

    let totalHamb;
    let totalPerros;
    let totalSalchipapas;
    let totalChorizos;
    let totalCuenta;
    let totalCuentaPropina;
    let descuento;

    
    if(Hamburguesas.length===0){
        Hamburguesas = 0;
        totalHamb = 0;
        console.log(Hamburguesas)
    }else{
        totalHamb = parseInt(Hamburguesas)*10000;
        console.log(totalHamb);
    }

    if(Perros.length===0){
        Perros = 0;
        totalPerros = 0;
        console.log(Perros)
    }else{
        totalPerros = parseInt(Perros)*8000;
        console.log(totalPerros);
    }

    if(Salchipapas.length ===0){
        Salchipapas = 0;
        totalSalchipapas = 0;
        console.log(Salchipapas);
    }else{
        totalSalchipapas = parseInt(Salchipapas)*6000;
        console.log(totalSalchipapas);
    }
    
    if(Chorizos.length===0){
        Chorizos = 0;
        totalChorizos = 0;
        console.log(Chorizos);
    }else{
        totalChorizos = parseInt(Chorizos)*7000;
        console.log(totalChorizos);
    }

    if(document.getElementById("propina").checked){  
        
        totalCuenta = totalHamb + totalPerros + totalSalchipapas + totalChorizos;
        totalCuentaPropina = totalCuenta + totalCuenta*0.1;
        
        if(totalCuentaPropina > 200000){

            descuento = totalCuentaPropina*0.1;
            alert(`Tiene un descuento del 10% y el total de la cuenta es: ${totalCuentaPropina - descuento}`);
        }
            
        else{//la cuenta no pasa de 200K

            alert(`El total de la cuenta es: ${totalCuentaPropina}`);
        
        }
    }
    else{//NO hay propina
        
        totalCuenta = totalHamb + totalPerros + totalSalchipapas + totalChorizos;

        if(totalCuenta > 200000){

            descuento = totalCuenta*0.10;
            alert(`Tiene un descuento del 10% y el total de la cuenta es: ${totalCuenta - descuento}`);
        
        }else{

            alert(`El total es: ${totalCuenta}`);

        } 
    }

};