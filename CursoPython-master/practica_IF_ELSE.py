"""
print("verificación de acceso")
edadUsuario = int(input("Introduce tu edad: "))

if edadUsuario<18:
    print("No puedes pasar")
elif edadUsuario>100:
    print("Edad incorrecta")
else:
    print("puedes pasar")

print("FIN")

"""
print("Verificacion de notas")

notaAlumno = int(input("Introduce tu nota, por favor: "))

if notaAlumno<5:
    print("Insuficiente")

elif notaAlumno<6:
    print("Suficiente")

elif notaAlumno<7:
    print("Bien")

elif notaAlumno<9:
    print("Notable")

else:
    print("Sobresaliente")