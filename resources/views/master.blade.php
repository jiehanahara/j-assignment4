<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinations</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- GLOBAL STYLES -->
    <style>
    body {
        background-color: #f5f9f7;
    }

    /* NAVBAR */
    .custom-navbar {
        background: linear-gradient(90deg, #5e7a6b, #486454);
    }

    .brand-text {
        font-size: 1.4rem;
        letter-spacing: 1px;
    }

    .custom-link {
        position: relative;
    }

    .custom-link::after {
        content: "";
        position: absolute;
        width: 0%;
        height: 2px;
        bottom: 0;
        left: 0;
        background-color: #ffc107;
        transition: 0.3s;
    }

    .custom-link:hover::after {
        width: 100%;
    }

    .custom-link:hover {
        color: #ffc107 !important;
    }

    /* BUTTON THEME */
    .btn-add {
        background-color: #6f9f8d;
        color: white;
        border-radius: 50px;
    }

    .btn-add:hover {
        background-color: #5a8776;
    }

    .btn-edit {
        background-color: #e8f3ef;
        color: #486454;
        border: 1px solid #6f9f8d;
        border-radius: 20px;
    }

    .btn-edit:hover {
        background-color: #6f9f8d;
        color: white;
    }

    .btn-delete {
        background-color: #dc3545;
        color: white;
        border-radius: 20px;
    }

    .btn-delete:hover {
        background-color: #bb2d3b;
    }

    /* SEARCH */
    .search-box {
        display: flex;
        align-items: center;
        background: white;
        border-radius: 50px;
        padding: 5px 10px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    }

    .search-box input {
        border: none;
        outline: none;
        background: transparent;
        padding: 6px 10px;
    }

    .search-box button {
        border: none;
        background: #6f9f8d;
        color: white;
        border-radius: 50%;
        width: 32px;
        height: 32px;
    }

    /* TABLE */
    .custom-table {
        border-spacing: 0 10px;
        border-collapse: separate;
    }

    .table-row {
        background: white;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        border-radius: 12px;
        transition: 0.2s;
    }

    .table-row:hover {
        transform: translateY(-2px);
    }

    .id-link {
        text-decoration: none;
        color: #486454;
        font-weight: 600;
    }

    .custom-alert {
        background: #e8f3ef;
        border-left: 5px solid #6f9f8d;
        padding: 10px;
        border-radius: 10px;
    }

    /* FOOTER */
.custom-footer {
    background: linear-gradient(90deg, #486454, #2f3e36);
    color: white;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
}

/* Brand */
.brand-footer {
    color: #ffffff;
}

/* Links */
.footer-link {
    color: #cfe3db;
    text-decoration: none;
    transition: 0.2s;
}

.footer-link:hover {
    color: #ffc107;
}

/* Divider */
.footer-divider {
    border-color: rgba(255,255,255,0.2);
}

/* FORM CARD */
.form-card {
    width: 100%;
    max-width: 500px;
    border-radius: 20px;
    background: #ffffff;
}

/* INPUT STYLE */
.custom-input {
    border-radius: 10px;
    border: 1px solid #dcdcdc;
    transition: 0.2s;
}

.custom-input:focus {
    border-color: #486454;
    box-shadow: 0 0 0 0.2rem rgba(72, 100, 84, 0.2);
}

/* BUTTON STYLE */
.btn-submit {
    background: linear-gradient(90deg, #486454, #89ad9b);
    color: white;
    border: none;
    border-radius: 10px;
    padding: 10px;
    transition: 0.3s;
}

.btn-submit:hover {
    transform: scale(1.03);
    background: linear-gradient(90deg, #3b5245, #6f9485);
}

/* PAGINATION CONTAINER */
.pagination {
    gap: 6px;
}

/* BUTTON STYLE */
.page-link {
    border: none;
    border-radius: 10px;
    color: #486454;
    background-color: #f4f7f5;
    transition: 0.2s;
}

/* HOVER */
.page-link:hover {
    background-color: #89ad9b;
    color: white;
}

/* ACTIVE PAGE */
.page-item.active .page-link {
    background: linear-gradient(90deg, #486454, #89ad9b);
    color: white;
    font-weight: 600;
}

/* DISABLED */
.page-item.disabled .page-link {
    background-color: #eaeaea;
    color: #aaa;
}

.pagination-info {
    font-size: 0.85rem;
    color: #485f56;
}

.small.text-muted {
    display: none;
}

.pagination-info {
    font-size: 0.85rem;
    color: #445c4a;
    opacity: 0.8;
}


/* TABLE */
.user-table {
    border-collapse: separate;
    border-spacing: 0 10px;
}

.user-table th {
    font-size: 0.8rem;
    text-transform: uppercase;
    color: #888;
}

/* ROW */
.user-row {
    background: white;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    border-radius: 12px;
    transition: 0.2s;
}

.user-row:hover {
    transform: translateY(-2px);
}

/* ROUND EDGES */
.user-row td:first-child {
    border-top-left-radius: 12px;
    border-bottom-left-radius: 12px;
}

.user-row td:last-child {
    border-top-right-radius: 12px;
    border-bottom-right-radius: 12px;
}

/* BUTTONS */
.user-btn-view {
    background: #eef5f2;
    color: #486454;
    border-radius: 20px;
    padding: 4px 10px;
}

.user-btn-view:hover {
    background: #dcebe5;
}

.user-btn-edit {
    background: #6f9f8d;
    color: white;
    border-radius: 20px;
    padding: 4px 10px;
}

.user-btn-edit:hover {
    background: #5a8776;
}

.user-btn-delete {
    background: #dc3545;
    color: white;
    border-radius: 20px;
    padding: 4px 10px;
    border: none;
}

.user-btn-delete:hover {
    background: #bb2d3b;
}

/* ADD BUTTON */
.user-btn-create {
    background: linear-gradient(90deg, #486454, #89ad9b);
    color: white;
    border-radius: 50px;
    padding: 8px 18px;
}

.user-btn-create:hover {
    opacity: 0.9;
}

/* SEARCH */
.search-box {
    display: flex;
    background: #f5f9f7;
    border-radius: 50px;
    padding: 5px 10px;
}

.search-box input {
    border: none;
    background: transparent;
    outline: none;
}

.search-box button {
    border: none;
    background: #6f9f8d;
    color: white;
    border-radius: 50%;
    width: 32px;
}

/* ALERT */
.custom-alert {
    background-color: #e8f3ef;
    color: #486454;
    border-left: 5px solid #6f9f8d;
    padding: 12px 18px;
    border-radius: 12px;
}

.btn-cancel {
    background-color: #a9c5bd;
    color: #425749;
    border-radius: 20px;
    padding: 8px 18px;
    border: none;

}

.btn-cancel:hover {
    background-color: #628075;  
    color: white;
}

/* Card styling */
.user-detail-card {
    max-width: 450px;
    width: 100%;
}

/* Cancel button */
.btn-cancel {
    background-color: #e8f3ef;
    color: #486454;
    border-radius: 30px;
    padding: 6px 16px;
    border: 1px solid #6f9f8d;
    transition: 0.2s;
}

.btn-cancel:hover {
    background-color: #6f9f8d;
    color: white;
}

/* Edit button */
.btn-edit {
    background-color: #6f9f8d;
    color: white;
    border-radius: 30px;
    padding: 6px 16px;
    border: none;
}

.btn-edit:hover {
    background-color: #5a8776;
}

/* ===== ATTRACTION TABLE ===== */
.attraction-table thead th {
    font-size: 0.8rem;
    text-transform: uppercase;
    color: #888;
    border: none;
}

/* Remove default borders */
.attraction-table th,
.attraction-table td {
    border: none;
    vertical-align: middle;
}

/* Row style (card look) */
.attraction-row {
    background: white;
    box-shadow: 0 4px 15px rgba(22, 44, 36, 0.08);
    border-radius: 12px;
    transition: 0.2s;
}

/* Rounded edges */
.attraction-row td:first-child {
    border-top-left-radius: 12px;
    border-bottom-left-radius: 12px;
}
.attraction-row td:last-child {
    border-top-right-radius: 12px;
    border-bottom-right-radius: 12px;
}

/* Hover effect */
.attraction-row:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.08);
}

/* ===== BUTTONS ===== */

/* Add */
.attraction-btn-add {
    background-color: #6f9f8d;
    color: white;
    border-radius: 50px;
    padding: 8px 18px;
    transition: 0.2s;
}
.attraction-btn-add:hover {
    background-color: #5a8776;
}

/* Edit */
.attraction-btn-edit {
    background-color: #e8f3ef;
    color: #486454;
    border: 1px solid #6f9f8d;
    border-radius: 20px;
    padding: 5px 12px;
}
.attraction-btn-edit:hover {
    background-color: #6f9f8d;
    color: white;
}

/* Delete */
.attraction-btn-delete {
    background-color: #dc3545;
    color: white;
    border-radius: 20px;
    padding: 5px 12px;
    border: none;
}
.attraction-btn-delete:hover {
    background-color: #bb2d3b;
}

/* View */
.attraction-btn-view {
    background-color: #eef2ff;
    color: #4f46e5;
    border-radius: 20px;
    padding: 5px 12px;
}
.attraction-btn-view:hover {
    background-color: #4f46e5;
    color: white;
}

/* ===== TEXT ===== */
.attraction-name {
    font-weight: 600;
}

.attraction-desc {
    font-size: 0.85rem;
    color: #777;
}

/* SEARCH CONTAINER */
.search-box {
    display: flex;
    align-items: center;
    background: white; /* 👈 important */
    border: 1px solid #dcdcdc;
    border-radius: 50px;
    padding: 5px 10px;
    transition: 0.2s;
}

/* INPUT */
.search-box input {
    border: none;
    outline: none;
    background: transparent;
    padding: 6px 10px;
    width: 200px;
    font-size: 0.9rem;
}

/* BUTTON */
.search-box button {
    border: none;
    background: #6f9f8d;
    color: white;
    border-radius: 50%;
    width: 32px;
    height: 32px;
    cursor: pointer;
}

/* HOVER EFFECT */
.search-box:hover {
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
}

/* Card width */
.attraction-form-card {
    max-width: 450px;
    width: 100%;
}

/* Cancel button */
.attraction-btn-cancel {
    background-color: #e8f3ef;
    color: #486454;
    border: 1px solid #6f9f8d;
    border-radius: 30px;
    padding: 6px 16px;
    transition: 0.2s;
}

.attraction-btn-cancel:hover {
    background-color: #6f9f8d;
    color: white;
}

/* Submit button */
.attraction-btn-submit {
    background-color: #6f9f8d;
    color: white;
    border-radius: 30px;
    padding: 6px 16px;
    border: none;
}

.attraction-btn-submit:hover {
    background-color: #5a8776;
}

.attraction-form-card {
    margin: auto;
}

.attraction-form-card {
    max-width: 700px;
    width: 100%;
}

.attraction-btn-cancel {
    background-color: #e8f3ef;
    color: #486454;
    border: 1px solid #6f9f8d;
    border-radius: 30px;
    padding: 6px 16px;
}

.attraction-btn-cancel:hover {
    background-color: #6f9f8d;
    color: white;
}

.attraction-btn-submit {
    background-color: #6f9f8d;
    color: white;
    border-radius: 30px;
    padding: 6px 16px;
    border: none;
}

.attraction-btn-submit:hover {
    background-color: #5a8776;
}
    </style>

    @stack('styles')
</head>
<body class="d-flex flex-column min-vh-100">

   @include('partial.navbar')

<main class="flex-grow-1">
    @yield('content')
</main>

@include('partial.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>