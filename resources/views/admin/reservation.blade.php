<!DOCTYPE html>
<html>

<head>

  @include('admin.css')

  <style>
    table {
      border: 1px solid skyblue;
      margin: auto;
      width: 1000px;
      margin-top: 100px;
    }

    th {
      background-color: skyblue;
      padding: 20px;
      text-align: center;
      color: white;
      font-size: 18px;
    }

    td {
      padding: 10px;
      text-align: center;
      color: white;
      font-weight: bold;
    }
  </style>

</head>

<body>

  @include('admin.header')


  @include('admin.sidebar')

  <div class="page-content">
    <div class="page-header">
      <div class="container-fluid">

        <table>

          <tr>
            <th>Phone Number</th>
            <th>No .of Guest</th>
            <th>Date</th>
            <th>Time</th>
          </tr>

          @foreach($book as $book)

          <tr>
            <td>{{$book->phone}}</td>
            <td>{{$book->guest}}</td>
            <td>{{$book->date}}</td>
            <td>{{$book->time}}</td>
          </tr>

          @endforeach

        </table>

      </div>
    </div>
  </div>
  <!-- JavaScript files-->

  @include('admin.js')

</body>

</html>