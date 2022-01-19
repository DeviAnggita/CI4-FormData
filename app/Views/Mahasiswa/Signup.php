<html>
<head>
    <title>My Form</title>
</head>
<body>

    <?= $validation->listErrors() ?>

    <?= form_open('Mahasiswa/input') ?>

    <h5>Username</h5>
    <input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" />

    <h5>Password</h5>
    <input type="text" name="password" value="<?php echo set_value('password'); ?>" size="50" />

    <h5>Password Confirm</h5>
    <input type="text" name="passconf" value="<?php echo set_value('passconf'); ?>" size="50" />

    <h5>Email Address</h5>
    <input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" />

    <h5>Kota Tinggal</h5>
    <?php
    $options = [
        'ska'   => 'Surakarta',
        'skh'   => 'Sukoharjo',
        'kra'   => 'Karanganyar',
        'srg'   => 'Sragen',
    ];
    
    echo form_dropdown('kota', $options, 'skh');
    ?>

    <div><input type="submit" value="Submit" /></div>

    </form>

</body>
</html>