primeiro_valor = int(input("Digite um valor: "))
segundo_valor = int(input("Digite outro valor: "))

if primeiro_valor > segundo_valor:
    print(f" '{primeiro_valor}'é maior que '{segundo_valor}'")
elif segundo_valor > primeiro_valor:
    print(f" '{segundo_valor}'é maior que '{primeiro_valor}'")
else:
    print(f"O valor {primeiro_valor} e o valor {segundo_valor} são identicos")
