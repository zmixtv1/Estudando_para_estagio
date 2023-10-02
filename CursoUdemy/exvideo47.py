
name = str(input("Digite seu nome: "))
age = int(input("Digite sua idade: "))
if " " in name:
    space = "Contem"
else:
    space = "Não Contem"
print(f"Seu nome é {name}")
print(f"Seu nome invertido é {name[::-1]}")
print(f"Seu nome {space} espaços")
print(f"Seu nome tem {len(name)} letras")
print(f"A primeira letra do seu nome é {name[0]}")
print(f"A ultima letra do seu nome é {name[-1]}")
