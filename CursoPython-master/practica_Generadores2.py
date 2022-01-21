#'*' indica que va a recibir un # indeterminado de elementos y que los va a recibir en forma de tupla.
def devuelve_ciudades(*ciudades):
    for elemento in ciudades:
        #for subElemento in elemento:
            yield from elemento  

ciudades=devuelve_ciudades("Madrid","Barcelona", "Bilbao", "Valencia")

print(next(ciudades))

print(next(ciudades))

print(next(ciudades))

print(next(ciudades))

