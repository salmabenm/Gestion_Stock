<!DOCTYPE html>
<html>
<head>
    <!-- Add the necessary CSS and meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EDIT CLIENT</title>
    <style>
        body {
            padding-top: 20px;
            padding-bottom: 130px;
            background-image: url("{{ asset('image/client.jpg') }}");
            background-size: cover; 
            background-position: center center; 
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
            color: #ff7f50; /* Blue color */
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
        input[type="email"] {
            width: 97%;
            padding: 12px;
            margin-bottom: 20px;
            border: 2px solid #ff7f50; /* Blue color */
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
            <h1>EDIT CLIENT</h1>
            <form action="{{ route('clients.update', $client->id) }}" method="POST">
                @csrf
                @method('PUT')
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="{{ $client->name }}" required>
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" value="{{ $client->address }}" required>
                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone" value="{{ $client->phone }}" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ $client->email }}" required>
                <button type="submit">Save Changes</button>
            </form>
            <a href="{{ url()->previous() }}" class="btn-go-back">Go Back</a>
        </div>
    </div>
</body>
</html>
