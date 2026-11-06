<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">
</head>
<body>
    <nav class="navbar bg-primary nav-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Inventory Management System</a>

    <ul class="navbar-nav flex-row gap-3">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="products.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add_product.php">Add Product</a>
      </li>
    </ul>
    
    <form class="d-flex gap-2" role="search">
    <input
        class="form-control"
        type="search"
        placeholder="Search"
        aria-label="Search"
    />

    <button class="btn btn-outline-light" type="submit">
        <i class="bi bi-search"></i>
    </button>
</form>
  </div>
</nav>
