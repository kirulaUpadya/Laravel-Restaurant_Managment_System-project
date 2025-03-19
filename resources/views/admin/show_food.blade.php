<!DOCTYPE html>
<html>

<head>

  @include('admin.css')

  <style>
    table {
      border: 1px solid skyblue;
      margin: auto;
      width: 800px;
    }

    th {
      background-color: skyblue;
      color: white;
      padding: 10px;
      margin: 10px;
    }

    td {
      color: white;
      padding: 10px;
    }
  </style>

</head>

<body>

  @include('admin.header')


  @include('admin.sidebar')

  <div class="page-content">
    <div class="page-header">
      <div class="container-fluid">

        <h1>All Foods</h1>

        <div>

          <table>
            <tr>
              <th>Food Title</th>
              <th>Details</th>
              <th>Price</th>
              <th>Image</th>
            </tr>

            @foreach($data as $data)

            <tr>
              <td>{{$data->title}}</td>
              <td>{{$data->detail}}</td>
              <td>{{$data->price}}</td>
              <td>
                <img width="130" src="food_img/{{$data->image}}" alt="">
              </td>
            </tr>

            @endforeach
          </table>

        </div>



      </div>
    </div>
  </div>
  <!-- JavaScript files-->

  @include('admin.js')

</body>

</html>