def suma(num1, num2):
	return num1+num2

def resta(num1, num2):
	return num1-num2

def multiplica(num1, num2):
	return num1*num2

#Gestión de errores o captura de excepciones.
def divide(num1,num2):		
	try:
		return num1/num2
	except ZeroDivisionError:
		print("No se puede dividir entre cero (0)")
		return "Operación errónea"	

#bucle infinito. Para que la ejecución del programa salga de este bucle, se debe pasar por el 'break'
while True:
	try:
		op1=(int(input("Introduce el primer numero: ")))
		op2=(int(input("Introduce el segundo numero: ")))
		break #no pasa por el except.
	except ValueError:
		print("Error. Introduce un número por favor.")
	
operacion=input("Introduce la operacion a realizar (suma,resta,multiplica,divide): ")

if operacion=="suma":
	print(suma(op1,op2))

elif operacion=="resta":
	print(resta(op1,op2))

elif operacion=="multiplica":
	print(multiplica(op1,op2))

elif operacion=="divide":
	print(divide(op1,op2))

else:
	print ("Operacion no contemplada")


print("Operacion ejecutada. Continuacion de ejecucion del programa ")