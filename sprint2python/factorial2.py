factorial= int(input(str("CALCULA EL FACTORIAL." "\n""Introduce un número: ")))

def func_factorial2(factorial):
    if factorial==0 or factorial==1:
        factorial=1
    elif factorial >1:
        for i in range(1, factorial):
            factorial=factorial*i
    return factorial

print(str("El factorial de"),factorial, str("es:" ),func_factorial2(factorial))
