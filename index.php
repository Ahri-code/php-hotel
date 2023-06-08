<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    
    <h1>Filtri hotel</h1>

    <form action="hotel.php" method="GET">
        <label>Parcheggio:
        <input type="checkbox" name="parking">
        </label>
        <label for="vote">Valutazioni</label>
        <select name="vote" id="vote">
            <option value="">---Scegli un'opzione---</option>
            <option value="one">1</option>
            <option value="two">2</option>
            <option value="three">3</option>
            <option value="four">4</option>
            <option value="five">5</option>
        </select>
        <button type="submit">Invia</button>
    </form>
    
</body>
</html>