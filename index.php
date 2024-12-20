<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>KUDOKATANA</title> 
<style>
    html, body {
    overflow-x: hidden; /* Отключаем горизонтальную прокрутку */
    margin: 0; /* Убираем отступы */
    padding: 0; /* Убираем отступы */
    width: 100%; /* Устанавливаем ширину на 100% */
    height: 100%; /* Устанавливаем высоту на 100% */
}

    .profile-video {
    width: 100%;
    height: auto;
    border-radius: 50%; /* Якщо потрібно зробити відео круглим */
    object-fit: cover;
}#features .fea-base {
    display: flex;
    flex-direction: column; /* Розташовує елементи по вертикалі */
    gap: 20px; /* Відстань між елементами */
}

.fea-box {
    text-align: center;
    padding: 20px;
    border: 1px solid #ccc; /* Рамка */
    border-radius: 10px; /* Заокруглення */
}  /* Основные стили для формы */
        .registration-form {
            width: 100%;
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .registration-form h2 { text-align: center; color: #333; margin-bottom: 20px; }
        .form-group { margin-bottom: 15px; text-align: left; }
        .form-group label { font-weight: bold; color: #555; display: block; margin-bottom: 5px; }
        .form-group input, .form-group select { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; }
        .form-group input:focus, .form-group select:focus { border-color: #4caf50; outline: none; }
        .register-btn { width: 100%; padding: 12px; background-color: #4caf50; color: #fff; border: none; border-radius: 5px; cursor: pointer; }
        .hidden { display: none; }
        .trainer-option { display: flex; align-items: center; margin-bottom: 10px; }
        .trainer-option img { width: 50px; height: 50px; border-radius: 50%; margin-right: 10px; }
 /* Обертка для всей навигации */
.navigation {
    display: flex; /* Используем Flexbox для выравнивания элементов в строку */
    justify-content: space-between; /* Равномерно распределяем пространство между логотипом и меню */
    align-items: center; /* Центрируем элементы по вертикали */
    padding: 10px 20px; /* Отступы для контейнера */
}

/* Контейнер для логотипа и текста */
.logo-container {
    display: flex; /* Логотип и текст в строку */
    align-items: center; /* Центрируем логотип и текст по вертикали */
}

/* Логотип */
.logo-img {
    width: 30px; /* Устанавливаем ширину логотипа */
    height: auto; /* Сохраняем пропорции изображения */
    margin-right: 10px; /* Отступ между логотипом и текстом */
}

/* Текст названия */
.logo-text {
    font-size: 24px; /* Размер шрифта */
    font-weight: bold; /* Жирное начертание */
    color: #333; /* Цвет текста */
}

/* Меню */
.menu-list {
    list-style: none; /* Убираем стандартные маркеры списка */
    display: flex; /* Размещение пунктов меню в строку */
    margin: 0;
    padding: 0;
}

.menu-list li {
    margin-right: 20px; /* Отступы между пунктами меню */
}

.menu-list li a {
    text-decoration: none; /* Убираем подчеркивание */
    color: #333; /* Цвет текста */
    font-size: 16px; /* Размер текста */
}

footer h2 {
            color: white;
        }


</style>
	<!-- font Awesome CDN link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

	<!-- External CSS -->
	<link rel="stylesheet" href="style.css">

	<!-- JQuery CDN link -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
	<!-- Navigation start -->
	<nav>
    <div class="logo-container">
        <img src="t/menu.png" class="logo" alt="Logo" style="width: 30px; height: 30px;">
        <span class="logo-text">KUDOKATANA</span>
    </div>

    <div class="navigation">
        <ul class="menu-list">
            <li><a href="index.php" class="active">Головна</a></li>
            <li><a href="about.html">Про нас</a></li>
        </ul>
    </div>
</nav>


<section id="home">
    <!-- Фонове відео -->
    <video src="video.mov" autoplay muted loop></video>

    <!-- Заголовок -->
    <h2>Прокачайся разом з нами!</h2>

    <!-- Опис або додатковий текст -->
    <p>Долучайся до нашої команди, змінюй своє життя та досягай нових висот!</p>

    <!-- Кнопки -->
    <div class="btn">
        <a href="#" class="blue">Дізнатися більше</a>
        <a href="#" class="yellow">Наші програми тренувань</a>
    </div>
</section>

    <section id="features">
    <h1>НАШІ ПЕРЕВАГИ</h1>

    <div class="fea-base">
        <div class="fea-box">
            <i class="fas fa-graduation-cap"></i>
            <h3>СПОРТСМЕНІВ</h3>
            <p>+70</p>
        </div>

        <div class="fea-box">
            <i class="fas fa-graduation-cap"></i>
            <h3>БІЛЬШЕ 15 РОКІВ ДОСВІДУ</h3>
            <p>З 2013</p>
        </div>

        <div class="fea-box">
            <i class="fa-solid fa-book-bookmark"></i>
            <h3>УНІКАЛЬНІ ГРУПИ</h3>
            <p>3</p>
        </div>

        <div class="fea-box">
            <i class="fas fa-award"></i>
            <h3>ЗМАГАНЬ НА РІК</h3>
            <p>+10</p>
        </div>
    </div>
</section>


	<!-- Features section ends from here -->
 


 

<!-- Registration Form starts here -->
<section class="registration-form">
    <h2>Реєстрація на тренування</h2>
    <form id="registration-form" action="register.php" method="POST">
        <div class="form-group">
            <label for="training-type">Виберіть тип тренування</label>
            <select id="training-type" name="training_type" required>
                <option value="">Оберіть...</option>
                <option value="group">Групові тренування</option>
                <option value="individual">Індивідуальні тренування</option>
            </select>
        </div>

        <div id="client-type-group" class="form-group hidden">
            <label for="client-type">Тип клієнта</label>
            <select id="client-type" name="client_type" required>
                <option value="">Оберіть...</option>
                <option value="adult">Дорослий</option>
                <option value="child">Дитина</option>
            </select>
        </div>

        <div id="adult-fields" class="hidden">
            <div class="form-group">
                <label for="adult-name">Ім'я дорослого</label>
                <input type="text" id="adult-name" name="adult_name" required>
            </div>
            <div class="form-group">
                <label for="adult-age">Вік дорослого</label>
                <input type="number" id="adult-age" name="adult_age" min="16" required>
            </div>
            <div class="form-group">
                <label for="adult-phone">Номер телефону</label>
                <input type="tel" id="adult-phone" name="adult_phone" required>
            </div>
        </div>

        <div id="child-fields" class="hidden">
            <div class="form-group">
                <label for="parent-name">Ім'я дорослого</label>
                <input type="text" id="parent-name" name="parent_name">
            </div>
            <div class="form-group">
                <label for="child-age">Вік дитини</label>
                <input type="number" id="child-age" name="child_age" min="4" max="15">
            </div>
            <div class="form-group">
                <label for="child-name">Ім'я дитини</label>
                <input type="text" id="child-name" name="child_name">
            </div>
            <div class="form-group">
                <label for="parent-phone">Номер телефону</label>
                <input type="tel" id="parent-phone" name="parent_phone">
            </div>
        </div>

        <div id="trainer-selection" class="form-group hidden">
            <label>Виберіть тренера</label>
            <?php
// Подключение к базе данных
$host = 'localhost'; // Ваш хост
$db = 'sport'; // Имя вашей базы данных
$user = 'root'; // Имя пользователя
$pass = ''; // Пароль

// Создаем подключение
$conn = new mysqli($host, $user, $pass, $db);

// Проверка на ошибку подключения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Запрос на выбор тренеров
$sql = "SELECT trainer_id, name, description, photo_url FROM trainers";
$result = $conn->query($sql);

// Обработка результата запроса
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="trainer-option">';
        echo '<input type="radio" id="trainer' . $row['trainer_id'] . '" name="trainer" value="' . $row['trainer_id'] . '" required>';
        echo '<label for="trainer' . $row['trainer_id'] . '"><img src="t/' . $row['photo_url'] . '" alt="' . $row['name'] . '">' . $row['name'] . ': ' . $row['description'] . '</label>';
        echo '</div>';
    }
} else {
    echo '<p>Немає доступних тренерів.</p>';
}

// Закрытие соединения
$conn->close();
?>

        </div>

        <button type="submit" class="register-btn">Зареєструватися</button>
    </form>
</section>
<!-- Registration Form ends here -->

<script>
document.getElementById('training-type').addEventListener('change', function() {
    document.getElementById('client-type-group').classList.remove('hidden');
});

document.getElementById('client-type-group').addEventListener('change', function() {
    const clientType = document.getElementById('client-type').value;
    document.getElementById('adult-fields').classList.toggle('hidden', clientType !== 'adult');
    document.getElementById('child-fields').classList.toggle('hidden', clientType !== 'child');
    document.getElementById('trainer-selection').classList.remove('hidden'); // Отображаем тренеров

    // Удаляем/добавляем атрибут required в зависимости от выбранного типа клиента
    if (clientType === 'adult') {
        [...document.querySelectorAll('#child-fields input')].forEach(input => input.removeAttribute('required'));
        [...document.querySelectorAll('#adult-fields input')].forEach(input => input.setAttribute('required', 'true'));
    } else {
        [...document.querySelectorAll('#adult-fields input')].forEach(input => input.removeAttribute('required'));
        [...document.querySelectorAll('#child-fields input')].forEach(input => input.setAttribute('required', 'true'));
    }
});

document.getElementById('registration-form').addEventListener('submit', function(event) {
    const adultFieldsVisible = !document.getElementById('adult-fields').classList.contains('hidden');
    const childFieldsVisible = !document.getElementById('child-fields').classList.contains('hidden');

    // Если поля для взрослого видимы, проверяем их
    if (adultFieldsVisible) {
        const adultName = document.getElementById('adult-name').value;
        const adultAge = document.getElementById('adult-age').value;
        const adultPhone = document.getElementById('adult-phone').value;

        if (!adultName || !adultAge || !adultPhone) {
            event.preventDefault(); // Остановим отправку формы
            alert("Заповніть всі поля для дорослого.");
        }
    }

    // Если поля для ребенка видимы, проверяем их
    if (childFieldsVisible) {
        const parentName = document.getElementById('parent-name').value;
        const childName = document.getElementById('child-name').value;
        const childAge = document.getElementById('child-age').value;
        const parentPhone = document.getElementById('parent-phone').value;

        if (!parentName || !childName || !childAge || !parentPhone) {
            event.preventDefault(); // Остановим отправку формы
            alert("Заповніть всі поля для дитини.");
        }
    }

    console.log('Форма надсилається '); // Отладочный вывод
});
</script>
 
	<!-- Footer section starts from here -->
	<footer>
	 
		<div class="footer-col">
        <h2>Про нас</h2>
            <p>Групові та індивідуальні тренування для дорослих та дітей з 4-ох років</p>
            <ul class="social">
                <li><a href="https://www.instagram.com" class="fab fa-instagram" target="_blank">Instagram (20+)</a></li>
                <li><a href="https://www.facebook.com" class="fab fa-facebook" target="_blank">Facebook (20+)</a></li>
             </ul>
		</div>

		<div class="footer-col">
        <h2>Адреси</h2>
            <ul class="f-link">
                <li>м.Вінниця, Хмельницьке шосе 105б (Kudo club "Katana")</li>
                <li>м.Вінниця, Келецька 97</li>
            </ul>
		</div>

		<div class="footer-col">
        <h2>Години роботи</h2>
            <p>Понеділок – П'ятниця: 9:00 – 19:00</p>
            <p>Субота: 10:00 – 16:00</p>
            <p>Неділя: вихідний</p>
		</div>

		<div class="footer-col">
        <h2>Зворотній зв'язок</h2>
            <p>063-178-61-97 - Тренер (Євгеній Свідерський)</p>
            <p>097-404-95-33 - Тренер (Анатолій Свідерський)</p>
		 
		</div>

		<div class="copyright">
			<p>
				Copyright @ 2024 All rights reserved  </a>
			</p>
			<div class="pro-links">
				<i class="fab fa-facebook"></i>
				<i class="fab fa-instagram"></i>
				<i class="fab fa-linkedin-in"></i>
			</div>
		</div>
	</footer>
	<!-- Footer section ends from here -->
	<script>
		// Show menu links on burger click
		$('#menu-btn').click(function(){
			$('nav .navigation ul').addClass('active')
		});

		// Hide navbar on click function
		$('#menu-close').click(function(){
			$('nav .navigation ul').removeClass('active')
		});
	</script>
</body>
</html>