<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DSL - Accounts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg bg-body-tertiary" style="margin-top:25px">
                <div class="container-fluid">
                  <a class="navbar-brand" href="/">DSL</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Accoun List</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="/transactions">Transaction</a>
                      </li>
                      
                    </ul>
                  </div>
                </div>
              </nav>
        </div>
        
        <div class="row" style="margin-top:10px;">
            <div class="col-8">
                <h1>Accounts List</h1>
            </div>
            <div class="col-4">
                <a href="/transactions/create" class="btn btn-primary float-right">Add New Transection</a>
            </div>
            <div class="col-12">
              @if(session('message'))
              <div class="alert alert-success">
                  {{ session('message') }}
              </div>
            @endif
            </div>
            <div class="col-12">                
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Account Name</th>
                        <th scope="col">Type</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Date</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 0;
                        @endphp
                        @foreach ($transactions as $transaction)
                            @php
                                $i++;
                            @endphp
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$transaction->account->name}}</td>
                                <td>{{$transaction->type}}</td>
                                <td>{{number_format($transaction->amount, 2)}}</td>
                                <td>{{ date('d M Y', strtotime($transaction->created_at))}}</td>

                            </tr>
                        @endforeach
                      
                    </tbody>
                  </table>
            </div>
        </div>
        
        
      </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>