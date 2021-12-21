<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootdtrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- bootstrap icon  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400;500;700;800&display=swap');

        body {
            background-color: #F3E9D2;
            font-family: 'Baloo Bhaijaan 2', cursive;

        }

        .main {
            padding-top: 20px;
            width: 80%;
            min-width: 300px;
            margin: auto
        }

        .main h1 {
            color: #1A936F;
            font-size: 50px;
        }

        .editbio {
            display: flex;
            width: 100%;
            height: 100%;
            margin-top: 30px;
        }

        .left {
            width: 40%;
        }

        .right {
            width: 60%;
            padding-left: 5%;
        }

        ul {
            padding-left: 0;
        }

        li {
            list-style: none;
        }

        .languageselect {
            display: flex;
        }

        .language {
            width: 30%;
            margin-right: 3%;
        }

        .btn {
            width: 250px;
            background-color: #88D498;
            color: white;
        }

        @media screen and (max-width:425px) {
            .main h1 {
                text-align: center;
            }

            .editbio {
                display: block;
                width: 100%;
                height: 100%;
                margin-top: 30px;
            }

            .left {
                width: 80vw;
                margin: auto;

            }

            .right {
                width: 80vw;
                padding-left: 0px;
                padding-top: 10px;
                margin: auto;
            }

            .languageselect {
                display: block;
            }

            .language {
                width: 80vw;
                margin-right: 0;
            }
        }
    </style>

</head>

<body>
    <div class="main">
        <h1>Edit bio <i class="bi bi-pencil"></i></h1>
        <div class="editbio">
            <div class="left">
                <ul>
                    <li>
                        <label class="form-label">Country</label>
                        <input type="email" class="form-control border-0 mb-3" id="inputEmail4" placeholder="country">
                    </li>
                    <li>
                        <label class="form-label">Language (You can choose up to 3)</label>
                        <div class="languageselect">
                            <select class="form-select border-0 mb-2 language mb-3" aria-label="Default select example">
                                <option selected>Select</option>
                                <option value="English">English</option>
                                <option value="German">German</option>
                                <option value="Spanish">Spanish</option>
                                <option value="Japanese">Japanese</option>
                                <option value="French">French</option>
                                <option value="">None</option>
                            </select>
                            <select class="form-select border-0 mb-2 language mb-3" aria-label="Default select example">
                                <option selected>Select</option>
                                <option value="English">English</option>
                                <option value="German">German</option>
                                <option value="Spanish">Spanish</option>
                                <option value="Japanese">Japanese</option>
                                <option value="French">French</option>
                                <option value="">None</option>
                            </select>
                            <select class="form-select border-0 mb-2 language mb-3" aria-label="Default select example">
                                <option selected>Select</option>
                                <option value="English">English</option>
                                <option value="German">German</option>
                                <option value="Spanish">Spanish</option>
                                <option value="Japanese">Japanese</option>
                                <option value="French">French</option>
                                <option value="">None</option>
                            </select>
                        </div>
                    </li>
                    <li>
                        <label class="form-label">Skills</label>
                        <input type="email" class="form-control border-0 mb-3" id="inputEmail4" placeholder="Language, Wrhiting, Design...">
                    </li>
                    <li>
                        <label class="form-label">Picture</label>
                        <input type="email" class="form-control border-0 mb-3" id="inputEmail4" placeholder="Picture URL">
                    </li>
                    <li>
                        <label class="form-label">Contact</label>
                        <input type="email" class="form-control border-0 mb-3" id="inputEmail4" placeholder="email">
                    </li>

                    <li>
                        <label class="form-label">Capacity</label>
                        <select class="form-select border-0 mb-3" aria-label="Default select example">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">4</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="NULL">6</option>
                        </select>
                    </li>
                   
                </ul>

            </div>
            <div class="right">
                <div class="mb-2">
                    <label for="exampleFormControlTextarea1" class="form-label ">
                        Introduce myself
                    </label>
                    <textarea class="form-control border-0" id="exampleFormControlTextarea1" rows="7"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Profession</label>
                    <textarea class="form-control border-0 mb-2" id="exampleFormControlTextarea1" rows="1"></textarea>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Profession description</label>
                        <textarea class="form-control border-0" id="exampleFormControlTextarea1" rows="6"></textarea>
                    </div>
                </div>

            </div>
        </div>
        <center>
            <button type="button" class="btn mt-5">Update</button>

        </center>


        <!-- bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>