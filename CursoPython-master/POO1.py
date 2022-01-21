class Coche():
    
    #Método constructor de la clase que da un estado inicial a los objetos que pertenezcan a la clase.
    def __init__(self):
        
        #Propiedades o atributos. __ sirve para encapsular la propiedad (vble). Se debe llamar desde cualquier parte del código con __.
        self.__largoChasis=250
        self.__anchoChasis=120
        self.__ruedas=4 
        self.__enmarcha=False
        
    # Métodos o comportamientos (Qué puede hacer el objeto?).
    # 'self' es un objeto por defecto que hace referencia a la instancia perteneciente a la clase, es igual al 'this' de otros lenguajes. Es obligatorio.
    def arrancar(self, arrancamos):
        
        self.__enmarcha=arrancamos

        if(self.__enmarcha==True):
            chequeo=self.__chequeo_interno()
        
        if(self.__enmarcha and chequeo):
            return "En marcha..."
        elif(self.__enmarcha and chequeo==False):
            return "Algo está mal en el auto, no se puede arrancar."
        else:
            return "Parado."

        #miCoche.enmarcha=True es lo mismo.
    
    def estado(self):
        print("El coche tiene ", self.__ruedas, " ruedas. Un ancho de ", self.__anchoChasis, " y un largo de ", self.__largoChasis)
    
    def __chequeo_interno(self):
        
        print("Realizando chequeo interno del vehículo...")
        self.gasolina = "OK"
        self.aceite = "OK"
        self.puertas = "Cerradas"

        if(self.gasolina=="OK" and self.aceite=="OK" and self.puertas=="Cerradas"):
            return True
        else:
            return False
            

#Construir un objeto o instancia de la clase 'Coche'
miCoche = Coche()

#Acceder a un método. 'miCoche' viaja y se almacena en 'self'en el método arrancar(self). Arrancar el coche.
print(miCoche.arrancar(True))

#Ver el estado general del objeto tipo Coche.
miCoche.estado()

#Crear el segundo objeto
print("....................Segundo coche u objeto...............")

miCoche2 = Coche()
print(miCoche2.arrancar(False))
miCoche2.estado()

