<?php
require('./includes/db-config.php');
require('./services/employee-service.php');

$id = $_GET['id'];

deleteEmployee($mysqli, $id);

header("Location:employees.php");