# PulseAudio Plugin

Plugin zum Anschließen eines Bluetooth-Lautsprechers an Ihr Jeedom. Die
Mit dem Plugin können Sie auch die Lautstärke Ihres Lautsprechers über das Plugin steuern
Pulseaudio-Paket.

Description :
=============

Dieses Plugin ermöglicht die Verwaltung des PulseAudio-Dienstes. Dieser Service verwaltet alles
in Bezug auf die Audio- und Mikrofoneingänge und -ausgänge als die Ausgänge
entweder verkabelt, über Bluetooth oder im Netzwerk.

Außerdem wird der PulseAudio-Dienst in Ihrem Netzwerk sichtbar
intern können Sie es dann von einem laufenden PC aus steuern
GNU / Linux und lassen Sie die Musik auf Ihrem PC abspielen
gesendet auf Jeedom Tonausgabe.

Dieses Plugin ermöglicht auch das Hinzufügen von Bluetooth-Lautsprechern zum Dienst
Jeedom PulseAudio und bietet es als Standardausgabe. Also über
Jeedom und dieses PulseAudio-Plugin können Sie Deezer auf Ihrem PC ausführen
unter GNU / Linux (oder Windows mit dem kompatiblen PulseAudio-Client) und
Lassen Sie den Ton an die Bluetooth-Lautsprecher senden
angeschlossen an Jeedom sowie an den Soundausgang (HDMI / Jack) von Jeedom
mit einem Verstärker zu vervollständigen.

Dieser Simultanmodus wird bald mit der Möglichkeit der Einstellung verfügbar sein
Latenz, um die Verzögerung zwischen den Tonausgängen zu vermeiden
HDMI / Jack / Bluetooth, perfekt für den Abendmodus zum Glauben an die
Terrasse mit Bluetooth-Lautsprechern und im Raum mit dem Verstärker !

Configuration
=============

Plugin Installation
----------------------

Nach dem Herunterladen des Plugins müssen Sie lediglich das aktivieren
Plugin und starten Sie die Installation von Abhängigkeiten.

Die Installation kann lange dauern ... Sobald die Abhängigkeiten installiert sind, das Datum der letzten Installation
ist eingetragen.

Allez dans les logs puis vérifiez le log « pulseaudio\_dep » afin de
Überprüfen Sie, ob Fehler vorliegen.

Plugin Konfiguration
-----------------------

Zurück in der Konfiguration des Pulseaudio-Plugins im Abschnitt
« PulseAudio Plugin », sélectionner le port de clé Bluetooth et sauvegardez les modifications.

Gerätekonfiguration
=============================

Um auf die Konfiguration der PulseAudio-Geräte zuzugreifen, gehen Sie zu
l'onglet « Plugins », « Multimédia » puis « PulseAudio ».

Cliquez sur « Ajouter » pour ajouter une Bluetooth-Lautsprecher :

-   **Name des Bluetooth-Lautsprechers** : den Namen Ihrer Ausrüstung.

-   **Übergeordnetes Objekt** : gibt das übergeordnete Objekt an, zu dem es gehört
    Ausrüstung

-   **Bluetooth-Schlüsselanschluss** : Auswahl des Anschlusses Ihres Senders
    Bluetooth für dieses Profil verwendet.

-   **Kategorie** : Ausrüstungskategorien.

-   **Aktivieren** : macht Ihre Ausrüstung aktiv.

-   **Sichtbar** : macht Ihre Ausrüstung sichtbar.

Klicken Sie auf den Pairing-Assistenten:

- Cliquez sur le bouton « suivant »,

- Der Assistent scannt die Bluetooth-Geräte in der Umgebung
deine Jeedom Box,

- Geben Sie die MAC-Adresse Ihres Bluetooth-Lautsprechers ein und klicken Sie auf
« suivant »,

- Der Assistent verbindet Ihren Bluetooth-Lautsprecher mit Jeedom,

- Une fois terminé, cliquez sur « suivant ».

Geben Sie einen Dienstnamen ein.

**Achtung** : Dieser Name darf keine Leerzeichen oder Sonderzeichen enthalten
des Dienstes.

Cliquez sur « suivant » une fois terminé et fermez l'assistant.

Die MAC-Adresse Ihres Bluetooth-Lautsprechers und der Name des zugehörigen Dienstes
informiert sind.

Aktivieren und dann Geräte registrieren:

FAQ
===

**So überprüfen Sie den Status meines Dienstes, der meinem Gehäuse zugeordnet ist ?.**

Cliquez sur le bouton « Status » :

Überprüfen Sie den Servicestatus. Dies muss mit begonnen werden
Erfolg (ERFOLG):

**So testen Sie das Senden einer Audiodatei an meinen Lautsprecher ?.**

Cliquez sur le bouton « Tester » :

Die Wiedergabe einer Test-Audiodatei beginnt. Der Ton kommt aus deinem
Bluetooth-Lautsprecher.

Pour arrêter le test, cliquez sur « Arrêter le test ». Der Prozess von
Lesen wird gestoppt.

**So stellen Sie die Lautstärke meiner Tonausgänge ein?.**

Gehen Sie zur Konfiguration des Pulseaudio-Plugins im Abschnitt
« PulseAudio Plugin » :

**Die Lautstärke Ihres Lautsprechers kann eingestellt werden. Sie können auch überprüfen
die Audioausgänge zu deaktivieren**

Troubleshoting
==============

**Ich habe keinen Ton!!!.**

Denken Sie daran, alle Protokolle zu überprüfen, um ein mögliches Problem zu erkennen.
