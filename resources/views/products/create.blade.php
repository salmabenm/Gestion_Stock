@extends('layouts.app')

@section('content')
<style>
    body {
        background-image: url("{{ asset('image/products.jpg') }}");
        background-size: cover; 
        background-position: center center; 
        
    }


    .add-product-form {
        max-width: 800px;
        margin: 50px auto;
        padding: 30px;
        border-radius: 20px;
        background-color: #fff;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); /* Updated box-shadow */
        
    }

    .add-product-form h1 {
        text-align: center;
        color: #ff7f50; /* Dodger Blue color */
        margin-bottom: 30px;
    }

    .add-product-form label {
        display: block;
        margin-bottom: 10px;
        color: #555;
    }

    .add-product-form input[type="text"],
    .add-product-form input[type="number"],
    .add-product-form input[type="file"] {
        width: 96%;
        padding: 12px;
        margin-bottom: 20px;
        border: 2px solid #ff7f50; /* Dodger Blue color */
        border-radius: 5px;
        background-color: #f8f8f8; /* Light gray background */
        color: #555;
    }

    .add-product-form textarea {
        width: 96%;
        height: 120px;
        padding: 12px;
        margin-bottom: 20px;
        border: 2px solid #ff7f50; /* Dodger Blue color */
        border-radius: 5px;
        background-color: #f8f8f8; /* Light gray background */
        color: #555;
        resize: none;
    }

    .add-product-form button[type="submit"] {
        width: 100%;
        padding: 12px;
        margin-bottom: 20px;
        border: none;
        border-radius: 5px;
        background-image: linear-gradient(to right, #f2711c, #ff7f50); /* Blue gradient */
        color: #fff;
        font-weight: bold;
        cursor: pointer;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .add-product-form button[type="submit"]:hover {
        transform: scale(1.05); /* Slightly scale up on hover */
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
    }

    .add-product-form .btn-go-back {
        display: block;
        width: 97%;
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

    .add-product-form .btn-go-back:hover {
        transform: scale(1.05); /* Slightly scale up on hover */
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
    }
</style>


<div class="add-product-form">
    <h1>ADD PRODUCT</h1>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Product Name:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="price">Price (DH):</label>
            <input type="number" name="price" id="price" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" id="quantity" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="categories">Category:</label>
            <input type="text" name="categories" id="categories" class="form-control" required>
        </div>
        <button type="submit">Add Product</button>
    </form>
    <a href="{{ url()->previous() }}" class="btn-go-back">Go Back</a>
</div>
@endsection
