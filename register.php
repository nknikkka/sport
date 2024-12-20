<?php
// Включаем отображение ошибок для отладки
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sport";

$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Получение данных из формы
$training_type = $_POST['training_type'] ?? null;
$client_type = $_POST['client_type'] ?? null;
$trainer_id = $_POST['trainer'] ?? null;
$adult_name = $_POST['adult_name'] ?? null;
$adult_age = $_POST['adult_age'] ?? null;
$adult_phone = $_POST['adult_phone'] ?? null;
$parent_name = $_POST['parent_name'] ?? null;
$child_name = $_POST['child_name'] ?? null;
$child_age = $_POST['child_age'] ?? null;
$parent_phone = $_POST['parent_phone'] ?? null;

// Вставка данных в таблицу clients
if ($client_type === 'adult') {
    // Вставка для взрослого
    $stmt = $conn->prepare("INSERT INTO clients (client_type, adult_name, age, phone) VALUES (?, ?, ?, ?)");
    if ($stmt === false) {
        die("Ошибка при добавлении взрослого: " . $conn->error);
    }
    $stmt->bind_param("ssis", $client_type, $adult_name, $adult_age, $adult_phone); // "ssis" - строка, строка, целое, строка
} else {
    // Вставка для ребенка
    $stmt = $conn->prepare("INSERT INTO clients (client_type, parent_name, child_name, age, phone) VALUES (?, ?, ?, ?, ?)");
    if ($stmt === false) {
        die("Ошибка при добавлении ребенка: " . $conn->error);
    }
    $stmt->bind_param("sssis", $client_type, $parent_name, $child_name, $child_age, $parent_phone); // "sssis" - строка, строка, строка, целое, строка
}

// Выполнение запроса и получение client_id
if ($stmt->execute()) {
    $client_id = $stmt->insert_id; // Получаем ID нового клиента
} else {
    echo "Ошибка при добавлении клиента: " . $stmt->error;
    exit();
}

// Вставка данных в таблицу registrations
$stmt = $conn->prepare("INSERT INTO registrations (client_id, training_type_id, trainer_id) VALUES (?, ?, ?)");
if ($stmt === false) {
    die("Ошибка при регистрации: " . $conn->error);
}

$training_type_id = ($training_type === 'group') ? 1 : 2; // Убедитесь, что тип тренировки соответствует вашим данным
$stmt->bind_param("iii", $client_id, $training_type_id, $trainer_id); // "iii" - целое, целое, целое

if ($stmt->execute()) {
    // Теперь получаем информацию о тренировках в зависимости от возраста ребенка
    if ($client_type === 'child') {
        // Выбираем данные из расписания в зависимости от возраста ребенка
        $stmt = $conn->prepare("SELECT address, schedule FROM schedule WHERE age_range = ?");
        if ($stmt === false) {
            die("Ошибка подготовки запроса для расписания: " . $conn->error);
        }

        // Определяем диапазон возраста
        if ($child_age >= 4 && $child_age <= 6) {
            $age_range = '4-6';
        } elseif ($child_age >= 7 && $child_age <= 9) {
            $age_range = '7-9';
        } elseif ($child_age >= 10 && $child_age <= 11) {
            $age_range = '10-11';
        } elseif ($child_age >= 12 && $child_age <= 15) {
            $age_range = '12-15';
        } else {
            $age_range = '16+'; // Если возраст больше 15 лет
        }

        // Подготавливаем запрос и выполняем его
        $stmt->bind_param("s", $age_range); // "s" - строка
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Получаем результат и выводим данные
            $row = $result->fetch_assoc();
            echo "<script>alert('Реєстрація успішна! Адреса тренування: " . $row['address'] . ". Графік тренувань: " . $row['schedule'] . "');</script>";
        } else {
            echo "<script>alert('Реєстрація успішна! Інформація про групи наразі недоступна.');</script>";
        }
    } else {
        echo "<script>alert('Реєстрація успішна!');</script>";
    }
} else {
    echo "<script>alert('Помилка при створенні реєстрації!');</script>" . $stmt->error;
}

// Закрытие соединения
$stmt->close();
$conn->close();

?>
