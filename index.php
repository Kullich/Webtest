<!DOCTYPE html>
<html lang="cs-cz">

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="styl.css" type="text/css" />
        <title>Patrikovo portfolio</title>
    </head>

    <body>
        <header>
            <div id="logo"><h1>Patrik</h1></div>
            <nav>
                <ul>
                    <li><a href="index.php?stranka=domu">Domů</a></li>
                    <li><a href="index.php?stranka=dovednosti">Dovednosti</a></li>
                    <li><a href="index.php?stranka=reference">Reference</a></li>
                    <li><a href="index.php?stranka=kontakt">Kontakt</a></li>
                </ul>
            </nav>
        </header>

        <article>
            <div id="centrovac">
                <header>
                    <h1>O mně</h1>
                </header>

                <section>
                    <?php
                    if (isset($_GET['stranka']))
                        $stranka = $_GET['stranka'];
                    else
                        $stranka = 'domu';
                    if (preg_match('/^[a-z0-9]+$/', $stranka))
                    {
                        $vlozeno = include('podstranky/' . $stranka . '.php');
                        if (!$vlozeno)
                            echo('Podstranka nenalezena');
                    }
                    else
							echo('Neplatný parametr.');
                        
                    ?>
				</section>
                </section>
                <div class="cistic"></div>
            </div>
        </article>


        <footer>
            Vytvořil &copy;HoBi 2013 pro <a href="http://itnetwork.cz">ITNETWORK.CZ</a>
        </footer>
    </body>
</html>



