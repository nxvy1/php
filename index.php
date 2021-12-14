<?php
require ('header.php')
?>
    <div>
        <a href="forms.php">
            <button class="btn btn-outline-secondary" type="button">Формы</button>
        </a>
    </div>
<!--<table>-->
<!--    <caption>Авторы книг</caption>-->
<!--    <thead>-->
<!--    <tr>-->
<!--        <th>№</th>-->
<!--        <th>Имя</th>-->
<!--        <th>Фамилия</th>-->
<!--    </tr>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--    --><?php
//    $authors = $db->getAuthors();
//    foreach($authors as $key=>$author) {
//        ?>
<!--        <tr>-->
<!--            <td>--><?php //echo ++$key; ?><!--</td>-->
<!--            <td>--><?php //echo $author['first_name']; ?><!--</td>-->
<!--            <td>--><?php //echo $author['last_name']; ?><!--</td>-->
<!--        </tr>-->
<!--        --><?php
//    }
//    ?>
<!--    </tbody>-->
<!--</table>-->

    <table class="table table-hover table-dark">
        <thead>
        <tr>
            <th scope="col">№</th>
            <th scope="col">Имя</th>
            <th scope="col">Фамилия</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $authors = $db->getAuthors();
        foreach($authors as $key=>$author) {
            ?>
            <tr>
                <td><?php echo ++$key; ?></td>
                <td><?php echo $author['first_name']; ?></td>
                <td><?php echo $author['last_name']; ?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
<?php
require ('footer.php')
?>