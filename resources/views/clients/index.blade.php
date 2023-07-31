<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="icon" href="{{ asset('image/logo.png') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .dashboard {
            display: flex;
        }

        .sidebar {
            width: 250px;
            height: 800px;
            background-color: #df8543;
            color: #fff;
            padding: 1rem;
        }

        .sidebar h2 {
            margin-top: 0;
            padding-top: 1rem;
            text-align: center;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar li {
            margin-bottom: 1rem;
        }

        .sidebar a {
            text-decoration: none;
            color: #fff;
            display: block;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .sidebar a:hover {
            background-color: #ff9d4f;
        }

        .content {
            flex: 1;
            padding: 2rem;
        }

        .content h1 {
            margin-top: 0;
            color: #333;
            text-align: center;
        }

        .item {
            background-color: #fff;
            padding: 1rem;
            border-radius: 10px;
            margin-bottom: 2rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .item h2 {
            color: #df8543;
            margin-bottom: 1rem;
        }

        p {
            font-size: 1rem;
            line-height: 1.6;
            color: #777;
            margin-bottom: 0.5rem;
        }

        .item p {
            padding: 0.8rem;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
        }

        .item:hover {
            transform: translateY(-5px);
        }

        .item h2 a {
            color: #df8543;
            text-decoration: none;
        }

        .item h2 a:hover {
            text-decoration: underline;
        }

        /* Additional styles for the customer tables */
        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .table th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        .table tr:hover {
            background-color: #f5f5f5;
        }

        /* Style for the "Add Customer" button */
        .btn {
            display: inline-block;
            padding: 10px 15px;
            background-color: #df8543;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #ff9d4f;
        }

        /* Style for the success message */
        .success-message {
            display: inline-block;
            padding: 10px 15px;
            background-color: #6bb85b; /* Green color for success */
            color: #fff;
            border-radius: 5px;
            margin-top: 10px;
            width: 750px;
            text-align: center;
        }

        /* Style for the "Edit Customer" button */
        .btn-edit {
            display: block;
            padding: 10px 15px;
            background-color: #4CAF50; /* Green color for edit */
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 5px;
            width: 50px;
            text-align: center;
        }

        .btn-edit:hover {
            background-color: #45a049; /* Darker green on hover */
        }

        /* Style for the "Delete Customer" button */
        .btn-delete {
            display: block;
            padding: 10px 15px;
            background-color: #f44336; /* Red color for delete */
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 5px;
            height: 40px;
        }

        .btn-delete:hover {
            background-color: #c82333; /* Darker red on hover */
        }
    </style>
    <title>CUSTOMER MANAGEMENT</title>
</head>
<body>
    <div class="dashboard">
        <!-- Sidebar -->
        <div class="sidebar">
            <h2><img src="image/title2.png" alt="" style="width: 200px; height:60px"></h2>
            <ul>
                <li><a href="{{ route('user.show') }}"> <i class="fa fa-user"></i> Your account</a></li>
                <li><a href="{{ route('dashboard') }}"> <i class="fas fa-tachometer-alt"></i> Your dashboard</a></li>
                <li><a href="{{ route('suppliers.index') }}"> <i class="fas fa-briefcase"></i> Supplier management</a></li>
                <li><a href="{{ route('products.index') }}"><i class="fa fa-shopping-bag"></i> Product management</a></li>
                <li><a href="{{ route('orders.index') }}"><i class="fa fa-shopping-cart"></i> Order management</a></li>
                <li><a href="{{ route('clients.index') }}"><i class="fa fa-building"></i>  Customer management</a></li>
                <li><a href="{{ route('inventory.index') }}"><i class="fa fa-box-open"></i> Inventory management</a></li>
                <li><a href="{{ route('inventory.graph') }}"> <i class="fa fa-history"></i> History "Entries/Exits"</a></li>
            </ul>
        </div>

        <!-- Content -->
        <div class="content">
            <h1>CUSTOMER MANAGEMENT</h1>
            <a href="{{ route('clients.create') }}" class="btn btn-primary">Add customer</a>

            @if (session('success'))
                <div class="success-message">
                    {{ session('success') }}
                </div>
            @endif

            <br><br>

            <!-- Customer Details Table -->
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Edit</th> <!-- Edit column -->
                        <th>Delete</th> <!-- Delete column -->
                    </tr>
                </thead>
                <tbody>
                    <!-- Loop through the customers to display data in the right table -->
                    @foreach ($clients as $customer)
                        <tr>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->phone }}</td>
                            <td>{{ $customer->address }}</td>
                            <td>
                                <!-- Edit Customer Button -->
                                <a href="{{ route('clients.edit', $customer->id) }}" class="btn btn-edit">
                                     Edit
                                </a>
                            </td>
                            <td>
                                <!-- Delete Customer Button -->
                                <form action="{{ route('clients.destroy', $customer->id) }}" method="POST" style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-delete" onclick="return confirm('Are you sure you want to delete this customer?')">
                                         Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
