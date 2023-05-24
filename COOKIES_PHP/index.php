<?php
session_start();
require('./template/header.php');

if($_SESSION['warn']) {
    echo $_SESSION['warn'];
    echo $_SESSION['warn'] = '';
}

?>

<style>
    form {
        padding: 2rem 5%;
        display: flex;
        flex-direction: column;
        gap: 2;
    }
    label .box {
        padding: .4rem;
        width: 20rem;
        border: none;
        margin-block: .8rem;
        outline: none;
        border-radius: 4px;
        box-shadow: 0px 10px 15px -3px rgba(0,0,0,0.1);
    }
    .boxButton {
        box-shadow: 0px 10px 15px -3px rgba(0,0,0,0.1);
        border: none;
        background-color: #454545;
        padding: .4rem;
        width: 20rem;
        border-radius: 4px;
        color: #FFFF;
        cursor: pointer;
        font-weight: lighter;

    }

</style>

<a href="./delete.php" style="padding: 2rem 5%;">Delete Cookie</a>

<form method="POST" action="receveid.php">
    <label>
        Name 
        <br>
        <input type="text" name="name" class="box">
    </label>
    <br>
    <br>
    <label>
        Age 
        <br>
        <input type="text" name="age" class="box">
    </label>
    <br>
    <br>
    <label>
        Email 
        <br>
        <input type="email" name="email" class="box">
    </label>
    <br>
    <br>
    <input type="submit" value="Send" class="boxButton">
</form>
