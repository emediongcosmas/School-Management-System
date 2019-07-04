<?php

    session_start();

    include '../model/user.model.php';

    $userLogin = new User;
    $userLogin->GetDetails();
    $userLogin->UserValidation();
