#parejas clave:valor. Nunca hay dos claves iguales
miDiccionario = {"Alemania":"Berlín","Francia":"París","Reino Unido":"Londres","España":"Madrid"}

#Añadir un elemento al diccionario
miDiccionario["Italia"]="Lisboa"

#print(miDiccionario["Alemania"])
print(miDiccionario)

#Modificar un valor de una clave. (Sobreescribir)
miDiccionario["Italia"]="Roma"

print(miDiccionario)

#Eliminar un elemento.
del miDiccionario["Reino Unido"]
#del(miDiccionario["Reino Unido"]) Método alternativo.
print(miDiccionario)

miDiccionario2 = {"Colombia":"Bogotá", 23:"Jordan", "Mosqueteros":3}
print(miDiccionario2)

miLista = ["España", "Francia", "Colombia", "Alemania"]
miDiccionario2 = {miLista[0]:"Madrid", miLista[1]:"París",miLista[2]:"Bogotá", miLista[3]:"Berlín"}
print(miDiccionario2)
print(miDiccionario2["Francia"])
print(miDiccionario2["Colombia"])

#Diccionario almacena en su interior una tupla junto con otros valores.
miDiccionario3={23:"Jordan","Nombre":"Michael", "Equipo":"Chicago","anillos":(1991,1992,1993,1996,1997,1998)}

print(miDiccionario3)
print(miDiccionario3["Equipo"])
print(miDiccionario3["anillos"])

#Diccionario dentro de otro diccionario
miDiccionario4={23:"Jordan","Nombre":"Michael", "Equipo":"Chicago","anillos":{"Temporadas":(1991,1992,1993,1996,1997,1998)}}
print(miDiccionario4["anillos"])
print(miDiccionario4)
print(miDiccionario4.keys())
print(miDiccionario4.values())
print(len(miDiccionario4))



