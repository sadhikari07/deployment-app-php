<?

  include('./talker.php');

  $talker = new Talker('Hello, there, how are you. Im great');

  echo $talker->message;

?>
