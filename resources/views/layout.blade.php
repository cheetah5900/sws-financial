<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SWS | Financial</title>
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Bootstrap 4 Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Bootstrap 4 JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <!-- Datatable JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <!-- Select2 Live Search -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Prompt&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Lexend:wght@500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Sarabun&display=swap');

        body {
            font-family: 'Lexend', 'Sarabun';
            font-size: 12px;
            /* background-color: #E8DED1; */
            background-image: url('/public/images/bg.jpg');
            background-position: center;
            background-attachment: fixed;
            background-size: cover;
        }

        .card-plane {
            background-color: #E8DED1;
            border-radius: 25px;
            padding-top: 30px;
        }

        .btn-yellow {
            background: #FDBF47;
            box-shadow: inset 0px 2px 0px rgb(255 255 255 / 30%), inset 0px -5px 0px rgb(0 0 0 / 10%);
            border-radius: 10px
        }

        .btn-green {
            background: #87C847;
            box-shadow: inset 0px 2px 0px rgb(255 255 255 / 30%), inset 0px -5px 0px rgb(0 0 0 / 10%);
            border-radius: 10px;
        }

        .btn-red {
            background: #EA5C5C;
            box-shadow: inset 0px 2px 0px rgb(255 255 255 / 30%), inset 0px -5px 0px rgb(0 0 0 / 10%);
            border-radius: 10px;
        }

        .btn-blue {
            background: #6ECDE2;
            box-shadow: inset 0px 2px 0px rgb(255 255 255 / 30%), inset 0px -5px 0px rgb(0 0 0 / 10%);
            border-radius: 10px;
        }

        .btn-gray {
            background: #CCCCCC;
            box-shadow: inset 0px -5px 0px #a4a4a4;
            border-radius: 10px;
        }

        .border-crop {
            border: 1px solid #D8C8B4;
            border-radius: 10px;
        }

        .asset-stats {
            background: rgba(0, 0, 0, 0.05);
            box-shadow: inset 2px 2px 1px rgb(0 0 0 / 15%);
            border-radius: 20px;
            padding: 12px 15px;
            margin: 0% 2% 5% 2%;
        }

        .asset-middle {
            background: rgba(0, 0, 0, 0.05);
            box-shadow: inset 2px 2px 1px rgb(0 0 0 / 15%);
            border-radius: 20px;
            padding: 12px 0px;
            margin: 0% 30% 5% 30%;
        }

        .header-bar {
            background-color: #5AB5D7;
            padding: 10px 0px 10px 0px;
        }

        .nav-box {
            background: rgba(3, 3, 3, 0.25);
            box-shadow: inset 2px -2px 0px rgb(0 0 0 / 15%);
            border-radius: 7px;
            padding: 5px 15px 5px 15px;
            position: relative;
            color: #FDE39B;
        }

        .table-center {
            margin-left: auto;
            margin-right: auto;
        }

        .white-text {
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row header-bar mb-5">
            <div class="col text-left">
                <a href="index.php" class="btn">????????????????????????</a> |
                <a href="po" class="btn">PO</a>
            </div>
            <div class="col text-right">
                <!-- Authentication -->
                <form method="POST" action="/logout">
                    @csrf
                    <span class="btn">{{Auth::user()->name}}</span>
                    <button type="submit" class="nav-box">??????????????????????????????</button>
                </form>
            </div>
        </div>
    </div>
    @yield('content')
</body>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
    $(document).ready(function() {
        $('#example2').DataTable();
    });
    $(document).ready(function() {
        $('#exampledesc').DataTable({
            "order": [
                [0, "desc"]
            ]
        });
    });
</script>

</html>