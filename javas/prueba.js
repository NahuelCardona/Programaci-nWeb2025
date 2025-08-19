let radio = prompt ("¿Cuanto mide el radio?")
let radioEnNumero = parseInt(radio)

function calcularCirculo (medidaDelRadio){
 let valorArea = 3.15 *medidaDelRadio*medidaDelRadio
 return valorArea
}


console.log(calcularCirculo(radioEnNumero))

