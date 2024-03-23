<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form di Tengah</title>
<style>
  /* CSS untuk menempatkan form di tengah */
  body, html {
    height: 100%;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  form {
    width: 300px;
    padding: 20px;
    background-color: #f0f0f0;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }

  h2 {
    margin-top: 0;
  }

  label {
    display: block;
    margin-bottom: 5px;
  }

  input[type="text"],
  input[type="email"],
  input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
  }

  input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  input[type="submit"]:hover {
    background-color: #0056b3;
  }
</style>
</head>
<body>
    <form method="post" action="proses.php">


<h1>Form Nilai Mahasiswa</h1>

    <label for="nama">Nama Mata Kuliah:</label>
    <input type="text" id="nama" name="nama">

    <label for="nilai">Nilai:</label>
    <input type="number" id="nilai" name="nilai">

    <label for="nim">Nim:</label>
    <input type="number" id="nim" name="nim">
    <br>

    <button type="submit">Submit</button>
    

    </div>

</form>
</body>
</html>