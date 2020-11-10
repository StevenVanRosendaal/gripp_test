@extends('layouts.app')
@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-auto"></div>
                <div class="col-6">

                    <!-- ADD PET -->
                    <div class="mt-2">
                        <div class="text-left">
                            <h1>Huisdier Toevoegen</h1>
                            <form>
                                <div class="form-group row">
                                    <label for="petName" class="col-sm-4 col-form-label">Naam Huisdier:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="petName">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="petType" class="col-sm-4 col-form-label">Type Huisdier:</label>
                                    <div class="col-sm-8">
                                        <input class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="petAddress" class="col-sm-4 col-form-label">Adres Eigenaar:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="petAddress">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-8">
                                        <button type="submit" class="btn btn-primary mb-2">Opslaan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- PET LIST -->
                    <div class="mt-2">
                        <div class="text-left">
                            <h1>Huisdieren</h1>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Naam</th>
                                    <th scope="col">Adres</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Handle</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- PET COUNT -->
                    <div class="mt-2">
                        <div class="text-left">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Type</th>
                                    <th scope="col">Aantal</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <div class="col col-auto"></div>
            </div>
        </div>
    </main>
@endsection
