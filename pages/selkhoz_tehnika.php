<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Сельскохозяйственная техника">
    <title>Сельскохозяйственная техника</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
    <header class="bg-success text-white text-center py-3">
        <h1>Сельскохозяйственная техника</h1>
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
        <div class="accordion" id="techAccordion">
            <!-- Тракторы -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                        Тракторы
                        <img src="../images/tractor.jpg" class="accordion-preview-image" alt="Тракторы">
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#techAccordion">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../images/tractor.jpg" class="img-fluid" alt="Тракторы">
                            </div>
                            <div class="col-md-8">
                                <p>Тракторы являются основной тяговой силой в сельском хозяйстве. Они используются для вспашки, культивации, посева, транспортировки грузов и привода различных сельскохозяйственных машин.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Культиваторы -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                        Культиваторы
                        <img src="../images/cultivator.jpg" class="accordion-preview-image" alt="Культиваторы">
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#techAccordion">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../images/cultivator.jpg" class="img-fluid" alt="Культиваторы">
                            </div>
                            <div class="col-md-8">
                                <p>Культиваторы предназначены для рыхления почвы, уничтожения сорняков и заделки удобрений.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Плуги -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                        Плуги
                        <img src="../images/plow.jpg" class="accordion-preview-image" alt="Плуги">
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#techAccordion">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../images/plow.jpg" class="img-fluid" alt="Плуги">
                            </div>
                            <div class="col-md-8">
                                <p>Плуги используются для основной обработки почвы. Они обеспечивают оборот пласта, крошение и рыхление почвы, заделку растительных остатков и удобрений.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Сеялки -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                        Сеялки
                        <img src="../images/seeder.jpg" class="accordion-preview-image" alt="Сеялки">
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#techAccordion">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../images/seeder.jpg" class="img-fluid" alt="Сеялки">
                            </div>
                            <div class="col-md-8">
                                <p>Сеялки предназначены для равномерного распределения семян в почве на заданную глубину. Они обеспечивают точную норму высева и равномерное распределение семян.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Опрыскиватели -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                        Опрыскиватели
                        <img src="../images/sprayer.jpg" class="accordion-preview-image" alt="Опрыскиватели">
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#techAccordion">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../images/sprayer.jpg" class="img-fluid" alt="Опрыскиватели">
                            </div>
                            <div class="col-md-8">
                                <p>Опрыскиватели применяются для защиты растений от вредителей, болезней и сорняков путем распыления химических или биологических препаратов.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Комбайны -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix">
                        Комбайны
                        <img src="../images/combine.jpg" class="accordion-preview-image" alt="Комбайны">
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#techAccordion">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../images/combine.jpg" class="img-fluid" alt="Комбайны">
                            </div>
                            <div class="col-md-8">
                                <p>Комбайны - это сложные уборочные машины, которые выполняют одновременно несколько операций: срезание растений, обмолот, очистку зерна и другие процессы уборки урожая.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Автомобили -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven">
                        Автомобили
                        <img src="../images/truck.jpg" class="accordion-preview-image" alt="Автомобили">
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#techAccordion">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../images/truck.jpg" class="img-fluid" alt="Автомобили">
                            </div>
                            <div class="col-md-8">
                                <p>Сельскохозяйственные автомобили используются для транспортировки урожая, удобрений, семян и других грузов. Они являются важным звеном в логистической цепочке сельскохозяйственного производства.</p>
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