<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
</head>
<body>
    <div class="container">
    <h2>REGISTER</h2>
    <form action="proses_register.php" method="post">
        <label>Nama Lengkap:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <label>Email</label>
        <input type="text" name="email" required><br><br>
        
        <label>Tanggal Lahir</label><br>
        <input type="date" name="birth_date" required><br><br>
        <button type="submit">Buat Akun</button>
    </form>
    </div>
</body>
</html>