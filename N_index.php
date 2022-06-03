<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0d6b327ba7.js" crossorigin="anonymous"></script>
    <style>
        .register {
            background: -webkit-linear-gradient(left, #3931af, #00c6ff);
            margin-top: 3%;
            padding: 3%;
        }
        
        .register-left {
            background: #f8f9fa;
            border-top-left-radius: 10% 50%;
            border-bottom-left-radius: 10% 50%;
        }
        
        input {
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            width: 60%;
            background: #f8f9fa;
            font-weight: bold;
            color: #383d41;
            margin-top: 30%;
            margin-bottom: 3%;
            cursor: pointer;
        }
        
        .register-right {
            text-align: center;
            color: #fff;
            margin-top: 4%;
        }
        
        .register-left img {
            margin-top: 15%;
            margin-bottom: 5%;
            width: 80%;
            /*-webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;*/
        }
        
        @-webkit-keyframes mover {
            0% {
                transform: translateY(0);
            }
            100% {
                transform: translateY(-20px);
            }
        }
        
        @keyframes mover {
            0% {
                transform: translateY(0);
            }
            100% {
                transform: translateY(-20px);
            }
        }
        
        .register-left p {
            font-weight: lighter;
            padding: 12%;
            margin-top: -9%;
        }
        
        .register .register-form {
            padding: 10%;
            margin-top: 10%;
        }
        
        .btnRegister {
            float: right;
            margin-top: 10%;
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            background: #0062cc;
            color: #fff;
            font-weight: 600;
            width: 50%;
            cursor: pointer;
        }
        
        .register .nav-tabs {
            margin-top: 3%;
            border: none;
            background: #0062cc;
            border-radius: 1.5rem;
            width: 28%;
            float: right;
        }
        
        .nav-link {
            padding: 2%;
            height: 34px;
            font-weight: 600;
            color: #fff;
            border-top-right-radius: 1.5rem;
            border-bottom-right-radius: 1.5rem;
        }
        
        .nav-link:hover {
            border: none;
        }
        
        .nav-link.active {
            width: 100px;
            color: #0062cc;
            border: 2px solid #0062cc;
            border-top-left-radius: 1.5rem;
            border-bottom-left-radius: 1.5rem;
        }
        
        .register-heading {
            text-align: center;
            margin-top: 8%;
            margin-bottom: -15%;
            color: #495057;
        }
        
        textarea {
            resize: none;
        }
    </style>
    <script>
        function val() {
            var a = document.getElementById("phone").value;
            if (a == "") {
                document.getElementById("msg").innerHTML = "Please fill mobile number"
                return false;
            }
            if (isNaN(a)) {
                document.getElementById("msg").innerHTML = "Enter Only Numeric Value"
                return false;
            }
            if (a.length < 10) {
                document.getElementById("msg").innerHTML = "Must Be Enter 10 Digit"
                return false;
            }
            if (a.length > 10) {
                document.getElementById("msg").innerHTML = "Mobile Number Enter Only 10 Digit"
                return false;
            }
        }
        const submitButton = document.getElementById("submit");
        const input = document.getElementsById("file");

        input.addEventListener("Keyup", (e) => {
            const value = e.currentTarget.value;
            submitButton.disabled = false;

            if (value === "") {
                submitButton.disabled = true;
            }
        });
    </script>
</head>

<body>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="container register">
        <div class="row">

            <div class="col-md-9 register-left">

                <div class="text-center h2">Registration Form</div>
                <form action="connect.php" method="post" onclick="return val()">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <!-- <h3 class="register-heading">Apply as a Employee</h3> -->
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name *" value="" name="name" required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" placeholder="Contact *" id="phone" value="" name="contact" required/>
                                        <span id="msg"></span>
                                        
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email *" value="" name="email" required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="College Name *" value="" name="collegeName" required/>
                                    </div>
                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline">
                                                    <input type="radio"
                                                        name="gender"
                                                        value="male" checked
                                                        required>
                                                    <span> Male </span>
                                                </label>
                                            <label class="radio inline">
                                                    <input type="radio"
                                                        name="gender"
                                                        value="female" required>
                                                    <span>Female </span>
                                                </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-control" name="degree" required>
                                                <option class="hidden" selected>Please
                                                    Select Your Degree</option>
                                                <option value="B.E">B.E</option>
                                                <option value="B.tech">B.tech</option>
                                                <option value="M.tech">M.tech</option>
                                                <option value="Poly">Poly</option>
                                                <option value="BCA">BCA</option>
                                                <option value="MCA">MCA</option>
                                                <option value="BSC">BSC</option>
                                                <option value="MSC">MSC</option>
                                                <option value="Other">Other</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="year" required>
                                                <option class="hidden" selected>Select
                                                    Option</option>
                                                <option value="I Year">I Year</option>
                                                <option value="II Year">II Year</option>
                                                <option value="III Year">III
                                                    Year</option>
                                                <option value="IV Year">IV Year</option>
                                                <option value="Completed">Completed</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="stream" required>
                                                <option class="hidden" selected>Select
                                                    Option</option>
                                                <option value="IT">IT</option>
                                                <option value="CS">CS</option>
                                                <option value="CT">CT</option>
                                                <option value="ETC">ETC</option>
                                                <option value="ETRX">ETRX</option>
                                                <option value="Civil">Civil</option>
                                                <option value="Mechanical">Mechanical</option>
                                                <option value="Others">Others</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <textarea type="text" name="address" class="form-control" placeholder="Enter Your Address" value="" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Upload Payment Recipt</label>
                                        <input type="file" id="file" required="compulsory" >
                                    </div>
                                    <button id="submit" type="submit">Register</button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <h3 class="register-heading">Apply as a Hirer</h3>
                            <div class="row register-form">
                               

                                </div> -->
                                <div class="col-md-6">

                                    <input type="submit" class="btnRegister" value="Register" />
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <!-- <input type="submit" name="" value="Login" /><br/> -->
            </div>

            <div class="col-md-3 register-right">
                <br><br>
                <img src="download.png" alt="" />
                <!-- <h3>Welcome</h3> -->
                <p>Note: Please send your payment receipt on rahul@axiomtechguru.com
                </p>
            </div>
        </div>

    </div>
</body>

</html>