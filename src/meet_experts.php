<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/dist/output.css" rel="stylesheet">
    <link href="./soumesh.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer"   />
    <style>
        /* Style the search field */
        form.example input[type=text] {
            padding: 10px;
            font-size: 17px;
            border: 1px solid black;
            float: left;
            width: 35%;
            background: white;
            margin-top: 12px;
        }

        /* Style the submit button */
        form.example button {
            margin-top: 12px;
            float: left;
            width: 10%;
            padding: 10px;
            background: #E53935;
            color: white;
            font-size: 17px;
            border: 1px solid black;
            border-left: none;

            /* Prevent double borders */
            cursor: pointer;
        }

        form.example button:hover {
            background: #C62828;
        }

        /* Clear floats */
        form.example::after {

            content: "";
            clear: both;
            display: table;
        }
    </style>
</head>

<body>
    <div>
        <h1 class="text-white text-6xl hover:text-black bg-red-600 text-center">MEET EXPERTS</h1>
    </div>
    <form class="example" action="action_page.php">
        <input type="text" placeholder="Search Experts.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
    <div class="navbar">
        <a href="vansh.php">HOME</a>
        <a href="#news">TOP FUNDED PROJECTS</a>
        <a href="">MEET EXPERT</a>
        <a href="#news">MORE INFORMATION</a>
        <a href="">CONTACT US</a>
    </div>
</body>

</html>