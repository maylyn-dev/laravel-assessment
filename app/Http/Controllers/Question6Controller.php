<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Customer;

class Question6Controller extends Controller
{
    public function solution()
    {
        $topSpender = $this->getTopSpender();
        $adamsOrders = $this->getAdamsOrderItems();

        return array(
            'Is this a good database design? Why?' => 'No, because it can still be normalized.',
            'If your answer to question 1 is no, what can you propose to improve the
            design' => 'We can normalize the tables and update the relationships. I applied the proposed design here. Please take a look at the migration files and models',
            'Who is the top spender in this online store?' => $topSpender,
            'What kind of fruits (item) did Adam buy so far?' => $adamsOrders
        );
    }
    
    public function getTopSpender()
    {
        $customers = DB::table('customers')
                    ->select('customers.name', DB::raw('SUM(orders.unit_price * orders.quantity) as total_spent'))
                    ->join('orders', 'customers.id', '=', 'orders.customer_id')
                    ->groupBy('customers.id')
                    ->orderBy('total_spent', 'DESC')
                    ->get();

        return $customers[0];
    }

    public function getAdamsOrderItems()
    {
        $items = Customer::find(1)->orders->pluck('item');
        return $items;
    }
}
