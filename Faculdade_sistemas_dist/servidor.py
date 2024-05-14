import socket

def main():
    host = '192.168.16.91' # Endereço IP do servidor
    porta = 12345        # Porta para conexão

    servidor = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    servidor.bind((host, porta))
    servidor.listen(5)  # Permitir até 5 conexões pendentes

    print("Servidor aguardando conexões...")

    while True:
        cliente, endereco = servidor.accept()
        print(f"Conexão estabelecida com {endereco}")
        # Cria uma nova thread ou processo para lidar com o cliente
        processar_cliente(cliente)

def processar_cliente(cliente):
    mensagem_boas_vindas = "Bem-vindo ao servidor! O que você deseja fazer?"
    cliente.sendall(mensagem_boas_vindas.encode())

    while True:
        # Receber a mensagem do cliente
        mensagem = cliente.recv(1024).decode()

        # Verificar se o cliente encerrou a conexão
        if not mensagem:
            print("Cliente desconectado.")
            break

        # Processar a mensagem do cliente
        resposta = processar_mensagem(mensagem)

        # Enviar a resposta de volta para o cliente
        cliente.sendall(resposta.encode())

    # Fechar a conexão com o cliente
    cliente.close()

def processar_mensagem(mensagem):
    # Verificar se a mensagem recebida é "Olá mundo"
    if mensagem == "Olá mundo":
        return "Olá cliente"
    else:
        return mensagem

if __name__ == "__main__":
    main()
