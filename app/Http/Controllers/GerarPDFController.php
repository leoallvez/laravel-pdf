<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class GerarPDFController extends Controller
{

    public function make()
    {
        # https://blog.especializati.com.br/gerar-pdf-no-laravel-com-dompdf/
        $products = collect();

        for ($i = 1; $i <= 30; $i++) 
        {
            $product = new Product();
            $product->name = "product_".$i;
            $products->push($product);
        }
    
        return PDF::loadView('pdf.list', compact('products'))->download('nome-arquivo-pdf-gerado4.pdf');

        //$pdf = PDF::loadView('pdf.list', compact('products'));

        //return $pdf->stream();
    }
}
