# Eigenes Wordpress Template


## wichtige Funktionen
~~~~
<?php
    the_permalink();      // Gibt den Link zum Beitrags-Detail aus
    the_title();          // Gibt den Titel des Beitrages aus
    the_content();        // Gibt den Inhalt des Beitrages aus
    the_excerpt();        // Gibt einen Anreisser des Beitrages aus
    the_time();           // Gibt Uhrzeit und Datum des Beitrages aus
    the_post_thumbnail(); // Gibt das Beitragsbild aus
    the_category();       // Gibt die zugewiesenen Kategorien aus
    the_tags();           // Gibt die zugewiesenen Tags aus
    the_author();         // Gibt den Namen des Autoren aus 
    the_ID();             // Gibt die ID des aktuellen Beitrages aus
?>
~~~~
## Seiteninformationen
~~~~
<?php  
    bloginfo('name');           // Gibt den unter Einstellungen > Allgemein > Seitentitel notierten Text aus
    bloginfo('description');    // Gibt den unter Einstellungen > Allgemein > Untertitel notierten Text aus
    bloginfo('url');            // Gibt den unter Einstellungen > Allgemein > Seiten-Adresse notierte URL aus
    bloginfo('admin_email');    // Gibt die unter Einstellungen > Allgemein notierte E-Mail des Administrators aus
    bloginfo('language');       // Gibt die unter Einstellungen > Allgemein gewählte Sprache von WordPress aus
?>
~~~~