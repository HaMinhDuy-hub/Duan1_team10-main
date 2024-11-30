<?php
$file_path = __DIR__ . '/../../model/Product.php';
include_once $file_path;

// Lấy thông tin sản phẩm theo ID
$id = isset($_GET['id']) ? $_GET['id'] : null;
$product = Product::getOne($id);

// Lấy danh sách danh mục
$categories = Category::getAll();

// Xử lý thông báo từ session (nếu có)
$message = '';
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
}
?>

<div class="content-wrapper">
    <h2>Sửa sản phẩm</h2>
    <?php if (!empty($message)) : ?>
        <p class="alert alert-info"><?= $message ?></p>
    <?php endif; ?>
    <form action="index.php?act=update_product" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Tên sản phẩm:</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= htmlspecialchars($product['name']) ?>" required>
        </div>
        <div class="form-group">
            <label for="category_id">Danh mục:</label>
            <select class="form-control" id="category_id" name="category_id" required>
                <?php foreach ($categories as $category) : ?>
                    <option value="<?= $category['id'] ?>" <?= $category['id'] == $product['category_id'] ? 'selected' : '' ?>>
                        <?= htmlspecialchars($category['name']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="price">Giá:</label>
            <input type="number" class="form-control" id="price" name="price" value="<?= htmlspecialchars($product['price']) ?>" required>
        </div>
        <div class="form-group">
            <label for="description">Mô tả:</label>
            <textarea class="form-control" id="description" name="description" rows="4"><?= htmlspecialchars($product['description']) ?></textarea>
        </div>
        <div class="form-group">
            <label for="product_image">Hình ảnh sản phẩm:</label>
            <input type="file" class="form-control" id="product_image" name="product_image">
            <?php if (!empty($product['product_image'])) : ?>
                <img src="/Duan1_team10-main/upload/<?= htmlspecialchars($product['product_image']) ?>" alt="Product Image" width="100">
            <?php endif; ?>
        </div>
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <button type="submit" name="update" class="btn btn-primary">Cập nhật</button>
        <a href="index.php?act=list_products" class="btn btn-secondary">Danh sách sản phẩm</a>
    </form>
</div>
