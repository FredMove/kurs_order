<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Контактная информация">
    <title>Контакты</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
    <header class="bg-success text-white text-center py-3">
        <h1>Контакты</h1>
    </header>

    <nav class="bg-dark">
        <div class="container">
            <ul class="nav justify-content-center">
                <li class="nav-item"><a class="nav-link text-white" href="../index.php">Главная страница</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="urozhai.php">Урожай</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="obrabotka_pochvy.php">Обработка почвы</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="selkhoz_tehnika.php">Сельскохозяйственная техника</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="selkhoz_kultury.php">Сельскохозяйственные культуры</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="galereya.php">Галерея</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="magazin_produkcii.php">Магазин продукции</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="kontakty.php">Контакты</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="blog.php">Блог</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="faq.php">FAQ</a></li>
            </ul>
        </div>
    </nav>

    <main class="container my-4">
        <!-- Описание услуг -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">О наших услугах</h2>
                        <p class="card-text">
                            Мы предлагаем широкий спектр услуг в сфере сельского хозяйства:
                        </p>
                        <ul>
                            <li>Консультации по выращиванию сельскохозяйственных культур</li>
                            <li>Расчет необходимого количества удобрений</li>
                            <li>Помощь в выборе сельскохозяйственной техники</li>
                            <li>Продажа сельскохозяйственной продукции</li>
                            <li>Информационная поддержка начинающих фермеров</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Контактная информация -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Контактная информация</h2>
                        <p><strong>Администратор:</strong> Агафонов Александр</p>
                        <p><strong>Email:</strong> rrrrr@yandex.ru</p>
                        <p><strong>Телефон:</strong> +7 (777) 777-7777</p>
                        <p><strong>Адрес:</strong> г. Саратов, ул. имени Сакко и Ванцетти, 15</p>
                        <p><strong>Время работы:</strong> Пн-Пт, 9:00 - 18:00</p>
                    </div>
                </div>
            </div>

            <!-- Форма обратной связи -->
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Обратная связь</h2>
                        <form id="contactForm">
                            <div class="mb-3">
                                <label for="name" class="form-label">Ваше имя</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Сообщение</label>
                                <textarea class="form-control" id="message" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-success">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- Карта -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Как нас найти</h2>
                        <div class="map-container">
                            <iframe 
                                src="https://www.google.com/maps?q=51.52819824,46.0327034&z=17&output=embed"
                                width="100%" 
                                height="450" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer bg-dark text-white text-center py-3">
        <div class="contact-information">
            <h3>Контактная информация</h3>
            <p>Имя: Агафонов Александр</p>
            <p>Группа: ИСП-21</p>
            <p>© 2025 Профессионально педагогический колледж имени Ю.А.Гагарина</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Реакция на форму обратной связи -->
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Сообщение отправлено! Мы свяжемся с вами в ближайшее время.');
            this.reset();
        });
    </script>
</body>
</html>
