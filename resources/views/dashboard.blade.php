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
            margin-bottom: 2rem; /* Increased margin-bottom to create more space between items */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .item h2 {
            color: #df8543;
            margin-bottom: 1rem;
        }

        /* Updated CSS for <p> elements */
        p {
            font-size: 1rem;
            line-height: 1.6;
            color: #777;
            margin-bottom: 0.5rem; /* Added margin to create space between paragraphs */
        }

        /* Add a border and padding to the <p> elements inside .item */
        .item p {
            padding: 0.8rem;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
        }

        /* Add hover effect for items */
        .item:hover {
            transform: translateY(-5px);
        }

        /* Style the link inside .item h2 */
        .item h2 a {
            color: #df8543; /* Set the link color to orange */
            text-decoration: none;
        }

        .item h2 a:hover {
            text-decoration: underline;
        }
    </style>
    <title>Dashboard</title>
</head>
<body>
    <div class="dashboard">
        <!-- Sidebar -->
        <div class="sidebar">
            <h2><img src="image/title2.png" alt="" style="width: 200px; height:60px"></h2>
            <ul>
                <li><a href="{{ route('profile.show') }}"> <i class="fa fa-user"></i> Your account</a></li>
                <li><a href="{{ route('suppliers.index') }}"> <i class="fas fa-briefcase"></i> Supplier management</a></li>
                <li><a href="{{ route('products.index') }}"><i class="fa fa-shopping-bag"></i> Product management</a></li>
                <li><a href="{{ route('orders.index') }}"><i class="fa fa-shopping-cart"></i> Order management</a></li>
                <li><a href="{{ route('clients.index') }}"><i class="fa fa-building"></i>  Customer management</a></li>
                <li><a href="{{ route('inventory.index') }}"><i class="fa fa-box-open"></i> Inventory management</a></li>
                <li><a href="{{ route('inventory.graph') }}"> <i class="fa fa-history"></i> History "Entries/Exits"</a></li>
            </ul>
        </div>

        <!-- Main Content Area -->
        <div class="content">
            <h1>WELCOME TO DASHBOARD</h1>

            <div class="item" id="item1">
                <h2><a href="" target="_blank" rel="noopener noreferrer">Supplier management</a></h2>
                <p>This part allows managers to manage suppliers by adding, deleting, or modifying information about a supplier from whom such a product was purchased.</p>
                
                <!-- Add content for Item 1 -->
            </div>

            <div class="item" id="item2">
                <h2><a href="" target="_blank" rel="noopener noreferrer">Product management</a></h2>
                <p>This section provides managers with the ability to handle products efficiently. It empowers them to add, remove, or modify product information with ease, thereby streamlining the product management process </p>
                <!-- Add content for Item 2 -->
            </div>

            <div class="item" id="item3">
                <h2><a href="" target="_blank" rel="noopener noreferrer">Order management</a></h2>
                <p>This section enables managers to oversee orders effectively. They have the flexibility to add or delete order information, providing a seamless and comprehensive order management experience.</p>
                <!-- Add content for Item 3 -->
            </div>

            <div class="item" id="item4">
                <h2><a href="" target="_blank" rel="noopener noreferrer">Customer management</a></h2>
                <p>In this section, the manager gains full control over customer management. They can easily add, delete, or update customer information, specifically those who have made purchases from the stock. This capability ensures efficient and personalized customer management for improved service and satisfaction.</p>
                <!-- Add content for Item 4 -->
            </div>

            <div class="item" id="item5">
                <h2><a href="" target="_blank" rel="noopener noreferrer">Inventory management</a></h2>
                <p>This section provides the manager with a comprehensive overview of the stock, including its location and the available quantity of products. It offers a holistic and detailed view, enabling the manager to monitor and track stock levels with ease, ensuring efficient inventory management.</p>
                <!-- Add content for Item 5 -->
            </div>

            <div class="item" id="item6">
                <h2><a href="" target="_blank" rel="noopener noreferrer">History "Entries/Exits"</a></h2>
                <p>In this section, the manager is empowered to handle stock inputs and outputs seamlessly. They can effortlessly add new inputs from suppliers or outputs to customers, and also have the flexibility to delete or modify information related to these stock movements. This functionality ensures efficient tracking and control of stock flow, enabling the manager to maintain accurate inventory records.</p>
                <!-- Add content for Item 6 -->
            </div>
        </div>
    </div>
</body>
</html>
