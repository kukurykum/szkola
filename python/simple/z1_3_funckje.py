def fibon():
    print("podaj liczbe: ")
    n = int(input())
    a = 0
    b = 1
    lista = [0, 1]
    for x in range(n):
        a += b
        b += a
        lista.append(a)
        lista.append(b)
    print(lista)


def silnia():
    print("podaj liczbe: ")
    n = int(input())
    s = 1
    for x in range(1, n+1):
        s *= n - (n-x)
    print(s)


def minmax():
    lista = []
    while True:
        print("podaj liczbe: ")
        n = input()
        if(n == '-'):
            break
        else:
            lista.append(int(n))

    min = lista[0]
    max = lista[0]
    i = 0
    for x in lista:
        if(lista[i] < min):
            min = lista[i]
        if(lista[i] > max):
            max = lista[i]
        i += 1

    print("min: " + str(min))
    print("max: " + str(max))


fibon()