<!DOCTYPE html>
<html>

<head>

  @include('admin.css')

  <style>
    table {
      border: 1px solid skyblue;
      margin: auto;
      width: 1000px;
    }

    th {
      color: white;
      font-weight: bold;
      font-size: 18px;
      text-align: center;
      background-color: red;
      padding: 10px;
    }

    td {
      color: white;
      padding: 10px;
      font-weight: bold;
      text-align: center;
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
            <th>Customer Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Food Title</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Image</th>
            <th>Delivery Status</th>
            <th>Change Status</th>
          </tr>

          @foreach($data as $data)

          <tr>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$data->address}}</td>
            <td>{{$data->title}}</td>
            <td>{{$data->quantity}}</td>
            <td>{{$data->price}}</td>
            <td>
              <img width="120" src="food_img/{{$data->image}}" alt="">
            </td>
            <td>{{$data->delivery_status}}</td>
            <td>
              <a onclick="return confirm('Are you sure to change this status?')" class="btn btn-info" href="{{url('on_the_way', $data->id)}}">On the way</a>
              <a onclick="return confirm('Are you sure to change this status?')" class="btn btn-warning" href="{{url('delivered', $data->id)}}">Delivered</a>
              <a onclick="return confirm('Are you sure to change this status?')" class="btn btn-danger" href="{{url('canceled', $data->id)}}">Cancel</a>
            </td>
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