<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

<!-- Main Container -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h4>User Profile</h4>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-sm-4"><strong>User ID:</strong></div>
                        <div class="col-sm-8">{{ $userlogin->id }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-4"><strong>Name:</strong></div>
                        <div class="col-sm-8">{{ $userlogin->name }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-4"><strong>Email:</strong></div>
                        <div class="col-sm-8">{{ $userlogin->email }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-4"><strong>Gender:</strong></div>
                        <div class="col-sm-8">{{ $userlogin->gender }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-4"><strong>Age:</strong></div>
                        <div class="col-sm-8">{{ $userlogin->age }}</div>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <a href="{{ route('dashboard') }}" class="button btn border-info btn-primary"> dashboard</a>
                    <a href="{{ route('showorder') }}" class="button btn border-info btn-primary"> Show Order</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
