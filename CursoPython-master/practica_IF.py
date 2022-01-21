print("Programa de evaluación de notas de alumnos")

notaAlu = input("Introduce la nota del alumno: ")

def evaluacion(nota):
    valoracion="aprobado"
    if nota<5:
        valoracion="suspenso"
    return valoracion

#transformar str a int. Todo lo que se ingresa con input es un string.
print(evaluacion(int(notaAlu)))