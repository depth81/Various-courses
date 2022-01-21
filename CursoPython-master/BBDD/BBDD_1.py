import sqlite3

miConexion=sqlite3.connect("BBDD/BBDD_1")

miCursor=miConexion.cursor()

#miCursor.execute("CREATE TABLE Productos (nomArticulo varchar(50), precio integer, seccion varchar(20))")

#miCursor.execute("INSERT INTO Productos VALUES('Balón',15,'Deportes')")

"""variosProductos=[
    ("Camiseta",10,"Deportes"),
    ("Jarrón",90,"Cerámicas"),
    ("Camión",25,"Juguetería")
]

miCursor.executemany("INSERT INTO Productos VALUES (?,?,?)", variosProductos)"""

miCursor.execute("SELECT * FROM Productos")

#Para obtener o leer un lote de registros se necesita una lista.
#fetchall devuelve una lista con todos los registros que recupera el SELECT.
variosProductos = miCursor.fetchall()

#print(variosProductos)

for producto in variosProductos:
    print("Nombre Artículo: ", producto[0], "Sección: ", producto[2])

miConexion.commit() #Confirmar cambios" que se van a hacer en la tabla.


miConexion.close()