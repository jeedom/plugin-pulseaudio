# Complemento PulseAudio

Plugin que permite conectar un altavoz Bluetooth a su Jeedom. El
El complemento también le permite controlar el volumen de su altavoz a través de
paquete pulseaudio.

Description :
=============

Este complemento permite la gestión del servicio PulseAudio. Este servicio gestiona todo
con respecto a las entradas y salidas de audio y micrófono, como las salidas
ya sea por cable, a través de bluetooth o en la red.

También hace que el servicio PulseAudio sea visible en su red
interno, puede controlarlo desde una PC en ejecución
GNU / Linux y obtén la música que suena en tu PC
enviado en salida de sonido Jeedom.

Este complemento también permite agregar altavoces Bluetooth al servicio
Jeedom PulseAudio y lo ofrece como salida estándar. Entonces, vía
Jeedom y este complemento PulseAudio puedes ejecutar Deezer en tu PC
bajo GNU / Linux (o Windows con el cliente PulseAudio compatible) y
recibe el sonido enviado a los altavoces bluetooth
conectado a Jeedom así como a la salida de sonido (HDMI / Jack) de Jeedom
para completar con un amplificador.

Este modo simultáneo llegará pronto con la posibilidad de configurar
latencia, evitando el retraso entre salidas de sonido
HDMI / Jack / Bluetooth, perfecto para el modo nocturno a la fe en el
terraza con altavoces Bluetooth y en la sala con amplificador !

Configuration
=============

Instalación de complementos
----------------------

Después de descargar el complemento, simplemente deberá activar el
plugin e iniciar la instalación de dependencias.

La instalación puede llevar mucho tiempo ... Una vez instaladas las dependencias, la fecha de la última instalación
Esta registrado.

Allez dans les logs puis vérifiez le log « pulseaudio\_dep » afin de
verificar si hay errores.

Configuración del plugin
-----------------------

De vuelta en la configuración del complemento Pulseaudio, en la sección
« Complemento PulseAudio », sélectionner le port de clé Bluetooth et sauvegardez les modifications.

Configuración del equipo
=============================

Para acceder a la configuración del equipo PulseAudio, vaya a
l'onglet « Plugins », « Multimédia » puis « PulseAudio ».

Cliquez sur « Ajouter » pour ajouter une Altavoz bluetooth :

-   **Nombre del altavoz Bluetooth** : el nombre de tu equipo.

-   **Objeto padre** : indica el objeto padre al que pertenece
    equipo

-   **Puerto de llave Bluetooth** : selección del puerto de su transmisor
    Bluetooth utilizado para este perfil.

-   **Categoría** : categorías de equipos.

-   **Activar** : activa su equipo.

-   **Visible** : hace que su equipo sea visible.

Haga clic en el asistente de emparejamiento:

- Cliquez sur le bouton « suivant »,

- El asistente escanea los dispositivos Bluetooth ubicados alrededor
tu caja de Jeedom,

- Ingrese la dirección MAC de su altavoz Bluetooth, luego haga clic en
« suivant »,

- El asistente conecta su altavoz Bluetooth a Jeedom,

- Une fois terminé, cliquez sur « suivant ».

Ingrese un nombre de servicio.

**Atención** : no debe haber espacios ni caracteres especiales en este nombre
de servicio.

Cliquez sur « suivant » une fois terminé et fermez l'assistant.

La dirección MAC de su altavoz Bluetooth y el nombre del servicio asociado
están informados.

Activar, luego registrar equipo:

FAQ
===

**Cómo verificar el estado de mi servicio asociado con mi gabinete ?.**

Cliquez sur le bouton « Status » :

Verificar el estado del servicio. Esto debe comenzar con
éxito (ÉXITO):

**Cómo probar el envío de un archivo de sonido a mi altavoz ?.**

Cliquez sur le bouton « Tester » :

Comienza la reproducción de un archivo de audio de prueba. El sonido sale de tu
Altavoz bluetooth.

Pour arrêter le test, cliquez sur « Arrêter le test ». El proceso de
la lectura se detiene.

**Cómo ajustar el volumen de mis salidas de sonido?.**

Vaya a la configuración del complemento Pulseaudio, en la sección
« Complemento PulseAudio » :

**El volumen de su altavoz se puede ajustar. También puedes consultar
las salidas de audio para desactivar**

Troubleshoting
==============

**No tengo sonido!!!.**

Recuerda revisar todos los registros para detectar un posible problema.
