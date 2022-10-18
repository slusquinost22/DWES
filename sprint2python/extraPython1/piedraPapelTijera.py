import random
JUGADAS_MAX=5
usuario_ganadas=0
programa_ganadas=0
jugadas=0
programa=""

print("EL JUEGO DE PIEDRA, PAPEL, TIJERA, ¡¡Vamos a jugar!!""\n")

while True:
    j_aleatoria= random.randint(1,4)
    print("1) Piedra""\n"
    "2) Papel""\n"
    "3) Tijera""\n")
    opcion= int(input("Escoge una opción: "))

    if opcion ==1:
        usuario= "Piedra"
    elif opcion==2:
        usuario="Papel"
    elif opcion==3:
        usuario= "Tijera"
    print("\n""Has escogido", usuario,"\n")

    if j_aleatoria ==1:
        programa= "Piedra"
    elif j_aleatoria==2:
        programa="Papel"
    elif j_aleatoria==3:
        programa= "Tijera"
    print("El programa escogió", programa)

    if programa== "Piedra" and usuario== "Papel":
        print("\n""¡Has ganado!, papel gana a piedra""\n")
        usuario_ganadas +=1
        jugadas +=1
    elif programa=="Papel" and usuario=="Tijera":
        print("\n""¡Has ganado!, tijera gana a papel""\n")
        usuario_ganadas +=1
        jugadas +=1
    elif programa=="Tijera" and usuario=="Piedra":
        print("\n""!Has ganado!, piedra gana a tijera""\n")
        usuario_ganadas +=1
        jugadas +=1

    if programa=="Piedra" and usuario=="Tijera":
        print("\n""!Has perdido!, piedra gana a tijera""\n")
        programa_ganadas +=1
        jugadas +=1
    elif programa=="Tijera" and usuario=="Papel":
        print("\n""!Has perdido!, tijera gana a papel""\n")
        programa_ganadas +=1
        jugadas +=1
    elif programa=="Papel" and usuario== "Piedra":
        print("\n""!Has perdido!, papel gana a tijera""\n")
        programa_ganadas +=1
        jugadas +=1

    if programa== usuario:
        print("\n""!Habéis empatado!""\n")

    if jugadas==JUGADAS_MAX:
        break

if usuario_ganadas> programa_ganadas:
        print("\n""¡HAS GANADO!",usuario_ganadas,"-",programa_ganadas)
elif programa_ganadas> usuario_ganadas:
        print("\n""¡HAS PERDIDO!",usuario_ganadas,"-",programa_ganadas)
