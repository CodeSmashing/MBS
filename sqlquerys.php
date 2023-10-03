<?php
require_once('config.php');

function sql_select_users($pdo) {
    $sql = "SELECT * FROM users";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function sql_insert_user($pdo, $input_username, $hash) {
    $sql = "INSERT INTO users (username, user_password) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$input_username, $hash]);
}

/** this here is just what i've copied of my own GIP project for reference */
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
?>