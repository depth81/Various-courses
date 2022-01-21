from tkinter import *
from tkinter import messagebox #Para construir mensajes emergentes
import sqlite3

#***********************funciones()***********************#

def conexionBBDD():

    miConexion=sqlite3.connect("Practica/Usuarios")
    miCursor=miConexion.cursor()

    
    try:
        miCursor.execute('''
            CREATE TABLE DATOSUSUARIOS (
            ID INTEGER PRIMARY KEY AUTOINCREMENT,
            NOMBRE_USUARIO VARCHAR(50),
            PASSWORD VARCHAR(50),
            APELLIDO VARCHAR(10),
            DIRECCION VARCHAR(50),
            COMENTARIOS VARCHAR(100)
            )    
        ''')
        messagebox.showinfo("BBDD", "La base de datos ha sido creada con éxito")
    except:
        messagebox.showwarning("Atención!", "La base de datos ya existe.")

def salirDeLaAplicacion():

    valor=messagebox.askquestion("Salir", "Seguro que desea salir?")

    if valor=="yes":
        root.destroy()

def limpiarCampos():

    miNombre.set("")
    miID.set("")
    miApellido.set("")
    miDireccion.set("")
    miPass.set("")
    textoComentario.delete(1.0, END) #(punto de partida, punto final)

def crear():
    
    miConexion=sqlite3.connect("Practica/Usuarios")
    miCursor=miConexion.cursor()

    """miCursor.execute("INSERT INTO DATOSUSUARIOS VALUES(NULL,'" + miNombre.get() + 
        "','" + miPass.get() +
        "','" + miApellido.get() +
        "','" + miDireccion.get() +
        "','" + textoComentario.get("1.0", END) + "')")"""
    
    datos=miNombre.get(),miPass.get(),miApellido.get(),miDireccion.get(),textoComentario.get("1.0", END)

    #Crear una consulta SQL parametrizada
    miCursor.execute("INSERT INTO DATOSUSUARIOS VALUES(NULL,?,?,?,?,?)",(datos))

    miConexion.commit()

    messagebox.showinfo("BBDD", "Registro insertado con éxito!")
    
def leer():

    miConexion=sqlite3.connect("Practica/Usuarios")
    miCursor=miConexion.cursor()

    miCursor.execute("SELECT * FROM DATOSUSUARIOS WHERE ID=" + miID.get())

    elUsuario = miCursor.fetchall() #Devuelve array con los registros de la consulta.

    for usuario in elUsuario:
        
        miID.set(usuario[0])
        miNombre.set(usuario[1])
        miPass.set(usuario[2])
        miApellido.set(usuario[3])
        miDireccion.set(usuario[4])
        textoComentario.insert(1.0,usuario[5])

    miConexion.commit()

def actualizar():

    miConexion=sqlite3.connect("Practica/Usuarios")
    miCursor=miConexion.cursor()

    """miCursor.execute("UPDATE DATOSUSUARIOS SET NOMBRE_USUARIO='" + miNombre.get() + "', PASSWORD= '" + miPass.get() +
        "', APELLIDO = '" + miApellido.get() +
        "', DIRECCION= '" + miDireccion.get() +
        "', COMENTARIOS= '" + textoComentario.get("1.0", END) +
        "'WHERE ID=" + miID.get() 
    )"""

    datos=miNombre.get(),miPass.get(),miApellido.get(),miDireccion.get(),textoComentario.get("1.0", END)
    
    miCursor.execute("UPDATE DATOSUSUARIOS SET NOMBRE_USUARIO=?,PASSWORD=?, APELLIDO=?, DIRECCION=?, COMENTARIOS=? " + "WHERE ID=" + miID.get(),(datos))

    miConexion.commit()

    messagebox.showinfo("BBDD", "Registro actualizado con éxito!")

def eliminar():
    
    miConexion=sqlite3.connect("Practica/Usuarios")
    miCursor=miConexion.cursor()

    miCursor.execute("DELETE FROM DATOSUSUARIOS WHERE ID=" + miID.get()),

    miConexion.commit()

    messagebox.showinfo("BBDD", "Registro borrado con éxito!")
    
#*********************************************************#

root=Tk()

barraMenu=Menu(root)
root.config(menu=barraMenu, width=300, height=300)

bbddMenu=Menu(barraMenu, tearoff=0)
bbddMenu.add_command(label="Conectar", command=conexionBBDD)
bbddMenu.add_command(label="Salir", command=salirDeLaAplicacion)

borrarMenu=Menu(barraMenu, tearoff=0)
borrarMenu.add_command(label="Borrar campos", command=limpiarCampos)

CRUDMenu=Menu(barraMenu, tearoff=0)
CRUDMenu.add_command(label="Crear", command=crear)
CRUDMenu.add_command(label="Leer", command=leer)
CRUDMenu.add_command(label="Actualizar", command=actualizar)
CRUDMenu.add_command(label="Borrar", command=eliminar)

ayudaMenu=Menu(barraMenu, tearoff=0)
ayudaMenu.add_command(label="Licencia")
ayudaMenu.add_command(label="Acerca de...")

barraMenu.add_cascade(label="BBDD", menu=bbddMenu)
barraMenu.add_cascade(label="Borrar", menu=borrarMenu)
barraMenu.add_cascade(label="CRUD", menu=CRUDMenu)
barraMenu.add_cascade(label="Ayuda", menu=ayudaMenu)

#***********************Comienzo de campos***********************#

miFrame=Frame(root)
miFrame.pack()

#En cada entry va a haber una cadena de caracteres.
miID=StringVar()
miNombre=StringVar()
miApellido=StringVar()
miPass=StringVar()
miDireccion=StringVar()

cuadroID=Entry(miFrame, textvariable=miID)
cuadroID.grid(row=0, column=1, padx=10, pady=10)

cuadroNombre=Entry(miFrame, textvariable=miNombre)
cuadroNombre.grid(row=1, column=1, padx=10, pady=10)
cuadroNombre.config(fg="red", justify="right")

cuadroPass=Entry(miFrame, textvariable=miPass)
cuadroPass.grid(row=2, column=1, padx=10, pady=10)
cuadroPass.config(show="?")

cuadroApellido=Entry(miFrame, textvariable=miApellido)
cuadroApellido.grid(row=3, column=1, padx=10, pady=10)

cuadroDireccion=Entry(miFrame, textvariable=miDireccion)
cuadroDireccion.grid(row=4, column=1, padx=10, pady=10)

textoComentario=Text(miFrame, width=16, height=5)
textoComentario.grid(row=5, column=1, padx=10, pady=10)

scrollV=Scrollbar(miFrame, command=textoComentario.yview)
scrollV.grid(row=5, column=2, sticky="nsew")

textoComentario.config(yscrollcommand=scrollV.set)

#***********************Comienzo de las etiquetas***********************#

idLabel=Label(miFrame, text="ID:")
idLabel.grid(row=0, column=0, sticky="e", padx=10, pady=10)

nombreLabel=Label(miFrame, text="Nombre:")
nombreLabel.grid(row=1, column=0, sticky="e", padx=10, pady=10)

passLabel=Label(miFrame, text="Contraseña:")
passLabel.grid(row=2, column=0, sticky="e", padx=10, pady=10)

apellidoLabel=Label(miFrame, text="Apellido:")
apellidoLabel.grid(row=3, column=0, sticky="e", padx=10, pady=10)

direccionLabel=Label(miFrame, text="Dirección:")
direccionLabel.grid(row=4, column=0, sticky="e", padx=10, pady=10)

comentariosLabel=Label(miFrame, text="Comentarios:")
comentariosLabel.grid(row=5, column=0, sticky="e", padx=10, pady=10)

#***********************Comienzo de las botones***********************#

miFrame2=Frame(root)
miFrame2.pack()

botonCrear=Button(miFrame2, text="Crear", command=crear)
botonCrear.grid(row=0, column=0, sticky="e", padx=10, pady=10)

botonLeer=Button(miFrame2, text="Leer", command=leer)
botonLeer.grid(row=0, column=1, sticky="e", padx=10, pady=10)

botonActualizar=Button(miFrame2, text="Actualizar", command=actualizar)
botonActualizar.grid(row=0, column=2, sticky="e", padx=10, pady=10)

botonBorrar=Button(miFrame2, text="Borrar", command=eliminar)
botonBorrar.grid(row=0, column=3, sticky="e", padx=10, pady=10)

#************MAIN LOOP************#
root.mainloop()

