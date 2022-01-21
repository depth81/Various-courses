#Crear clase padre o superclase
class Vehiculos():

    #Constructor de la clase. Define el estado inicial de cada instancia al ser creada.
    def __init__(self,marca,modelo):
        self.marca = marca
        self.modelo = modelo
        self.enMarcha = False
        self.acelera = False
        self.frena = False

    #Métodos
    def arrancar(self):
        self.enMarcha = True
        
    def acelerar(self):
        self.acelera = True
        
    def frenar(self):
        self.frena = True
        
    def estado(self):
        print("Marca: ", self.marca, "\nModelo: ", self.modelo, "\nEn Marcha: ",self.enMarcha, "\nAcelerando: ", self.acelera, "\nFrenando: ", self.frena)

#HERENCIA
class Furgoneta(Vehiculos):
    
    def carga(self,cargar):
        self.cargado = cargar
        if(self.cargado):
            return "La furgoneta está cargada"
        else:
            return "La furgoneta está vacía"

#NO Hereda de la clase 'Vehiculos'
class VElectricos(Vehiculos):
    #Constructor
    def __init__(self, marca, modelo):
        
        #Llamar al constructor de la clase padre.
        super().__init__(marca, modelo)
        self.autonomia = 100
    
    def cargarEnergia(self):
        self.cargando = True

#HERENCIA
class Moto(Vehiculos):

    hcaballito = "No hago nada."
    
    def caballito(self):
        self.hcaballito="Voy haciendo el caballito..."
    
    #Sobreescritura de método
    def estado(self):
        print("Marca: ", self.marca, "\nModelo: ", self.modelo, "\nEn Marcha: ",self.enMarcha, "\nAcelerando: ", self.acelera, "\nFrenando: ", self.frena, "\n", self.hcaballito)


#Herencia múltiple: Se hereda de dos o más clases. Se hereda el constructor de la primera clase que indico en la herencia múltiple, en este caso "Velectricos". La prioridad es entonces de izq. a der. en los paréntesis.
class BiciElectrica(VElectricos,Vehiculos):
    pass

#Crear una instancia de la clase 'Moto'
miMoto = Moto("Honda", "CBR")
miMoto.caballito()
miMoto.estado()

miFurgoneta = Furgoneta("Renault", "Kangoo")
miFurgoneta.arrancar()
miFurgoneta.estado()
print(miFurgoneta.carga(True))

#Se usa el constructor de la clase 'BiciElectrica'
miBici = BiciElectrica("Orbea", "HC20")


