# ArmonyMarket 

## 📌 Descrizione  
ArmonyMarket è una piattaforma web per la pubblicazione e la gestione di annunci online.  
Il progetto è stato sviluppato con **Laravel (backend)** e **Vite + JavaScript (frontend)**, integrando funzionalità avanzate come analisi automatica delle immagini, sistema di revisione degli annunci e interfaccia multilingua.  

---

## 🚀 Funzionalità principali  

1. **Registrazione utente e caricamento annuncio**  
   - Creazione account semplice e sicura  
   - Inserimento di titolo, descrizione, categoria e prezzo  
   - Gestione degli annunci da area personale  

2. **Visualizzazione pubblica degli annunci**  
   - Lista annunci con filtri e ricerca  
   - Pagina di dettaglio con descrizione completa e contatti venditore  

3. **Sistema di Revisione**  
   - Ruolo di *Revisore* per approvare/rifiutare annunci  
   - Strumenti di supporto automatico per segnalare anomalie  

4. **Interfaccia multi-lingua**  
   - Traduzioni dinamiche  
   - Supporto per utenti internazionali  

5. **Caricamento multiplo di immagini**  
   - Possibilità di inserire più foto descrittive  
   - Scelta dell’immagine principale  

6. **Refactoring del front-end con crop immagini**  
   - Editing delle immagini direttamente dal browser  
   - Uniformità e professionalità delle foto  

7. **Analisi automatica delle immagini con AI**  
   - Riconoscimento oggetti e categorie  
   - Segnalazione contenuti inappropriati  

8. **Privacy e riconoscimento volti**  
   - Oscuramento automatico dei volti nelle foto caricate  

9. **Watermark personalizzato**  
   - Protezione delle immagini degli utenti  

10. **Ricerca full-text**  
    - Motore di ricerca interno con analisi su titoli e descrizioni  

---

## 🛠️ Tecnologie utilizzate  

- **Backend**: [Laravel](https://laravel.com/)  
- **Frontend**: [Vite](https://vitejs.dev/), JavaScript, Blade  
- **Database**: MySQL / MariaDB  
- **Testing**: PHPUnit  
- **AI & Image Processing**: librerie di riconoscimento immagini  

---

## ⚙️ Installazione  

### Requisiti  
- PHP >= 8.1  
- Composer  
- Node.js + npm  
- MySQL o MariaDB
- Google Vision Credential
*Per sfruttare a pieno le funzionalità del sito*

### Setup  

```bash
# Clonare il repository
git clone <repo-url>

# Entrare nella cartella del progetto
cd presto_la-rosa_carannante_neve

# Installare dipendenze PHP
composer install

# Installare dipendenze JS
npm install

# Copiare il file di configurazione
cp .env.example .env

# Generare la key di Laravel
php artisan key:generate

# Configurare database nel file .env e poi
php artisan migrate --seed


### Avvio in locale  

```bash
# Avvio server Laravel
php artisan serve

# Avvio build frontend
npm run dev

# Avvio dei job in background (es. analisi immagini)
php artisan queue:work


## ✅ Testing  

Eseguire i test con:  

```bash
php artisan test
```

---

## 👥 Ruoli  

- **Utente registrato**: pubblica e gestisce annunci  
- **Revisore**: approva o rifiuta gli annunci caricati  
- **Amministratore**: gestione completa del sistema  

---

## 📄 Licenza  
Questo progetto è rilasciato sotto licenza MIT.  
