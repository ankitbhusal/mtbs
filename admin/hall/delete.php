<?php

require "../components/admin.php";

$id = request('id');

if (empty($id)) {
    die("Please provide ID");
}

$hall = find('hall', $id);
if (empty($hall)) {
    die("Enter a valid id!!!");
}


delete('hall', $id);

setSuccess('Cinema Hall deleted!');
header("Location: index.php");
