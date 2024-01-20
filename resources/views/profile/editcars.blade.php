@extends("profile.admin")

@section("dashboard-content")

<section>
    <!-- General Form Elements -->
    <form action="{{ route('profile.editcarstore', ['id' => $car->id]) }}" method="post" enctype="multipart/form-data">
        @csrf

        @if(isset($car))
            @method('post')
        @endif

        <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">La Marque de la voiture</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="brand" value="{{ isset($car) ? $car->brand : old('brand') }}" required>
            </div>
        </div>

        <div class="row mb-3">
            <label for="inputEmail" class="col-sm-2 col-form-label">Le model de la voiture</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="model" value="{{ isset($car) ? $car->model : old('model') }}" required>
            </div>
        </div>

        <div class="row mb-3">
            <label for="inputDate" class="col-sm-2 col-form-label">La date d'achat</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="year" value="{{ isset($car) ? $car->year : old('year') }}" required>
            </div>
        </div>

        <div class="row mb-3">
            <label for="inputNumber" class="col-sm-2 col-form-label">Numéro d'enregistrement</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="registration_number" value="{{ isset($car) ? $car->registration_number : old('registration_number') }}" required>
            </div>
        </div>
        
        <div class="row mb-3">
            <label for="floatingTextarea" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <textarea class="form-control" placeholder="Une appréciation de l'etat de la voiture par exemple" id="floatingTextarea" style="height: 100px;" name="description" required>{{ isset($car) ? $car->description : old('description') }}</textarea>
            </div>
        </div>
        
        <div class="row mb-3">
            <label for="inputNumber" class="col-sm-2 col-form-label">Nouvelle image</label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="formFile" name="image">
                @if(isset($car) && $car->image)
                    <input type="hidden" name="old_image" value="{{ $car->image }}">
                @endif
            </div>
        </div>
        
        

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" class="color-bg">{{ isset($car) ? 'Modifier' : 'Ajouter' }}</button>
            </div>
        </div>
    </form>
</section>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@endsection
