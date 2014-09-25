<?php
 
if(isset($_POST['contact'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "contact@challengersale.nu";
 
    $email_subject = "Contactformulier Challengersale.nu";
 
     
 
     
 
    function died() {
 
        // your error code can go here
 
        echo "Het lijkt er op dat één of meerdere velden niet zijn ingevuld.";
 
        echo "Vul deze alsnog in alstublieft.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['name']) ||
 
        !isset($_POST['contact'])) {
 
        died();       
 
    }
 
     
 
    $name = $_POST['name']; // required
 
    $contact = $_POST['contact']; // required

 
    $email_message = "De volgende persoon ontvangt graag meer informatie over The Challenger Sale2.0:\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Naam: ".clean_string($name)."\n";
 
    $email_message .= "Contactinformatie: ".clean_string($contact)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$contact."\r\n".
 
'Reply-To: '.$contact."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
 
 
Bedankt voor uw aanvraag. Wij proberen binnen 24 uur contact met u op te nemen.
 
 
 
<?php
 
}
 
?>