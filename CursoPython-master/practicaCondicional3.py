print("Asignaturas optativas del año 2020")
print("Asignaturas optativas: Informática gráfica - Pruebas de software - Usabilidad y accesibilidad")
opcion = input("Escribe la asignatura elegida: ")
#Python es 'case sensitive' !!!
#Convertir lo que entre el usuario en minúsculas
asignatura = opcion.lower()

if asignatura in ("informática gráfica", "pruebas de software", "usabilidad y accesibilidad"):
    print("Asignatura elegida: " + asignatura)
else:
    print("La asignatura elegida no está contemplada")

