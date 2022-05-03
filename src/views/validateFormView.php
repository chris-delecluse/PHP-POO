<?php

session_start();

require "templates/head.php";

?>

<table>
    <thead>
        <tr>
            <th>string</th>
            <th>int</th>
            <th>float</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $_SESSION['string'] ?></td>
            <td><?= $_SESSION['int'] ?></td>
            <td><?= $_SESSION['float'] ?></td>
        </tr>
    </tbody>
</table>


<?php

require "templates/footer.php";

session_unset();
session_destroy();
