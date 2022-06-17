<?php

if (!empty($_COOKIE['username'])) {
    echo $_COOKIE['username'];
}else{
    echo "your cookie is empty";
}