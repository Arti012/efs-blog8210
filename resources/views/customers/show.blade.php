@extends('app')
@section('content')
    <h1>Customer </h1>

    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Name</td>
                <td><?php echo ($customer['name']); ?></td>
            </tr>
            <tr>
                <td>Cust Number</td>
                <td><?php echo ($customer['cust_number']); ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo ($customer['address']); ?></td>
            </tr>
            <tr>
                <td>City </td>
                <td><?php echo ($customer['city']); ?></td>
            </tr>
            <tr>
                <td>State</td>
                <td><?php echo ($customer['state']); ?></td>
            </tr>
            <tr>
                <td>Zip </td>
                <td><?php echo ($customer['zip']); ?></td>
            </tr>
            <tr>
                <td>Home Phone</td>
                <td><?php echo ($customer['home_phone']); ?></td>
            </tr>
            <tr>
                <td>Cell Phone</td>
                <td><?php echo ($customer['cell_phone']); ?></td>
            </tr>
            </tbody>
      </table>
    </div>

    <!-- Summary of customer stocks -->
  <h2>Stocks</h2>
    <hr>
    <table class="table table-striped table-bordered table-hover">
            <thead>
        <tr class="bg-info">
            <th>Symbol</th>
            <th>Name</th>
            <th>Shares</th>
            <th>Purchase price</th>
            <th>Purchase Date</th>
            <th>Original_Value</th>
        </tr>
        </thead>  
        <tbody>
        
         @foreach ($stocks as $stock)
        <tr>
                <td>{{ $stock->symbol }}</td>
                <td>{{ $stock->name }}</td>
                <td>{{ $stock->shares }}</td>
                <td>{{ $stock->purchase_price }}</td>
                <td>{{ $stock->purchased }}</td>
                <td>{{$total=$stock->shares*$stock->purchase_price}}</td> 
         </tr>
       <?php  $total_stkvalue=$total+$total_stkvalue ?>     
        
         @endforeach

         </tbody>
    </table>
    <p1> 
        <?php echo "Total of Initial Stock Portfolio: $".$total_stkvalue; ?>  

    </p1>

    
 <!-- summary fo customer investment
 //
 //
  -->
 <h3>Investments</h3>
    <hr>
    <table class="table table-striped table-bordered table-hover">
            <thead>
        <tr class="bg-info">
            <th>Category</th>
            <th>Description</th>
            <th>Acquired_value</th>
            <th>Acquired_Date</th>
            <th>Recent_value</th>
            <th>Recent_Date</th>
        </tr>
        </thead>  
        <tbody>
        
         @foreach ($investments as $investment)
        <tr>
               <td>{{ $investment->category }}</td>
                <td>{{ $investment->description }}</td>
                <td>{{ $investment->acquired_value }}</td>
                <td>{{ $investment->acquired_date }}</td>
                <td>{{ $investment->recent_value }}</td>
                <td>{{ $investment->recent_date }}</td> 
         </tr>
              
         @endforeach

         </tbody>
    </table>
    <p2> 
        <?php echo "Total of Initial Investment Portfolio: $".$total_acqvalue; ?> 
        <br> 
        <?php echo "Total of current Investment Portfolio: $".$total_rectvalue; ?>  
    </p2>
    <br>
    <br>
    <h3> Summary Of Portfolio </h3>
            <?php 
            $ini_Portfolio= $total_stkvalue +$total_acqvalue;
            $curr_Portfolio= $total_stkvalue +$total_rectvalue;
            ?>   
    <p3>
        <?php echo "Total of Initial Portfolio values: $".$ini_Portfolio; ?>  
        <br>
         <?php echo "Total of Current Portfolio Values: $".$curr_Portfolio; ?>  
    </p3>

 @stop