from tkinter import *

root=Tk()

miFrame=Frame(root, width=500, height=400)
miFrame.pack()

#miImagen = PhotoImage(file="LION_EDGE.jpg")

#Label(miFrame, image=miImagen).place(x="300", y="400")

#Ubicar el label
#miLabel=Label(miFrame,text="Hola MUNDOOO!!!")
#miLabel.pack()
#miLabel.place(x="100", y="200")}

#Abreviado
Label(miFrame,text="Hola MUNDOOO!!!", fg="red", font=("Comic Sans Ms", 15)).place(x="100", y="200")



root.mainloop()