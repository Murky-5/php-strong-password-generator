<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina d'accesso</title>
    <style>
      body {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        height: 100vh;
      }
      form {
        position: sticky;
        top: 100px;
        left: calc(50% - 409.92/2);
        align-items: center;
        border: 1px solid black;
        border-radius: 10px;
        margin-bottom: 70px;
        background: grey;
        display: flex;
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
        <label for="accesso">Lunghezza Desiderata  (Massimo 50)</label>
        <input min=1 max=50 id="accesso" name="accesso" type="number" placeholder="..." />
        <button type="submit">Crea</button>
        </br>
        </form>
</body>
</html>