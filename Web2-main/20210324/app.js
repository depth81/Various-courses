/* let stringNum = "123456789";
let caracter = "";

for (let i = stringNum.length-1; i>=0; i--) {

    caracter += stringNum.charAt(i);
    
}

console.log(caracter); */


let nota;
let acumulado = 0;
let promedio;

let i = 0;
let menor = 100;

while(i<4){
    nota =  parseFloat(prompt(`Ingrese la nota ${i+1}`));
    acumulado += nota;
    if(nota<menor){
        menor = nota;
    }
    i+=1;
}

promedio = (acumulado-menor)/3;

console.log(`la nota menor es: ${menor} y el promedio es ${promedio}`);


