# Online-Wahlen

Dieses Projekt ist ein webbasiertes Online-Wahlsystem, das mit PHP, HTML, CSS und JavaScript entwickelt wurde für meine Eigenleistung im Abitur für die Fächer Informatik und Politik. Es ermöglicht Benutzern, sich zu registrieren und für verschiedene Parteien abzustimmen, wobei die Ergebnisse in Echtzeit visualisiert werden.

> HINWEIS: Die ursprüngliche Software lief auf [XAMPP](https://www.apachefriends.org/) und wurde aus Kompatibilitätsgründen von mir auf Docker umgestellt. Bis auf die Umstellung auf Docker und ein Refactor für die Leserlichkeit, handelt es sich um den original verfassten Code von mir aus 2023.


## Installation & Start

### Docker
Wenn du **Docker Desktop** installiert hast, ist dies der einfachste Weg:

1.  Öffne das Terminal im Projektordner.
2.  Starte die Container mit einem Befehl:
    ```bash
    docker-compose up -d
    ```
3.  Die Seite ist nun unter [http://localhost:8080](http://localhost:8080) erreichbar.
4.  Die Datenbank wird automatisch erstellt und eingerichtet.

Zum Stoppen: `docker-compose down`.

## Funktionen

- **Registrierung/Login:** Nutzer geben ihre Daten und einen Einschreibeschlüssel an (`anmeldung.html`).
- **Wahlvorgang:** Interaktive Auswahl von Erst- und Zweitstimme (`wahlen.html`).
- **Auswertung:** Grafische Darstellung der Wahlergebnisse mittels Google Charts (`pie_chart.php`).

## Projektstruktur

- `index.html`: Mock-Homepage des Bundestags.
- `anmeldung.html` / `login.php`: Registrierung der Wähler.
- `wahlen.html` / `partei_wahl.js`: Die eigentliche Wahl-Oberfläche.
- `gewahl.php`: Speichert die abgegebenen Stimmen in der Datenbank.
- `pie_chart.php`: Visualisierung der Ergebnisse.
- `database.php`: Zentrale Datenbankverbindung.
- `style.css` / `style_wahlen.css` / `anmeldung.css`: Design und Layout.
