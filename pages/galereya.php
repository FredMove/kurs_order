<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Галерея сельского хозяйства">
    <title>Галерея</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.10.3/simple-lightbox.min.css">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
    <header class="bg-success text-white text-center py-3">
        <h1>Галерея сельского хозяйства</h1>
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
    <!-- Непосредственно галерея -->
    <main class="container my-4">
        <div class="gallery">
            <div class="row g-4">
                <div class="col-md-4">
                    <a href="../images/farm1.jpg" class="gallery-item">
                        <img src="../images/farm1.jpg" class="img-fluid" alt="Фермерское хозяйство 1">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../images/farm2.jpg" class="gallery-item">
                        <img src="../images/farm2.jpg" class="img-fluid" alt="Фермерское хозяйство 2">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../images/farm3.jpg" class="gallery-item">
                        <img src="../images/farm3.jpg" class="img-fluid" alt="Фермерское хозяйство 3">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../images/farm4.jpg" class="gallery-item">
                        <img src="../images/farm4.jpg" class="img-fluid" alt="Фермерское хозяйство 4">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../images/farm5.jpg" class="gallery-item">
                        <img src="../images/farm5.jpg" class="img-fluid" alt="Фермерское хозяйство 5">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../images/farm6.jpg" class="gallery-item">
                        <img src="../images/farm6.jpg" class="img-fluid" alt="Фермерское хозяйство 6">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../images/farm7.jpg" class="gallery-item">
                        <img src="../images/farm7.jpg" class="img-fluid" alt="Фермерское хозяйство 7">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../images/farm8.jpg" class="gallery-item">
                        <img src="../images/farm8.jpg" class="img-fluid" alt="Фермерское хозяйство 8">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../images/farm9.jpg" class="gallery-item">
                        <img src="../images/farm9.jpg" class="img-fluid" alt="Фермерское хозяйство 9">
                    </a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.10.3/simple-lightbox.min.js"></script>
    <!-- LightBox для увеличения картинки -->
    <script>
        new SimpleLightbox('.gallery a', {});
    </script>
</body>
</html>