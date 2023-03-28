<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index()
    {
        return view('login');
    }
    function signup()
    {
        return view('sign');
    }

    function home()
    {
        return view('pages.home');
    }

    function customers()
    {
        return view('pages.customers');
    }

    function addNew()
    {
        return view('pages.add_new_customer');
    }

    function items()
    {
        return view('pages.items');
    }
    
    function add_new_item()
    {
        return view('pages.add_new_item');
    }

    // ESTIMATES
    function estimates()
    {
        return view('pages.estimates');
    }
   
    function add_new_estimate()
    {
        return view('pages.add_new_estimate');
    }


    function estimates_list_view()
    {
        return view('pages.estimates_list_view');
    }

    // Invoices
    function invoices()
    {
        return view('pages.invoices');
    }
   
    function add_new_invoice()
    {
        return view('pages.add_new_invoice');
    }


    function invoices_list_view()
    {
        return view('pages.invoices_list_view');
    }


     // Sales Receipts
     function salesreceipts()
     {
         return view('pages.salesreceipts');
     }
    
     function add_new_salesreceipt()
     {
         return view('pages.add_new_salesreceipt');
     }
 
 
     function salesreceipts_list_view()
     {
         return view('pages.salesreceipts_list_view');
     }

        // Reports
        function reports()
        {
            return view('pages.reports');
        }
        function salesbycustomer_report()
        {
            return view('pages.salesbycustomer_report');
        }
 
 








}
