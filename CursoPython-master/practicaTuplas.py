#miTupla = ("Paulo",17,2,1981)
miLista = ["Paulo",17,2,1981,1981]

#Convertir tuplas <--> listas

#Convertir tupla a lista
#miLista=list(miTupla)

#convertir una lista en tuplam
miTupla=tuple(miLista)
print(miTupla)
print(miLista)
print("Paulo" in miTupla) #TRUE
print(1982 in miTupla)  #FALSE si el elemento no existe
print(miTupla.count(1981))
print(len(miTupla))

#print(miTupla[1])

#Tuplas unitarias. Un único elemento.
miTupla2 =("Enrique",)  #la ',' indica una tupla unitaria
print(len(miTupla2))

#desempaquetado de tuplas (asignar los valores de la tupla a variables).
miTupla3=("Paulo",17,2,1981)
nombre, dia, mes, anio = miTupla3
print(nombre)
print(dia)
print(anio)
print(mes)

