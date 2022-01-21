"""def numeroPar(num):

    if num%2==0:
        return True"""
    

"""numeros=[17,24,7,39,8,51,92]

print(list(filter(lambda numeroPar: numeroPar%2==0,numeros)))"""

class Empleado:

    def __init__(self, nombre, cargo, salario):
        
        self.nombre=nombre
        self.cargo=cargo
        self.salario=salario
    
    #devolver un string con la información o datos de un objeto.
    def __str__(self):
        
        return "{} que trabaja como {} tiene un salario de ${}".format(self.nombre, self.cargo, self.salario)
    
listaEmpleados=[
    Empleado("Juan", "Director", 75000),
    Empleado("Paulo", "Actor", 85000),
    Empleado("Luisa", "Médico", 95000),
    Empleado("Jorge", "Comercial", 175000),
    Empleado("Sara", "Secretaria", 25000),
    Empleado("Mario", "Botones", 15000)
    ]

salariosAltos=filter(lambda empleado: empleado.salario>50000, listaEmpleados)

for empleadoSalario in salariosAltos:
    print(empleadoSalario)