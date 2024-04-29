<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <style>
      body{
        margin: auto;
        width: 90vw;
        height: 100vh;
      }
      h4 {
    margin: 0;
}
.w-full {
    width: 100%;
}
.w-half {
    width: 50%;
}
.margin-top {
    margin-top: 1.25rem;
}
.footer {
    font-size: 0.875rem;
    padding: 1rem;
    background-color: rgb(241 245 249);
}
img{ 
  width: 80px;
}
table {
    width: 100%;
    border-spacing: 0;
}
table.products {
    font-size: 0.875rem;
}
table.products tr {
    background-color: rgb(96 165 250);
}
table.products th {
    color: #ffffff;
    padding: 0.5rem;
}
table tr.items {
    background-color: rgb(241 245 249);
}
table tr.items td {
    padding: 0.5rem;
}
.total {
    text-align: right;
    margin-top: 1rem;
    font-size: 0.875rem;
}
footer {
  color: #5D6975;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #C1CED9;
  padding: 8px 0;
  text-align: center;
}
    </style>
</head>
<body>
    <table class="w-full">
        <tr>
            <td class="w-half">
                <img   src="img/15744737.548a00c0e09dc-removebg-preview.png"  width="200" />
            </td>
            <td class="w-half">
                <h2>Invoice N: {{$order->id}}</h2>
            </td>
        </tr>
    </table>
 
    <div class="margin-top">
        <table class="w-full">
            <tr>
                <td class="w-half">
                    <div><h4>costumer</h4></div>
                    <div>  {{ Auth::user()->name }}</div>
                    <div>  {{ Auth::user()->email }}</div>
                    <div>{{$order->created_at}}</div>
                </td>
             
            </tr>
        </table>
    </div>
 
    <div class="margin-top">
        <table class="products">
            <tr>
                <th>Book</th>
                <th>Price</th>
                <th>Qty</th>
                <th>total</th>
              
            </tr>
            @foreach ($order->orderItems as $orderItem)
    <tr class="items">
        <td>{{ $orderItem->book->title }}</td>
        <td>{{ $orderItem->unitprice }}</td>
        <td>{{ $orderItem->quantity }}</td>
        <td>{{ $orderItem->unitprice }}</td>
    </tr>
    @endforeach
        </table>
    </div>
    {{-- <div class="total">
      SubTotal: $100.00 USD
  </div>  --}}
  <div class="total">
    shipping: $29.00 USD
</div> 
    <div class="total">
        {{ $order->total_price }}
    </div>
    {{-- <div id="notices">
      <div>NOTICE:</div>
      <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
    </div> --}}
  </main>

    <div class="footer margin-top">
        <div> Invoice was created on a computer and is valid without the signature and seal.</div>
        <div>&copy;Bookshare </div>
    </div>
</body>
</html>


