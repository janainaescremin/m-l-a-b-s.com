<!--
Desenvolvido Por: 2Inbox
-->
<?php
$url = "http://2-inbox.com/";
$title = "2INBOX";

$var = array(
        "1" => array(
                  "titulo" => "O CONECTADO",
                  "image" => "http://gph.is/2uu0jIi"
                  ),
             );

$section = array_rand($var);

?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta property="og:locale" content="pt_BR">
<meta property="og:title" content="<?php echo $var[$section]['titulo']; ?>" />
<meta property="og:url" content="<?php echo $var[$section]['image']; ?>" />
<meta property="og:site_name" content="" />
<meta property="og:description" content="" />
<meta property="og:image" content="<?php echo $var[$section]['image']; ?>" />
<meta property="og:type" content="video.other">

<script>
  setTimeout(function(){
    window.location='https://www.2inbox.com.br/';
  },100);
</script>
