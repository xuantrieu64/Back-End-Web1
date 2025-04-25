@extends('dashboard')

@section('content')
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User_id</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$order->$order_id}}</td>
                            <td>{{$order->$user_id}}</td>
                            <td>{{$order->$total_amount}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <div class="container">
        <h3>List of users</h3>
        <div class="row justify-content-center">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders->order_detail as $detail)
                        <tr>
                            <td>{{$detail->$order_id}}</td>
                            <td>{{$detail->name}}</td>
                            <td>{{$detail->image}}</td>
                            <td>{{$detail->price}}</td>
                            <td>{{$detail->quantity}}</td>
                            <td>{{$detail->description}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection