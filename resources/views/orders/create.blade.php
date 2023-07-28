@extends('layouts.app')

@section('content')
<style>
    body {
        
        background-image: url("{{ asset('image/order.jpg') }}");
        background-size: cover; 
        background-position: center center; 
    }

    .add-supplier-form {
        max-width: 800px;
        margin: 50px auto;
        padding: 30px;
        border-radius: 20px;
        background-color: #fff;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); /* Updated box-shadow */
    }

    .add-supplier-form h1 {
        text-align: center;
        color: #ff7f50; /* Coral color */
        margin-bottom: 30px;
    }

    .add-supplier-form label {
        display: block;
        margin-bottom: 10px;
        color: #555;
    }

    .add-supplier-form input[type="text"],
    .add-supplier-form input[type="tel"],
    .add-supplier-form input[type="email"],
    .add-supplier-form input[type="number"],
    .add-supplier-form input[type="date"] {
        width: 96%;
        padding: 12px;
        margin-bottom: 20px;
        border: 2px solid #ff7f50; /* Coral color */
        border-radius: 5px;
        background-color: #f8f8f8; /* Light gray background */
        color: #555;
    }

    .add-supplier-form button[type="submit"] {
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

    .add-supplier-form button[type="submit"]:hover {
        transform: scale(1.05); /* Slightly scale up on hover */
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
    }

    .add-supplier-form .btn-go-back {
        display: block;
        width:  97%;
        padding: 12px;
        margin-top: 20px;
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

    .add-supplier-form .btn-go-back:hover {
        transform: scale(1.05); /* Slightly scale up on hover */
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
    }
</style>


<div class="add-supplier-form">
    <h1>ADD ORDER</h1>
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="order_number">Order Number:</label>
            <input type="text" name="order_number" id="order_number" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="customer_name">Customer Name:</label>
            <input type="text" name="customer_name" id="customer_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="product_name">Product Name:</label>
            <input type="text" name="product_name" id="product_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" id="quantity" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="total_price">Total Price:</label>
            <input type="number" name="total_price" id="total_price" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="order_date">Order Date:</label>
            <input type="date" name="order_date" id="order_date" class="form-control" required>
        </div>
        <button type="submit">Add Order</button>
    </form>
    <a href="{{ url()->previous() }}" class="btn-go-back">Go Back</a>
</div>
@endsection
