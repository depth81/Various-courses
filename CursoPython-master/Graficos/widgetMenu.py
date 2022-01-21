from tkinter import *
from tkinter import messagebox  #ventanas emergentes.

root = Tk()

def infoAdicional():
    messagebox.showinfo("Procesador de Paulo", "Procesador de textos v.2020")

def avisoLicencia():
    messagebox.showwarning("Licencia", "Producto bajo licencia GNU")

def salirDeAplicacion():
    #valor = messagebox.askquestion("Salir", "seguro que desea salir?")
    valor = messagebox.askokcancel("Salir", "seguro que desea salir?")

    if valor==True:
        root.destroy() #Salir de la aplicación.

def cerrarDoc():
    valor = messagebox.askretrycancel("Reintentar", "No se puede cerrar. Bloqueado")

    if valor==False:
        root.destroy() #Salir de la aplicación.

barraMenu = Menu(root)
root.config(menu=barraMenu, width=300, height=300)

archivoMenu = Menu(barraMenu, tearoff=0)
archivoMenu.add_command(label="Nuevo")
archivoMenu.add_command(label="Guardar")
archivoMenu.add_command(label="Guardar como...")
archivoMenu.add_separator()
archivoMenu.add_command(label="Cerrar", command=cerrarDoc)
archivoMenu.add_command(label="Salir", command=salirDeAplicacion)

archivoEdicion = Menu(barraMenu, tearoff=0)
archivoEdicion.add_command(label="Copiar")
archivoEdicion.add_command(label="Cortar")
archivoEdicion.add_command(label="Pegar")

archivoHerramientas = Menu(barraMenu, tearoff=0)

archivoAyuda = Menu(barraMenu, tearoff=0)
archivoAyuda.add_command(label="licencia", command=avisoLicencia)
archivoAyuda.add_command(label="Acerca de...", command=infoAdicional)

barraMenu.add_cascade(label="Archivo", menu=archivoMenu)
barraMenu.add_cascade(label="Edicion", menu=archivoEdicion)
barraMenu.add_cascade(label="Herramientas", menu=archivoHerramientas)
barraMenu.add_cascade(label="Ayuda", menu=archivoAyuda)




root.mainloop()