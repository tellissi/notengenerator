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
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <meta name='twitter:site' content='@tllssi' />
        <!-- Um die Webseite mit css3 zu stylen-->
        <style class="text/css">
            h1 {
                margin-bottom: 75px;
                padding: 0 20vw;
                font: 400 56px 'Pacifico';
     
                font-size: 56px;
                text-align: center;
                color: #fff;
            }
     
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
            <form class="form__contact" action="notengenerator.php" method="post">
     
                <fieldset>
                    <p>Warum sollte man als Lehrer noch die Noten der Schüler erwürfeln, wenn es dafür mittlerweile eine bessere, zeitgemäße Alternative gibt?</p><br><br>
                    <p>Der Name des Schülers: <input type="text" name="name" required="required" /></p>
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
         <option value="Informatik">Informatik</option>
    </select></p>
                    <p><button type="submit" class="button button--xlarge" tabindex="4">Note generieren</button></p>
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
            <footer>Copyright © 2018 malek. </footer>
    </body>
     
    </html>
