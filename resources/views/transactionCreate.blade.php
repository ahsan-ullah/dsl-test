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
                <h1>New Transection</h1>
            </div>
            <div class="col-4">
                <a href="/transactions" class="btn btn-primary float-right">Transection List</a>
            </div>
            <div class="col-12">
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
            </div>
            <div class="col-5">                
                <form method="post" action="/transactions/store">
                  {{ csrf_field() }}
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Account Name</label>
                      
                      <select name="account" class="form-select" aria-label="Default select example">
                        <option selected value="">Select Account</option>
                        @foreach ($accounts as $accounts)
                            <option value="{{$accounts->id}}">{{$accounts->name}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Type</label>
                      <select name="type" class="form-select" aria-label="Default select example">
                        <option selected value="">Select Type</option>
                        <option value="credit">Credit</option>
                        <option value="debit">Debit</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Amount</label>
                      <input type="number" name="amount" class="form-control" id="exampleFormControlInput1" placeholder="Please put the positive number">
                      
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Date</label>
                      <input type="date" name="date" class="form-control" id="exampleFormControlInput1" >
                      
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        
        
      </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>