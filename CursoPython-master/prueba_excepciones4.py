import math

def calculaRaiz(num1):
    if num1<0:
        raise ValueError("eL número no puede ser negativo")
    else:
        return math.sqrt(num1)

op1=int(input("Introduce un número: "))


try:
    print(calculaRaiz(op1)) #Esta es la línea que lanza la excepción.
except ValueError as ErrorNumeroNegativo:
    print(ErrorNumeroNegativo)

print("FIN")