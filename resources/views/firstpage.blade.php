<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BC INVENTORY</title>
    <link rel="icon" href="{{ asset('image/logo.png') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .container-fluid {
            background-image: url("{{ asset('image/firstpage.jpg') }}");
            background-size: cover; 
            background-position: center center; 
            height: 100vh;
            display: flex;
            align-items: left;
            justify-content: flex-start; 
            flex-direction: column; 
            padding-left: 15px; 
        }
        .custom-span {
            color: white;
            background-color: orange; 
            padding: 5px 10px; 
            border-radius: 2rem; 
            margin-left: 5rem;
        }
        h1{
            font-size:2.5rem;
            color: white;
            padding:2rem 1rem;
            margin:25rem 
            line-height:1.5; 
            max-width: 40rem; 
            margin-left:0.4rem;
        }
        h6{
            padding:2rem 1rem;
            line-height:1.5; 
        }
        h4 {
            font-size: 1.2rem;
            color:white;
            padding:2rem 1rem;
            line-height:1.2;
            max-width: 34rem; 
            text-align: justify;
            margin-left: 5.2rem;  
        }
        .btn-group {
            margin-top: 1rem;
            display: flex;
        }
        .btn {
            margin-right: 2rem; 
            border-radius: 5rem;
            margin-left: 9rem;
            background: orange;
            color: #fff;
            padding: .9rem 2.5rem;
            cursor: pointer;
            font-size: 1rem; 
            text-align: center;
            max-width: 12rem;
            border: .2rem solid white ;
        }
        .btn:last-child {
            margin-right: 0; 
        }
        .btn:hover {
            background-color: wheat;
        }
        .inventory-title {
        font-size: 45px; 
        text-transform: uppercase; 
        color: white; 
        text-shadow: 2px 2px 0 #333, 4px 4px 0 #444, 6px 6px 0 #555; /* 3D effect with multiple shadows */
        margin-left: 0.001rem;
        text-align: center; 
        }
        .management {
        color:orange;
        }
</style>
</head>
<body>
<section>
    <div class="container-fluid">
        <div>
            <br>
            <div class="container mt-4">
                <!-- 3D-style title "INVENTORY MANAGEMENT" -->
                <h1 class="inventory-title text-center mt-3">INVENTORY <span class="management"> MANAGEMENT</span></h1>
            </div>
            <h6> <span class="w3-tag custom-span">WELCOME TO THE PREMIER INVENTORY MANAGEMENT APPLICATION</span></h6>
            <h4 >Take control of your inventory management and propel your business to new heights. Sign up now and witness the difference our system can make in optimizing your operations  <i class="fas fa-arrow-down" style="color: white;"></i></h4>
        </div>
        <div class="btn-group">
            <a href="{{ route('login') }}" class="btn">LOG IN</a>
            <a href="{{ route('register') }}" class="btn">SIGN UP</a>
        </div>
    </div>
</section>
<!-- Inclure le script Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</div>
</body>
</html>
