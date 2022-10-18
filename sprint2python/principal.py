from factorial import func_factorial
from factorial2 import func_factorial2

print("a) Calcular factorial con recursividad")
print("b) Calcular factorial sin recursividad")

opcion= input("Escoge una opción: ")

factorial= int(input("Introduce un número: "))

if opcion == 'a':
    print(str("El factorial de"),factorial, str("es:" ),func_factorial(factorial))
else:
    print(str("El factorial de"),factorial, str("es:" ),func_factorial2(factorial))

