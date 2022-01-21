from io import open

archivoTexto = open("archivo.txt","r+") #Lectura y escritura

#archivoTexto.seek(11)

#print(archivoTexto.read(13))

#print(archivoTexto.read())

#archivoTexto.seek(len(archivoTexto.read())/2)

#archivoTexto.seek(len(archivoTexto.readline()))

#print(archivoTexto.read())

#archivoTexto.write("Comienzo del texto")

#print(archivoTexto.readlines())

listaTexto = archivoTexto.readlines()

listaTexto[1] = " Esta línea ha sido incluida desde el exterior \n"

archivoTexto.seek(0)

archivoTexto.writelines(listaTexto)

archivoTexto.close() #Cerrar en memoria.






