<?php

    include_once 'form.php';
    include_once 'inputField.php';
    include_once 'textarea.php';
    include_once 'checkbox.php';

    $action = '/doStuff';
    $method = 'POST';
    $form = new Form($action, $method);
    $form->addField(new InputField('nume'));
    $form->addField(new InputField('prenume'));
    $form->addField(new Textarea('adresa'));
    $form->addField(new Checkbox('termeni_si_conditii'));
    $form->display();
?>