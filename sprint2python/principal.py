import time
from factorial import func_factorial
from factorial2 import func_factorial2

print("a) Calcular factorial con recursividad")
print("b) Calcular factorial sin recursividad")
opcion= input("Escoge una opción: ")
factorial= int(input("Introduce un numero: "))

if opcion == 'a':
    start_time = time.time()
    print(func_factorial(factorial))
    end_time = time.time()
    elapsed_time = end_time -start_time
    print('El tiempo de ejecución ha sido :' + str(elapsed_time) + ' s')
    print(str("El factorial de"),factorial, str("es:" ),func_factorial(factorial))

else:
    start_time = time.time()
    print(func_factorial2(factorial))
    end_time = time.time()
    elapsed_time = end_time -start_time
    print('El tiempo de ejecución ha sido :' + str(elapsed_time) + ' s')
    print(str("El factorial de"),factorial, str("es:" ),func_factorial2(factorial))
