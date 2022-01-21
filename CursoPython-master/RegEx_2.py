import re

"""listaNombres=["Ana Gómez",
                "María Martín",
                "Sandra López",
                "Santiago Martín",
                "Sandra Pérez"]

for elemento in listaNombres:
    if re.findall("^Sandra", elemento):
        print(elemento)"""

"""for elemento in listaNombres:
    if re.findall("Martín$", elemento):
        print(elemento)"""
        

"""listaDominios=["http://pildorasinformaticas.es",
                "ftp://pildorasinformaticas.es",
                "http://pildorasinformaticas.com",
                "ftp://pildorasinformaticas.com"]

for elemento in listaDominios:
    if re.findall("es$", elemento):
        print(elemento)


for elemento in listaDominios:
    if re.findall("^ftp", elemento):
        print(elemento) """

"""listaDominios=["http://informaticaemespaña.es",
                "http://pildorasinformaticas.es",
                "ftp://pildorasinformaticas.com"]

for elemento in listaDominios:
    if re.findall("[ñ]", elemento):
        print(elemento) """

"""listaNombres=["Hombres",
                "Mujeres",
                "Niños",
                "Niñas",
                "Mascotas"]

for elemento in listaNombres:
    if re.findall("Niñ[oa]s", elemento):
        print(elemento) """

listaNombres=["Hombres",
                "Mujeres",
                "Camion",
                "Camión",
                "Mascotas"]

for elemento in listaNombres:
    if re.findall("Cami[oó]n", elemento):
        print(elemento) 