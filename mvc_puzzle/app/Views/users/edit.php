
<h2>Update Pengguna</h2>
<form method="POST" action="?action=edit&id=<?= $user['id'] ?>" enctype="multipart/form-data">
    Nama: <input type="text" name="name"><br>
    Email: <input type="email" name="email"><br>
    Foto: <input type="file" name="photo"><br>
    <button type="submit">Simpan</button>
</form>