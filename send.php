<?php

$form['form-1'] = array(
        'fields' => array(
        'name' => array(
        'title' => 'Имя',
        'validate' => array(
        'preg' => '%[A-Z-a-zА-Яа-я\s]%',
        'minlength' => '3',
        'maxlength' => '35',
                        ),
        'messages' => array(
        'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
        'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
        'maxlength' => 'Максимальная длинна поля [ %1$s ] превышает допустимую - %2$s',
                        )
                ),
        'tell' => array(
        'title' => 'Телефон',
        'validate' => array(
        'preg' => "/^((8|\+)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{5,10}$/",
        'minlength' => '5',
                        ),
        'messages' => array(
        'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
        'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
                        )
                ),
        ),
        'cfg' => array(
        'charset' => 'utf-8',
        'subject' => 'Тема письма',
        'title' => 'Заголовок в теле письма',
        'ajax' => true,
        'validate' => true,
        'from_email' => 'noreply@email.com',
        'from_name' => 'noreply',
        'to_email' => 'noreply1@email.com, noreply2@email.com',
        'to_name' => 'noreply1, noreply2',
        'geoip' => true,
        'referer' => true,
        'type' => 'html',
        'tpl' => true,
        'antispam' => 'email77',
        'antispamjs' => 'address77',
        'okay' => 'Сообщение отправлено - OK',
        'fuck' => 'Сообщение отправлено - ERROR',
        'spam' => 'Cпам робот',
        'notify' => 'color-modal-textbox',
        'usepresuf' => false
        )
);

        ?>