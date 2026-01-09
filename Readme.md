# Ps14 Image
Erweitert das Standard TYPO3 Image Modul um neue Ansichten und Funktionen.

## Todos
- [x] Implementierung Standardansicht
  - [x] Erweiterung Templatepfade
  - [x] Auswertung der Dimensionen aus dem Backend im Frontend
  - [x] Auswertung Cropvarianten im Frontend
  - [x] Hinzufügen der Ausrichtung (links, zentriert, rechts)
- [ ] Neues Feld (in Foundation) für die Priorität (CLS Optimierung) hinzufügen
  - [ ] Neues Feld im TCA hinzufügen (auto, high, low)
  - [ ] Auswertung im Frontend über ViewHelper
  - [ ] Counter über aktuellen Modulindex implementieren (Auslagerung in Service Singleton)
- [ ] Neues Feld Ratio hinzufügen
- [ ] Neues Feld für Ausblenden der Copyright und Description hinzufügen
- [ ] Felder für Rows und Columns hinzufügen (TYPO3 Standard)
  - [ ] Backend Optimierung
  - [ ] Auswertung im Frontend
- [ ] Neue Ansicht "Kachelansicht" implementieren