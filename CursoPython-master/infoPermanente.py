import pickle

class Persona:
    def __init__(self,nombre,genero,edad):
        self.nombre = nombre
        self.genero = genero
        self.edad = edad
        print("Se ha creado una persona nueva con el nombre de: ", self.nombre)
    
    #Convertir en cadena de texto la información de un objeto.
    def __str__(self):
        return "{} {} {}".format(self.nombre, self.genero, self.edad)
    
class ListaPersonas:
    personas = []

    def __init__(self):
        listaDePersonas = open("ficheroExterno", "ab+") # ab+: Agregar información binaria.
        listaDePersonas.seek(0) #Cursor en la posición 0.
        
        try:
            self.personas=pickle.load(listaDePersonas)
            print("Se cargaron {} personas del fichero externo".format(len(self.personas)))
        except: 
            print("El fichero está vacío")
        finally:
            listaDePersonas.close()
            del(listaDePersonas)

    def agregarPersonas(self,p):
        self.personas.append(p)
        self.guardarPersonasEnFicheroExterno()
    
    def mostrarPersonas(self):
        for p in self.personas:
            print(p)
    
    def guardarPersonasEnFicheroExterno(self):
        listaDePersonas = open("ficheroExterno","wb")
        pickle.dump(self.personas, listaDePersonas)
        listaDePersonas.close()
        del(listaDePersonas)
    
    def mostrarInfo_ficheroExterno(self):
        print("La información del fichero externo es: ")
        for p in self.personas:
            print(p)

#Crear un objeto (tipo lista) personas.
miLista = ListaPersonas()
#Crear una persona
persona = Persona("Ana", "Femenino", 19)
#Pasar la Persona al método para agregarla
miLista.agregarPersonas(persona)
#Ver la información de ficheroExterno.
miLista.mostrarInfo_ficheroExterno()
