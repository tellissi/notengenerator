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
            <!-- Um die Webseite mit css3 zu stylen-->
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
    <form action="notengenerator.php" method="post">
     <p>Der Name des Schülers: <input type="text" name="name" required="required"/></p>
     <p>Das Fach: <select name="Fach" required="required">
      <option value="">---</option>
      <option value="Deutsch">Deutsch</option>
      <option value="Englisch">Englisch</option>
         <option value="Mathematik">Mathematik</option>
         <option value="Französisch">Französisch</option>
         <option value="Spanisch">Spanisch</option>
         <option value="Latein">Latein</option>
         <option value="Geschichte">Geschichte</option>
         <option value="Sport">Sport</option>
         <option value="Religion">Religion</option>
         <option value="WiPo">WiPo</option>
         <option value="DarstellendesSpiel">Darstellendes Spiel</option>
         <option value="Erdkunde">Erdkunde</option>
         <option value="Musik">Musik</option>
         <option value="Kunst">Kunst</option>
         <option value="Biologie">Biologie</option>
         <option value="Chemie">Chemie</option>
         <option value="Physik">Physik</option>
         <option value="Philosophie">Philosophie</option>
    </select></p>
     <p><input type="submit" value="Note generieren" /></p>
    </form>
    </body>
    </html>