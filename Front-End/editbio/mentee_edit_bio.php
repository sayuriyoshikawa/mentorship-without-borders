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
                margin: auto;
            }

            .goal {
                width: 80vw;
                margin: auto;
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
                        <label class="form-label">Picture</label>
                        <input type="email" class="form-control border-0 mb-3" id="inputEmail4" placeholder="picture URL">
                    </li>
                   
                    <li>
                        <label class="form-label">Education</label>
                        <input type="email" class="form-control border-0 mb-3" id="inputEmail4" placeholder="Hihgh schoole, Bachelor...">
                    </li>
                    <li>
                        <label class="form-label">Skills</label>
                        <input type="email" class="form-control border-0 mb-3" id="inputEmail4" placeholder="Language, Wrhiting, Design...">
                    </li>
                    <li>
                        <label class="form-label">Contact</label>
                        <input type="email" class="form-control border-0 mb-3" id="inputEmail4" placeholder="email">
                    </li>
                    <li>
                        <label class="form-label">Profession</label>
                        <input type="email" class="form-control border-0 mb-3" id="inputEmail4" placeholder="Profession">
                    </li>

                </ul>

            </div>
            <div class="right">
                <div class="mb-2">
                    <label for="exampleFormControlTextarea1" class="form-label ">
                        About myself
                    </label>
                    <textarea class="form-control border-0 mb-4" id="exampleFormControlTextarea1" rows="6"></textarea>
                </div>
                <div class="mb-3">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Profession description</label>
                        <textarea class="form-control border-0" id="exampleFormControlTextarea1" rows="6"></textarea>
                    </div>
                </div>

            </div>

        </div>
        <div class="mb-2 goal">
            <label for="exampleFormControlTextarea1" class="form-label fw-bold">
                GOAL
            </label>
            <textarea class="form-control border-0 form-control-lg" id="exampleFormControlTextarea1" rows="1"></textarea>
        </div>

        <center>
            <button type="button" class="btn mt-5">Update</button>
        </center>
    </div>


    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>