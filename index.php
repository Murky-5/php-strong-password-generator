<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina d'accesso</title>
    <style>
      body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        flex-wrap: nowrap;
      }
      div {
        flex-grow: 4;
        align-items: center;
        border: 1px solid black;
        border-radius: 10px;
        margin-bottom: 70px;
        background: grey;
        display: flex;
      }

      div:nth-child(2){
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
      }
      label {
        font-size: 20px;
        font-weight: bold;
        font-family: sans-serif;
        margin: 25px 5px 25px 20px;
      }
      input {
        border: 1px solid black;
        border-radius: 5px;
        margin: 25px 5px 25px 20px;
      }
      button {
        padding: 0 10px;
        border-radius: 5px;
        border: none;
        background-color:rgba(34, 33, 33, 0.78);
        color: white;
        font-size: 13px;
        cursor: pointer;
      }
      p {
        font-size: 20px;
        font-weight: bold;
        font-family: sans-serif;
        margin: 25px 5px 25px 20px;
        color: white;
      }
      </style>
</head>
<body>
    <form action="result.php" method="GET">
      <div>
        <label for="accesso">Lunghezza Desiderata  (Massimo 50)</label>
        <input min=1 max=50 id="accesso" name="accesso" type="number" placeholder="..." />
      </div>
      <div>
        <p>
        <label for="ripetute">consenti ripetizioni di uno o più caratteri</label>
    </BR>
        <input id="ripetute" name="ripetute" type="checkbox"  value="true" placeholder="..." />
        </p>
        <p>
        <input id="lettere" name="lettere" type="checkbox"  value="true" placeholder="..." />
        <label for="lettere">Lettere</label>
        </p>
        <p>
        <input id="numeri" name="numeri" type="checkbox" value="true"  placeholder="..." />
        <label for="numeri">Numeri</label>
        </p>
        <p>
        <input id="simboli" name="simboli" type="checkbox" value="true"  placeholder="..." />
        <label for="simboli">Simboli</label>
        </p>
      </div>
        <button type="submit">Crea</button>
        </br>
        </form>
</body>
</html>