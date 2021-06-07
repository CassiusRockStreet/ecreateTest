@extends('layouts/app')
@section('content')
    @include('layouts/header')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <p>Currencies</p>
                    <form method="POST" action="{{ route('currency') }}" class="form-inline">
                        @csrf
                        <div class="form-input">
                            <select name="Currency" class="form-control" style="padding:0px">
                                <option selected disabled="true">--Select--</option>
                                <!-- for($i) -->
                                @php $currencies = array("AED"=>"United Arab Emirates dirham","AFN"=>"Afghan afghani","ALL"=>"Albanian lek","AMD"=>"Armenian dram","ANG"=>"Netherlands Antillean guilder","AOA"=>"Angolan kwanza","ARS"=> "Argentine peso","USD"=> "United States dollar","UYI"=> "Uruguay Peso en Unidades Indexadas","UYU"=>"Uruguayan peso","UZS"=> "Uzbekistan som","VEF"=> "Venezuelan bolívar","VND"=> "Vietnamese đồng","VUV"=> "Vanuatu vatu","WST"=> "Samoan tala","XAF"=> "Central African CFA franc","XCD"=> "East Caribbean dollar","XOF"=> "West African CFA franc","XPF"=> "CFP franc","YER"=> "Yemeni rial","ZAR"=> "South African rand","ZMW"=> "Zambian kwacha","ZWL"=> "Zimbabwean dollar"); @endphp
                                @foreach ($currencies as $key=>$data){
                                    <option value="{{ $key }}"> {{ $data }} </option>
                                }
                                @endforeach
                            </select>
                            <input type="submit" name="submitCurrency" class="btn btn-success" value="Define your currency">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection