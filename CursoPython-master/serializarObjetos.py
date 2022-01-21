import pickle

class Vehiculos():

    def __init__(self,marca,modelo):
        self.marca = marca
        self.modelo = modelo
        self.enMarcha = False
        self.acelera = False
        self.frena = False

    def arrancar(self):
        self.enMarcha = True
        
    def acelerar(self):
        self.acelera = True
        
    def frenar(self):
        self.frena = True
        
    def estado(self):
        print("Marca: ", self.marca, "\nModelo: ", self.modelo, "\nEn Marcha: ",self.enMarcha, "\nAcelerando: ", self.acelera, "\nFrenando: ", self.frena)

coche1 = Vehiculos("Mazda","MX5")
coche2 = Vehiculos("Seat","Leon")
coche3 = Vehiculos("Renault","Megane")

coches = [coche1,coche2,coche3]

fichero = open("losCoches","wb") #wb -> write byte. En fichero se guarda la información ya serializada.

pickle.dump(coches, fichero)

fichero.close()

del (fichero)

import pickle

#Rescatar la información en 'fichero'

ficheroApertura = open("losCoches", "rb") #rb -> read byte.

misCoches = pickle.load(ficheroApertura) #Cargar la información que hay en ficheroApertura en misCoches.

ficheroApertura.close()

#Recorrer la información en misCoches.
for i in misCoches:
    print(i.estado())

