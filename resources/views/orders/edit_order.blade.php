<!DOCTYPE html>
<html>
<head>
    <!-- Add the necessary CSS and meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EDIT ORDER</title>
    <link rel="icon" href="{{ asset('image/logo.png') }}">
    <style>
        body {
            background-image: url("{{ asset('image/order.jpg') }}");
            background-size: cover; 
            background-position: center center;
            padding-top: 100px;
            padding-bottom: 200px;
        }

        .dashboard {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
           
        }

        .form-box {
            width: 400px;
            padding: 30px;
            border-radius: 20px;
            background-color: #fff;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            margin-top: 120px;
            width: 700px;
        }
        .form-box h1 {
            text-align: center;
            color: #ff7f50; /* Coral color */
            margin-bottom: 30px;
        }
        .content h1 {
            margin-top: 0;
            color: #333;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        input[type="date"]  {
            width: 97%;
            padding: 12px;
            margin-bottom: 20px;
            border: 2px solid #ff7f50; /* Coral color */
            border-radius: 5px;
            background-color: #f8f8f8; /* Light gray background */
            color: #555;
        }

        button[type="submit"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            background-image: linear-gradient(to right, #f2711c, #ff7f50); /* Orange gradient */
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        button[type="submit"]:hover {
            transform: scale(1.05); /* Slightly scale up on hover */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

        .btn-go-back {
            display: block;
            width: 97%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            background-image: linear-gradient(to right, #007bff, #0056b3); /* Blue gradient */
            color: #fff;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .btn-go-back:hover {
            transform: scale(1.05); /* Slightly scale up on hover */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }
        
        /* Responsive styles */
        @media screen and (max-width: 480px) {
            .form-box {
                width: 100%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <!-- Content -->
        <div class="form-box">
            <h1>EDIT ORDER</h1>
            <form action="{{ route('orders.update', $order->id) }}" method="POST">
                @csrf
                @method('PUT')
                <label for="order_number">Order Number:</label>
                <input type="text" id="order_number" name="order_number" value="{{ $order->order_number }}" required>
                <label for="customer_name">Customer Name:</label>
                <input type="text" id="customer_name" name="customer_name" value="{{ $order->customer_name }}" required>
                <label for="product_name">Product Name:</label>
                <input type="text" id="product_name" name="product_name" value="{{ $order->product_name }}" required>
                <label for="quantity">Quantity:</label>
                <input type="text" id="quantity" name="quantity" value="{{ $order->quantity }}" required>
                <label for="total_price">Total Price:</label>
                <input type="text" id="total_price" name="total_price" value="{{ $order->total_price }}" required>
                <label for="order_date">Date:</label>
                <input type="date" id="order_date" name="order_date" value="{{ $order->order_date }}" required>
                <button type="submit">Save Changes</button>
            </form>
            <a href="{{ url()->previous() }}" class="btn-go-back">Go Back</a>
        </div>
    </div>
</body>
</html>
