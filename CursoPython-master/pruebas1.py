def areaTriangulo(b,a):
    """
    Calcula el área de un triángulo
    
    >>> areaTriangulo(3,6)
    'El área del triángulo es: 9.0'

    >>> areaTriangulo(4,5)
    'El área del triángulo es: 10.0'

    >>> areaTriangulo(9,3)
    'El área del triángulo es: 13.5'
    
    """
    return "El área del triángulo es: " + str((b*a)/2) 

#Se van a leer las instrucciones después de >>> dentro de la documentación de la función. Hay que importar la librería doctest.

import doctest
doctest.testmod()
#Listos para hacer pruebas.
#Si no devuelve nada está bien. Si hay algo mal devuelve un error.



