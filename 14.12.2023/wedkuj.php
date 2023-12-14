<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
        <title>Wędkowanie</title>
        <link rel="stylesheet" href="./styl_1.css">
</head>
<body>
    <header>
       <h1>Portal dla wędkarzy</h1> 
    </header>
    <main>
    <section id="lewy">
        <h3>Ryby zamieszkujące rzeki</h3>
        <ol>
            <?php
            $connect = mysqli_connect('localhost', 'root', '', 'wedkowanie');
            $r1 = "SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo FROM ryby INNER JOIN lowisko ON ryby.id = lowisko.ryby_id WHERE lowisko.rodzaj = 3;";
            $q1 = mysqli_query($connect, $r1);
            while ($row = mysqli_fetch_array($q1)) {
                echo "<li>$row[0] pływa w rzece $row[1], $row[2]</li>";
            }
            ?>
        </ol>
    </section>
    <section id="prawy">
        <img src="ryba1.jpg" alt="Sum"/><br>
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </section>
    <section id="lewyyy">
        <h3>Ryby drapieżne naszych wód</h3>
        <table>
            <tr>
                <th>L.p.</th>
                <th>Gatunek</th>
                <th>Występowanie</th>
            </tr>
            <?php
            $r2 = "SELECT id, nazwa, wystepowanie FROM ryby WHERE styl_zycia = 1;";
            $q2 = mysqli_query($connect, $r2);
            while ($row = mysqli_fetch_array($q2)) {
                echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><tr>";

            }
            mysqli_close($connect);
            ?>
        </table>
    </section>
    </main>
    <footer>
        <p>Stronę wykonał: Ja</p>
    </footer>
    
</body>
</html>