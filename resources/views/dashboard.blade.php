<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Inventaris | Dashboard</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container">
            <a class="navbar-brand" href="#">Inventaris</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inventaris</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('user') }}">User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('barang') }}">Barang</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('laporan')}}">Laporan</a>
                    <li class="nav-item dropdown ms-3-md">

                    <li class="nav-item dropdown ms-md-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                             {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{url('/logout') }}">Logout</a></li>

                        </ul>
                    </li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-7 mb-5">
                <div class="h3 text-center" id="textDestination"></div>
                </div>
            </div>
        </div>
    </section>

     <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-8 ">
                    <h3>Data Inventaris</h3>
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Status</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Informasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>User</td>
                                <td>{{ $user }}</td>
                                <td><a href="{{ ('user') }}" class="link-primary">selengkapnya</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Barang</td>
                                <td>{{ $barang }}</td>
                                <td><a href="{{ ('barang') }}" class="link-primary">selengkapnya</a></td>
                            </tr>
                          
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
  
    <script language="JavaScript">
var text="SELAMAT DATANG {{ auth()->user()->name }}";
var delay=20;
var currentChar=1;
var destination="[none]";
function type()
{
//if (document.all)
{
var dest=document.getElementById(destination);
if (dest)// && dest.innerHTML)
{
dest.innerHTML=text.substr(0, currentChar)+"<blink>_</blink>";
currentChar++;
if (currentChar>text.length)
{
currentChar=1;
setTimeout("type()", 5000);
}
else
{
setTimeout("type()", delay);
}
}
}
}
function startTyping(textParam, delayParam, destinationParam)
{
text=textParam;
delay=delayParam;
currentChar=1;
destination=destinationParam;
type();
}
javascript:startTyping(text, 50, "textDestination");
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    
</body>

</html>