<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Laravel App</title>
    <!-- Add any additional styles or scripts here -->
</head>

<body>
    <div class="container">
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/add-product') }}">Add Product</a></li>
                <li><a href="{{ url('/update-quantity') }}">Update Quantity</a></li>
                <li><a href="{{ url('/change-price') }}">Change Price</a></li>
                <li><a href="{{ url('/dashboard') }}">Sales Dashboard</a></li>
                <li><a href="{{ url('/sales-history') }}">Sales History</a></li>
            </ul>
        </nav>

        <div class="content">
            @yield('content')
        </div>
    </div>
</body>

</html>