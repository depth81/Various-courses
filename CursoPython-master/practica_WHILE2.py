#importar clases para poder usarlas
import math

print("Programa de cálculo de la raíz cuadrada")

numero = int(input("Introduce un número por favor: "))

intentos=0

while numero<0:
    print("No se puede hallar la raíz de un número negativo")

    if intentos==2:
        print("Demasiados intentos. FIN.")
        break;  #salir del bucle WHILE con 'break'
    
    numero = int(input("Introduce un número por favor: "))
    
    if numero<0:
        intentos=intentos+1

if intentos<2:
    solucion=math.sqrt(numero)
    print("La raíz cuadrada de " + str(numero) + " es " + str(solucion))
