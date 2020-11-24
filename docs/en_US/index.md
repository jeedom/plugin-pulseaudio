# PulseAudio plugin

Plugin allowing to connect a Bluetooth speaker to your Jeedom. The
plugin also allows you to control the volume of your speaker via the
pulseaudio package.

Description :
=============

This plugin allows the management of the PulseAudio service. This service manages everything
with regard to the audio and microphone inputs and outputs, as the outputs
either wired, via bluetooth or on the network.

It also makes the PulseAudio service visible on your network
internal, you can then control it from a PC running
GNU / Linux and get the music playing on your PC to be
sent on Jeedom sound output.

This plugin also allows the addition of Bluetooth speakers to the service
Jeedom PulseAudio and offers it as standard output. So, via
Jeedom and this PulseAudio plugin you can run Deezer on your PC
under GNU / Linux (or Windows with the compatible PulseAudio client) and
get the sound sent to the bluetooth speakers
connected to Jeedom as well as to the sound output (HDMI / Jack) of Jeedom
to complete with an amp.

This simultaneous mode will arrive soon with the possibility of setting
latency, avoiding the lag between sound outputs
HDMI / Jack / Bluetooth, perfect for evening mode to the faith on the
terrace with Bluetooth speakers and in the room with the amplifier !

Configuration
=============

Plugin installation
----------------------

After downloading the plugin, you will simply need to activate the
plugin and start the installation of dependencies.

The installation can take a long time ... Once the dependencies are installed, the date of the last installation
is registered.

Allez dans les logs puis vérifiez le log « pulseaudio\_dep » afin de
check for any errors.

Plugin configuration
-----------------------

Back in the configuration of the Pulseaudio plugin, in the section
« PulseAudio plugin », sélectionner le port de clé Bluetooth et sauvegardez les modifications.

Equipment configuration
=============================

To access the configuration of PulseAudio equipment, go to
l'onglet « Plugins », « Multimédia » puis « PulseAudio ».

Cliquez sur « Ajouter » pour ajouter une Bluetooth speaker :

-   **Bluetooth speaker name** : the name of your equipment.

-   **Parent object** : indicates the parent object to which belongs
    equipment

-   **Bluetooth key port** : selection of the port of your transmitter
    Bluetooth used for this profile.

-   **Category** : equipment categories.

-   **Activate** : makes your equipment active.

-   **Visible** : makes your equipment visible.

Click on the pairing assistant:

- Cliquez sur le bouton « suivant »,

- The wizard scans the Bluetooth devices located around
your Jeedom box,

- Enter the MAC address of your Bluetooth speaker, then click
« suivant »,

- The assistant connects your Bluetooth speaker to Jeedom,

- Une fois terminé, cliquez sur « suivant ».

Enter a service name.

**Be careful** : there should be no spaces or special characters in this name
on duty.

Cliquez sur « suivant » une fois terminé et fermez l'assistant.

The MAC address of your Bluetooth speaker and the name of the associated service
are informed.

Activate, then Register equipment:

FAQ
===

**How to check the status of my service associated with my enclosure ?.**

Cliquez sur le bouton « Status » :

Check service status. This must be started with
success (SUCCESS):

**How to test sending a sound file to my speaker ?.**

Cliquez sur le bouton « Tester » :

Playback of a test audio file starts. The sound comes out of your
Bluetooth speaker.

Pour arrêter le test, cliquez sur « Arrêter le test ». The process of
reading is stopped.

**How to adjust the volume of my sound outputs?.**

Go to the configuration of the Pulseaudio plugin, in the section
« PulseAudio plugin » :

**The volume of your speaker can be adjusted. You can also check
the audio outputs to deactivate**

Troubleshoting
==============

**I have no sound!!!.**

Remember to check all the logs to detect a possible problem.
