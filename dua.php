<?php

function is_username_valid($username){
	return preg_match('/^[a-zA-Z][a-zA-Z0-9]{4,8}$/', $username);
}

function is_password_valid($password){
	return preg_match('/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*()_+~=])(?=.*=)(?=.{8,})/', $password);
}

echo is_username_valid('Xrutaf888');

echo is_username_valid('1Diana');

echo is_password_valid('passW0rd='); 

echo is_password_valid('C0d3YourFuture!#');
