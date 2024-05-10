import smtplib
import email.message
import pandas as pd

tabela = pd.read_csv('arquivo.csv')

for linha in range(len(tabela)):
  responsavel = tabela.loc[linha, 'PESSOA FÍSICA / RESPONSÁVEL']
  dados = tabela.loc[linha, 'DADOS']
  nomeFantasia = tabela.loc[linha, 'NOME FANTASIA']
  tel = tabela.loc[linha, 'TELEFONE']
  mail = tabela.loc[linha, 'Email']


  print(f"{responsavel}\n{dados}\n{nomeFantasia}\n{tel}\n{mail}\n")


def enviar_email():
    corpo_email = f'''
    <div style="max-width: 600px; margin: 20px auto; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
      <h2 style="text-align: center; color: #333;">Dados da Pessoa</h2>
      <div>
          <p style="margin-bottom: 10px;">PESSOA FÍSICA / RESPONSÁVEL: <span style="font-weight: bold; color: #007bff;">{responsavel}</span></p>
          <p style="margin-bottom: 10px;">DADOS: <span style="font-weight: bold; color: #007bff;">{dados}</span></p>
          <p style="margin-bottom: 10px;">NOME FANTASIA: <span style="font-weight: bold; color: #007bff;">{nomeFantasia}</span></p>
          <p style="margin-bottom: 10px;">TELEFONE: <span style="font-weight: bold; color: #007bff;">{tel}</span></p>
          <p style="margin-bottom: 10px;">Email: <span style="font-weight: bold; color: #007bff;">{mail}</span></p>
      </div>  
    </div>
    '''
    
    
    msg = email.message.Message()
    
    msg['subject']= "Email automatico criado"
    msg['From'] = 'rodrigoalaor.lm@gmail.com'
    msg['to'] = 'mariacelia.ldm@gmail.com'
    password = 'mnrt mlmt qwps zkar'
    msg.add_header('Content-Type', 'text/html')
    msg.set_payload(corpo_email)
    
    s = smtplib.SMTP('smtp.gmail.com: 587')
    s.starttls()
    s.login(msg['From'], password)
    s.sendmail(msg['From'], [msg['to']], msg.as_string().encode('utf_8'))
    print('email enviado')