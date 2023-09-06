<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    @include('navbar')
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="alert alert-success text-center">
                    <strong>Welcome {{ Auth::user()->name }}</strong>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>

    </div>

</body>

</html>
