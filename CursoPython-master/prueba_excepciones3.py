def evaluaEdad(edad):
    
    #con 'raise' se lanzan excepciones propias y se personalizan mensajes.
    if edad<0:
        raise TypeError("Error. Edad negativa") #ZeroDivisionError o cualquier otro definido en la biblioteca de Python.
    
    if edad<20:
        return "eres muy jóven"
    elif edad<40:
        return "Eres jóven"
    elif edad<65:
        return "Eres maduro"
    else:
        return "Eres anciano"

print(evaluaEdad(66))