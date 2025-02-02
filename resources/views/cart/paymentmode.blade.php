<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/dashboardstyle.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https:\\cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <h1 class="text-center mt-5">Payment Mode choose</h1>
    <form>
        @csrf
        <div class="">
            <div class="card-box row row-cols-2 row-cols-md-1 g-4 b-info w-100 d-flex justify-content-center align-content-centers">
                <div class="card-pay w-50" >
                    <h4 class="text-center">D S Electronics</h4>
                    <div class="box-pay">
                        
                        <div class="box-pay1">
                            <a class="payment-option" href="{{ route('card') }}"><h1>Click for Card Payment</h1></a>
                        </div>
                        <div class="box-pay1">
                            <a class="payment-option" href="#"><h1>Click for Cash Payment</h1></a>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>

    </form>
</body>
</html>