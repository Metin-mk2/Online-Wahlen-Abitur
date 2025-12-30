CREATE TABLE IF NOT EXISTS register (
    id INT AUTO_INCREMENT PRIMARY KEY,
    vorname VARCHAR(255),
    nachname VARCHAR(255),
    email VARCHAR(255),
    stadt VARCHAR(255),
    plz VARCHAR(10),
    einschreibeschluessel VARCHAR(50) UNIQUE
);

CREATE TABLE IF NOT EXISTS auszaehlung (
    id INT AUTO_INCREMENT PRIMARY KEY,
    einschreibeschluessel VARCHAR(50),
    erststimme VARCHAR(100),
    zweitstimme VARCHAR(100),
    FOREIGN KEY (einschreibeschluessel) REFERENCES register(einschreibeschluessel)
);
