"""def areaTriangulo(base,altura):

    return (base*altura)/2

#print(areaTriangulo(5,7))

triangulo1=areaTriangulo(5,7)
triangulo2=areaTriangulo(9,6)
print(triangulo1)
print(triangulo2)"""

#Uso de una función lambda para simplificar la sintaxis de la función. No aplica para funciones que son complejas. Una función lambda solamente devuelve un cálculo, no puede tener ni condicionales ni bucles. la función lambda no tiene nombre, es una función anónima (on the go, on demand, online)
areaTriangulo=lambda base,altura: (base*altura)/2

"""print(areaTriangulo(6,7))
print(areaTriangulo(4,5))"""

"""triangulo1=areaTriangulo(5,7)
triangulo2=areaTriangulo(9,6)
print(triangulo1)
print(triangulo2)"""

alCubo=lambda numero: pow(numero,3)
#alCubo=lambda numero: numero**3

#print(alCubo(13))
destacarValor = lambda comision: "¡${}!".format(comision)

comisionAna=15585

print(destacarValor(15585))
