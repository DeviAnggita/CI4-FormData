<html>

<head>
    <title>My Form</title>
</head>

<body>

    <h2>LIST MAHASISWA</h2>
    <table border='1'>
        <tr>
            <th>Nomor</th>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th>Kota</th>
            <th>Detail</th>
        </tr>
        <?php
        $no = 1;
        foreach ($mhs as $m) :
        ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $m['username'] ?></td>
                <td><?= $m['password'] ?></td>
                <td><?= $m['email'] ?></td>
                <td><?= $m['kota'] ?></td>
                <td><?= anchor('Mahasiswa/detail/'.$m['username'].'', 'Detail') ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <!-- <?php
    //library table
    $table = new \CodeIgniter\View\Table();

    $template = [
        'table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="mytable">'
    ];

    $table->setTemplate($template);

    $table->setHeading('Nomor', 'Username', 'Password', 'email', 'Kota');

    $no = 1;
    foreach ($mhs as $m) :
        $table->addRow($no++, $m['username'], $m['password'], $m['email'], $m['kota']);
    endforeach;

    echo $table->generate();
    ?> -->

    <p><?= anchor('mahasiswa/input', 'Tambah Data Mahasiswa') ?></p>

</body>

</html>