<!--
<html>

	<h1 class="yellow"> Sarah Mehmedi </h1>
    <head>
        <title> Sarah Mehmedi </title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="utf-8">
        <title>jQuery UI Tabs - Default functionality</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script>
            $(function() {
                $( "#tabs" ).tabs();
            });
        </script>

    </head>
    <body>

    <div id="tabs">
        <ul>
            <li><a href="#tabs-1">About</a></li>
            <li><a href="#tabs-2">Projects</a></li>
            <li><a href="#tabs-3">Resume</a></li>
            <li><a href="#tabs-4">Contact</a></li>
        </ul>
        <div id="tabs-1">
            <p>Hi! My name is Sarah Mehmedi and I am currently studying Computer Science at Loyola University in Chicago. My interests include development of the front end because it is great to see the progress and developing applications. I strive to make everything functional by fixing all of the imperfections.</p>
            <img src="self.jpg" alt="Sarah" id="pic">


            <a href="https://www.linkedin.com/pub/sarah-mehmedi/79/482/5b7" target= "_blank" style="text-decoration:none;"><span style="font: 100% Arial,sans-serif; color:#0783B6;"><img src="https://static.licdn.com/scds/common/u/img/webpromo/btn_in_20x15.png" width="20" height="15" alt="View Sarah Mehmedi's LinkedIn profile" style="vertical-align:middle;" border="0">&nbsp;View My Profile</span></a>

        </div>
        <div id="tabs-2">
            <h2 class="yellow">Projects</h2>
            <p>Projects Tab Under Construction</p>        </div>
        <div id="tabs-3">
            <a href="resume.pdf" class="yellow" target="_blank">Click For Resume</a>

        </div>
        <div id="tabs-4">

            <h2 class="yellow">Contact Information</h2>
            <table id="table-font">
                <tr>
                    <td >Email: </td>
                    <td >sarahmehmedi@gmail.com </td>
                </tr>
                <tr>
                    <td> Phone: </td>
                    <td >1(630)826-9266</td>
                </tr>
            </table>

        </div>
    </div>

<

-->
    <!DOCTYPE html>
    <html>
    <head>
        <title>Sarah Mehmedi</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </head>
    <body>

    <div class="container">
        <h1 id="yellow">Sarah Mehmedi</h1>
        <ul class="nav nav-pills nav-justified">
            <li class="active"><a data-toggle="pill" href="#home">About</a></li>
            <li><a data-toggle="pill" href="#menu1">Projects</a></li>
            <li><a data-toggle="pill" href="#menu2">Resume</a></li>
            <li><a data-toggle="pill" href="#menu3">Contact</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <h3>About</h3>
                <p>Hi! My name is Sarah Mehmedi and I am currently studying Computer Science at Loyola University in Chicago. My interests include development of the front end because it is great to see the progress and developing applications. I strive to make everything functional by fixing all of the imperfections.</p>
                <img src="self.jpg" alt="Sarah" id="pic">
                <a href="https://www.linkedin.com/pub/sarah-mehmedi/79/482/5b7" target= "_blank" style="text-decoration:none;"><span style="font: 100% Arial,sans-serif; color:#0783B6;"><img src="https://static.licdn.com/scds/common/u/img/webpromo/btn_in_20x15.png" width="20" height="15" alt="View Sarah Mehmedi's LinkedIn profile" style="vertical-align:middle;" border="0">&nbsp;View My Profile</span></a>

            </div>
            <div id="menu1" class="tab-pane fade">
                <h3>Projects</h3>
               <p>Projects tab under construction.</p>
            </div>
            <div id="menu2" class="tab-pane fade">
                <h3>Resume</h3>
                <a href="resume.pdf" class="yellow" target="_blank">Click For Resume</a>
            </div>
            <div id="menu3" class="tab-pane fade">
                <h2 class="yellow">Contact Information</h2>
                <table id="table-font">
                    <tr>
                        <td >Email: </td>
                        <td >sarahmehmedi@gmail.com </td>
                    </tr>
                    <tr>
                        <td> Phone: </td>
                        <td >1(630)826-9266</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    </body>
    </html>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-63891733-1', 'auto');
        ga('send', 'pageview');

    </script>