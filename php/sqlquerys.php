<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/php/config.php";

function sqlSelectUsers($pdo) {
    try {
        $sql = "SELECT * FROM users";
        $stmt = $pdo->prepare($sql);
        if ($stmt->execute()) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            // Handle the SQL execution error here
            error_log("Error collecting user database information: " . implode(' | ', $stmt->errorInfo()), 3, "error.log");
            return false; // Return false in case of an error
        }
    } catch (PDOException $e) {
        if ($e->getCode() === 'HY000') {
            // Handle connection error
            error_log("Database connection Error: " . $e->getMessage(), 3, "error.log");
        } elseif ($e->getCode() === '42S02') {
            // Handle table not found error
            error_log("Database table not found Error: " . $e->getMessage(), 3, "error.log");
        } else {
            // Handle other database errors
            error_log("Other database database Error: " . $e->getMessage(), 3, "error.log");
        }

        return false; // Return false in case of an error
    }
}
function sqlInsertUser($pdo, $input_username, $hash) {
    try {
        $sql = "INSERT INTO users (name_user, password_user) VALUES (?, ?)";
        $stmt = $pdo->prepare($sql);
        if ($stmt->execute([$input_username, $hash])) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            // Handle the SQL execution error here
            error_log("Error inserting user information into database: " . implode(' | ', $stmt->errorInfo()), 3, "error.log");
            return false; // Return false in case of an error
        }
    } catch (PDOException $e) {
        if ($e->getCode() === 'HY000') {
            // Handle connection error
            error_log("Database connection Error: " . $e->getMessage(), 3, "error.log");
        } elseif ($e->getCode() === '42S02') {
            // Handle table not found error
            error_log("Database table not found Error: " . $e->getMessage(), 3, "error.log");
        } else {
            // Handle other database errors
            error_log("Other database database Error: " . $e->getMessage(), 3, "error.log");
        }

        return false; // Return false in case of an error
    }
}
function sqlCompareImage($pdo, $img_name) {
    try {
        $sql = "SELECT img_name FROM data WHERE img_name = ?";
        $stmt = $pdo->prepare($sql);
        if ($stmt->execute([$img_name])) {
            $count = $stmt->fetchColumn();
            return $count > 0;
        } else {
            // Handle the SQL execution error here
            error_log("Error checking for image existence: " . implode(' | ', $stmt->errorInfo()), 3, "error.log");
            return false; // Return false in case of an error
        }
    } catch (PDOException $e) {
        if ($e->getCode() === 'HY000') {
            // Handle connection error
            error_log("Database connection Error: " . $e->getMessage(), 3, "error.log");
        } elseif ($e->getCode() === '42S02') {
            // Handle table not found error
            error_log("Database table not found Error: " . $e->getMessage(), 3, "error.log");
        } else {
            // Handle other database errors
            error_log("Other database database Error: " . $e->getMessage(), 3, "error.log");
        }

        return false; // Return false in case of an error
    }
}
/*
function sqlSelectImages($pdo) {
    try {
        $sql = "SELECT * FROM data";
        $stmt = $pdo->prepare($sql);
        if ($stmt->execute()) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            // Handle the SQL execution error here
            error_log("Error grabbing images: " . implode(' | ', $stmt->errorInfo()), 3, "error.log");
            return false; // Return false in case of an error
        }
    } catch (PDOException $e) {
        if ($e->getCode() === 'HY000') {
            // Handle connection error
            error_log("Database connection Error: " . $e->getMessage(), 3, "error.log");
        } elseif ($e->getCode() === '42S02') {
            // Handle table not found error
            error_log("Database table not found Error: " . $e->getMessage(), 3, "error.log");
        } else {
            // Handle other database errors
            error_log("Other database database Error: " . $e->getMessage(), 3, "error.log");
        }

        return false; // Return false in case of an error
    }
}
*/
function sqlInsertImages($pdo, $img_name, $img_data) {
    try {
        $sql = "INSERT INTO data (img_name, img_data) VALUES (?, ?)";
        $stmt = $pdo->prepare($sql);

        if ($stmt->execute([$img_name, $img_data])) {
            echo "Image uploaded successfully.";
            var_dump($_FILES);
        } else {
            echo "Error uploading image: " . $stmt->error;
        }
    } catch (PDOException $e) {
        if ($e->getCode() === 'HY000') {
            // Handle connection error
            error_log("Database connection Error: " . $e->getMessage(), 3, "error.log");
        } elseif ($e->getCode() === '42S02') {
            // Handle table not found error
            error_log("Database table not found Error: " . $e->getMessage(), 3, "error.log");
        } else {
            // Handle other database errors
            error_log("Other database database Error: " . $e->getMessage(), 3, "error.log");
        }
    }
}

function sqlDisplayImages($pdo) {
    try {
        $sql = "SELECT img_data FROM data";
        $stmt = $pdo->prepare($sql);

        if ($stmt->execute()) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            // Handle the SQL execution error here
            error_log("Error grabbing images: " . implode(' | ', $stmt->errorInfo()), 3, "error.log");
            return false; // Return false in case of an error
        }
    } catch (PDOException $e) {
        if ($e->getCode() === 'HY000') {
            // Handle connection error
            error_log("Database connection Error: " . $e->getMessage(), 3, "error.log");
        } elseif ($e->getCode() === '42S02') {
            // Handle table not found error
            error_log("Database table not found Error: " . $e->getMessage(), 3, "error.log");
        } else {
            // Handle other database errors
            error_log("Other database database Error: " . $e->getMessage(), 3, "error.log");
        }

        return false; // Return false in case of an error
    }
}

// This here is just what i've copied of my own GIP project for reference
/*
function sql_select_product_and_stock($pdo) {
    $sql = 'SELECT * FROM product p, stock s WHERE p.id_stock = s.id_stock';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function sql_select_ids_user($pdo, $logged_user_name) {
    $sql = 'SELECT id_gebruiker, id_klant FROM gebruikers WHERE gebruiker_naam = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([htmlspecialchars($logged_user_name)]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
function sql_select_customer_id($pdo, $ids_user) {
    $sql = 'SELECT id_klant FROM klant WHERE id_gebruiker = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([htmlspecialchars($ids_user['id_gebruiker'])]);
    return $stmt->fetch(PDO::FETCH_ASSOC)['id_klant'];
}
function sql_update_user_id($pdo, $ids_user) {
    $sql = 'UPDATE gebruikers SET id_klant = ? WHERE id_gebruiker = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([htmlspecialchars($ids_user['id_klant']), htmlspecialchars($ids_user['id_gebruiker'])]);
}
*/
