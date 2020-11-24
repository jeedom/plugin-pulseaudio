# Plug-in PulseAudio

Plugin que permite conectar um alto-falante Bluetooth ao seu Jeedom. O
O plugin também permite controlar o volume do seu alto-falante através do
pacote pulseaudio.

Description :
=============

Este plugin permite o gerenciamento do serviço PulseAudio. Este serviço gerencia tudo
no que diz respeito às entradas e saídas de áudio e microfone, como as saídas
com fio, via bluetooth ou na rede.

Também torna o serviço PulseAudio visível na sua rede
interno, você pode controlá-lo a partir de um PC executando
GNU / Linux e obtenha a música que está tocando no seu PC
enviado na saída de som Jeedom.

Este plugin também permite a adição de alto-falantes Bluetooth ao serviço
Jeedom PulseAudio e oferece como saída padrão. Então, via
Jeedom e este plugin PulseAudio, você pode executar o Deezer no seu PC
no GNU / Linux (ou Windows com o cliente PulseAudio compatível) e
obtenha o som enviado para os alto-falantes bluetooth
conectado ao Jeedom, bem como à saída de som (HDMI / Jack) do Jeedom
para completar com um amplificador.

Este modo simultâneo chegará em breve com a possibilidade de definir
latência, evitando o atraso entre as saídas de som
HDMI / Jack / Bluetooth, perfeito para o modo noturno, de acordo com a
terraço com alto-falantes Bluetooth e na sala com o amplificador !

Configuration
=============

Instalação de plugins
----------------------

Após fazer o download do plug-in, basta ativar o
plugin e iniciar a instalação de dependências.

A instalação pode demorar muito ... Assim que as dependências forem instaladas, a data da última instalação
está registrado.

Allez dans les logs puis vérifiez le log « pulseaudio\_dep » afin de
verifique se há algum erro.

Configuração do plugin
-----------------------

De volta à configuração do plug-in Pulseaudio, na seção
« Plug-in PulseAudio », sélectionner le port de clé Bluetooth et sauvegardez les modifications.

Configuração do equipamento
=============================

Para acessar a configuração do equipamento PulseAudio, vá para
l'onglet « Plugins », « Multimédia » puis « PulseAudio ».

Cliquez sur « Ajouter » pour ajouter une Alto-falante Bluetooth :

-   **Nome do alto-falante Bluetooth** : o nome do seu equipamento.

-   **Objeto pai** : indica o objeto pai ao qual pertence
    o equipamento

-   **Porta chave Bluetooth** : seleção da porta do seu transmissor
    Bluetooth usado para este perfil.

-   **Categoria** : categorias de equipamentos.

-   **Ativar** : torna seu equipamento ativo.

-   **Visivél** : torna seu equipamento visível.

Clique no assistente de emparelhamento:

- Cliquez sur le bouton « suivant »,

- O assistente verifica os dispositivos Bluetooth localizados ao redor
sua caixa Jeedom,

- Digite o endereço MAC do seu alto-falante Bluetooth e clique em
« suivant »,

- O assistente conecta seu alto-falante Bluetooth ao Jeedom,

- Une fois terminé, cliquez sur « suivant ».

Digite um nome de serviço.

**Atenção** : não deve haver espaços ou caracteres especiais nesse nome
de serviço.

Cliquez sur « suivant » une fois terminé et fermez l'assistant.

O endereço MAC do seu alto-falante Bluetooth e o nome do serviço associado
são informados.

Ative e depois registre o equipamento:

FAQ
===

**Como verificar o status do meu serviço associado ao meu gabinete ?.**

Cliquez sur le bouton « Status » :

Verifique o status do serviço. Isso deve ser iniciado com
sucesso (SUCESSO):

**Como testar o envio de um arquivo de som para o meu alto-falante ?.**

Cliquez sur le bouton « Tester » :

Inicia a reprodução de um arquivo de áudio de teste. O som sai do seu
Alto-falante Bluetooth.

Pour arrêter le test, cliquez sur « Arrêter le test ». O processo de
a leitura está parada.

**Como ajustar o volume das minhas saídas de som?.**

Vá para a configuração do plug-in Pulseaudio, na seção
« Plug-in PulseAudio » :

**O volume do seu alto-falante pode ser ajustado. Você também pode verificar
as saídas de áudio para desativar**

Troubleshoting
==============

**Não tenho som!!!.**

Lembre-se de verificar todos os registros para detectar um possível problema.
