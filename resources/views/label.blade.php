<!doctype html>
<html lang="en">
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/assets/css/label.css') }} " rel="stylesheet">
</head>
<body>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <h5 class="modal-title bg-dark text-white">Выберите метку</h5>
            <div class="modal-body bg-dark d-grid gap-2">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger btn-sm">Danger</button>
                <button type="button" class="btn btn-success btn-sm">Success</button>
                <button type="button" class="btn btn-warning btn-sm">Warning</button>
                <button type="button" class="btn btn-info btn-sm">Info</button>
                <button type="button" class="btn btn-primary btn-sm">Добавить метку</button>
            </div>

        </div>
    </div>
</div>


</body>
<script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

<script src="https://getbootstrap.com/docs/5.0/examples/sidebars/sidebars.js"></script>
</html>
