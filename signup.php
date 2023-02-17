   

<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="signup.js"></script>
        <link rel="stylesheet" href="signup.css"/>
    </head> 
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-offset-5">
                    <h1>SIGN UP PAGE</h1>
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    SIGN UP PAGE
                </div>
                <div class="panel-body">
                    <form action="http://localhost/modi/modi.php"method="post">
                        <div class="row">
                        <div class="form-group col-md-6">
                            <label for="Fname">FIRST NAME</label>
                            <input class="form-control" placeholder="FIRST NAME"
                            name="Fname" id="Fname" required 
                            onblur="nameToUpper()"/>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Lname">LAST NAME</label>
                            <input class="form-control" placeholder="LAST NAME"
                            name="Lname" id="Lname" required 
                            onblur="nameToUpper()"/>
                        </div> 
                    </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="email">EMAIL</label>
                                <input class="form-control" placeholder="a@a.com"
                                name="email" id="email" type="email" required/>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="password">PASSWORDS</label>
                                <input class="form-control" placeholder="password"
                                name="password" id="password" type="password" 
                                onInput="checkPassword()"required/>
                
                            </div>
                            
                        </div> 
                        <div class="row">
                    <div class="form-group col-md-6">
                        <label for="sic">SIC NO</label>
                        <input class="form-control" placeholder="20bctc89"
                        name="sic" id="sic" required /> 
                    </div> 
                    <div class="form-group col-md-6">
                        <label for="number">CONTACT NUMBER</label>
                        <input class="form-control" placeholder="9078675609"
                        name="number" id="number" type="number"required/>
                    </div> 
                </div> 
                <center><div >
                <input type="submit" class="btn btn-success"/>
            </div>
        </center>
    </body>

</html> 

