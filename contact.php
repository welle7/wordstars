<?php
/*
Template Name: kontakt
*/
get_header();
$out.= "<div class='wrapper'>";
$out.= the_title('<h2>', '</h2>');
if(!isset($_POST['senden'])) {
$out.= <<<DOC
<form action="" method="POST">
<label for="vorname">Vorname:</label>
<input type="text" name="vorname" id="vorname">
<label for="nachname">Nachname:</label>
<input type="text" name="nachname" id="nachname">
<label for="email">E-Mail</label>
<input type="email" name="email" id="email">
<label for="nachricht">Ihre Nachricht</label>
<textarea name="nachricht" id="nachricht" cols="30" rows="10"></textarea>
<input type="submit" value="Senden" name="senden">
</form>
DOC;
}
//Form wurde gesendet!  
if(isset($_POST['senden'])) {
    //formularkontrolle mit Regulären Ausdrücken
    $regText="/^[a-zA-ZüÜäÄöÖéèàâç ]*$/";
    $regInhalt="/^[0-9a-zA-ZüÜäÄöÖéèàâç.:!? ]*$/";
	$regPhone="/^([0-9\s\(\)\+\-\/]{9,30})*$/";
	$regMail="/^([a-zA-Z0-9_\.\-])+@(\[)?([a-zA-Z0-9_\.\-)*([a-zA-Z0-9]{2,})\.([a-zA-Z]{2,6}|[0-9]{1,3}\])$/";
    
    //Erzeuge ein Error Array & fülle Fehler ab
    $errors = array();
    //Prüfen ob Form ausgefüllt
    if ($_POST['vorname'] == "") {$errors[] = "Der Name fehlt.";}
    else {
        if(!preg_match($regText,$_POST['vorname']) OR !$_POST['vorname']){$errors[] = "Unerlaubter name.";}
        }
    if ($_POST['nachname'] == "") {$errors[] = "Der Name fehlt.";}
    else {
        if(!preg_match($regText,$_POST['nachname']) OR !$_POST['nachname']){$errors[] = "Unerlaubter name.";}
        }
        
    if ($_POST['nachricht'] == "") {$errors[] = "Der Inhalt fehlt.";}
    else {
        if(!preg_match($regInhalt,$_POST['nachricht']) OR !$_POST['nachricht']){$errors[] = "Unerlaubte Inhalt.";}
        }
    if ($_POST['email'] == "") {$errors[] = "Die Mailadresse fehlt.";}
    else {
        if(!preg_match($regMail,$_POST['email']) OR !$_POST['email']){$errors[] = "Unerlaubte Mail.";}
        }
        // Gibt es Errors -> dann Ausgeben
        if (count($errors)) {
            $out.= "Ihre Daten konnten nicht bearbeitet werden:<br>" .
            //Pro Fehler eine neue Fehlerzeile
            implode("<br>", $errors);
            } 
        // Formular korrekt ausgefüllt
            else {
                $vorname = htmlspecialchars($_POST['vorname']);
                $nachname= htmlspecialchars($_POST['nachname']);
                $email= htmlspecialchars($_POST['email']);
                $nachricht= htmlspecialchars($_POST['nachricht']);
                $out = "<h2>Vielen Dank für den Gästebucheintrag</h2>";
                $out = "<p>Ihr Beitrag wird nach redaktioneller Begutachtung, zeitnah freigeschaltet</p>";

                // Mail zusammenstellen to | Subject | und nachricht
                $to = 'user@local.test';
                $subject = "Gästebuch eintrag von:" . $username;
                $message = "Name:" . $username . "\n";
                $message .= "Gästebucheintrag:" . $inhalt . "\n";

		        // Mail header zusammenstellen
                $headers = "From:" . $mail . "\r\n" .
                'X-Mailer: PHP/' . phpversion() . "\r\n" .
                "MIME-Version: 1.0\r\n" .
                "Content-Type: text/plain; charset=utf-8\r\n" .
                "Content-Transfer-Encoding: 8bit\r\n\r\n";
                // Senden
                mail($to, $subject, $message, $headers);
            }
        }
$out.="</div>";
echo $out;
?>

<?php get_footer(); ?>
