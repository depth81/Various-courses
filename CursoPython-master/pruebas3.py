import math

def raiz2(listaNum):
    """
    Devuelve una lista con la raíz cuadrada de los elementos numéricos en otra lista que recibe como parámetro.

    >>> lista=[]
    >>> for i in [4,9,16]: 
    ...     lista.append(i)
    >>> raiz2(lista)
    [2.0, 3.0, 4.0]

    >>> lista=[]
    >>> for i in [4.9, 16, 50, 78, -90, 125]:
    ...     lista.append(i)
    >>> raiz2(lista)
    Traceback (most recent call last):
        ...
    ValueError: math domain error

    """

    return [math.sqrt(n) for n in listaNum]


#print(raiz2([9,-16,25,39]))

import doctest
doctest.testmod()




