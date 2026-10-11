    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cinematix</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>

        .afacad {
        font-family: "Afacad", sans-serif;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
        }

        .poster {
        width: 100%;
        aspect-ratio: 2000 / 3000;
        object-fit: cover;
        display: block;
        }

        .poster-lg {
        height: 300px;
        }

        .media-card {
        position: relative;
        overflow: hidden;
        border: 0;
        border-radius: 1rem;
        box-shadow: 0 1.25rem 2rem rgba(0, 0, 0, 0.18);
        transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .media-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 1.75rem 2.5rem rgba(0, 0, 0, 0.22);
        }

        .media-card .card-img {
        height: 100%;
        min-height: 320px;
        object-fit: cover;
        filter: saturate(1.12) contrast(1.06);
        }

        .media-card .card-img-overlay {
        background: linear-gradient(180deg, rgba(0, 0, 0, 0.12), rgba(0, 0, 0, 0.8));
        }

        .search-feedback {
            font-size: .75rem;
            margin-top: .25rem;
            min-height: 1rem;
        }

        #searchInput.is-invalid { border-color: #dc3545; }
        #searchInput.is-valid   { border-color: #198754; }

    </style>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Afacad:ital,wght@0,400..700;1,400..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">