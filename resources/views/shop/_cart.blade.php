@if(session('cart'))
<table class="table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Amount</th>
                    <th>Price</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>  
                @foreach(session('cart') as $product)
                <tr>
                    <td><img src="{{$product['image']}}" alt="" style="width: 70px"></td>
                    <td>{{$product['name']}}</td>
                    <td>{{$product['amount']}}</td>
                    <td>{{$product['price']}}</td>
                    <td></td>
                </tr> 
                @endforeach
            </tbody>
        </table>

  
        
   
@else
    <p>Your cart is empty</p>
@endif
