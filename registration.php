<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    header {
        height: 40%;
        background-color: #76A28D;
    }

    header h1 {
        padding: 10px;
    }

    .bg_color {
        background-color: #76a28d !important;
    }


    /* form section css start */
    .section_part {
        color: #E75D2F;
    }

    .section_part:hover {
        color: #E73A2F;

    }



    /* form section css end  */
    </style>



    <title>Hello, world!</title>
</head>

<body>

    <!-- <header class="text-center">
        <h2>Registration</h2>
    </header> -->


    <div class="jumbotron jumbotron-fluid bg_color">
        <div class="container text-center">
            <h1>Registration</h1>

        </div>
    </div>

    <div class="container">

        <!-- form stars 		 -->
        <!-- <form action="" > -->

        <!-- section 1 starts  -->

        <div class="row container">
            <div class="col-12">
                <div class="card " style="width: 95%">
                    <div class="card-header ">
                        <button class='btn btn-link section_part' id="section_1_label">
                            Section 1 : Personal Information
                        </button>

                    </div>

                    <div class="card-body" id="section_1_content">

                        <!-- name starts -->
                        <div class="form-group">
                            <label class="form-label" for="name">Name :</label>
                            <input type="text" class="form-control" placeholder="Enter Name" name="name" id="name">
                        </div>
                        <!-- name ends  -->

                        <div class="row">

                            <!-- Birthday starts  -->
                            <div class="form-group col-4 ">
                                <label class="form-label" for="dob">Date of Birth :</label>
                                <input type="date" name="dob" id="dob" class="form-control">
                            </div>
                            <!-- Birthday ends  -->

                            <!-- Blood starts  -->
                            <div class="form-group col-4 pl-0">
                                <label class="form-label" for="dob">Blood Group :</label>
                                <input type="text" class="form-control" placeholder="Enter Blood Group" name="blood"
                                    id="blood">
                            </div>
                            <!-- Blood ends  -->

                            <!-- Marital starts  -->
                            <div class="form-group col-4 pl-0">
                                <label class="form-label d-block">Marital Status :</label>
                                <label class="radio-inline">
                                    <input type="radio" name="marrige">Married
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="marrige">Divorced
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="marrige">Widow
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="marrige">Single
                                </label>
                                <!-- <input type="text" class="form-control" placeholder="Enter Blood Group" name="blood"
																			id="blood"> -->
                            </div>
                            <!-- Blood ends  -->
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- section 1 ends  -->

        <!-- section 2 starts  -->

        <div class="row container">
            <div class="col-12">
                <div class="card " style="width: 95%">
                    <div class="card-header ">
                        <button class='btn btn-link section_part' id="section_2_label">
                            Section 2 : My Picture Upload
                        </button>

                    </div>
                    <div class="card-body" id="section_2_content">
                        <!-- picture starts -->
                        <div class="form-group col-6">
                            <label class="form-label" for="picture">My Picture :</label>
                            <input type="file" class="form-control" name="picture" id="picture">
                        </div>
                        <!-- picture ends  -->
                    </div>

                </div>
            </div>
        </div>
        <!-- section 2 ends  -->

        <!-- section 3 starts  -->

        <div class="row container">
            <div class="col-12">
                <div class="card " style="width: 95%">
                    <div class="card-header ">
                        <button class='btn btn-link section_part' id="section_3_label">
                            Section 3 : Address Information
                        </button>

                    </div>
                    <div class="card-body" id="section_3_content">
                        <div class="row">
                            <div class="col-12">
                                <h5>Address </h5>
                                <hr>
                                <!-- office starts  -->
                                <div class="form-group row">
                                    <label for="office" class="col-sm-2 col-form-label">Office :</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="office" id="office"
                                            placeholder="Office Address">
                                    </div>
                                </div>
                                <!-- office ends  -->

                                <!-- residence starts  -->
                                <div class="form-group row">
                                    <label for="residence" class="col-sm-2 col-form-label">Residence :</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="residence" id="residence"
                                            placeholder="Residence Address">
                                    </div>
                                </div>
                                <!-- residence ends  -->

                                <!-- parmanent starts  -->
                                <div class="form-group row">
                                    <label for="permanent" class="col-sm-2 col-form-label">Permanent :</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="permanent" id="permanent"
                                            placeholder="Permanent Address">
                                    </div>
                                </div>
                                <!-- parmanent ends  -->
                            </div>
                            <div class="col-12">
                                <h5>Contact Details </h5>
                                <hr>

                                <!-- office starts  -->
                                <div class="form-group row">
                                    <label for="office_c" class="col-sm-2 col-form-label">Office :</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="office_c" id="office_c"
                                            placeholder="Office Address">
                                    </div>
                                </div>
                                <!-- office ends  -->

                                <!-- home starts  -->
                                <div class="form-group row">
                                    <label for="home" class="col-sm-2 col-form-label">Home :</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="home" id="home"
                                            placeholder="Home Address">
                                    </div>
                                </div>
                                <!-- home ends  -->

                                <!-- mobile starts  -->
                                <div class="form-group row">
                                    <label for="mobile" class="col-sm-2 col-form-label">Mobile :</label>
                                    <div class="col-sm-6">
                                        <input type="text" maxLength="11" class="form-control" name="mobile" id="mobile"
                                            placeholder="Mobile Number">
                                    </div>
                                </div>
                                <!-- mobile ends  -->

                                <!-- email starts  -->
                                <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label">Email :</label>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Email">
                                    </div>
                                </div>
                                <!-- email ends  -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- section 3 ends  -->

        <!-- section 4 starts  -->

        <div class="row container">
            <div class="col-12">
                <div class="card " style="width: 95%">
                    <div class="card-header ">
                        <button class='btn btn-link section_part' id="section_4_label">
                            Section 4 : Educational Qualification & Skills
                        </button>

                    </div>
                    <div class="card-body" id="section_4_content">
                        <!-- education starts -->
                        <div class="form-group">
                            <label class="form-label" for="education">Educational Qualification :</label>
                            <input type="text" class="form-control" placeholder="Educational Qualification"
                                name="education" id="education">
                        </div>
                        <!-- education ends  -->

                        <!-- skill starts -->
                        <div class="form-group">
                            <label class="form-label" for="skill">Language Skills:</label>
                            <input type="text" class="form-control" placeholder="Language Skills" name="skill"
                                id="skill">
                        </div>
                        <!-- skill ends  -->
                    </div>

                </div>
            </div>
        </div>
        <!-- section 4 ends  -->

        <!-- section 5 starts  -->

        <div class="row container">
            <div class="col-12">
                <div class="card " style="width: 95%">
                    <div class="card-header ">
                        <button class='btn btn-link section_part' id="section_5_label">
                            Section 5 : Interest & Hobbies
                        </button>

                    </div>
                    <div class="card-body" id="section_5_content">
                        <!-- interest starts -->
                        <div class="form-group">
                            <label class="form-label" for="interest">Interest & Hobbies:</label>
                            <input type="text" class="form-control" placeholder="Interest & Hobbies" name="interest"
                                id="interest">
                        </div>
                        <!-- interest ends  -->
                    </div>

                </div>
            </div>
        </div>
        <!-- section 5 ends  -->

        <!-- section 6 starts  -->

        <div class="row container">
            <div class="col-12">
                <div class="card " style="width: 95%">
                    <div class="card-header ">
                        <button class='btn btn-link section_part' id="section_6_label">
                            Section 6 : Proffesional Records
                        </button>

                    </div>
                    <div class="card-body" id="section_6_content">

                        <!-- designation starts  -->
                        <div class="form-group row">
                            <label for="designation" class="col-sm-2 col-form-label">Designation :</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="designation" id="designation"
                                    placeholder="Designation">
                            </div>
                        </div>
                        <!-- designation ends  -->

                        <!-- posting starts  -->
                        <div class="form-group row">
                            <label for="posting" class="col-sm-2 col-form-label">Place of Posting :</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="posting" id="posting"
                                    placeholder="Place of Posting">
                            </div>
                        </div>
                        <!-- posting ends  -->


												<div class="row">
												<!-- Cadre starts  -->
												<div class="form-group col-4">
                                <label class="form-label" for="cadre">Cadre :</label>
                                <input type="text" class="form-control" placeholder="Cadre" name="cadre"
                                    id="cadre">
                            </div>
                            <!-- Cadre ends  -->

														<!-- Batch starts  -->
                            <div class="form-group col-4 pl-0">
                                <label class="form-label" for="batch">Batch :</label>
                                <input type="text" class="form-control" placeholder="Batch" name="batch"
                                    id="batch">
                            </div>
                            <!-- Batch ends  -->
														</div>

                    </div>

                </div>
            </div>
        </div>
        <!-- section 6 ends  -->

        <!-- section 7 starts  -->

        <div class="row container">
            <div class="col-12">
                <div class="card " style="width: 95%">
                    <div class="card-header ">
                        <button class='btn btn-link section_part' id="section_7_label">
                            Section 7 : Proffesional Membership
                        </button>

                    </div>
                    <div class="card-body" id="section_7_content">
                        <!-- membership starts -->
                        <div class="form-group">
                            <label class="form-label" for="membership">Proffesional Membership:</label>
                            <input type="text" class="form-control" placeholder="Proffesional Membership"
                                name="membership" id="membership">
                        </div>
                        <!-- membership ends  -->
                    </div>

                </div>
            </div>
        </div>
        <!-- section 7 ends  -->

        <!-- section 8 starts  -->

        <div class="row container">
            <div class="col-12">
                <div class="card " style="width: 95%">
                    <div class="card-header ">
                        <button class='btn btn-link section_part' id="section_8_label">
                            Section 8 : Honors & Awards Received
                        </button>

                    </div>
                    <div class="card-body" id="section_8_content">
                        <!-- honor starts -->
                        <div class="form-group">
                            <label class="form-label" for="honor">Honors & Awards Received:</label>
                            <input type="text" class="form-control" placeholder="Honors & Awards Received" name="honor"
                                id="honor">
                        </div>
                        <!-- honor ends  -->

                    </div>

                </div>
            </div>
        </div>
        <!-- section 8 ends  -->

        <!-- section 9 starts  -->

        <div class="row container">
            <div class="col-12">
                <div class="card " style="width: 95%">
                    <div class="card-header ">
                        <button class='btn btn-link section_part' id="section_9_label">
                            Section 9 : Publications & Articles
                        </button>

                    </div>
                    <div class="card-body" id="section_9_content">
                        <!-- article starts -->
                        <div class="form-group">
                            <label class="form-label" for="article">Publications & Articles:</label>
                            <input type="text" class="form-control" placeholder="Publications & Articles" name="article"
                                id="article">
                        </div>
                        <!-- article ends  -->

                    </div>

                </div>
            </div>
        </div>
        <!-- section 9 ends  -->

        <!-- section 10 starts  -->

        <div class="row container">
            <div class="col-12">
                <div class="card " style="width: 95%">
                    <div class="card-header ">
                        <button class='btn btn-link section_part' id="section_10_label">
                            Section 10 : My Signature Upload
                        </button>

                    </div>
                    <div class="card-body" id="section_10_content">
                        <!-- signature starts -->
                        <div class="form-group col-6">
                            <label class="form-label" for="picture">My Signature :</label>
                            <input type="file" class="form-control" name="signature" id="signature">
                        </div>
                        <!-- signature ends  -->
                    </div>

                </div>
            </div>
        </div>
        <!-- section 10 ends  -->

        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
        <!-- </form> -->
    </div>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
    $(document).ready(function() {

				$("#section_2_content").hide();
				$("#section_3_content").hide();
				$("#section_4_content").hide();
				$("#section_5_content").hide();
				$("#section_6_content").hide();
				$("#section_7_content").hide();
				$("#section_8_content").hide();
				$("#section_9_content").hide();
				$("#section_10_content").hide();

        $("#section_1_label").click(function() {
            $("#section_1_content").slideToggle();
        });
        $("#section_2_label").click(function() {
            $("#section_2_content").slideToggle();
        });
        $("#section_3_label").click(function() {
            $("#section_3_content").slideToggle();
        });
        $("#section_4_label").click(function() {
            $("#section_4_content").slideToggle();
        });
        $("#section_5_label").click(function() {
            $("#section_5_content").slideToggle();
        });
        $("#section_6_label").click(function() {
            $("#section_6_content").slideToggle();
        });
        $("#section_7_label").click(function() {
            $("#section_7_content").slideToggle();
        });
        $("#section_8_label").click(function() {
            $("#section_8_content").slideToggle();
        });
        $("#section_9_label").click(function() {
            $("#section_9_content").slideToggle();
        });
        $("#section_10_label").click(function() {
            $("#section_10_content").slideToggle();
        });
    });
    </script>



</body>

</html>