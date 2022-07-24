<!Doctype html>
    <html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>Notengenerator</title>
    <meta name="description" content="Der Notengenerator - Die Lösung für Lehrer, die es eilig haben.">
        <meta property='og:title' content="Der Notengenerator " />
        <meta property='og:description' content="Der Notengenerator - Die Lösung für Lehrer, die es eilig haben." />
        <meta name='twitter:title' content="Würfel sind sowas von für die Lehrer des letzten Jahrtausends." />
        <meta name='twitter:description' content="Der Notengenerator - Die Lösung für Lehrer, die es eilig haben." />
        <meta name='twitter:card' content='summary_large_image' />
        <meta name='twitter:site' content='@tllssi' />
        <style class="text/css">
    body {
      margin: 0;
      padding: 0;
      font-family: Arial;
        position:static;
        border-left:50%;
    }
            ueb {position:static;}
     
            h1 { font-size:4em;}
        </style>
     
    </head>
    <body>
        <h1 id="ueb">Der Notengenerator</h1>
        <p>Der Schüler <?php echo htmlspecialchars($_POST['name']); ?>  hat im Fach <?php
    if($_POST['Fach']=="Deutsch")
    {
    echo "Deutsch";
    } ?> <?php if($_POST['Fach']=="Englisch")
    {
    echo "Englisch"; } ?>
             <?php   if($_POST['Fach']=="Mathematik")
    {
    echo "Mathematik";} ?>
              <?php      if($_POST['Fach']=="Französisch")
    {
    echo "Französisch";} ?> 
               <?php         if($_POST['Fach']=="Spanisch")
    {
    echo "Spanisch";} ?>
                     <?php       if($_POST['Fach']=="Latein")
    {
    echo "Latein";} ?> 
                      <?php          if($_POST['Fach']=="Geschichte")
    {
    echo "Geschichte";} ?> 
                        <?php            if($_POST['Fach']=="Sport")
    {
    echo "Sport";} ?> 
                           <?php             if($_POST['Fach']=="Religion")
    {
    echo "Religion";} ?> 
                            <?php                if($_POST['Fach']=="WiPo")
    {
    echo "WiPo";} ?>
                                             <?php   if($_POST['Fach']=="DarstellendesSpiel")
    {
    echo "Darstellendes Spiel";} ?>
                                                <?php    if($_POST['Fach']=="Erdkunde")
    {
    echo "Erdkunde";} ?>
                                                      <?php  if($_POST['Fach']=="Musik")
    {
    echo "Musik";} ?> 
                                                         <?php   if($_POST['Fach']=="Biologie")
    { 
    echo "Biologie";} ?>
                                                              <?php  if($_POST['Fach']=="Chemie")
    {
    echo "Chemie";} ?>
                                                                   <?php if($_POST['Fach']=="Physik")
    {
    echo "Physik"; 
                                                                    }  ?>                                                 <?php if($_POST['Fach']=="Philosophie")
    {
    echo "Philosophie";} ?>
                                                                           <?php if($_POST['Fach']=="Kunst")
    {
    echo "Kunst";} ?> <b id="demo"></b> Punkte</p>
     <script>
    document.getElementById("demo").innerHTML =
    Math.floor(Math.random() * 15);
    </script>
     
     
    </body>
    </html>