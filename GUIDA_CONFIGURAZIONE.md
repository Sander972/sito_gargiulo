# Guida Configurazione Tema 3dpieces

Questa guida ti accompagna passo-passo nella configurazione completa del tuo sito WordPress.

## Indice

1. [Menu Footer (Opzionale)](#1-menu-footer-opzionale)
2. [Widget Area Footer](#2-widget-area-footer)
3. [Installazione Plugin Essenziali](#3-installazione-plugin-essenziali)
4. [Configurazione Advanced Custom Fields (ACF)](#4-configurazione-advanced-custom-fields-acf)
5. [Creazione Progetti Portfolio](#5-creazione-progetti-portfolio)
6. [Form di Contatto](#6-form-di-contatto)
7. [Plugin Aggiuntivi Consigliati](#7-plugin-aggiuntivi-consigliati)

---

## 1. Menu Footer (Opzionale)

Il tema supporta un menu secondario nel footer per link rapidi.

### Passaggi:

1. **Vai a**: WordPress Admin → **Aspetto** → **Menu**

2. **Crea un nuovo menu**:
   - Clicca su "Crea un nuovo menu"
   - Nome suggerito: "Menu Footer" o "Link Rapidi"
   - Clicca "Crea menu"

3. **Aggiungi voci al menu**:
   - Seleziona pagine dalla colonna sinistra (Servizi, Portfolio, Chi Sei, Contatti)
   - Oppure aggiungi link personalizzati:
     - Privacy Policy
     - Termini e Condizioni
     - Cookie Policy
   - Clicca "Aggiungi al menu"

4. **Assegna la posizione**:
   - Sotto "Impostazioni del menu", spunta la casella **"Footer"**
   - Clicca "Salva menu"

### Contenuto Suggerito per Menu Footer:
- Privacy Policy
- Termini e Condizioni
- Cookie Policy
- Servizi
- Contatti

---

## 2. Widget Area Footer

Il footer ha 3 colonne widget per organizzare le informazioni aziendali.

### Passaggi:

1. **Vai a**: WordPress Admin → **Aspetto** → **Widget**

2. **Troverai 3 aree widget**:
   - **Footer Column 1** - Informazioni azienda
   - **Footer Column 2** - Link rapidi
   - **Footer Column 3** - Contatti

### Configurazione Colonna 1: Informazioni Azienda

1. **Aggiungi widget**: Trascina **"Testo"** o **"Paragrafo"** in "Footer Column 1"

2. **Titolo**: `Chi Siamo` o `3dpieces by Gargiulo Daniele`

3. **Contenuto** (esempio):
```
Specializzati in stampa 3D professionale e progettazione CAD per il settore automotive e industriale.
Trasformiamo le tue idee in prototipi funzionali e componenti di produzione.
```

4. Clicca **"Salva"**

### Configurazione Colonna 2: Link Rapidi

**Opzione A - Usa il Menu Footer** (se l'hai creato):
1. Trascina widget **"Menu di navigazione"** in "Footer Column 2"
2. Titolo: `Link Rapidi`
3. Seleziona menu: "Menu Footer"
4. Salva

**Opzione B - Lista Manuale**:
1. Trascina widget **"Testo"** o **"HTML personalizzato"** in "Footer Column 2"
2. Titolo: `Link Rapidi`
3. Contenuto HTML:
```html
<ul style="list-style: none; padding: 0;">
  <li><a href="/servizi">Servizi</a></li>
  <li><a href="/portfolio">Portfolio</a></li>
  <li><a href="/chi-sei">Chi Siamo</a></li>
  <li><a href="/contatti">Contatti</a></li>
</ul>
```
4. Salva

### Configurazione Colonna 3: Informazioni di Contatto

1. Trascina widget **"Testo"** o **"HTML personalizzato"** in "Footer Column 3"

2. Titolo: `Contatti`

3. Contenuto (sostituisci con i tuoi dati reali):
```html
<p>
  <strong>Email:</strong><br>
  <a href="mailto:info@3dpieces.it">info@3dpieces.it</a>
</p>

<p>
  <strong>Telefono:</strong><br>
  <a href="tel:+393331234567">+39 333 123 4567</a>
</p>

<p>
  <strong>WhatsApp:</strong><br>
  <a href="https://wa.me/393331234567?text=Ciao,%20vorrei%20informazioni" target="_blank">Scrivici su WhatsApp</a>
</p>

<p>
  <strong>Indirizzo:</strong><br>
  Via Esempio 123<br>
  00000 Città (Provincia)
</p>
```

4. Salva

---

## 3. Installazione Plugin Essenziali

### Plugin da Installare Subito:

#### A. Advanced Custom Fields (ACF)

1. **Vai a**: WordPress Admin → **Plugin** → **Aggiungi nuovo**
2. **Cerca**: "Advanced Custom Fields"
3. **Installa**: Advanced Custom Fields (by WP Engine) - versione GRATUITA
4. **Attiva** il plugin

#### B. Contact Form 7 (per il form contatti)

1. **Vai a**: WordPress Admin → **Plugin** → **Aggiungi nuovo**
2. **Cerca**: "Contact Form 7"
3. **Installa**: Contact Form 7 (by Takayuki Miyoshi)
4. **Attiva** il plugin

---

## 4. Configurazione Advanced Custom Fields (ACF)

ACF serve per aggiungere campi personalizzati ai progetti portfolio.

### Passaggi:

1. **Vai a**: WordPress Admin → **ACF** → **Gruppi di Campi** (o "Field Groups")

2. **Clicca**: "Aggiungi nuovo" (Add New)

3. **Titolo del gruppo**: `Portfolio - Dettagli Progetto`

### Campi da Aggiungere:

#### Campo 1: Problema

- **Etichetta campo**: `Problema`
- **Nome campo**: `problema` (si genera automaticamente)
- **Tipo di campo**: `Area di testo` (Textarea)
- **Istruzioni**: "Descrivi il problema o la sfida del cliente"
- **Obbligatorio**: Sì

#### Campo 2: Soluzione

- Clicca **"+ Aggiungi campo"**
- **Etichetta campo**: `Soluzione`
- **Nome campo**: `soluzione`
- **Tipo di campo**: `Area di testo` (Textarea)
- **Istruzioni**: "Descrivi come hai risolto il problema"
- **Obbligatorio**: Sì

#### Campo 3: Risultato

- Clicca **"+ Aggiungi campo"**
- **Etichetta campo**: `Risultato`
- **Nome campo**: `risultato`
- **Tipo di campo**: `Area di testo` (Textarea)
- **Istruzioni**: "Descrivi il risultato finale ottenuto"
- **Obbligatorio**: No

#### Campo 4: Tecnologie Utilizzate

- Clicca **"+ Aggiungi campo"**
- **Etichetta campo**: `Tecnologie Utilizzate`
- **Nome campo**: `tecnologie`
- **Tipo di campo**: `Testo` (Text)
- **Istruzioni**: "Es: Stampa 3D FDM, PLA, SolidWorks"
- **Obbligatorio**: No

#### Campo 5: Galleria Immagini

- Clicca **"+ Aggiungi campo"**
- **Etichetta campo**: `Galleria Immagini`
- **Nome campo**: `galleria`
- **Tipo di campo**: `Galleria` (Gallery)
- **Istruzioni**: "Aggiungi immagini del progetto (minimo 3, massimo 10)"
- **Numero minimo**: 0
- **Numero massimo**: 10
- **Obbligatorio**: No

### Impostazioni di Posizione:

Scorri in basso fino a "Impostazioni di Posizione" (Location Settings):

1. **Mostra questo gruppo di campi se**:
   - **Tipo di post** | **è uguale a** | **Portfolio**

2. Clicca **"Pubblica"** (o "Publish")

✅ **Fatto!** Ora quando crei un progetto portfolio vedrai questi campi personalizzati.

---

## 5. Creazione Progetti Portfolio

Ora puoi creare i tuoi progetti nel portfolio.

### Passaggi per Creare un Progetto:

1. **Vai a**: WordPress Admin → **Portfolio** → **Aggiungi nuovo**

2. **Compila i campi**:

   **Titolo**: Nome del progetto
   ```
   Esempio: "Prototipo Pinza Freno Automotive"
   ```

   **Descrizione** (Editor principale):
   ```
   Descrizione generale del progetto, introduzione, contesto.
   Puoi usare questo spazio per raccontare la storia del progetto.
   ```

   **Estratto** (Excerpt):
   ```
   Breve descrizione di 1-2 righe che apparirà nella griglia portfolio.
   Esempio: "Prototipo funzionale di pinza freno per test automotive,
   stampato in PA12 con tecnologia SLS."
   ```

   **Immagine in evidenza**:
   - Clicca su "Imposta immagine in evidenza" (nella barra laterale destra)
   - Carica l'immagine principale del progetto
   - **Dimensioni raccomandate**: 1200x800 px
   - **Formato**: JPG o PNG

   **Categoria Portfolio**:
   - Nella barra laterale destra, seleziona la categoria appropriata:
     - Stampa 3D
     - Progettazione CAD
     - Automotive
     - Industriale
     - Altro

   **Campi ACF** (scorrendo in basso nella pagina):

   - **Problema**:
     ```
     Il cliente aveva bisogno di testare un nuovo design di pinza freno
     prima della produzione in serie, ma i metodi tradizionali erano
     troppo costosi e lenti.
     ```

   - **Soluzione**:
     ```
     Abbiamo realizzato un prototipo funzionale utilizzando stampa 3D SLS
     in PA12, un materiale resistente alle alte temperature e agli stress
     meccanici. Il modello CAD è stato ottimizzato per la stampa additiva.
     ```

   - **Risultato**:
     ```
     Il cliente ha potuto testare 5 iterazioni del design in sole 2 settimane,
     risparmiando l'80% sui costi di prototipazione rispetto ai metodi tradizionali.
     ```

   - **Tecnologie Utilizzate**:
     ```
     Stampa 3D SLS, PA12 (Nylon), SolidWorks, Post-processing
     ```

   - **Galleria Immagini**:
     - Clicca "Aggiungi alla galleria"
     - Seleziona 3-10 immagini del progetto
     - Immagini consigliate: processo di stampa, dettagli, confronti, risultato finale

3. **Clicca "Pubblica"**

### Quanti Progetti Creare?

- **Minimo consigliato**: 6 progetti (per riempire la griglia)
- **Ideale**: 9-12 progetti (mostra esperienza e varietà)
- **Mix di categorie**: Varia le categorie per dimostrare versatilità

### Template dei Progetti Consigliati:

1. **Progetto Automotive** - Prototipo componente auto
2. **Progetto Industriale** - Ricambio o componente personalizzato
3. **Progettazione CAD** - Reverse engineering di un componente
4. **Stampa 3D Funzionale** - Parte finale di produzione
5. **Progetto Complesso** - Assemblaggio multi-componente
6. **Case Study** - Progetto con risultati misurabili

---

## 6. Form di Contatto

Configurazione del modulo contatti per la pagina "Contatti".

### Passaggi:

1. **Vai a**: WordPress Admin → **Contatto** (o "Contact") → **Moduli di Contatto**

2. **Modifica** il modulo "Contact form 1" (già creato di default)

3. **Sostituisci il codice del form con questo** (in italiano):

```
<label> Nome e Cognome*
    [text* your-name autocomplete:name] </label>

<label> Email*
    [email* your-email autocomplete:email] </label>

<label> Telefono
    [tel your-phone autocomplete:tel] </label>

<label> Tipo di Progetto
    [select your-project "Stampa 3D" "Progettazione CAD" "Prototipazione" "Produzione Serie Piccola" "Altro"] </label>

<label> Messaggio*
    [textarea* your-message] </label>

[submit "Invia Richiesta"]
```

4. **Clicca "Salva"**

5. **Copia lo Shortcode**:
   - Vedrai in alto uno shortcode tipo: `[contact-form-7 id="123" title="Contact form 1"]`
   - **Copialo** (lo userai dopo)

### Inserire il Form nella Pagina Contatti:

**IMPORTANTE**: La pagina Contatti attualmente è un template statico. Devi modificare il file del template per includere lo shortcode.

1. **Apri** il file `page-contatti.php` nel tuo editor di codice

2. **Trova** la sezione del form (cerca `<!-- Contact Form -->`)

3. **Sostituisci** il form HTML con:
```php
<?php echo do_shortcode('[contact-form-7 id="123" title="Contact form 1"]'); ?>
```
   *(Sostituisci `123` con l'ID del tuo form)*

4. **Salva** il file

**OPPURE** (metodo più semplice):

Se il template ha già contenuto dinamico, puoi:
1. Modificare la pagina "Contatti" nell'admin WordPress
2. Incollare direttamente lo shortcode `[contact-form-7 id="123"]` nell'editor
3. Ma questo funziona solo se il template usa `the_content()`

### Configurare Email di Notifica:

1. **Nel modulo Contact Form 7**, vai alla tab **"Email"**

2. **Configurazione consigliata**:
   - **A**: `info@3dpieces.it` (la tua email)
   - **Da**: `[your-name] <wordpress@tuodominio.it>`
   - **Oggetto**: `Nuova richiesta dal sito - [your-project]`
   - **Corpo del messaggio**:
```
Hai ricevuto una nuova richiesta dal sito web.

Nome: [your-name]
Email: [your-email]
Telefono: [your-phone]
Tipo di Progetto: [your-project]

Messaggio:
[your-message]

---
Inviato da: http://tuosito.it
```

3. **Clicca "Salva"**

### Test del Form:

1. Vai alla pagina Contatti sul tuo sito
2. Compila il form
3. Invia
4. Controlla la tua email

---

## 7. Plugin Aggiuntivi Consigliati

### Plugin per SEO (Scegli UNO):

#### Opzione A: Yoast SEO (Più popolare)

1. **Installa**: WordPress Admin → Plugin → Aggiungi nuovo → Cerca "Yoast SEO"
2. **Attiva** il plugin
3. **Configurazione iniziale**:
   - Vai a **SEO** → **Generale** → **Configuration Wizard**
   - Segui la procedura guidata
   - Tipo di sito: "Azienda"
   - Nome azienda: "3dpieces by Gargiulo Daniele"
   - Logo: Carica il tuo logo

**Per ogni pagina/progetto**:
- Scorri in basso nell'editor
- Compila "Focus keyphrase" (es: "stampa 3d automotive")
- Ottimizza titolo SEO e meta description

#### Opzione B: Rank Math (Alternativa moderna)

1. **Installa**: Rank Math SEO
2. Configurazione guidata simile a Yoast
3. Interfaccia più moderna e features aggiuntive

### Plugin per Performance:

#### WP Super Cache (Semplice)

1. **Installa**: WP Super Cache
2. **Vai a**: Impostazioni → WP Super Cache
3. **Abilita**: "Caching On"
4. Clicca "Aggiorna stato"

**OPPURE**

#### LiteSpeed Cache (Se il tuo hosting usa LiteSpeed)

1. Verifica prima se il tuo hosting usa LiteSpeed server
2. Installa LiteSpeed Cache solo se compatibile
3. Configurazione automatica nella maggior parte dei casi

### Plugin per Sicurezza:

#### Wordfence Security (Raccomandato)

1. **Installa**: Wordfence Security
2. **Attiva**
3. **Configurazione**:
   - Vai a **Wordfence** → **Dashboard**
   - Completa la configurazione guidata
   - Abilita firewall
   - Attiva scansioni settimanali automatiche

**Impostazioni base consigliate**:
- Limita tentativi di login (già attivo di default)
- Notifiche email per attività sospette
- Scansione malware settimanale

### Plugin per Backup:

#### UpdraftPlus (Gratuito e affidabile)

1. **Installa**: UpdraftPlus WordPress Backup Plugin
2. **Vai a**: Impostazioni → Backup UpdraftPlus
3. **Configura backup automatici**:
   - Tab "Impostazioni"
   - File: backup settimanale
   - Database: backup giornaliero
   - Scegli destinazione: Google Drive, Dropbox, o email

**Primo backup manuale**:
1. Tab "Backup / Ripristino"
2. Clicca "Esegui backup ora"
3. Seleziona "Include database" e "Include files"
4. Clicca "Backup Now"

### Plugin Opzionali ma Utili:

#### 1. Redirection (Gestione redirect 301)

Utile se cambi URL o vuoi reindirizzare pagine vecchie.

#### 2. Smush (Ottimizzazione immagini)

1. **Installa**: Smush - Lazy Load, Optimize & Compress Images
2. **Attiva**
3. Vai a Smush → Dashboard
4. Clicca "Bulk Smush" per ottimizzare tutte le immagini esistenti
5. Le nuove immagini verranno ottimizzate automaticamente all'upload

#### 3. WP Mail SMTP (Fix problemi email)

Se i form non inviano email:
1. Installa WP Mail SMTP
2. Configura con Gmail o servizio SMTP del tuo hosting

---

## Checklist Finale

Dopo aver completato tutti i passaggi:

### Configurazione Base:
- [x] Menu principale creato e assegnato
- [ ] Menu footer creato (opzionale)
- [ ] Widget footer configurati (3 colonne)
- [ ] Template assegnati alle pagine

### Plugin Essenziali:
- [ ] Advanced Custom Fields installato e configurato
- [ ] Contact Form 7 installato e form creato
- [ ] Form contatti inserito in pagina Contatti

### Contenuti:
- [ ] Almeno 6 progetti portfolio creati
- [ ] Ogni progetto ha immagine in evidenza
- [ ] Campi ACF compilati per ogni progetto
- [ ] Categorie assegnate ai progetti

### SEO & Performance:
- [ ] Plugin SEO installato (Yoast o Rank Math)
- [ ] Meta description configurate per pagine principali
- [ ] Plugin caching installato
- [ ] Plugin sicurezza installato (Wordfence)
- [ ] Backup automatico configurato (UpdraftPlus)

### Test Finale:
- [ ] Testare navigazione su mobile
- [ ] Testare form contatti (inviare email di prova)
- [ ] Verificare velocità sito su PageSpeed Insights
- [ ] Controllare su più browser (Chrome, Firefox, Safari)
- [ ] Verificare link WhatsApp funzionante

---

## Supporto & Risorse

### Link Utili:

- **Documentazione WordPress**: https://wordpress.org/documentation/
- **ACF Documentation**: https://www.advancedcustomfields.com/resources/
- **Contact Form 7 Docs**: https://contactform7.com/docs/

### Problemi Comuni:

**1. Form non invia email**
- Soluzione: Installa WP Mail SMTP e configura

**2. Portfolio non mostra progetti**
- Vai a: Impostazioni → Permalink → Clicca "Salva modifiche" (resetta i permalink)

**3. Immagini portfolio non ottimizzate**
- Installa Smush e ottimizza in batch

**4. Sito lento**
- Installa plugin caching
- Ottimizza immagini
- Usa hosting di qualità

---

## Prossimi Passi Avanzati (Futuro)

Quando il sito sarà online e funzionante:

1. **Google Analytics**: Tracciare visite e conversioni
2. **Google Search Console**: Monitorare SEO
3. **Facebook Pixel**: Se usi advertising
4. **Schema Markup**: Per rich snippets nei risultati Google
5. **CDN**: Cloudflare per performance globali
6. **SSL**: Certificato HTTPS (spesso incluso nell'hosting)

---

**Guida creata per**: 3dpieces by Gargiulo Daniele
**Tema**: 3dpieces WordPress Theme v1.0.0
**Data**: Gennaio 2026

Per domande o assistenza, consulta la documentazione WordPress o contatta il supporto del tuo hosting provider.
