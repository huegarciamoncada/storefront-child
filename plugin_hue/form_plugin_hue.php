<?php 
/**
*Plugin Name: form_plugin_hue
**/
function form_plugin_hue(){
    $content ='';
    $content .= '<form method="post" action="http://huegarciamoncada.fr/index.php/merci/"';
    $content .= '<label for="your_name">Votre nom:</label>';
    $content .= '<br><input type ="text" name="yourname" class="form-control" placeholder="Votre nom"><br>';
    $content .= '<label for="your_email">Votre email (*)</label><br>';
    $content .= '<input type ="email" name="youremail" class="form-control" placeholder="Votre email">';
    $content .= '<br><input type ="text" name="yoursubject" class="form-control" placeholder="Votre objet">';
    $content .= '<br><label for="message">Votre message</label>';
    $content .= '<br> <textarea class="form-control" name="yourmessage" rows="3" placeholder="Votre message"></textarea><br>';
    $content .= '<br><input type ="submit" name="form_submit"  class="btn btn-primary" value="Envoyer">';

    return $content;
   


}

add_shortcode('form_hue', 'form_plugin_hue');

function form_capture(){
if(isset($_POST['form_submit'])){
    $name = sanitize_text_field($_POST['yourname']);
    $email = sanitize_text_field($_POST['youremail']);
    $comment = sanitize_textarea_field($_POST['yourmessage']);
    $to = 'nttfue@gmail.com';
    $subject = sanitize_text_field($_POST['yoursubject']);
    $message = ' '.$name.' - '.$email.' - '.$comment;
    wp_mail($to, $subject, $message);
    //echo "<pre>"; print_r($_POST);echo"</pre>";
}
}
add_action('wp_head', 'form_capture');
?>