@extends('layouts.app')

@section('content')
<h1>Dodaj nowy produkt</h1>

<form action="{{ route('products.store') }}" method="POST" class="mt-4">
    @csrf
    <div class="container">
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="name" class="form-label">Nazwa produktu</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
            </div>
            <div class="col-md-6">
                <label for="purchase_price_netto" class="form-label">Cena zakupu netto</label>
                <input type="number" id="purchase_price_netto" name="purchase_price_netto" class="form-control" step="0.01" value="{{ old('purchase_price_netto') }}" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="purchase_price_brutto" class="form-label">Cena zakupu brutto</label>
                <input type="number" id="purchase_price_brutto" name="purchase_price_brutto" class="form-control" step="0.01" value="{{ old('purchase_price_brutto') }}" required>
            </div>
            <div class="col-md-6">
                <label for="margin" class="form-label">Marża (%)</label>
                <input type="number" id="margin" name="margin" class="form-control" step="0.01" value="{{ old('margin') }}" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="sale_price_netto" class="form-label">Cena sprzedaży netto</label>
                <input type="number" id="sale_price_netto" name="sale_price_netto" class="form-control" step="0.01" value="{{ old('sale_price_netto') }}" required>
            </div>
            <div class="col-md-6">
                <label for="sale_price_brutto" class="form-label">Cena sprzedaży brutto</label>
                <input type="number" id="sale_price_brutto" name="sale_price_brutto" class="form-control" step="0.01" value="{{ old('sale_price_brutto') }}" required>
            </div>
            
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="stock" class="form-label">Dostępna ilość</label>
                <input type="number" id="stock" name="stock" class="form-control" value="{{ old('stock') }}" required>
            </div>
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Dodaj produkt</button>
        </div>
    </div>
</form>
@endsection
