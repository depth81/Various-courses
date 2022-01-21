import re

cadena = "Vamos a aprender las expresiones regulares en Python. Python es un lenguaje de sintaxis sencilla"

#print(re.search("aprender",cadena))

textoBuscar="Python"

"""if re.search(textoBuscar, cadena) is not None:
    print("He encontrado el texto!")
else:
    print("No he encontrado el texto")"""

"""textoEncontrado=re.search(textoBuscar,cadena)

print(textoEncontrado.start())
print(textoEncontrado.end())
print(textoEncontrado.span())"""

print(len(re.findall(textoBuscar,cadena)))