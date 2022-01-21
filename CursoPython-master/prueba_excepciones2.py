def divide():

	try:
		op1=float(input("Primer número: "))
		op2=float(input("Segundo número: "))
		print("La división es: " + str(op1/op2))

	#Se pueden poner todas las cláusulas except consecutivas que se necesiten.
	#También se podría poner un except general para cualquier error.
	except ValueError:
		print("Valor incorrecto")
	
	except ZeroDivisionError:
		print("No se puede dividir entre cero (0)")
	
	finally: #El código dentro del 'finally' se ejecutará siempre.
		print("FIN")

divide()
