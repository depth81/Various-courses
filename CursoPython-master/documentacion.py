from Modulos import funciones_matematicas

class Areas:
    
    """Esta clase calcula áreas geométricas """

    def areaCuadrado(self,lado):
        """Calcula el área de un cuadrado."""
        return "El área del cuadrado es: " + str(lado*lado)

    def areaTriangulo(self,b,a):
        """Calcula el área de un triángulo.
        (Base*Altura)/2"""
        return "El área del triángulo es: " + str(b*a)/2


#print(areaCuadrado(5))
#Imprimir en consola la documentación de la función.
#print(areaCuadrado.__doc__) 

"""help(Areas.areaCuadrado)
help(Areas.areaTriangulo)
help(Areas)"""
help(funciones_matematicas)