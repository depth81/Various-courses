edad = input("Introduce la edad: ")

while(edad.isdigit()==False):
    print("Introduzca un número")
    edad = input("Introduce la edad: ")

if (int(edad)<18):
    print("No puede pasar")
else:
    print("Bienvenido")