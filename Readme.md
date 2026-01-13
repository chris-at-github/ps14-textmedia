# Ps14 Image
Erweitert das Standard TYPO3 Image Modul um neue Ansichten und Funktionen.

## Todos
- [x] Implementierung Standardansicht
  - [x] Erweiterung Templatepfade
  - [x] Auswertung der Dimensionen aus dem Backend im Frontend
  - [x] Auswertung Cropvarianten im Frontend
  - [x] Hinzufügen der Ausrichtung (links, zentriert, rechts)
- [x] Neues Feld (in Foundation) für die Priorität (CLS Optimierung) hinzufügen
  - [x] Neues Feld im TCA hinzufügen (auto, high, low)
  - [x] Auswertung im Frontend über ViewHelper
  - [x] Counter über aktuellen Modulindex implementieren (Auslagerung in Service Singleton)
- [x] Neues Feld Ratio hinzufügen
  - [x] Feld im TCA hinzufügen (1:1, 4:3, 16:9, original)
  - [x] Übersetzung der Werte
  - [x] Auswertung im Frontend
- [x] Neues Feld für Ausblenden der Copyright und Description hinzufügen
- [x] Felder für Rows und Columns hinzufügen (TYPO3 Standard)
  - [x] Backend Optimierung
  - [x] Frontend-Ausarbeitung mit 2 und 3 Spalten
  - [ ] Testen mit mehreren Bildern
  - [ ] Maximale Columns auf 3 begrenzen
- [ ] Neue Ansicht "Kachelansicht" implementieren