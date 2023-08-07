<!DOCTYPE html>
<html>
<head>
    <!-- Add the necessary CSS and meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EDIT INVENTORY</title>
    <link rel="icon" href="{{ asset('image/logo.png') }}">
    <style>
        body {
        background-image: url("{{ asset('image/inventory.jpg') }}");
        background-size: cover; 
        background-position: center center; 
        padding-top: 150px;
        padding-bottom: 250px;
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
            color: #ff7f50; /* Dodger Blue color */
            margin-bottom: 30px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #555;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            width: 97%;
            padding: 12px;
            margin-bottom: 20px;
            border: 2px solid #ff7f50; /* Dodger Blue color */
            border-radius: 5px;
            background-color: #f8f8f8; /* Light gray background */
            color: #555;
        }

        textarea {
            resize: none;
            height: 120px;
        }

        button[type="submit"] {
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
            <h1>EDIT INVENTORY</h1>
            <form action="{{ route('inventory.update', $inventory->id) }}" method="POST">
                @csrf
                @method('PUT')
                <label for="name">Inventory Name:</label>
                <input type="text" id="name" name="name" value="{{ $inventory->name }}" required>
                <label for="price">Price:</label>
                <input type="number" id="price" name="price" value="{{ $inventory->price }}" required>
                <label for="description">Description:</label>
                <textarea id="description" name="description" required>{{ $inventory->description }}</textarea>
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" value="{{ $inventory->quantity }}" required>
                <label for="categories">Category:</label>
                <input type="text" id="categories" name="categories" value="{{ $inventory->categories }}" required>
                <label for="status">Status:</label>
                <input type="text" id="status" name="status" value="{{ $inventory->status }}" required>
                <button type="submit">Save Changes</button>
            </form>
            <a href="{{ url()->previous() }}" class="btn-go-back">Go Back</a>
        </div>
    </div>
</body>
</html>
