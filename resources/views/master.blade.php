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
    
    /* ===== THEME COLORS ===== */
:root {
    --main-green: #7aa389;
    --soft-green: #dceee5;
    --dark-green: #5e836f;
    --accent-yellow: #c8f1d5;
}

/* ===== HERO ===== */
.hero {
    height: 90vh;
    background: linear-gradient(rgba(61, 139, 95, 0.171), rgba(61, 139, 95, 0.568)),
                url('https://images.joseartgallery.com/115429/conversions/landscape-painting-hochland-traume-sommer-natur-thumb1920.jpg') center/cover no-repeat;
}

/* ===== BRAND TEXT ===== */
.brand-name {
    color: var(--accent-yellow);
    font-weight: 600;
}

/* ===== BUTTON ===== */
.btn-main {
    background: var(--main-green);
    border: none;
    color: white;
    font-weight: 600;
    border-radius: 30px;
    transition: all 0.3s ease;
}

.btn-main:hover {
    background: var(--dark-green);
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}

/* ===== INTRO ===== */
.intro-section {
    background-color: var(--soft-green);
}

/* ===== FEATURE SECTION ===== */
.feature-section {
    background-color: #f9fdf9;
}

/* ===== CARDS ===== */
.feature-card {
    border: none;
    border-radius: 20px;
    background: white;
    transition: all 0.3s ease;
}

.feature-card .icon {
    font-size: 40px;
}

.feature-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 25px rgba(0,0,0,0.08);
    border-bottom: 4px solid var(--accent-yellow);
}

/* ===== NAVBAR BASE ===== */
.custom-navbar {
    background: var(--main-green);
    backdrop-filter: blur(10px);
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

/* ===== BRAND ===== */
.brand-text {
    color: var(--accent-yellow) !important;
    font-size: 1.4rem;
    letter-spacing: 1px;
}

/* ===== NAV LINKS ===== */
.custom-link {
    color: white !important;
    font-weight: 500;
    position: relative;
    transition: all 0.3s ease;
}

/* underline animation */
.custom-link::after {
    content: "";
    position: absolute;
    width: 0%;
    height: 2px;
    left: 0;
    bottom: -3px;
    background-color: #fff3b0;
    transition: 0.3s;
}

.custom-link:hover::after {
    width: 100%;
}

/* active link */
.custom-link.active {
    color: #fff3b0 !important;
}

/* ===== USERS BUTTON ===== */
.btn-add {
    background: transparent;
    border: 1px solid #fff3b0;
    color: #fff3b0;
    border-radius: 20px;
    transition: 0.3s;
}

.btn-add:hover {
    background: #fff3b0;
    color: #3d8b5f;
}

/* ===== MOBILE FIX ===== */
.navbar-toggler {
    border: none;
}

/* ===== FOOTER ===== */
.custom-footer {
    background: var(--main-green);
    color: white;
    border-top-left-radius: 30px;
    border-top-right-radius: 30px;
}

/* BRAND */
.brand-footer {
    color: var(--accent-yellow);
}

/* TEXT */
.footer-text {
    color: rgba(255, 255, 255, 0.85);
}

/* LINKS */
.footer-link {
    color: white;
    text-decoration: none;
    position: relative;
    transition: 0.3s;
}

/* underline animation */
.footer-link::after {
    content: "";
    position: absolute;
    width: 0%;
    height: 2px;
    left: 0;
    bottom: -3px;
    background-color: #fff3b0;
    transition: 0.3s;
}

.footer-link:hover {
    color: #fff3b0;
}

.footer-link:hover::after {
    width: 100%;
}

/* DIVIDER */
.footer-divider {
    border-color: rgba(255, 255, 255, 0.2);
}

/* ===== ALERT ===== */
.custom-alert {
    background: #e8f5e9;
    color: #3d8b5f;
    padding: 12px 16px;
    border-radius: 10px;
    transition: 0.5s;
}

/* ===== SEARCH BOX ===== */
.search-box {
    display: flex;
    background: #f1f8f4;
    border-radius: 25px;
    padding: 5px;
}

.search-box input {
    border: none;
    outline: none;
    padding: 8px 12px;
    background: transparent;
}

.search-box button {
    border: none;
    background: #6dbf8b;
    color: white;
    border-radius: 20px;
    padding: 6px 12px;
}

/* ===== TABLE WRAPPER ===== */
.custom-table-wrapper {
    background: white;
    border-radius: 20px;
    padding: 15px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.05);
}

/* ===== TABLE ===== */
.custom-table {
    border-collapse: separate;
    border-spacing: 0 10px;
}

.custom-table thead th {
    border: none;
    color: #3d8b5f;
}

/* ===== ROW ===== */
.table-row {
    background: #f9fdf9;
    border-radius: 12px;
    transition: 0.2s;
}

.table-row td {
    border: none;
    padding: 14px;
}

.table-row:hover {
    background: #eefaf0;
    transform: scale(1.01);
}

/* ===== ID LINK ===== */
.id-link {
    color: #6dbf8b;
    font-weight: 600;
    text-decoration: none;
}

/* ===== PRICE ===== */
.price-text {
    color: #3d8b5f;
    font-weight: 600;
}

/* ===== BUTTONS ===== */
.btn-edit {
    background: #fff3b0;
    color: #3d8b5f;
    border-radius: 15px;
}

.btn-delete {
    background: #ff6b6b;
    color: white;
    border-radius: 15px;
}

/* ===== PAGINATION CONTAINER ===== */
.pagination {
    gap: 6px;
}

/* ===== PAGE LINKS (PILLS) ===== */
.pagination .page-link {
    border: none;
    border-radius: 50px; /* makes it pill */
    padding: 8px 14px;
    color: #3d8b5f;
    background-color: #f1f8f4;
    font-weight: 500;
    transition: all 0.25s ease;
}

/* ===== HOVER ===== */
.pagination .page-link:hover {
    background-color: #d7f0df;
    color: #2e6f4e;
    transform: translateY(-2px);
}

/* ===== ACTIVE PAGE ===== */
.pagination .active .page-link {
    background: linear-gradient(135deg, #6dbf8b, #3d8b5f);
    color: white;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}

.pagination {
    gap: 6px;
}

.page-item {
    margin: 0 2px;
}

.page-link {
    border: none !important;
    border-radius: 50px !important;
    padding: 8px 14px;
    color: #3d8b5f;
    background: #f1f8f4;
    transition: 0.2s;
}

/* hover */
.page-link:hover {
    background: #dff3e8;
    color: #2e6e4c;
}

/* active */
.page-item.active .page-link {
    background: #6dbf8b;
    color: white;
    font-weight: 600;
}

/* prev/next fix */
.page-link[rel="prev"],
.page-link[rel="next"] {
    font-weight: 500;
}
/* ===== FORM CARD ===== */
.form-card {
    background: white;
    border-radius: 25px;
    width: 100%;
    max-width: 500px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.08);
}

/* ===== INPUT ===== */
.custom-input {
    border-radius: 12px;
    border: 1px solid #e0e0e0;
    transition: 0.2s;
}

/* focus effect */
.custom-input:focus {
    border-color: #6dbf8b;
    box-shadow: 0 0 0 2px rgba(109,191,139,0.2);
}

/* ===== LABEL ===== */
.form-floating label {
    color: #6c757d;
}

/* ===== CANCEL BUTTON ===== */
.btn-cancel {
    background: #f1f1f1;
    border-radius: 20px;
    color: #555;
}

.btn-cancel:hover {
    background: #e0e0e0;
}

/* ===== ALERT (reuse from before if you have it) ===== */
.custom-alert {
    background: #ffecec;
    color: #d9534f;
    padding: 10px 15px;
    border-radius: 10px;
}

/* ===== MAIN CARD ===== */
.destination-card {
    background: white;
    border-radius: 25px;
    overflow: hidden;
    box-shadow: 0 15px 40px rgba(0,0,0,0.08);
}

/* ===== HEADER IMAGE ===== */
.destination-header {
    height: 320px;
    background-size: cover;
    background-position: center;
}

/* overlay for readability */


/* ===== DESCRIPTION ===== */
.description-text {
    line-height: 1.6;
    color: #555;
}

/* ===== INFO CARDS ===== */
.info-card {
    background: #f9fdf9;
    border-radius: 20px;
    padding: 20px;
    transition: 0.3s;
}

.info-card .icon {
    font-size: 24px;
    margin-bottom: 8px;
}

.info-card h6 {
    color: #3d8b5f;
    margin-bottom: 5px;
}

.info-card p {
    font-weight: 500;
}

/* hover effect */
.info-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.05);
}

/* OPTIONAL: attraction-specific polish */

/* slightly different hover tint */
.table-row:hover {
    background: #f0fbf4;
}

/* attraction description */
.attraction-desc {
    color: #6c757d;
}

/* keep everything consistent */
.id-link {
    color: #6dbf8b;
    font-weight: 600;
}

/* ===== DETAIL CARD ===== */
.detail-card {
    background: white;
    border-radius: 25px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.08);
}

/* ===== DESTINATION BADGE ===== */
.destination-badge {
    background: #e8f5e9;
    color: #3d8b5f;
    padding: 6px 14px;
    border-radius: 20px;
    font-weight: 500;
}

/* ===== DESCRIPTION BOX ===== */
.description-box {
    background: #f9fdf9;
    padding: 20px;
    border-radius: 15px;
    line-height: 1.6;
    color: #555;
}

/* ===== OPTIONAL TEXT ===== */
.info-note {
    opacity: 0.7;
}

.user-detail-card {
    background: #ffffff;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
}

.avatar-circle-lg {
    width: 90px;
    height: 90px;
    border-radius: 50%;
    background: #6dbf8b;
    color: white;
    font-size: 32px;
    font-weight: bold;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 6px 18px rgba(0,0,0,0.15);
}

.user-detail-card {
    background: linear-gradient(180deg, #ffffff, #f7fbf9);
}

.rating-badge {
    background: #e9f7ef;
    color: #2e7d5b;
    padding: 5px 10px;
    border-radius: 50px;
    font-weight: 600;
    font-size: 0.9rem;
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