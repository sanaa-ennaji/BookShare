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
        width: 80vw;
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
    </style>
</head>
<body>
    <table class="w-full">
        <tr>
            <td class="w-half">
                <img src="{{ asset('laraveldaily.png') }}" alt="laravel daily" width="200" />
            </td>
            <td class="w-half">
                <h2>Invoice ID: 834847473</h2>
            </td>
        </tr>
    </table>
 
    <div class="margin-top">
        <table class="w-full">
            <tr>
                <td class="w-half">
                    <div><h4>To:</h4></div>
                    <div>John Doe</div>
                    <div>123 Acme Str.</div>
                </td>
                <td class="w-half">
                    <div><h4>From:</h4></div>
                    <div>Laravel Daily</div>
                    <div>London</div>
                </td>
            </tr>
        </table>
    </div>
 
    <div class="margin-top">
        <table class="products">
            <tr>
                <th>Qty</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
            <tr class="items">
              
                    <td>
                     ziuerh
                    </td>
                    <td>
                       zebziuefuiezf
                    </td>
                    <td>
                        300$
                    </td>
               
            </tr>
        </table>
    </div>
 
    <div class="total">
        Total: $129.00 USD
    </div>
 
    <div class="footer margin-top">
        <div>Thank you</div>
        <div>&copy; Laravel Daily</div>
    </div>
</body>
</html>



{{-- <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <title>Example</title>
        <link rel="stylesheet" href="css/style.css" media="all" />
      </head>
      <body>
        <header class="clearfix">
            <div class="flex items-center justify-between mb-8">
                <div class="flex items-center">
                    <img class="h-8 w-8 mr-2" src="https://tailwindflex.com/public/images/logos/favicon-32x32.png"
                        alt="Logo" />
                    <div class="text-gray-700 font-semibold text-lg">Your Company Name</div>
                </div>
                <div class="text-gray-700">
                    <div class="font-bold text-xl mb-2">INVOICE</div>
                    <div class="text-sm">Date: 01/05/2023</div>
                    <div class="text-sm">Invoice #: INV12345</div>
                </div>
            </div>
          <h1>INVOICE 3-2-1</h1>
          <div id="company" class="clearfix">
            <div>Company Name</div>
            <div>455 Foggy Heights,<br/> AZ 85004, US</div>
            <div>+ 1(602) 519-0450</div>
      
          
          </div>
          <div id="project">
            <div><span>PROJECT</span> Website development</div>
            <div><span>CLIENT</span> John Doe</div>
            <div><span>ADDRESS</span> 796 Silver Harbour, TX 79273, US</div>
            <div><span>EMAIL</span> <a href="mailto:john@example.com">john@example.com</a></div>
            <div><span>DATE</span> August 17, 2015</div>
            <div><span>DUE DATE</span> September 17, 2015</div>
          </div>
        </header>
        <main>
          <table>
            <thead>
              <tr>
                <th class="service">SERVICE</th>
                <th class="desc">DESCRIPTION</th>
                <th>PRICE</th>
                <th>QTY</th>
                <th>TOTAL</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="service">Design</td>
                <td class="desc">Creating a recognizable design solution based on the company's existing visual identity</td>
                <td class="unit">$40.00</td>
                <td class="qty">26</td>
                <td class="total">$1,040.00</td>
              </tr>
              <tr>
                <td class="service">Development</td>
                <td class="desc">Developing a Content Management System-based Website</td>
                <td class="unit">$40.00</td>
                <td class="qty">80</td>
                <td class="total">$3,200.00</td>
              </tr>
              <tr>
                <td class="service">SEO</td>
                <td class="desc">Optimize the site for search engines (SEO)</td>
                <td class="unit">$40.00</td>
                <td class="qty">20</td>
                <td class="total">$800.00</td>
              </tr>
              <tr>
                <td class="service">Training</td>
                <td class="desc">Initial training sessions for staff responsible for uploading web content</td>
                <td class="unit">$40.00</td>
                <td class="qty">4</td>
                <td class="total">$160.00</td>
              </tr>
              <tr>
                <td colspan="4">SUBTOTAL</td>
                <td class="total">$5,200.00</td>
              </tr>
              <tr>
                <td colspan="4">TAX 25%</td>
                <td class="total">$1,300.00</td>
              </tr>
              <tr>
                <td colspan="4" class="grand total">GRAND TOTAL</td>
                <td class="grand total">$6,500.00</td>
              </tr>
            </tbody>
          </table>
          <div id="notices">
            <div>NOTICE:</div>
            <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
          </div>
        </main>

        <footer>
          Invoice was created on a computer and is valid without the signature and seal.
        </footer>
   
</body>
</html>   --}}