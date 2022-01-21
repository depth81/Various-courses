'''def generaPares(limite):
    num = 1
    miLista=[]
    while num<limite:
        miLista.append(num*2)
        num+=1
    return miLista

print(generaPares(10))'''

def generaPares(limite):
    num = 1
    while num<limite:
        yield num*2
        num+=1

#guardar en 'pares' el objeto iterable que devuelve la función 'generaPares' con 'yield'.
pares=generaPares(10)  

"""pares=generaPares(20)"""

#devuelve el primer valor. Entre llamadas el objeto iterable permanece en estado de suspensión (ahorro de recursos)
print(next(pares))

print("Más código...")

#devuelve el segundo valor.
print(next(pares))

print("Más código...")

#devuelve el tercer valor.
print(next(pares))

print("Más código...")

#devuelve el cuarto valor.
print(next(pares))