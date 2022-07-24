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
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <!-- Um die Webseite mit css3 zu stylen-->
    <style class="text/css">
        /* Footer  */
 
        footer {
            position: fixed;
            padding: 10px;
            bottom: 0;
            left: 0;
            right: 0;
            font-family: Arial;
            color: aliceblue;
        }
 
 
 
        /* CSS STYLE */
 
        ::-moz-selection {
            color: #fff;
            background: #9FBE5A;
        }
 
        ::selection {
            color: #fff;
            background: #9FBE5A;
        }
 
        body {
            width: 100vw;
            height: 100%;
            padding-bottom: 50px;
            overflow-x: hidden;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            background: linear-gradient(to right, #1e5799 0%, #2ce0bf 19%, #76dd2c 40%, #dba62b 60%, #e02cbf 83%, #1e5799 100%);
            background-size: 10000px 100%;
            animation: bg 15s linear infinite;
        }
 
        @keyframes bg {
            0% {
                background-position-x: 0;
            }
            100% {
                background-position-x: 10000px;
            }
        }
 
        h1 {
            margin-bottom: 75px;
            padding: 0 20vw;
            font: 400 56px 'Pacifico';
            font-size: 56px;
            text-align: center;
            color: #fff;
        }
 
 
        .form__contact {
            max-width: 600px;
            margin: 0 auto;
            border-left: 30px solid white;
            -o-border-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz48IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSI0MS44NnB4IiBoZWlnaHQ9IjUyLjMyNnB4IiB2aWV3Qm94PSIwIDAgNDEuODYgNTIuMzI2IiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA0MS44NiA1Mi4zMjYiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxwYXRoIGZpbGw9IiNGRkZGRkYiIGQ9Ik0wLDB2MjUuMTYzaDcuMDk3YzAuNTAxLTQuOTg5LDQuNzEyLTguODg0LDkuODMzLTguODg0YzUuNDU4LDAsOS44ODQsNC40MjUsOS44ODQsOS44ODRzLTQuNDI1LDkuODg0LTkuODg0LDkuODg0Yy01LjEyMSwwLTkuMzMyLTMuODk1LTkuODMzLTguODg0SDB2MjUuMTYzaDQxLjg2VjBIMHoiLz48L3N2Zz4=) 5% 100% repeat;
            border-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz48IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSI0MS44NnB4IiBoZWlnaHQ9IjUyLjMyNnB4IiB2aWV3Qm94PSIwIDAgNDEuODYgNTIuMzI2IiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA0MS44NiA1Mi4zMjYiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxwYXRoIGZpbGw9IiNGRkZGRkYiIGQ9Ik0wLDB2MjUuMTYzaDcuMDk3YzAuNTAxLTQuOTg5LDQuNzEyLTguODg0LDkuODMzLTguODg0YzUuNDU4LDAsOS44ODQsNC40MjUsOS44ODQsOS44ODRzLTQuNDI1LDkuODg0LTkuODg0LDkuODg0Yy01LjEyMSwwLTkuMzMyLTMuODk1LTkuODMzLTguODg0SDB2MjUuMTYzaDQxLjg2VjBIMHoiLz48L3N2Zz4=) 5% 100% repeat;
            border-image-width: 0px 0px 0px 30px;
            -webkit-transform: translateY(100%);
            transform: translateY(100%);
            -webkit-animation: init 1s ease-in-out forwards;
            animation: init 1s ease-in-out forwards;
        }
 
        .form__contact fieldset {
            position: relative;
            margin: 0;
            padding: 30px 30px 40px 80px;
            border: none;
            border-radius: 0 20px 20px 0;
            font-family: Arial;
            background: #fff linear-gradient(rgba(0, 0, 0, 0.1) 1px, transparent 0) 0 20px/100% 40px;
        }
 
        .form__contact fieldset:after {
            position: absolute;
            top: 0;
            left: 50px;
            content: '';
            height: 100%;
            width: 1px;
            border-left: double #E08183;
        }
 
        .form__contact p {
            margin: 0 0 40px 0;
            line-height: 40px;
            color: #333;
        }
 
        .form__contact span {
            position: relative;
            line-height: 40px;
        }
 
        .form__contact button {
            margin-top: 40px;
            float: right;
            border: none;
            font-family: Arial;
            color: #E08183;
            background: transparent;
            cursor: pointer;
            -webkit-transition: -webkit-transform 0.25s ease;
            transition: -webkit-transform 0.25s ease;
            transition: transform 0.25s ease;
            transition: transform 0.25s ease, -webkit-transform 0.25s ease;
        }
 
        .form__contact button:hover {
            -webkit-transform: translateX(10px);
            transform: translateX(10px);
        }
 
        .form__field {
            display: inline;
            color: #7DB665;
            outline: none;
        }
 
        .form__field:empty {
            display: inline-block;
            color: #DDD;
        }
 
        .form__field:empty:before,
        .form__field:empty:focus:before {
            content: attr(data-placeholder);
        }
 
        svg {
            display: none;
        }
 
        @-webkit-keyframes init {
            75% {
                -webkit-transform: translateY(-20px);
                transform: translateY(-20px);
            }
            100% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
        }
 
        @keyframes init {
            75% {
                -webkit-transform: translateY(-20px);
                transform: translateY(-20px);
            }
            100% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
        }
 
        @-webkit-keyframes do-blur {
            0% {
                -webkit-filter: url(#blur4);
                filter: url(#blur4);
            }
            25% {
                -webkit-filter: url(#blur3);
                filter: url(#blur3);
            }
            50% {
                -webkit-filter: url(#blur2);
                filter: url(#blur2);
            }
            75% {
                -webkit-filter: url(#blur1);
                filter: url(#blur1);
            }
            100% {
                -webkit-filter: url(#blur0);
                filter: url(#blur0);
            }
        }
 
        @keyframes do-blur {
            0% {
                -webkit-filter: url(#blur4);
                filter: url(#blur4);
            }
            25% {
                -webkit-filter: url(#blur3);
                filter: url(#blur3);
            }
            50% {
                -webkit-filter: url(#blur2);
                filter: url(#blur2);
            }
            75% {
                -webkit-filter: url(#blur1);
                filter: url(#blur1);
            }
            100% {
                -webkit-filter: url(#blur0);
                filter: url(#blur0);
            }
        }
 
    </style>
 
</head>
 
<body>
    <div class="wrapper">
        <h1>Der Notengenerator</h1>
        <form class="form__contact" action="#" method="post">
            <fieldset>
                <p>Der Schüler
                    <?php echo htmlspecialchars($_POST['name']); ?> hat im Fach
                    <?php
if($_POST['Fach']=="Deutsch")
{
echo "Deutsch";
} ?>
                        <?php if($_POST['Fach']=="Englisch")
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
                                                                }  ?>
                        <?php if($_POST['Fach']=="Philosophie")
{
echo "Philosophie";} ?>
                        <?php if($_POST['Fach']=="Kunst")
{
echo "Kunst";} ?>
                        <?php if($_POST['Fach']=="Informatik")
{
echo "Informatik";} ?><b id="demo"></b> Punkte</p>
                <script>
                    document.getElementById("demo").innerHTML =
                        Math.floor(Math.random() * 15);
 
                </script> <a onclick="goBack()" class="button button--xlarge" tabindex="4">der nächste Schüler</a>
                <script>
                    function goBack() {
                        window.history.back();
                    }
 
                </script>
            </fieldset>
        </form>
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">
  <defs>
    <filter id="blur0">
      <feGaussianBlur in="SourceGraphic" stdDeviation="0 0" />
    </filter>
    <filter id="blur1">
      <feGaussianBlur in="SourceGraphic" stdDeviation="0 5" />
    </filter>
    <filter id="blur2">
      <feGaussianBlur in="SourceGraphic" stdDeviation="0 10" />
    </filter>
    <filter id="blur3">
      <feGaussianBlur in="SourceGraphic" stdDeviation="0 15" />
    </filter>
    <filter id="blur4">
      <feGaussianBlur in="SourceGraphic" stdDeviation="0 20" />
    </filter>
  </defs>
</svg>
        <footer>Copyright &copy; 2018 malek.</footer>
</body>
 
</html>