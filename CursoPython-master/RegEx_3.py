import re

"""listaNombres=["Ana",
                "Paulo",
                "María",
                "Rosa",
                "Sandra",
                "Celia"]

for elemento in listaNombres:
    if re.findall("[o-t]$", elemento):
        print(elemento) """

listaNombres=["Ma.1",
                "Se1",
                "Ma2",
                "Ba1",
                "Ma:3",
                "Va1",
                "Va2",
                "Ma4",
                "MaA",
                "Ma5",
                "MaB",
                "Ma:C"]

"""for elemento in listaNombres:
    if re.findall("Ma[0-3]", elemento):
        print(elemento)"""

"""for elemento in listaNombres:
    if re.findall("Ma[^0-3]", elemento):
        print(elemento)"""

"""for elemento in listaNombres:
    if re.findall("Ma[0-3A-B]", elemento):
        print(elemento)"""

for elemento in listaNombres:
    if re.findall("Ma[.:][0-3]", elemento):
        print(elemento)