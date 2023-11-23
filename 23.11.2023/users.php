<?php
    $conn = new mysqli(
        hostname: '127.0.0.1',
        username: 'root',
        password: '',
        database: 'egzamin'

    );




?>





<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Panel administratora</title>
    <link rel="stylesheet" href="./styl4.css">
</head>
<body>
    <header>
        <h3>Portal Społecznościowy = panel administratora</h3>
    </header>
    <main>
    <section>
        <h4>Użytkowinicy</h4>
        <?php
            $sql = 'Select id, imie, nazwisko, rok_urodzenia, zdjecie FROM osoby LIMIT 30';
            $result = $conn->query($sql);

            while ($row = $result->fetch_assoc()) {
                echo $row['id']. ' ' . $row['imie']. ' ' . $row['nazwisko']. ' ' . (date('Y') - $row['rok_urodzenia']). '<br>';
            }
            $result->free_result();

        ?>

        <a href="settings.html">Inne ustawienia</a><br>
    </section>
    <section>
        <h4>Podaj id Użytkowinika</h4>
        <form method="post">
            <input type="number">
            <button>ZOBACZ</button>
        </form>
        <hr>
        <?php
        if (isset($_POST['user_id'])) {
            $id = $_POST['user-id'];

            $sql = 'Select id, imie, nazwisko, rok_urodzenia, opis, zdjecie FROM osoby WHERE id = ' . $id;

            $result = $db->query($sql);
            $row = $result->fetch_assoc();
            echo "<h2>$id. ($result['imie']} {$result['nazwisko']}</h2>";

            echo "<img src='./{$row['zdjecie']}' alt=$id'/>";
        }


        ?>


    </section>
    </main>
    <footer>
        Stronę wykonał: unknown
    </footer>

    

</body>
</html>