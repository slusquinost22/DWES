print ("¿En que anho se descubrio America?")
print ("1) 1492")
print ("2) 1354")
print ("3) 1942")
respuesta1 = input()

print ("¿Cuantos planetas existen?")
print ("1) 9")
print ("2) 5")
print ("3) 8")
respuesta2 = input()

print ("¿Cuantos meses tienen 28 dias?")
print ("1) 1")
print ("2) 12")
print ("3) 6")
respuesta3 = input()

resultado1 = 0
resultado2 = 0
resultado3 = 0

if respuesta1 == 1:
    resultado1 +10
else:
    resultado1 -5

if respuesta2 == 3:
    resultado2 +10
else:
    resultado2 -5

if respuesta3 == 2:
    resultado3 +10
else:
    resultado3 -5

resultado = resultado1 + resultado2 + resultado3
print ("Tu puntuacion es: $resultado")
