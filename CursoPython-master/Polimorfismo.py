class Coche():

    def desplazamiento(self):
        print("Me desplazo sobre cuatro (4) ruedas")

class Moto():

    def desplazamiento(self):
        print("Me desplazo sobre dos (2) ruedas")

class Camion():

    def desplazamiento(self):
        print("Me desplazo sobre seis (6) ruedas")

"""miVehiculo = Moto()
miVehiculo.desplazamiento()

miVehiculo2 = Coche()
miVehiculo2.desplazamiento()

miVehiculo3 = Camion()
miVehiculo3.desplazamiento()"""

#Polimorfismo. 
def desplazamientoVehiculo(Vehiculo):
    Vehiculo.desplazamiento()

miVehiculo = Moto()

desplazamientoVehiculo(miVehiculo)