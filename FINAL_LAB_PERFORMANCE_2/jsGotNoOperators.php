<?php

	$num1 = $_REQUEST['num1'];
	$num2 = $_REQUEST['num2'];
	$operator = $_REQUEST['operator'];

	switch($operator){
	case '+':
		echo (float)$num1 + (float)$num2;
		break;
	case '-':
		echo (float)$num1 - (float)$num2;
		break;
	case '*':
		echo (float)$num1 * (float)$num2;
		break;
	case '/':
		echo (float)$num1 / (float)$num2;
		break;
	}
