 
<?php include __DIR__ . '/../layout.php'; ?>

<h2>Detail Pengguna</h2>
<p><img src="../../public/uploads/<?= htmlspecialchars($user['photo']) ?>" width="100"></p>
<p><strong>Nama:</strong> <?= htmlspecialchars($user['name']) ?></p>
<p><strong>Email:</strong> <?= htmlspecialchars($user['email']) ?></p>

<a href="../../index.php">← Kembali</a>
