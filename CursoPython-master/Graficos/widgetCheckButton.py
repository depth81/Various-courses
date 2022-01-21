from tkinter import *

root=Tk()

root.title("Ejemplo")

playa=IntVar()
montagna=IntVar()
selva=IntVar()

#foto=PhotoImage(file="avion.png")
#Label(root, image=foto).pack()

def opcionesViaje():
    opcionEscogida = ""

    if (playa.get()==1):
        opcionEscogida += " playa"
    if (montagna.get()==1):
        opcionEscogida += " montaña"
    if (selva.get()==1):
        opcionEscogida += " selva"
    
    textoFinal.config(text=opcionEscogida)

frame=Frame(root)
frame.pack()

Label(frame, text="Elige destinos", width=50).pack()

Checkbutton(frame, text="Playa", variable=playa, onvalue=1, offvalue=0, command=opcionesViaje).pack()
Checkbutton(frame, text="Montaña", variable=montagna, onvalue=1, offvalue=0, command=opcionesViaje).pack()
Checkbutton(frame, text="Selva", variable=selva, onvalue=1, offvalue=0, command=opcionesViaje).pack()

textoFinal=Label(frame)
textoFinal.pack()

root.mainloop()
