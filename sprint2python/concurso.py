# -*- coding: utf-8 -*-
resultado = 0
print ("?En que anho se descubrio America?")
print ("1) 1492")
print ("2) 1354")
print ("3) 1942")
respuesta = input()
if respuesta == 1:
    resultado +10
else:
    resultado -5

print ("?Cuantos planetas existen?")
print ("1) 9")
print ("2) 5")
print ("3) 8")
respuesta = input()
if respuesta == 3:
    resultado +10
else:
    resultado -5
print ("?Cuantos meses tienen 28 dias?")
print ("1) 1")
print ("2) 12")
print ("3) 6")
respuesta = input()
if respuesta == 2:
    resultado +10
else:
    resultado -5

print ("Tu puntuaci?n es: " + resultado)