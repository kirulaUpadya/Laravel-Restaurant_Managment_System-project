<!DOCTYPE html>
<html lang="en">

<head>

  @include('home.css')

  <style>
    table {
      margin: 150px;
      border: 1px solid skyblue;
      padding: 40px;
    }

    th {
      padding: 10px;
      text-align: center;
      background-color: red;
      color: white;
      font-weight: bold;
    }

    td {
      padding: 10px;
      color: white;
    }
  </style>

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

  <nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#gallary">Gallary</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#book-table">Book-Table</a>
        </li>
      </ul>
      <a class="m-auto navbar-brand" href="#">
        <img src="assets/imgs/logo.svg" class="brand-img" alt="">
        <span class="brand-txt">Food Hut</span>
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#blog">Blog<span class="sr-only">(current)</span></a>
        </li>

        @if (Route::has('login'))

        @auth

        <li class="nav-item">
          <a class="nav-link" href="{{url('my_cart')}}">Cart</a>
        </li>

        <form action="{{ route('logout') }}" method="POST">

          @csrf

          <input class="btn btn-primary ml-xl-4" type="submit" value="Logout">

        </form>

        @else

        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">Register</a>
        </li>

        @endauth

        @endif

      </ul>
    </div>
  </nav>

  <div id="gallary" class="text-center bg-dark text-light has-height-md middle-items wow fadeIn">

    <table>

      <tr>
        <th>Food Title</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Image</th>
      </tr>

      @foreach($data as $data)
      <tr>
        <td>{{$data->title}}</td>
        <td>${{$data->price}}</td>
        <td>{{$data->quantity}}</td>
        <td>
          <img width="150" src="food_img/{{$data->image}}" alt="">
        </td>
      </tr>
      @endforeach

    </table>

  </div>

</body>

</html>