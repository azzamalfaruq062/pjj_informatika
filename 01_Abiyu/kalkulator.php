<!DOCTYPE html>
<html>
<head>
  <title>Kalkulator PHP</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(120deg, #74ebd5, #9face6);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .card {
      background: white;
      padding: 20px;
      border-radius: 15px;
      width: 320px;
      text-align: center;
      box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    }

    input {
      width: 90%;
      padding: 10px;
      margin: 5px 0;
      border-radius: 8px;
      border: 1px solid #ccc;
    }

    button {
      width: 95%;
      padding: 10px;
      background: green;
      color: white;
      border: none;
      border-radius: 8px;
      cursor: pointer;
    }

    .hasil {
      margin-top: 10px;
      padding: 10px;
      border-radius: 8px;
      background: #f1f1f1;
    }
  </style>
</head>

<body>

<div class="card">
  <h2>Kalkulator PHP</h2>

  <form method="POST">
    <input type="number" name="angka1" placeholder="Masukkan angka pertama">
    <input type="number" name="angka2" placeholder="Masukkan angka kedua">

    <button type="submit">Hitung</button>
  </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $a = $_POST['angka1'];
    $b = $_POST['angka2'];

    $tambah = $a + $b;
    $kurang = $a - $b;

    echo "<div class='hasil'>";
    echo "Penjumlahan: $tambah <br>";
    echo "Pengurangan: $kurang";
    echo "</div>";
}
?>

</div>

</body>
</html>