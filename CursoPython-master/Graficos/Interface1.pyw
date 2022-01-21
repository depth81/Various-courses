from tkinter import *

raiz = Tk() #LLamada a la clase Tk

raiz.title("Ventana de pruebas")

raiz.resizable(1,1) #width, height. Valores booleanos. 0=F / 1 = T

#raiz.iconbitmap("gato.ico")  #Cambiar el ícono de la pluma por defecto.

#raiz.geometry("500x300") #width, height

raiz.config(bg="blue")

raiz.config(bd="45")
raiz.config(relief="groove")

raiz.config(cursor="hand2")

#Crear el frame
miFrame = Frame()
#empaquetar el frame en la raíz, ahora estarían separados.
miFrame.pack()
#miFrame.pack(fill="x")
#miFrame.pack(fill="y", expand="True")
#miFrame.pack(fill="both", expand="True")

#miFrame.pack(side="right", anchor="s")
miFrame.config(bg="green")
miFrame.config(width="650", height="350")

miFrame.config(bd="35")
miFrame.config(relief="sunken")

miFrame.config(cursor="pirate")

raiz.mainloop() #Para que una ventana pueda estar en ejecución debe estar dentro de un bucle infinito (mainloop). SIEMPRE AL FINAL.

