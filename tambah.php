<?php
include "koneksi.php";

$category = mysqli_query($koneksi, "SELECT * FROM category");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>
<body>
    <h2>Tambah Todomu!</h2>

    <div class="container">
        <form action="proses_tambah.php" method="post">
            <label>Judul</label><br>
            <input type="text" name="title" required><br><br>

            <label>Deskripsi</label><br>
            <textarea name="deskripsi" id="" cols="30"></textarea><br><br>

            <label>Kategori</label><br>
            <select name="id_category" required>
                <option value="">Pilih Kategori</option>
                <?php while ($c = mysqli_fetch_assoc($category)) { ?>
                    <option value="<?=$c['id_category']?>">
                        <?=$c['category'];?>
                    </option>
                <?php } ?>
            </select><br><br>

            <label>Status</label><br>
            <select name="status" required>
                <option value="pending">Pending</option>
                <option value="done">Done</option>
            </select><br><br>
            <input type="hidden" name="id_user" value="1">
            <button type="submit">Tambah</button>
        </form>
    </div>
</body>
</html>