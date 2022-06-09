<?

if (array_key_exists('comments', $_POST)) {
$to = 'info@telegin.com.ua';
   $subject = 'заполнена контактная форма с '.$_SERVER['HTTP_REFERER'];
   $subject = "=?utf-8?b?". base64_encode($subject) ."?=";
   $message = "Имя: ".$_POST['name']."\nEmail: ".$_POST['email']."\n\n".$_POST['comments'];
   $headers = 'Content-type: text/plain; charset="utf-8?b"';
   $headers .= "MIME-Version: 1.0\r\n";
   $headers .= "Date: ". date('D, d M Y h:i:s O') ."\r\n";
   $subject1 = ' '.$_SERVER['HTTP_REFERER'];

   mail($to, $subject, $message, $headers);
echo
$subject1 = 'OK!'.$
$_POST['name'];
}
?>

  