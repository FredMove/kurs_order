<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Методы обработки почвы">
    <title>Обработка почвы</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
    <header class="bg-success text-white text-center py-3">
        <h1>Методы обработки почвы</h1>
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
        <div class="row">
            <div class="col-12 mb-4">
                <div class="card">
                    <div class="text-center" style="width: 33%; margin: 0 auto;">
                        <img src="../images/cultivation.jpg" class="card-img-top" alt="Культивация">
                    </div>
                    <div class="card-body text-center">
                        <h2 class="card-title">Культивация</h2>
                        <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#cultivation">
                            Подробнее
                        </button>
                        <div class="collapse mt-3" id="cultivation">
                            <div class="card-text">
                                Культивация - это механическая обработка почвы с целью рыхления, уничтожения сорняков и выравнивания поверхности поля. Этот метод позволяет создать оптимальные условия для роста растений путем улучшения структуры почвы и удаления нежелательной растительности.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-4">
                <div class="card">
                    <div class="text-center" style="width: 33%; margin: 0 auto;">
                        <img src="../images/plowing.jpg" class="card-img-top" alt="Вспашка">
                    </div>
                    <div class="card-body text-center">
                        <h2 class="card-title">Вспашка</h2>
                        <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#plowing">
                            Подробнее
                        </button>
                        <div class="collapse mt-3" id="plowing">
                            <div class="card-text">
                                Вспашка является основным приемом обработки почвы, при котором происходит оборачивание пласта, рыхление и перемешивание почвы, заделка растительных остатков и удобрений.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-4">
                <div class="card">
                    <div class="text-center" style="width: 33%; margin: 0 auto;">
                        <img src="../images/harrowing.jpg" class="card-img-top" alt="Боронование">
                    </div>
                    <div class="card-body text-center">
                        <h2 class="card-title">Боронование</h2>
                        <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#harrowing">
                            Подробнее
                        </button>
                        <div class="collapse mt-3" id="harrowing">
                            <div class="card-text">
                                Боронование - поверхностная обработка почвы для измельчения комков, выравнивания поверхности поля, разрушения почвенной корки, уничтожения проростков сорняков.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-4">
                <div class="card">
                    <div class="text-center" style="width: 33%; margin: 0 auto;">
                        <img src="../images/mulching.jpg" class="card-img-top" alt="Мульчирование">
                    </div>
                    <div class="card-body text-center">
                        <h2 class="card-title">Мульчирование</h2>
                        <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#mulching">
                            Подробнее
                        </button>
                        <div class="collapse mt-3" id="mulching">
                            <div class="card-text">
                                Мульчирование - покрытие почвы различными материалами для сохранения влаги, защиты от сорняков, регулирования температуры почвы и обогащения её органическими веществами.
                            </div>
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
            <p>© 2023 Профессионально педагогический колледж имени Ю.А.Гагарина</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>