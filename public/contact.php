 <?php
        if($_POST["message"]) {
        mail("anna-19.1994@mail.ru", "Here is the subject line",
        $_POST["insert your message here"]. "From: an@email.address");
        }
?>