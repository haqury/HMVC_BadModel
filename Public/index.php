<?php
/**
 * Created by PhpStorm.
 * User: haqury
 * Date: 03.09.19
 * Time: 0:19
 */

include_once '../autoload.php';

if (empty($_POST)) {
	\Controller\Index::index();
}
if(!empty($_POST)) {
	\Controller\Index::result();
}
