@extends('layouts.app')

@section('content')
    <div class="p-5" style="height:100%">
        <form class="row">
            <div class="col-6 p-5">
                <div class="form-group row">
                    <label class="col" for="titre">Titre :</label>
                    <input type="text" class="form-control col col" id="titre" value="{{old('titre',$data['titre'])}}" aria-describedby="emailHelp" name="titre" placeholder="titre">
                    <small class="ms-3 form-text text-danger">error.</small>
                </div>

                <div class="form- row">
                    <label class="col" class="form-label" for="DTache">date de tâche :</label>
                    <input type="date" class="form-control col" id="DTache" value="{{old('Dtache',$data['Dtache'])}}"  name="Dtache">
                    <small class="ms-3 form-text text-danger">error.</small>
                </div>
                <div class="form-group row">
                    <label class="form-label col" for="affaire">affaire :</label>
                    <select class="form-select col" name="affaire" id="affaires">
                        @foreach($affaires as $affaire)
                            <option value="{{$affaire->id}}">{{$affaire->name}}</option>
                        @endforeach

                    </select>
                    <small class="ms-3 form-text text-danger">error.</small>
                </div>
            </div>


            <div class="col-6 p-5">
                <div class="form-group row">
<textarea style="height: 200px" name="Description" id="Description" >
{{old('Description',$data['Description'])}}
</textarea>
                    <small class="ms-3 form-text text-danger">error.</small>
                </div>
            </div>

            <button type="submit" class="btn mt-5 m-auto " style="width: 200px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                    <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z"/>
                </svg>
                Enregistrer</button>
        </form>
    </div>
@endsection
@section("titre","Modifier Tâche")
