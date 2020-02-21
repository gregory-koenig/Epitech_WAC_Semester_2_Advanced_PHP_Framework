<?php


namespace Core;


class Request
{
    public function checkGet() {
        if (!empty($_GET)) {
            foreach ($_GET as $key => $value) {
                $value = trim($value);
                $value = stripslashes($value);
                $value = htmlspecialchars($value);
                $value = addslashes($value);
                $_GET[$key] = $value;
            }

            return $_GET;
        }

        return null;
    }

    public function checkPost() {
        if (!empty($_POST)) {
            foreach ($_POST as $key => $value) {
                $value = trim($value);
                $value = stripslashes($value);
                $value = htmlspecialchars($value);
                $value = addslashes($value);
                $_POST[$key] = $value;
            }

            return $_POST;
        }

        return null;
    }
}