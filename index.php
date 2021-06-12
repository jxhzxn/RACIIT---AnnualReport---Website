<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="htmlcss bootstrap menu, scroll detect, show on scrolling page, navbar, menu CSS examples" />
<meta name="description" content="Auto hide navbar or header on scroll down. Page examples, Bootstrap 5" />  

<title>RACIIT Annual Report</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>

<link href="./css/login.css" rel="stylesheet">
<link href="./css/navbar.css" rel="stylesheet">
<link href="./css/footer.css" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<!-- <link rel="stylesheet" href="https://cdn.lineicons.com/3.0/lineicons.css">  -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta@0.5.21/dist/vanta.net.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">






</head>
<body>

    <div class="mobile">
        <p>View on Desktop</p>
    </div>


<!-- <div class="below-container"></div> -->




<div class="third-container">

	<div class="login-box-container">

        <p class="head-text">RACIIT Annual Report</p>

        <div class="login-box">
            <input class="password-input" id="password" type="password" name="password">
            <button class="btn" id="btn">Login</button>
        </div>

    </div>						

    
    
    
    
</div>








<!-- <script>
    $("#btn").click(function(e) {

        var password = $("#password").val();
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "./php/login.php",
        data: { 
            password: password
        },
        success: function(data) {
            if($.trim(data)==1){
                alert('ok');
            }
            
        },
        error: function(data) {
            alert('error');
        }
    });
});
</script> -->


<script>
    $("#btn").click(function(event){
        var password = $("#password").val();
        event.preventDefault();

        // alert("hiii");

        $.ajax({
            method: "POST",
            url: "./php/login.php",
            data: {
                password: password
            },

            success: function(data){
                if($.trim(data)==1){
                    // alert("hiii");
                    Swal.fire({
                    icon: 'success',
                    title: 'Login Successful!',
                    showConfirmButton: false,
                    timer: 2000
                    }).then((result) => {
                        // Reload the Page
                        window.location.href="./landing.html";
                    });
                }else if($.trim(data)==2){
                    // alert("wrong");
                    Swal.fire(
                      "<div>Password is Wrong</div>",
                      "",
                      'error'
                    ).then((result) => {
                        // Reload the Page
                        location.reload();
                        });
                }
            },

            error: function(data){
                alert("error");
            }
        });
    });
</script>

</body>

</html>