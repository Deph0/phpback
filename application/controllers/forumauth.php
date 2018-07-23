<?php

    $forumpath = '../forum/';
    chdir($forumpath);
    define("IN_MYBB", 1);
    require('../forum/global.php');
//    require_once MYBB_ROOT."inc/class_parser.php";
//    $parser = new postParser;
    chdir('../');

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ForumAuth extends CI_Controller {
    public function __construct(){
        parent::__construct();
        session_start();
    }

	public function login($error = "NULL", $ban=0) {
		$this->autoLoginByCookie();
		echo $_SESSION['phpback_userid'];
		echo $mybb->user['uid'];
    }
}
