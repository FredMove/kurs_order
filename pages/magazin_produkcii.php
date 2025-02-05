<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Магазин сельскохозяйственной продукции">
    <title>Магазин продукции</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
    <header class="bg-success text-white text-center py-3">
        <h1>Магазин продукции</h1>
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
        <!-- Категории товаров -->
        <div class="categories mb-5">
            <?php
            require_once('../includes/shop_functions.php');
            $categories = getCategories();
            ?>
            
            <div class="row">
                <?php foreach($categories as $category): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="../images/<?php echo $category['image']; ?>" class="card-img-top" alt="<?php echo $category['name']; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $category['name']; ?></h5>
                                <p class="card-text"><?php echo $category['description']; ?></p>
                                <button class="btn btn-success" onclick="loadProducts(<?php echo $category['id']; ?>)">
                                    Показать товары
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Список товаров -->
        <div id="products-container" class="row" style="display: none;"></div>

        <!-- Модальное окно для оформления заказа -->
        <div class="modal fade" id="orderModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Оформление заказа</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form id="orderForm">
                            <input type="hidden" id="productId" name="productId">
                            <div class="mb-3">
                                <label for="name" class="form-label">Ваше имя</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Телефон</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Адрес доставки</label>
                                <textarea class="form-control" id="address" name="address" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="quantity" class="form-label">Количество (тонн)</label>
                                <input type="number" class="form-control" id="quantity" name="quantity" min="1" required>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                        <button type="button" class="btn btn-success" onclick="submitOrder()">Оформить заказ</button>
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
    <script>
        function loadProducts(categoryId) {
            fetch(`../includes/get_products.php?category_id=${categoryId}`)
                .then(response => response.json())
                .then(products => {
                    const container = document.getElementById('products-container');
                    container.innerHTML = '';
                    container.style.display = 'flex';
                    
                    products.forEach(product => {
                        container.innerHTML += `
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <img src="../images/${product.image}" class="card-img-top" alt="${product.name}">
                                    <div class="card-body">
                                        <h5 class="card-title">${product.name}</h5>
                                        <p class="card-text">${product.description}</p>
                                        <p class="card-text">Цена: ${product.price} руб./${product.unit}</p>
                                        <button class="btn btn-success" onclick="openOrderModal(${product.id})">
                                            Купить
                                        </button>
                                    </div>
                                </div>
                            </div>
                        `;
                    });
                });
        }

        function openOrderModal(productId) {
            document.getElementById('productId').value = productId;
            new bootstrap.Modal(document.getElementById('orderModal')).show();
        }

        function submitOrder() {
            const formData = new FormData(document.getElementById('orderForm'));
            
            fetch('../includes/create_order.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Заказ успешно оформлен!');
                    bootstrap.Modal.getInstance(document.getElementById('orderModal')).hide();
                } else {
                    alert('Ошибка при оформлении заказа: ' + data.error);
                }
            });
        }
    </script>
</body>
</html>
