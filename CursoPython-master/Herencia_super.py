class Persona():

    #Constructor (__init__)
    def __init__(self, nombre, edad, LugarResidencia):

        self.nombre = nombre
        self.edad = edad
        self.LugarResidencia = LugarResidencia
    
    def descripcion(self):

        print("Nombre: ", self.nombre, "Edad: ", self.edad, "Lugar de Residencia: ", self.LugarResidencia)

#Hereda de la clase Persona()
class Empleado(Persona):

    #Constructor
    def __init__(self, salario, antigüedad, nomEmpleado, edadEmpleado, resEmpleado):

        #Se llama al método constructor (__init__) de la clase padre usando super().
        super().__init__(nomEmpleado, edadEmpleado, resEmpleado)
        self.salario = salario
        self.antigüedad = antigüedad
    
    def descripcion(self):
        
        super().descripcion()
        print("Salario: ", self.salario, "Antigüedad: ", self.antigüedad)

#Instancia1 = Empleado(1500,15, "Manuel", 55, "Colombia")

Instancia2 = Persona("Manuel", 55, "Colombia")
Instancia2.descripcion()

print(isinstance(Instancia2, Empleado))