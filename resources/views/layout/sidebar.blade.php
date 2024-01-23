
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- font google --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    {{-- CSS File --}}
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <title>@yield('title')</title>
</head>
<style>
body {
	font-family: serif;
	color: #4c5257;
	min-height: 100vh;
    flex-direction: column;
    background: url('img/background-2.svg');
	background-size: 100%;
	background-repeat: no-repeat;
	background-position: absolute;
	background-attachment: fixed;
  }
.sidenav {
    height: 100%;
    width: 335px;
    position: absolute;
    z-index: 1;
    top: 115px;
    left: 0;
    background-color: #00ACED;
    overflow-x: hidden;
    padding-top: 20px;
    box-shadow: 2px 0px 30px rgba(0, 0, 0, 0.05), 0px 4px 4px rgba(0, 0, 0, 0.25);
    margin-top : fixed;
}

.sidenav a i:nth-child(2) {
    font-style: normal;
}
/* a */
.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 18px;
    color: #FFFFFF;
    letter-spacing: 0.04em;
    display: block;
    margin-left: 60px;
    font-family: 'Poppins', sans-serif;
    margin-bottom: 8px;
    padding: 5px;
}

/* span */
.sidenav a span {
    padding: 6px 8px 6px 0px;
    text-decoration: none;
    font-size: 20px;
    color: #FFFFFF;
    letter-spacing: 0.04em;
    display: block;
    font-family: 'Poppins', sans-serif;
    margin-bottom: 8px;
}
/* label */
.sidenav label {
    margin-left: 40px;
    font-weight: 600;
    color: #FFFFFF;
    font-family: 'Poppins', sans-serif;
    letter-spacing: 0.04em;
}


.sidenav label:nth-child(1) {
    margin-top: 20px;
}

.sidenav a:hover {
    color: #33CCCC;
    border-right: 5px solid #33CCCC;
    transition: 0.2s;
    text-decoration: none;
}
/* container */
.container:nth-child(2) {
    
    position: absolute;
    top: 150px;
    left: 401px;
    padding: 30px;
}
.container h2{
    font-family: 'Poppins', sans-serif;
    font-size: bold;
}
.btn{
    right:100px;
}
.font{
    position: absolute;
    width: 218px;
    height: 28px;
    left: 20px;
    font-style: normal;
    font-weight: bold;
    font-size: 16px;
    line-height: 24px;
    display: flex;
    align-items: center;
}
</style>

<body>
    {{-- Sidenav --}}
    <div class="sidenav">
        <div>
        <img src="" alt="">
        </div>
        <label>MENU</label>
        <a href="{{url ('dashboard')}}">
            <i class="fa fa-fw fa-home"></i>
            <i> DASHBOARD</i>
        </a>
        <a href="{{url ('account') }}">
            <i class="fa fa-fw fa-list-ul"></i>
            <i> ACCOUNT</i>
        </a>
        <a href="{{url ('schedule') }}">
            <i class="fa fa-fw fa-briefcase"></i>
            <i> SCHEDULE</i>
        </a>
        <a href="{{url ('ticket') }}">
            <i class="fa fa-fw fa-briefcase"></i>
            <i> TICKETING</i>
        </a>
        <a href="{{url ('costumer') }}">
            <i class="fa fa-fw fa-users"></i>
            <i> COSTUMER</i>
        </a>
        <a href="{{url ('supplier') }}">
            <i class="fa fa-fw fa-users"></i>
            <i> SUPPLIER</i>
        </a><br>
        <label>TRANSACTION</label>
        <a href="{{url ('cash')}}">
            <i class="fa fa-fw fa-exchange"></i>
            <i> CASH</i>
        </a>
        <a href="{{url ('capital')}}">
            <i class="fa fa-fw fa-exchange"></i>
            <i> CAPITAL</i>
        </a>
        <a href="{{url ('sales')}}">
            <i class="fa fa-fw fa-exchange"></i>
            <i> SALES</i>
        </a>
        <a href="{{url ('purchase')}}">
            <i class="fa fa-fw fa-exchange"></i>
            <i> PURCHASES</i>
        </a><br>
        <label>REPORT</label>
        <a href="{{url ('generalledger')}}">
            <i class="fa fa-fw fa-file"></i>
            <i> GENERAL LEDGER</i>
        </a>
    </div>

    



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
</body>

</html>