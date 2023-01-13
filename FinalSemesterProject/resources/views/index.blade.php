<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- title for website -->
    <title>GO Global Travel</title>
    <style>
    /* CSS reset */
    * {
        margin: 0;
        padding: 0;
        color: white;
    }

    /* utility classes */
    .text-primary {
        color: white;
        font-family: 'Lato', sans-serif;
        font-size: 3.125rem;
        padding: 1.125rem;
        font-weight: bolder;
        text-transform: uppercase;
    }

    .text-secondary {
        color: white;
        font-family: 'Lato', sans-serif;
        font-size: 1.563rem;
        padding: 0.313rem;
    }


    .text-para {
        color: white;
        font-family: 'Poppins', sans-serif;
        font-size: 0.938rem;
        padding: 0.938rem;
        font-weight: bold;
    }

    .center {
        justify-content: center;
        text-align: center;
        align-items: center;
    }

    .btn {
        outline: none;
        background-color: transparent;
        border: 2px solid white;
        padding: 0.625rem 1.25rem;
        border-radius: 1.438rem;
        cursor: pointer;
        margin: 1.25rem auto;
        width: 100%;
        transition: background-color 0.5s ease 0s;
    }

    .btn:hover {
        background-color: white;
        color: black;
    }

    i {
        display: inline-block;
    }

    .empty {
        height: 3.75rem;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        background-color: black;
    }


    /* header */
    header {
        display: flex;
        justify-content: space-between;
        padding: 0.625rem;
        position: sticky;
        top: 0;
        z-index: 1000;
    }

    /* adding background of black with opacity */
    header::before {
        content: "";
        background-color: black;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        opacity: 0.4;
    }

    /* header + footer: logo and name */
    .logo img {
        height: 3.125rem;
        padding: 0px 0.938rem 0px 1.25rem;
    }

    .logo h3 {
        padding-top: 0.813rem;
        font-family: 'Lato', sans-serif;
    }

    /* header menu styling */
    header ul {
        display: flex;
    }

    header #menu {
        padding-top: 0.625rem;
    }

    header .menu-item {
        list-style: none;
    }

    header .menu-item a {
        text-decoration: none;
        margin-right: 1.563rem;
        font-size: 1.063rem;
        font-weight: bolder;
        font-family: 'Lato', sans-serif;
    }

    header .menu-item a:hover {
        color: rgb(255, 166, 0);
    }



    /* home */
    #home {
        display: flex;
        flex-direction: column;
        padding: 2.5rem;
        height: 28.125rem;
    }

    /* adding background-image for home section */
    #home::before {
        content: "";
        background-image: url('https://www.mystudy.my/images/whattostudy/20190531174840Social%20Science%20720x240px.png');
        background-attachment: fixed;
        background-size: cover;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        opacity: 0.9;
    }


    /* services and spots */
    #service-menu,
    #spot-menu {
        display: flex;
        flex-direction: row;

    }

    /* service and spot section items' styling */
    .service-item {
        height: 27.6rem,
            border-radius: 1.875rem;
    }

    .service-item,
    .spot-item {
        border: 2px solid white;
        border-radius: 1.875rem;
        width: 18.75rem;
        margin: 0.625rem;
        transition: all 0.2s ease-in-out 0s;
        cursor: pointer
    }

    .service-item:hover,
    .spot-item:hover {
        transform: scale(1.06);
        background-color: rgb(41, 39, 39);

    }

    .service-item img,
    .spot-item img {
        height: 8.75rem;
        padding: 0.438rem;
        border-radius: 1.875rem;
    }

    #spots {
        margin-bottom: 1.875rem;
        padding-top: 3.125rem;
        border-radius: 1.875rem;
    }


    /* quote */
    #quote img {
        width: 98vw;
        margin: 1.875rem 0 0px 0.375rem;
    }


    /* registration */
    #registration {
        height: 33.7rem;
    }

    /* adding background-image for registration section */
    #registration::before {
        background: url('data:image/jpeg;base64,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');
        opacity: 0.7;
        background-attachment: fixed;
        background-size: cover;
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: -1;
        opacity: 0.8;

    }

    /* styling registration form */
    #reg-form {
        display: inline-block;
        border: 3px solid white;
        position: relative;
        top: 1.25rem;
        left: 55%;
        padding: 1.563rem 2.5rem;
        border-radius: 1.875rem;
    }

    /* adding background of .5 opacity */
    #reg-form::before {
        content: "";
        background-color: #f55501;
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        border-radius: 1.875rem;
        z-index: -1;
        opacity: 0.5;

    }

    #reg-form .form-group {
        display: block;
        margin: auto;
        border-bottom: 2px solid white;
    }


    #reg-form input {
        background-color: transparent;
        border: none;
        outline: none;
    }

    #reg-form .radiobtn {
        display: inline;
        width: 1.875rem;
        font-family: 'Poppins', sans-serif;
    }

    ::placeholder {
        color: whitesmoke;
    }

    #reg-form h6 {
        display: inline;
        padding: 0px;

    }

    #reg-form .gender {
        margin-top: 1.25rem;
    }


    /* footer */
    #footer {
        display: flex;
        padding: 1.25rem;
        background-color: #0c151f;
    }

    .footer-item {
        margin: 0px 0.438rem;
    }

    #about {
        width: 34.375rem;
        text-align: center;
    }

    #about .logo {
        justify-content: center;
        display: flex;
        flex-direction: row;
    }

    /* contact us section*/
    #contact {
        width: 22.5rem;
        display: flex;
        flex-direction: column;
    }

    .contact-item {
        display: inline-block;
    }

    .contact-item p {
        display: inline-block;
    }


    #contact h2 {
        padding-bottom: 1.875rem;
    }

    .last-part {
        display: block;
    }

    /* copyright section*/
    #copyright {
        align-self: center;
    }
    </style>
    <!-- css stylesheets -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 1216px)" href="css/phone.css">

    <!-- website logo -->
    <link rel="icon" href="https://hamnarauf.github.io/Tourist-Bug/img/logo.png">

    <!-- link for google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Poppins:wght@200&display=swap"
        rel="stylesheet">

    <!-- link for fontawesome -->
    <script src="https://kit.fontawesome.com/deb091a632.js" crossorigin="anonymous"></script>
</head>

<body>

    <!-- header -->
    <header>
        <!-- logo and company name -->
        <ul class="logo">
            <img src="https://cdn-icons-png.flaticon.com/512/1974/1974031.png" alt="Travel Bug">
            <h3>GO GLOBAL TRAVEL</h3>
        </ul>
        <!-- menu/navbar -->
        <ul id="menu">
            <li class="menu-item"><a href="#">Home</a></li>
            <li class="menu-item"><a href="#services">Services</a></li>
            <li class="menu-item"><a href="#spots">Spots</a></li>
            <li class="menu-item"><a href="/blogs">Blogs</a></li>
            <li class="menu-item"><a href="#registration">Registration</a></li>
            <li class="menu-item"><a href="/request">Request a Field Trip</a></li>
            <li class="menu-item"><a href="#contact">Contact Us</a></li>
            <li class="menu-item"><a href="/">Quiz</a></li>
        </ul>
    </header>

    <!-- home -->
    <section id="home">
        <!-- short description of company -->
        <h1 class="text-primary center">Are you ready to travel?</h1>
        <p class="text-para center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo porro libero
            doloribus quasi veniam! Magnam dolores molestiae praesentium assumenda quo commodi voluptate, optio
            tenetur dolor suscipit quisquam? Possimus pariatur quam inventore assumenda aut deserunt neque
            consequuntur iusto totam itaque blanditiis, autem voluptatem nihil ut cumque fugiat voluptates quod quis
            consectetur.</p>
    </section>

    <!-- services -->
    <section id="services">
        <div class="empty"></div>
        <h1 class="text-primary center">Our Services</h1>
        <div id="service-menu" class="center">
            <!-- Service 1 -->
            <div class="service-item">
                <img src="data:image/jpeg;base64,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"
                    alt="food">
                <h3 class="text-secondary">Food</h3>
                <p class="text-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero officiis natus
                    dolore rem porro tempore totam alias inventore blanditiis quas, quibusdam nisi quae! Voluptates
                    nemo deleniti ab officiis blanditiis fugiat. </p>
            </div>
            <!-- Service 2 -->
            <div class="service-item">
                <img src="data:image/jpeg;base64,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"
                    alt="travel">
                <h3 class="text-secondary">Transport</h3>
                <p class="text-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero officiis natus
                    dolore rem porro tempore totam alias inventore blanditiis quas, quibusdam nisi quae! Voluptates
                    nemo deleniti ab officiis blanditiis fugiat. </p>
            </div>
            <!-- Service 3 -->
            <div class="service-item">
                <img src="data:image/jpeg;base64,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"
                    alt="accomodation">
                <h3 class="text-secondary">Accomodation</h3>
                <p class="text-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero officiis natus
                    dolore rem porro tempore totam alias inventore blanditiis quas, quibusdam nisi quae! Voluptates
                    nemo deleniti ab officiis blanditiis fugiat. </p>
            </div>
            <!-- Service 4 -->
            <div class="service-item">
                <img src="data:image/jpeg;base64,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"
                    alt="photography">
                <h3 class="text-secondary">Photography</h3>
                <p class="text-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero officiis natus
                    dolore rem porro tempore totam alias inventore blanditiis quas, quibusdam nisi quae! Voluptates
                    nemo deleniti ab officiis blanditiis fugiat. </p>
            </div>
            <!-- Service 5 -->
            <div class="service-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQs55xY_QfRA3ssqBL_JoTk3JFaX58gVu1VLw&usqp=CAU"
                    alt="recreation">
                <h3 class="text-secondary">Rrecreational Activities</h3>
                <p class="text-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero officiis natus
                    dolore rem porro tempore totam alias inventore blanditiis quas, quibusdam nisi quae! Voluptates
                    dfgdfg </p>
            </div>
        </div>
    </section>

    <!-- quote -->
    <section id="quote">
        <img src="https://hamnarauf.github.io/Tourist-Bug/img/quote.png" alt="">
    </section>

    <!-- famous spots -->
    <section id="spots">
        <h1 class="text-primary center">Famous Spots</h1>
        <div id="spot-menu" class="center">
            <!-- Spot 1 -->
            <div class="spot-item">
                <img src="data:image/jpeg;base64,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"
                    alt="food">
                <h3 class="text-secondary">Faisal Mosque</h3>
                <p class="text-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero officiis natus
                    dolore rem porro tempore totam alias inventore blanditiis quas, quibusdam nisi quae! Voluptates
                    nemo deleniti ab officiis blanditiis fugiat. </p>
            </div>
            <!-- Spot 2 -->
            <div class="spot-item">
                <img src="data:image/jpeg;base64,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"
                    alt="food">
                <h3 class="text-secondary">Eiffel Tower</h3>
                <p class="text-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero officiis natus
                    dolore rem porro tempore totam alias inventore blanditiis quas, quibusdam nisi quae! Voluptates
                    nemo deleniti ab officiis blanditiis fugiat. </p>
            </div>
            <!-- Spot 3 -->
            <div class="spot-item">
                <img src="data:image/jpeg;base64,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"
                    alt="food">
                <h3 class="text-secondary">Colosseum</h3>
                <p class="text-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero officiis natus
                    dolore rem porro tempore totam alias inventore blanditiis quas, quibusdam nisi quae! Voluptates
                    nemo deleniti ab officiis blanditiis fugiat. </p>
            </div>
            <!-- Spot 4 -->
            <div class="spot-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyEoVQ-rMn7Sz_5q1T2-KG6qgaJ3XK8ushHw&usqp=CAU"
                    alt="food">
                <h3 class="text-secondary">Statue of Liberty</h3>
                <p class="text-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero officiis natus
                    dolore rem porro tempore totam alias inventore blanditiis quas, quibusdam nisi quae! Voluptates
                    nemo deleniti ab officiis blanditiis fugiat. </p>
            </div>
        </div>
    </section>

    <!-- registration -->
    <section id="registration">
        <!-- Registration Form -->
        <form action="#" id="reg-form">
            <!-- form header -->
            <h1 class="text-primary center">Register Now!</h1>
            <!-- form body -->
            <div class="form-group">
                <i class="fa fa-user"></i>
                <input type="text" name="username" id="name" placeholder="Enter your Name" class="text-para">
            </div>
            <div class="form-group">
                <i class="fa fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Enter your Email" class="text-para">
            </div>
            <div class="form-group">
                <i class="fa fa-phone"></i>
                <input type="number" name="phone" id="contactNo" placeholder="Enter your Contact No." class="text-para">
            </div>
            <div class="form-group">
                <i class="fa fa-unlock-alt"></i>
                <input type="password" name="password" id="password" placeholder="Enter your Password"
                    class="text-para">
            </div>
            <div class="gender center">
                <h6 class="text-para">Gender:</h6>
                <input type="radio" name="gender" class="radiobtn ">
                <h6 class="text-para">Male</h6>
                <input type="radio" name="gender" class="radiobtn">
                <h6 class="text-para">Female</h6>
            </div>
            <!-- submit button -->
            <button type="submit" class="btn text-para">Submit</button>
        </form>
    </section>

    <!-- footer -->
    <footer id="footer">
        <!-- about section -->
        <ul id="about" class="footer-item">
            <ul class="logo">
                <img src="https://hamnarauf.github.io/Tourist-Bug/img/logo.png" alt="Go Travel">
                <h3>GO GLOBAL TRAVEL</h3>
            </ul>
            <p class="text-para">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <p class="text-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam soluta delectus .
            </p>
        </ul>
        <!-- contact us section -->
        <ul id="contact" class="footer-item center">
            <h2 class="text-secondary center">Contact Us</h2>
            <div class="contact-item">
                <!-- icon -->
                <i class="fa fa-map-marker"></i>
                <p class="text-para">Block no., City, Country. </p>
            </div>
            <div class="contact-item">
                <!-- icon -->
                <i class="fa fa-envelope"></i>
                <p class="text-para">customercare@travelsite.com</p>
                <p id="data"><a href=""><button style="color:black;" onclick="ajaxCall()">Click to Ajax Call</button>
</a>

            </p>
            </div>
        </ul>
        <!-- copyright section -->
        <div class="last-part">
            <p class="text-para" style="text-align:center;">All @Rights Reserved 2023 <br> <br> Made for my Web-Tech
                Semester Project Created by Mahrukh with ❤</p>
        </div>
    </footer>
    <script>
    function ajaxCall(){
        document.getElementById("data").innerHTML="";
        var req=new XMLHttpRequest();


        req.open("GET", "/ajax-call", true);
        req.send();

        req.onreadystatechange=function(){
            if(req.readyState == 4 && req.status==200){
                var data = JSON.parse(req.responseText);
                for(i=0; i<data.data.length;i++){
                    document.getElementById("data").innerHTML+= " " + data.data[i];
                }
            }
        };
    }
</script>
</body>

</html>