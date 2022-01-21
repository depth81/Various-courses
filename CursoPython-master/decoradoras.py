def funcionDecoradora(funcionParametro):
    #*args -> se va a recibir un número indeterminado de parámetros
    def funcionInterior(*args, **kwargs): #kwargs -> Argumentos con clave
        #Acciones o funcionadlidades adicionales que queremos darle a otras funciones. (Decorar)
        print("vamos a realizar un cálculo: ")
        funcionParametro(*args, **kwargs)
        print("Hemos terminado el cálculo")
    return funcionInterior


@funcionDecoradora
def suma(n1, n2, n3):
    print(n1+n2+n3)
    
@funcionDecoradora
def resta(n1,n2,n3):
    print(n1-n2+n3)

@funcionDecoradora
def potencia(b,e):
    print(pow(b,e))

suma(7,5,8)
resta(12,10,20)
potencia(b=5,e=3) #Se pasan argumentos a potencia() con clave. Clave = b y e Valor= 5 y 3. Hay que usar **kwargs