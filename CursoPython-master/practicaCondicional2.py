print("Programa de becas 2020")

distEscuela = int(input("Introduce la distancia a la escuela en Km: "))
print(distEscuela)

nroHermanos = int(input("Introduce el # de hermanos en el centro: "))
print(nroHermanos)

salarioFam = int(input("Introduce el salario anual bruto: "))
print(salarioFam)

if distEscuela>40 and nroHermanos>2 or salarioFam<=20000:
    print("Tienes derecho a la beca")
else:
    print("No tienes derecho a beca")