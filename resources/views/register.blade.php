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
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <strong>Registeration Form</strong>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('doRegister') }}" method="POST">
                            @csrf
                            <div class="mb-3 mt-3">
                                <label for="email">Email:</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter Name"
                                    name="name">
                                @error('name')
                                    <div class="text-danger"><b><i> {{ $message }}</i></b></div>
                                @enderror
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email"
                                    name="email">
                                @error('email')
                                    <div class="text-danger"><b><i> {{ $message }}</i></b></div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Enter password"
                                    name="password">
                                @error('password')
                                    <div class="text-danger"><b><i> {{ $message }}</i></b></div>
                                @enderror
                            </div>
                            <div class="mb-3 text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4"></div>
        </div>

    </div>

</body>

</html>
