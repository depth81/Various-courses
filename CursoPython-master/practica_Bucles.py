nombre = "Píldoras informáticas"

contador=0

for i in nombre:
    if i==" ":
        continue #el código no va a contar espacios en blanco, solamente contará las letras. No se incrementa el contador en este caso y pasa a evaluar el siguiente carácter después del espacio en blanco.
    contador+=1

print(contador)


#ELSE

email = input("Introduce email: ")

for i in email:

    if i=="@":
        arroba=True
        break; #sale del bucle FOR (no entra el ELSE que es parte del FOR)

else: #Hace parte del bucle FOR porque coincide su indentación. Se ejecuta cuando el bucle ha completado todas las vueltas.

    arroba=False

print(arroba)