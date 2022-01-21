import sqlite3

miConexion=sqlite3.connect("BBDD/GestionProductos")

miCursor=miConexion.cursor()

"""miCursor.execute('''
    CREATE TABLE PRODUCTOS(
    ID INTEGER PRIMARY KEY AUTOINCREMENT,
    NOMBRE_ARTICULO VARCHAR(50) UNIQUE,
    PRECIO INTEGER,
    SECCION VARCHAR(20))  
''')

productos=[
    ("pelota", 20, "jugeteria"),
    ("pantalón", 15, "confección"),
    ("destornillador", 25, "ferretería"),
    ("jarrón", 45, "cerámica"),
    ("pantalones", 60, "confección")
]

miCursor.executemany("INSERT INTO PRODUCTOS VALUES(NULL, ?, ?, ?)", productos)
"""

"""miCursor.execute("SELECT * FROM Productos WHERE SECCION='confección'")

productos = miCursor.fetchall()

print(productos)"""

#miCursor.execute("UPDATE Productos SET PRECIO=75 WHERE NOMBRE_ARTICULO='pelota'")

miCursor.execute("DELETE FROM Productos WHERE ID=5")

miConexion.commit() #Confirmar cambios que se van a hacer en la tabla de la BD


miConexion.close()