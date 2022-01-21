def compruebaMail(mail):
    """
    Evalúa una dirección de email recibido en busca de la @. Si tiene una @ es correcto, si no tiene o tiene más de una @ o si está al final, es incorrecto.

    >>> compruebaMail("petv1981@gmail.com")
    True

    >>> compruebaMail("petv1981gmail.com@")
    False

    >>> compruebaMail("petv1981gmail.com")
    False

    >>> compruebaMail("petv1981@gmail.com@")
    False

    """
    arroba=mail.count("@")

    if (arroba!=1 or mail.rfind("@")==(len(mail)-1) or mail.find("@")==0):
        return False
    else:
        return True


import doctest
doctest.testmod()
#Listos para hacer pruebas.




