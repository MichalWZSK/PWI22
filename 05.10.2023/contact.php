<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {font-family: 'Helvetica', sans-serif;
    background-color: linen;
    color:#222;
    margin: auto;
    width: 90%;}
header {background-color: black;
        color: white;
        display: flex;
        height: 100%;}
div, nav {width: 50%;}
section {padding: 20px;}
footer {background-color: black;
        color: white;
        padding: 20px;
        display: flex;
        justify-content: center;
        align-items: center;}

table, td{border: 1px solid black;
            border-collapse: collapse;
        }
table {margin: 40px;}
td {padding: 30px;
    text-align: center;
    font-weight: bold;
    }
td {padding: 30px;
    text-align: center;
    font-weight: bold;}
a  {color: #aaa;
    text-decoration: none;
    border-bottom: 1px solid white;}
a:hover {color: white;}
    </style>
</head>
<body>
<h1><?php echo "Kontakt"; ?></h1>
<form action="mailto:e-mail" method="post" enctype="text/plain"><div>
<table style="background-color: silver">
<tr>
	<td>Imię:</td><td><input type="text" name="imie"></td>
</tr>
<tr>
	<td>Nazwisko:</td><td><input type="text" name="nazwisko"></td>
</tr>
<tr>
	<br>
	<td colspan="2" style="text-align: center"><br>
		<input type="submit" value="Wyślij">
		<input type="reset" value="Wyczyść">
	</td>
</tr>
</table>
</div></form>
<script>
    <function submit()
    {
        alert('Nie można wysłać formularza')
    }

    
<nav>
        <ul>
            <li>1</li>    
            <li>1</li>
            <li>1</li>
        </ul>

    <footer>
        <p>Copyright &copy 2023</p>
    </footer>
</nav>

</body>
</html>