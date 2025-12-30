# Online-Wahlen (Online Voting System)

Dieses Projekt ist ein webbasiertes Online-Wahlsystem, das mit PHP, HTML, CSS und JavaScript entwickelt wurde. Es ermöglicht Benutzern, sich zu registrieren und für verschiedene Parteien abzustimmen, wobei die Ergebnisse in Echtzeit visualisiert werden.

## Voraussetzungen

Um dieses Programm lokal auszuführen, benötigen Sie:
- Einen Webserver (z. B. **XAMPP**, WAMP oder MAMP)
- **PHP** 7.4 oder höher
- **MySQL/MariaDB** Datenbank

## Installation & Start

1.  **Dateien kopieren:**
    Kopieren Sie den gesamten Projektordner in das `htdocs`-Verzeichnis Ihres Webservers (bei XAMPP standardmäßig `C:\xampp\htdocs\online_wahlen`).

2.  **Datenbank einrichten:**
    - Starten Sie **MySQL** über das XAMPP Control Panel.
    - Öffnen Sie **phpMyAdmin** (`http://localhost/phpmyadmin`).
    - Erstellen Sie eine neue Datenbank mit dem Namen `online_wahlen`.
    - Führen Sie den folgenden SQL-Code aus, um die benötigten Tabellen zu erstellen:

    ```sql
    CREATE TABLE register (
        id INT AUTO_INCREMENT PRIMARY KEY,
        vorname VARCHAR(255),
        nachname VARCHAR(255),
        email VARCHAR(255),
        stadt VARCHAR(255),
        plz VARCHAR(10),
        einschreibeschluessel VARCHAR(50) UNIQUE
    );

    CREATE TABLE auszaehlung (
        id INT AUTO_INCREMENT PRIMARY KEY,
        einschreibeschluessel VARCHAR(50),
        erststimme VARCHAR(100),
        zweitstimme VARCHAR(100),
        FOREIGN KEY (einschreibeschluessel) REFERENCES register(einschreibeschluessel)
    );
    ```

3.  **Konfiguration prüfen:**
    Stellen Sie sicher, dass die Zugangsdaten in `database.php` korrekt sind:
    ```php
    $servername="localhost";
    $username="root";
    $password="";
    $database="online_wahlen";
    ```

4.  **Programm starten:**
    - Starten Sie den **Apache** Webserver in XAMPP.
    - Öffnen Sie Ihren Browser und rufen Sie folgende URL auf:
      `http://localhost/online_wahlen/index.html`

## Alternativen zu XAMPP (für Fortgeschrittene)

Falls du XAMPP nicht nutzen möchtest, gibt es zwei gängige Alternativen auf dem Mac:

### 1. Docker (Empfohlen für saubere Umgebungen)
Wenn du **Docker Desktop** installiert hast, ist dies der einfachste Weg:

1.  Öffne das Terminal im Projektordner.
2.  Starte die Container mit einem Befehl:
    ```bash
    docker-compose up -d
    ```
3.  Die Seite ist nun unter [http://localhost:8080](http://localhost:8080) erreichbar.
4.  Die Datenbank wird automatisch erstellt und eingerichtet.

Zum Stoppen: `docker-compose down`.

### 2. Manuelle Installation via Homebrew
Du kannst PHP und MySQL einzeln installieren:
1.  **Homebrew installieren:** Falls noch nicht vorhanden, von `brew.sh` kopieren.
2.  **PHP & MySQL installieren:**
    ```bash
    brew install php mysql
    ```
3.  **MySQL starten:** `brew services start mysql`
4.  **PHP Server starten:** Navigiere im Terminal in den Ordner und starte:
    ```bash
    php -S localhost:8000
    ```
    Dann ist die Seite unter `http://localhost:8000/index.html` erreichbar.

> [!WARNING]
> Auch ohne XAMPP musst du zwingend eine **MySQL-Datenbank** am Laufen haben, da das Programm sonst keine Stimmen speichern oder auslesen kann. Die Tabellen müssen wie oben beschrieben angelegt werden.

> [!NOTE]
> In einigen PHP-Dateien (`login.php`, `gewahl.php`) ist die URL `http://localhost:7882/online_wahlen/` fest hinterlegt. Wenn Ihr lokaler Server auf einem anderen Port (z. B. 80) läuft, müssen Sie diese Stellen ggf. anpassen oder den Port Ihres Apache-Servers auf 7882 ändern.

## Funktionen

- **Registrierung/Login:** Nutzer geben ihre Daten und einen Einschreibeschlüssel an (`anmeldung.html`).
- **Wahlvorgang:** Interaktive Auswahl von Erst- und Zweitstimme (`wahlen.html`).
- **Auswertung:** Grafische Darstellung der Wahlergebnisse mittels Google Charts (`pie_chart.php`).

## Projektstruktur

- `index.html`: Startseite des Wahlsystems.
- `anmeldung.html` / `login.php`: Registrierung der Wähler.
- `wahlen.html` / `partei_wahl.js`: Die eigentliche Wahl-Oberfläche.
- `gewahl.php`: Speichert die abgegebenen Stimmen in der Datenbank.
- `pie_chart.php`: Visualisierung der Ergebnisse.
- `database.php`: Zentrale Datenbankverbindung.
- `style.css` / `style_wahlen.css` / `anmeldung.css`: Design und Layout.
