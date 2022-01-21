contador=0

miEmail = input("Introduce tu email: ")

#La i va tomando el valor de cada caracter del string o elemento del objeto (lista, tupla, diccionario)

for i in miEmail:
    if (i=="@" or i=="."): #a cada vuelta de bucle...
        contador=contador+1

if contador==2:
    print("email correcto")
else:
    print("El email no es correcto")