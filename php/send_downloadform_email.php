<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "contact@challengersale.nu";
 
    $email_subject = "Download Challenger Sale2.0 samenvatting";
 
     
 
     
 
    function died() {
 
        // your error code can go here
 
        echo "Het lijkt er op dat één of meerdere velden niet zijn ingevuld.";
 
        echo "Vul deze alsnog in alstublieft.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['first-name']) ||
 
        !isset($_POST['last-name']) ||
 
        !isset($_POST['company'])||
 
        !isset($_POST['email'])||
 
        !isset($_POST['phone'])){
 
        died();       
 
    }
 
     
 
    $firstname = $_POST['first-name']; // required
 
    $lastname = $_POST['last-name']; // required

    $company = $_POST['company']; // required

    $email = $_POST['email']; // required

    $phone = $_POST['phone']; // required

    $email_message = "De volgende persoon heeft informatie over The Challenger Sale2.0 gedownload:\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Voornaam: ".clean_string($firstname)."\n";
 
    $email_message .= "Achternaam: ".clean_string($lastname)."\n";

    $email_message .= "Bedrijf: ".clean_string($company)."\n";

    $email_message .= "Email: ".clean_string($email)."\n";

    $email_message .= "Telefoon: ".clean_string($phone)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email."\r\n".
 
'Reply-To: '.$email."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
 
<?php    
header('Location: /downloads/samenvatting.pdf');    
?>
 
 
<?php
 
}
 
?>