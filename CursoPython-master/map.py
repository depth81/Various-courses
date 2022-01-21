# MAP -> Aplicar una función a cada elemento de un objeto iterable.

class Empleado:

    def __init__(self, nombre, cargo, salario):
        
        self.nombre=nombre
        self.cargo=cargo
        self.salario=salario
    
    #devolver un string con la información o datos de un objeto.
    def __str__(self):
        
        return "{} que trabaja como {} tiene un salario de ${}".format(self.nombre, self.cargo, self.salario)
    
listaEmpleados=[
    Empleado("Juan", "Director", 7500),
    Empleado("Paulo", "Programador", 8500),
    Empleado("Luisa", "Médico", 9500),
    Empleado("Jorge", "Comercial", 6500),
    Empleado("Sara", "Secretaria", 2000),
    Empleado("Mario", "Botones", 1500)
    ]


def calculoComision(empleado):
    
    if (empleado.salario <= 3000):
        #sumar una comisión de 3% al salario.
        empleado.salario=empleado.salario*1.03 
    return empleado

listaComisiones=map(calculoComision, listaEmpleados)

#ver los elementos filtrados
for empleado in listaComisiones:
    print(empleado)

