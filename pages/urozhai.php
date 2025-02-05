<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Этапы работы с урожаем">
    <title>Урожай - этапы работы</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
    <header class="bg-success text-white text-center py-3">
        <h1>Этапы работы с урожаем</h1>
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
    <!-- Блок посадки -->
    <div class="container my-5">
        <div class="crop-section mb-4">
            <h2>Посадка</h2>
            <div class="content-placeholder">
                <div class="info-block mb-4">
                    <h3>Основы посадки урожая</h3>
                    <p>Правильная посадка - это фундамент хорошего урожая. При посадке важно учитывать следующие факторы:</p>
                    <ul>
                        <li>Время года и климатические условия</li>
                        <li>Качество почвы и её подготовка</li>
                        <li>Правильный расчёт количества семян</li>
                        <li>Глубина посадки</li>
                        <li>Расстояние между растениями</li>
                    </ul>
                </div>

                <div class="calculator-block">
                    <h3>Калькулятор расчёта семян</h3>
                    <?php
                    require_once('../includes/calculate_seeds.php');
                    
                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['calculator_type']) && $_POST['calculator_type'] === 'seeds') {
                        $result = calculateSeeds($_POST);
                        echo "<div class='alert alert-success'>";
                        echo "<h4>Результаты для культуры: {$result['crop']}</h4>";
                        echo "<p>Необходимая норма высева: {$result['seeds_per_m2']} семян/м²</p>";
                        echo "<p>Общее количество семян: {$result['total_seeds']} шт.</p>";
                        echo "<p>Общая масса семян: {$result['total_weight']} кг</p>";
                        echo "</div>";
                    }
                    ?>
                    <form method="POST" action="#seeds-calculator" class="seed-calculator-form">
                        <input type="hidden" name="calculator_type" value="seeds">
                        <div class="mb-3">
                            <label for="crop" class="form-label">Культура:</label>
                            <input type="text" class="form-control" id="crop" name="crop" required>
                        </div>
                        <div class="mb-3">
                            <label for="density" class="form-label">Густота стояния (растений/м²):</label>
                            <input type="text" class="form-control" id="density" name="density" pattern="[0-9]*\.?[0-9]+" required>
                        </div>
                        <div class="mb-3">
                            <label for="area" class="form-label">Площадь участка (га):</label>
                            <input type="text" class="form-control" id="area" name="area" pattern="[0-9]*\.?[0-9]+" required>
                        </div>
                        <div class="mb-3">
                            <label for="thousand_weight" class="form-label">Масса 1000 семян (г):</label>
                            <input type="text" class="form-control" id="thousand_weight" name="thousand_weight" pattern="[0-9]*\.?[0-9]+" required>
                        </div>
                        <div class="mb-3">
                            <label for="germination" class="form-label">Всхожесть (%):</label>
                            <input type="text" class="form-control" id="germination" name="germination" pattern="[0-9]{1,3}" required>
                        </div>
                        <button type="submit" class="btn btn-success">Рассчитать</button>
                    </form>
                </div>
            </div>
        </div>
    <!-- Блок ухода -->        
        <div class="crop-section mb-4">
            <h2>Уход</h2>
            <div class="content-placeholder">
                <div class="info-block">
                    <h3>Основные принципы ухода за посадками</h3>
                    <p class="mb-4">Правильный уход за растениями - это настоящее искусство, требующее внимания и регулярности. Успех будущего урожая во многом зависит от того, насколько грамотно вы подойдете к этому процессу.</p>
                    
                    <h4>Полив</h4>
                    <p class="mb-4">Поливать растения лучше всего рано утром или ближе к вечеру, когда солнце не такое активное. Старайтесь лить воду под корень, чтобы избежать попадания капель на листья - это защитит их от солнечных ожогов. В жаркую погоду полив нужен чаще, а в прохладную - реже. Многие опытные садоводы предпочитают капельное орошение - это современный и эффективный способ подачи воды прямо к корням растений.</p>

                    <h4>Прополка и рыхление</h4>
                    <p class="mb-4">Сорняки - главные конкуренты культурных растений. Они отбирают воду, питательные вещества и солнечный свет. Регулярная прополка и рыхление почвы помогут вашим растениям получить всё необходимое для роста. После каждого полива или дождя желательно проводить рыхление - это насыщает почву кислородом и помогает корням дышать.</p>

                    <h4>Защита от вредителей</h4>
                    <p class="mb-4">Внимательно осматривайте свои растения хотя бы раз в неделю. Часто первые признаки появления вредителей можно заметить по небольшим повреждениям на листьях. Старайтесь использовать безопасные методы защиты - например, настои трав или биологические препараты. Они эффективны и не вредят окружающей среде.</p>

                    <h4>Формирование растений</h4>
                    <p>Некоторые культуры требуют особого внимания к формированию куста. Например, томаты нуждаются в пасынковании - удалении лишних побегов. Это помогает растению направить все силы на формирование плодов, а не на рост зеленой массы. Также важно вовремя подвязывать растения, чтобы стебли не ломались под тяжестью плодов.</p>
                </div>
            </div>
        </div>
    <!-- Блок удобрений -->
        <div class="crop-section mb-4">
            <h2>Удобрения</h2>
            <div class="content-placeholder">
                <div class="calculator-block">
                    <h3>Калькулятор расчёта удобрений</h3>
                    <?php
                    require_once('../includes/db_functions.php');
                    $soil_types = getSoilTypes();
                    $crops = getCrops();
                    $fertilizers = getFertilizers();

                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['calculator_type']) && $_POST['calculator_type'] === 'fertilizers') {
                        require_once('../includes/calculate_fertilizers.php');
                        $result = calculateFertilizers($_POST, $crops, $fertilizers);
                        echo "<div class='alert alert-success'>";
                        echo "<h4>Результаты расчета:</h4>";
                        echo "<p>На гектар:</p>";
                        echo "<ul>";
                        echo "<li>Азот (N): {$result['per_hectare']['N']} кг/га</li>";
                        echo "<li>Фосфор (P): {$result['per_hectare']['P']} кг/га</li>";
                        echo "<li>Калий (K): {$result['per_hectare']['K']} кг/га</li>";
                        echo "<li>Сера (S): {$result['per_hectare']['S']} кг/га</li>";
                        echo "</ul>";
                        echo "<p>Всего на поле:</p>";
                        echo "<ul>";
                        echo "<li>Азот (N): {$result['total']['N']} кг</li>";
                        echo "<li>Фосфор (P): {$result['total']['P']} кг</li>";
                        echo "<li>Калий (K): {$result['total']['K']} кг</li>";
                        echo "<li>Сера (S): {$result['total']['S']} кг</li>";
                        echo "</ul>";
                        echo "</div>";
                    }
                    ?>
                    <form method="POST" action="#fertilizers-calculator" class="fertilizer-calculator-form">
                        <input type="hidden" name="calculator_type" value="fertilizers">
                        <!-- Параметры поля -->
                        <div class="form-section mb-4">
                            <h4>Параметры поля</h4>
                            <div class="mb-3">
                                <label for="area" class="form-label">Площадь посева (га):</label>
                                <input type="text" class="form-control" id="area" name="area" pattern="[0-9]*\.?[0-9]+" required>
                            </div>
                        </div>

                        <!-- Почва -->
                        <div class="form-section mb-4">
                            <h4>Почва</h4>
                            <div class="mb-3">
                                <label for="soil_type" class="form-label">Тип почвы:</label>
                                <select class="form-select" id="soil_type" name="soil_type" required>
                                    <option value="">Выберите тип почвы</option>
                                    <?php foreach($soil_types as $key => $soil): ?>
                                        <option value="<?php echo $key; ?>"><?php echo $soil['name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="humus" class="form-label">Содержание гумуса (%):</label>
                                <input type="text" class="form-control" id="humus" name="humus" pattern="[0-9]*\.?[0-9]+" required>
                            </div>
                            <div class="mb-3">
                                <label for="ph" class="form-label">Кислотность почвы (pH):</label>
                                <input type="text" class="form-control" id="ph" name="ph" pattern="[0-9]*\.?[0-9]+" required>
                            </div>
                            <div class="mb-3">
                                <label for="p2o5" class="form-label">Содержание P2O5 (мг/кг):</label>
                                <input type="text" class="form-control" id="p2o5" name="p2o5" pattern="[0-9]*\.?[0-9]+" required>
                            </div>
                            <div class="mb-3">
                                <label for="k2o" class="form-label">Содержание K2O (мг/кг):</label>
                                <input type="text" class="form-control" id="k2o" name="k2o" pattern="[0-9]*\.?[0-9]+" required>
                            </div>
                        </div>

                        <!-- Культура -->
                        <div class="form-section mb-4">
                            <h4>Культура</h4>
                            <div class="mb-3">
                                <label for="current_crop" class="form-label">Засеиваемая культура:</label>
                                <select class="form-select" id="current_crop" name="current_crop" required>
                                    <option value="">Выберите культуру</option>
                                    <?php foreach($crops as $key => $crop): ?>
                                        <option value="<?php echo $key; ?>"><?php echo $crop['name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="previous_crop" class="form-label">Предыдущая культура:</label>
                                <select class="form-select" id="previous_crop" name="previous_crop" required>
                                    <option value="">Выберите культуру</option>
                                    <?php foreach($crops as $key => $crop): ?>
                                        <option value="<?php echo $key; ?>"><?php echo $crop['name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="planned_yield" class="form-label">Планируемый урожай (т/га):</label>
                                <input type="text" class="form-control" id="planned_yield" name="planned_yield" pattern="[0-9]*\.?[0-9]+" required>
                            </div>
                        </div>

                        <!-- Удобрения -->
                        <div class="form-section mb-4">
                            <h4>Органические удобрения (необязательно)</h4>
                            <div class="mb-3">
                                <label for="fertilizer_type" class="form-label">Вид органического удобрения:</label>
                                <select class="form-select" id="fertilizer_type" name="fertilizer_type">
                                    <option value="">Выберите удобрение</option>
                                    <?php foreach($fertilizers as $key => $fertilizer): ?>
                                        <option value="<?php echo $key; ?>"><?php echo $fertilizer['name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="fertilizer_amount" class="form-label">Доза органического удобрения (т/га):</label>
                                <input type="text" class="form-control" id="fertilizer_amount" name="fertilizer_amount" pattern="[0-9]*\.?[0-9]+">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success">Рассчитать</button>
                    </form>
                </div>
            </div>
        </div>
     <!-- Блок сбора -->       
        <div class="crop-section mb-4">
            <h2>Сбор</h2>
            <div class="content-placeholder">
                <div class="info-block">
                    <h3>Основные правила сбора урожая</h3>
                    <p class="mb-4">Сбор урожая - ответственный этап, от которого зависит не только количество собранной продукции, но и её качество, а также срок хранения. Важно правильно определить время сбора и соблюдать основные правила уборки.</p>

                    <h4>Определение времени сбора</h4>
                    <p class="mb-4">Оптимальное время сбора зависит от культуры и целей выращивания. Например, зерновые убирают при полной спелости, когда влажность зерна достигает 14-16%. Овощные культуры могут собираться как в технической, так и в биологической спелости.</p>

                    <h4>Погодные условия</h4>
                    <p class="mb-4">Лучшее время для сбора урожая - сухая погода. Утренняя роса должна полностью сойти. Влажные растения более подвержены механическим повреждениям, а собранная в сырую погоду продукция хуже хранится.</p>

                    <h4>Инструменты и техника</h4>
                    <p class="mb-4">Для сбора используйте только чистые и острые инструменты. Тупые ножи и секаторы травмируют растения, что может привести к заболеваниям. При работе с техникой важно правильно настроить все механизмы для минимизации потерь.</p>

                    <h4>Сортировка при сборе</h4>
                    <p>Предварительная сортировка урожая прямо в поле существенно облегчает последующую обработку. Отделяйте поврежденные плоды, они могут стать источником порчи при хранении. Каждый вид продукции требует своих условий транспортировки и хранения.</p>
                </div>
            </div>
        </div>
    <!-- Блок хранения -->        
        <div class="crop-section mb-4">
            <h2>Хранение</h2>
            <div class="content-placeholder">
                <div class="info-block">
                    <h3>Правильное хранение сельскохозяйственной продукции</h3>
                    <p class="mb-4">Грамотная организация хранения урожая позволяет сохранить его качество и питательные свойства на длительный срок. Каждый вид продукции требует особых условий.</p>

                    <h4>Подготовка к хранению</h4>
                    <p class="mb-4">Перед закладкой на хранение продукцию необходимо правильно подготовить: очистить от земли и растительных остатков, просушить до оптимальной влажности, отсортировать, удалив поврежденные экземпляры.</p>

                    <h4>Основные параметры хранения</h4>
                    <p class="mb-4">Для большинства культур критически важны три параметра: температура, влажность воздуха и вентиляция. Например, для картофеля оптимальная температура хранения 2-4°C при влажности 85-90%, для лука - температура около 0°C при влажности 60-70%.</p>

                    <h4>Способы хранения</h4>
                    <p class="mb-4">Существует несколько основных способов хранения сельскохозяйственной продукции: в специализированных хранилищах, буртах, погребах, холодильных камерах. Выбор способа зависит от вида продукции и планируемых сроков хранения.</p>

                    <h4>Мониторинг состояния</h4>
                    <p>Регулярно проверяйте состояние хранящейся продукции. При обнаружении признаков порчи немедленно удаляйте поврежденные экземпляры. Контролируйте температуру и влажность в хранилище, своевременно корректируя режим хранения.</p>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="contact-information">
            <h3>Контактная информация</h3>
            <p>Имя: Агафонов Александр</p>
            <p>Группа: ИСП-21</p>
            <p>Телефон: +7 (908) 543-2293</p>
            <p>Email: rrrrr@yandex.ru</p>
            <p>© 2023 Профессионально педагогический колледж имени Ю.А.Гагарина</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        const soilTypes = <?php echo json_encode($soil_types); ?>;
        document.getElementById('soil_type').addEventListener('change', function() {
            const selected = this.value;
            
            if (selected && soilTypes[selected]) {
                const soil = soilTypes[selected];
                document.getElementById('humus').value = soil.humus;
                document.getElementById('ph').value = soil.ph;
                document.getElementById('p2o5').value = soil.p2o5;
                document.getElementById('k2o').value = soil.k2o;
            }
        });
    </script>
</body>
</html>
