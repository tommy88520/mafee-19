<?php
session_start();

unset($_SESSION['user']);//remove someone session var
header('Location: index_.php');





