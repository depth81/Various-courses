import re

"""nombre1 = "Jara López"
nombre2 = "Antonio Gómez"
nombre3 = "Lara López"""

#match busca únicamente al inicio de la cadena de texto.
"""if re.match(".ara", nom1, re.IGNORECASE):
    print("Hemos encontrado el nombre")
else:
    print("No lo hemos encontrado")

if re.match("\d", cadena2):
    print("Hemos encontrado el número")
else:
    print("No lo hemos encontrado")"""

#Search busca en toda la cadena de texto
"""if re.search("López", nombre3):
    print("Hemos encontrado el nombre")
else:
    print("No lo hemos encontrado")"""

codigo1="fdkmsklfmdsklfdsl71dmksads"
codigo2="mkfds71fmdsklfmdsmfdkfmkld"
codigo3="fmkdlsfmdlsmfkdmflkdmsflkd"

if re.search("71", codigo3):
    print("Hemos encontrado el número")
else:
    print("No lo hemos encontrado")



