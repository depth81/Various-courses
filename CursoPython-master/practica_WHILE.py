edad = int(input("Introduce la edad: "))

while edad<5 or edad>110:
    print("Error. Edad incorrecta")
    edad = int(input("Introduce la edad: "))

print("Edad del aspirante " + str(edad))
print("FIN")