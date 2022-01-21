from tkinter import *
from tkinter import filedialog

root = Tk()

def abrirFichero():
    fichero=filedialog.askopenfilename(title="Abrir", initialdir="C:", filetypes=(("Ficheros de Excel","*.xlsx"),
    ("Ficheros de PDF", "*.pdf"),("Todos los ficheros","*.*")))
    print(fichero)

Button(root, text="Abrir fichero", command=abrirFichero).pack()


root.mainloop()