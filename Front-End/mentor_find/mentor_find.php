<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootdtrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400;500;700;800&display=swap');

        body {
            background-color: #F3E9D2;
            font-family: 'Baloo Bhaijaan 2', cursive;

        }

        h1 {
            margin-top: 20px;
            font-size: 5rem;
            font-weight: 700;
            color: #1A936F;
            text-align: center;
        }

        .howto {
            width: 100%;
            height: 100%;
            margin: 4rem 0px 5rem 0px;
            display: flex;
            justify-content: end;
        }

        .howto p {
            font-size: 22px;
            padding: 10px;
        }

        .howto img {
            width: 20%;
            min-width: 220px;
            margin-right: 8%;
        }

        .howtocard {
            width: 60%;
        }

        .bio {
            height: 100%;
            padding: 10px;
        }

        .bio img {
            overflow: hidden;
            height: 11vw;
            min-height: 80px;
        }

        .bio h4 {
            text-align: center;
            margin-top: 5px;
        }

        .biocardcontent {
            height: 80%;
        }
         .table {
            width: 20%;
            color: #114B5F;
        } 
        .card-body {
            text-align: left;
            height: 90%;
        }

        .sortbtn {
            background-color: #88D498;
            color: white;
        }

        .contactbtn {
            width: 90%;
            background-color: #FDB443;
            margin-left: 16px;
            color: white;
        }

        @media screen and (max-width:767px) {
            h1 {
                width: 100vw;
                font-size: 4rem;
            }

            .howto {
                width: 100%;
                height: 100%;
                margin: auto;
                display: block;
            }

            .howto p {
                font-size: 18px;
                padding: 6px;
            }

            .howto img {
                height: 20%;
                min-height: 100px;
                padding: 10px;
                text-align: center;
            }

            .howtocard {
                width: 100%;
            }

            .sort {
                margin-top: 30px;
            }

            .bio img {
                margin-left: 5%;

            }

            .bio h4 {
                margin-left: 2rem;
                margin-top: 2rem;
            }

            .bioleft {
                display: flex;
                width: 100%;
            }
            .pictureandname {
                width :40%;
            }
            .pictureandname img {
                width: 150px;
                height: auto;

            }
            .pictureandname h4 {
                margin-left: 0;
            }
            .info {
                width: 60%;
            }
        }
        @media screen and (max-width:767px) {
            .bioleft {
                display: block;
                width: 100%;
            }
            .pictureandname {
               margin: auto;
            }
            .info {
                width: 80%;
                margin: auto;
            }

        }
    </style>
</head>

<body>


    <h1>Find your mentor</h1>
    <div class="container">

        <!-- how to -->
        <div class="howto">

            <img src="../picture/find.png" alt="">

            <div class="card howtocard border-0">
                <div class="card-body">
                    <h3>How to</h3>
                    <p class="card-text">We have hundreds of mentors to help you grow your skills. <br>If you find a mentor who suits you, you can contact via the contact button.</p>
                </div>
            </div>
        </div>

        <!-- sort  -->
        <div class="sort">
            <form class="row row-cols-lg-auto g-3 align-items-center p-2 mb-5">
                <h4 class="me-5">Sort by</h4>
                <div class="col-12">
                    <label class="visually-hidden" for="inlineFormSelectPref">Language1</label>
                    <select class="form-select border-0" id="inlineFormSelectPref">
                        <option selected>Language</option>
                        <option value="1">English</option>
                        <option value="2">Germany</option>
                        <option value="3">Spanish</option>
                        <option value="4">Japanese</option>
                        <option value="5">French</option>
                    </select>
                </div>
                <div class="col-12">
                    <label class="visually-hidden" for="inlineFormSelectPref">Language2</label>
                    <select class="form-select border-0" id="inlineFormSelectPref">
                        <option selected>Language</option>
                        <option value="1">English</option>
                        <option value="2">Germany</option>
                        <option value="3">Spanish</option>
                        <option value="4">Japanese</option>
                        <option value="5">French</option>
                    </select>
                </div>
                <div class="col-12">
                    <label class="visually-hidden" for="inlineFormSelectPref">Language3</label>
                    <select class="form-select border-0" id="inlineFormSelectPref">
                        <option selected>Language</option>
                        <option value="1">English</option>
                        <option value="2">Germany</option>
                        <option value="3">Spanish</option>
                        <option value="4">Japanese</option>
                        <option value="5">French</option>
                    </select>
                </div>

                <div class="col-12">
                    <input type="email" class="form-control border-0" placeholder="Skills" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="col-12">
                    <button type="submit" class="btn sortbtn">Submit</button>
                </div>
            </form>
        </div>
        <!-- sort end -->


        <!-- mentor bio loop start-->
        <div class="card mb-4 mentorbio border-0">
            <div class="row g-0 bio">
                <div class="col-lg-4 col-md-4 bioleft">
                    <div class="pictureandname">
                    <center>
                        <img src="../picture/profi.png" class="img-fluid rounded-start" alt="...">
                    </center>
                    <h4>Name</h4>
                    </div>
                    <div class="info">
                        <center>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th scope="row" class="border-0">Country</th>
                                        <td class="border-0">Austria</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="border-0">Langage</th>
                                        <td class="border-0">German</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="border-0">Skills</th>
                                        <td class="border-0">Programming</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="border-0">Profession</th>
                                        <td class="border-0">Engineer</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="border-0">Contact</th>
                                        <td class="border-0" style="overflow-wrap: anywhere;">mentor@mail.com</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="border-0">Capacity</th>
                                        <td class="border-0">Avalable</td>
                                    </tr>

                            </table>
                        </center>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="card-body">

                        <div class="introduce">
                                <center><h2>About myself</h2></center>
                                <p class="mb-4">I am reliable conscientious and dedicated. I am open minded and tolerant of all customs, values and traditions. I am patient and polite and do not mind working through things in a caring encouraging way with students.</p>



                                <center><h2>Profession description</h2></center>
                                <p>I strive to be prompt and efficient in my teaching methods. I also like to remain approachable. I do not want to make my students feel that I am judgmental or critical rather that i am encouraging and supportive.
                                </p>
                        </div>


                    </div>
                    <a class="btn contactbtn" href="#" role="button">Contact now!</a>
                </div>
            </div>
        </div>
        <!-- mentor io loop end -->



    </div>



    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>