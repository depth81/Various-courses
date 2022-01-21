"""import pickle

listaNombres = ["Paulo", "Ana", "María", "Isabel"]

ficheroBinario = open("listaNombres","wb") #wb -> escritura binaria

pickle.dump(listaNombres,ficheroBinario) #ficheroBinario está en memoria, diferente al que va a quedar guardado en el HDD (listaNombres)

ficheroBinario.close()

del (ficheroBinario) #Borrar de la memoria"""

import pickle

fichero = open("listaNombres", "rb") #rb -> read binary

lista = pickle.load(fichero)

print(lista)


