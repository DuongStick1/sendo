<table class="table table-striped table-bordered zero-configuration">
    <thead>
        <tr>
            <th>#</th>
            <th>Order number</th>
            <th>User</th>
            <th>Driver</th>
            <th>Total</th>
            <th>Paymeny</th>
            <th>Order Type</th>
            <th>Order address</th>
            <th>Promocode</th>
            <th>Notes</th>
            <th>Status</th>
            <th>Created date</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($GetAllOrders as $orders) {
        ?>
        <tr id="dataid{{$orders->id}}">
            <td>{{$i}}</td>
            <td>{{$orders->order_number}}</td>
            <td>{{$orders['users']->name}}</td>
            <td>{{$orders->driver_id}}</td>
            <td>{{$orders->order_total}}</td>
            <td>{{$orders->payment_type}}</td>
            <td>{{$orders->order_type}}</td>
            <td>{{$orders->address}}</td>
            <td>{{$orders->promocode}}</td>
            <td>{{$orders->order_notes}}</td>
            <td>{{$orders->status}}</td>
            <td>{{$orders->created_at}}</td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>