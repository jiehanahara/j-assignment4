<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<style>
  .custom-table {
    border-collapse: separate;
    border-spacing: 0 10px;
}

/* Remove default borders */
.custom-table th,
.custom-table td {
    border: none;
}

/* Header */
.custom-table thead th {
    font-size: 0.8rem;
    text-transform: uppercase;
    color: #888;
    padding-bottom: 10px;
}

/* Row = card style */
.table-row {
    background: white;
    box-shadow: 0 4px 15px rgba(22, 44, 36, 0.082);
    border-radius: 12px;
    transition: 0.2s;
    padding-bottom: 10px;

}

/* Rounded rows */
.table-row td:first-child {
    border-top-left-radius: 12px;
    border-bottom-left-radius: 12px;
}

.table-row td:last-child {
    border-top-right-radius: 12px;
    border-bottom-right-radius: 12px;
}

/* Hover */
.table-row:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.08);
}

/* ID */
.id-link {
    text-decoration: none;
    font-weight: 600;
    color: #486454;
}

/* Add button */
.btn-add {
    background-color: #6f9f8d;
    color: white;
    border-radius: 50px;
    padding: 8px 18px;
    transition: 0.2s;
}

.btn-add:hover {
    background-color: #5a8776;
}

/* Delete button */
.btn-delete {
    background-color: #dc3545;
    color: white;
    border: none;
    border-radius: 20px;
    padding: 5px 12px;
    display: inline-block;
}

.btn-delete:hover {
    background-color: #bb2d3b;
}

.btn-edit {
    background-color: #e8f3ef;   /* light green background */
    color: #486454;
    border: 1px solid #6f9f8d;
    border-radius: 20px;
    padding: 5px 12px;
    display: inline-block;
}

.btn-edit:hover {
    background-color: #6f9f8d;
    color: white;
}

.custom-alert {
    background-color: #e8f3ef;
    color: #486454;
    border-left: 5px solid #6f9f8d;
    padding: 12px 18px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    animation: fadeIn 0.4s ease;
}

/* Smooth fade in */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

</style>
</head>
<body>
    @include('partial.navbar')

    @yield('content')

    @include('partial.footer')
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>