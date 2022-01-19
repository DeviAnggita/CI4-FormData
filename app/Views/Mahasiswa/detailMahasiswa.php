<!DOCTYPE html>
<html>

<head>
    <title>My Form</title>
</head>

<body>
    <h2>Detail Mahasiswa</h2>
    <table border='0'>
        <tr><td>Username </td><td><?= $mhs['username'] ?></td></tr>
        <tr><td>Password </td><td><?= $mhs['password'] ?></td></tr>
        <tr><td>Email </td><td><?= $mhs['email'] ?></td></tr>
        <tr><td>Kota </td><td><?= $mhs['kota'] ?></td></tr>
    </table>
    <p><?= anchor('mahasiswa', 'List Data Mahasiswa') ?></p>
    <p><?= anchor('mahasiswa/input', 'Tambah Data Mahasiswa') ?></p>
</body>

</html>