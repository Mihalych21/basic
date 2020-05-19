<?php

use yii\bootstrap\Modal;

if ($res) {
    $msg = 'Спасибо, ' . mb_ucfirst($data['name']) . '.Ваше сообщение отправлено.';
    $color = '#444';
} else {
    $msg = 'Сбой! Повторите попытку или свяжитесь с нами иным способом';
    $color = 'red';
}

Modal::begin([
    'id' => 'mail-modal',
]);
echo '<h2 style="color:' . $color . '">' . $msg . '</h2>';

Modal::end();
?>

<script>
    $('#mail-modal').modal();

    // через 4 сек удаляем сообщение
    setTimeout(function () {
        $('#mail-modal').modal('hide');
    }, 4000);
</script>
