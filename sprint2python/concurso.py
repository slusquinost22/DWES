# -*- coding: utf-8 -*-
from random import sample

resultado = 0

pregunta= sample(range(1,4),k=2)

for i in pregunta:

    if i == 1:
        print("¿En qué año se descubrió América?\n" 
    "1) 1492\n" 
    "2) 1354\n" 
    "3) 1942")
        respuesta = input("Introduce una opción: ")
        if respuesta == '1':
            resultado +=10
        else:
            resultado -=5    
        

    elif i == 2:
        print("¿Cuántos planetas existen?\n"
    "1) 9\n"
    "2) 5\n"
    "3) 8\n")
        respuesta = input("Introduce una opción: ")
        if respuesta == '3':
            resultado +=10
        else:
            resultado -=5


    elif i == 3:
        print("¿Cuántos meses tienen 28 días?\n"
    "1) 1\n"
    "2) 12\n"
    "3) 6\n")
        respuesta = input("Introduce una opción: ")
        if respuesta == '2':
            resultado +=10
        else:
            resultado -=5    

print ("Tu puntuación es: " + str(resultado))
