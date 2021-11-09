<?php
require 'form.php';

$form = new Form(array(
    'username' => 'Franck'
));

$form->input('username');
$form->input('password');
