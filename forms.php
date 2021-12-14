<?php
require('header.php');
if(isset($_GET['message'])){
    echo $_GET['message'];
}
?>
<div>
    <a href="index.php">
        <button class="btn btn-outline-danger" type="button">Таблица</button>
    </a>
</div>
<div class="container-sm" style="width: 450px">
    <form action="author.php" method="post" class="d-flex flex-column border border-2 border-dark rounded-3">
        <div class="w-100 text-center fw-bold border-bottom border-2 border-dark p-3">
            <h2>Форма добавления автора</h2>
        </div>
        <div class="py-2 px-3 d-flex flex-row justify-content-between align-items-center">
            <label for="last_name" class="form-label fw-bold">Фамилия</label>
            <input id="last_name" name="last_name" class="form-control w-50" type="text" required>
        </div>
        <div class="py-2 px-3 d-flex flex-row justify-content-between align-items-center">
            <label for="first_name" class="form-label fw-bold">Имя</label>
            <input id="first_name" name="first_name" class="form-control w-50" type="text" required>
        </div>
        <div class="py-2 px-3 d-flex flex-row justify-content-between align-items-center">
            <label for="father_name" class="form-label fw-bold">Отчество</label>
            <input id="father_name" name="father_name" class="form-control w-50" type="text" required>
        </div>
        <div class="w-100 text-center fw-bold border-top border-2 border-dark p-3">
            <button class="btn btn-outline-danger" type="submit">Отправить</button>
        </div>
    </form>
</div>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Открыть форму
</button>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Форма добавления автора</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="author.php" method="post">
            <div class="modal-body">
                <form action="author.php" method="post" class="d-flex flex-column border border-2 border-dark rounded-3">
                    <div class="py-2 px-3 d-flex flex-row justify-content-between align-items-center">
                        <label for="last_name" class="form-label fw-bold">Фамилия</label>
                        <input id="last_name" name="last_name" class="form-control w-50" type="text" required>
                    </div>
                    <div class="py-2 px-3 d-flex flex-row justify-content-between align-items-center">
                        <label for="first_name" class="form-label fw-bold">Имя</label>
                        <input id="first_name" name="first_name" class="form-control w-50" type="text" required>
                    </div>
                    <div class="py-2 px-3 d-flex flex-row justify-content-between align-items-center">
                        <label for="father_name" class="form-label fw-bold">Отчество</label>
                        <input id="father_name" name="father_name" class="form-control w-50" type="text" required>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Отправить</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!--<form action="author.php" method="post" class="form_container">-->
<!--    <div class="form_header">-->
<!--        <h2>Форма добавления автора</h2>-->
<!--    </div>-->
<!--    <div class="form_row">-->
<!--        <label for="last_name">Фамилия</label>-->
<!--        <input id="last_name" name="last_name" class="form_input" type="text">-->
<!--    </div>-->
<!--    <div class="form_row">-->
<!--        <label for="first_name">Имя</label>-->
<!--        <input id="first_name" name="first_name" class="form_input" type="text">-->
<!--    </div>-->
<!--    <div class="form_row">-->
<!--        <label for="father_name">Отчество</label>-->
<!--        <input id="father_name" name="father_name" class="form_input" type="text">-->
<!--    </div>-->
<!--    <div class="form_footer">-->
<!--        <button class="form_submit" type="submit">Отправить</button>-->
<!--    </div>-->
<!--</form>-->
<?php
require('footer.php');
?>

