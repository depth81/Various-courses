salarioPresidente = int(input("Introduce el salario del presidente: "))
print("Salario presidente: " + str(salarioPresidente))

salarioDirector = int(input("Introduce el salario del director: "))
print("Salario presidente: " + str(salarioDirector))

salarioJefeArea = int(input("Introduce el salario del jefe de área: "))
print("Salario presidente: " + str(salarioJefeArea))

salarioAdmvo = int(input("Introduce el salario del administrativo: "))
print("Salario presidente: " + str(salarioAdmvo))

if salarioAdmvo<salarioJefeArea<salarioDirector<salarioPresidente:
    print("Todo es correcto")
else:
    print("Algo no está bien en esta empresa")