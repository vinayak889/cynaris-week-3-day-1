<?php

// Function to greet users
function greet($name) {
    return "Hello, " . htmlspecialchars($name) . "!";
}

// Function to sanitise user input
function sanitize($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

// Function to calculate grade
function calculateGrade($marks) {

    if ($marks >= 90) {
        return "A Grade";
    } elseif ($marks >= 75) {
        return "B Grade";
    } elseif ($marks >= 60) {
        return "C Grade";
    } else {
        return "Fail";
    }
}

?>