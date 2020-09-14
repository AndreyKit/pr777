<?php

use TexLab\Html\Select;
use View\Html\Html;

/** @var int $pageCount Количество страниц
 * @var array $fields Список полей таблицы
 * @var array $comments Комментарии к полям таблицы
 * @var string $type Имя контроллера
 * @var array $usersList список пользователей
 * @var array $table
 * @var int $user_id
 */
//print_r($table);
//
//echo TexLab\Html\Html::table()
//    ->setData($table)
//    ->setHeaders($comments)
//    ->setClass('tableDiary')
//    ->removeColumns([1 => 'id', 2 => 'users_id'])
//    ->html();


echo Html::create('TableEdited2')
    ->setControllerType($type)
    ->setHeaders([1 => '№', 2 => 'Упражнение', 3 => 'Времявыполнения/Количество повторений'])
    ->data($table)
    ->setClass('tableDiary')
    ->html();


//$form = Html::create('Form')
//    ->setMethod('POST')
//    ->setAction("?action=add&type=$type")
//    ->setClass('form');
//
//
//foreach ($fields as $field) {
//    $form->addContent(Html::create('Label')->setFor($field)->setInnerText($comments[$field])->html());
//    $form->addContent(Html::create('input')->setName($field)->setId($field)->html());
//}
//
//$form->addContent(
//    Html::create('Input')
//        ->setType('submit')
//        ->setValue('OK')
//        ->html()
//);
//
//echo $form->html();


//print_r($usersList);
?>
<form action="?action=add&type=<?= $type ?>" method="post" class="hidden" id="addForm">
    <label> <?= $comments['exercise'] ?>
        <input class="ml-5" type="text" name="exercise">
    </label>
    <label> <?= $comments['lead_time'] ?>
        <input type="text" name="lead_time">
    </label>
    <!--    <label> --><?php //= $comments['date'] ?>
    <!--        <input class="ml-7" type="text" name="date">-->
    <!--    </label>-->

    <input type="hidden" name="users_id" value="<?= $user_id ?>">

    <input id="formDiaryOk" type="submit" value="Добавить">
</form>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<a class="btn btn-primary" id="addButton">➕➕➕</a>
<a id="closeFormButton"></a>
<div id="shadow" class="hidden"></div>

</body>
<?php
echo Html::create("Pagination")
    ->setClass('pagination')
    ->setControllerType($type)
    ->setPageCount($pageCount)
    ->html();
?>
</html>
