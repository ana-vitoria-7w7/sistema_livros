<?php

class Controller {
    protected function validateInput($data, $requiredFields) {
        $errors = [];
        
        foreach ($requiredFields as $field) {
            if (!isset($data[$field]) || empty(trim($data[$field]))) {
                $errors[] = "O campo {$field} é obrigatório.";
            }
        }
        
        return $errors;
    }

    protected function redirect($url) {
        header("Location: " . $url);
        exit();
    }

    protected function sanitizeInput($data) {
        $sanitized = [];
        
        foreach ($data as $key => $value) {
            $sanitized[$key] = htmlspecialchars(trim($value), ENT_QUOTES, 'UTF-8');
        }
        
        return $sanitized;
    }

    protected function jsonResponse($data) {
        header('Content-Type: application/json');
        echo json_encode($data);
        exit();
    }
}
?>
