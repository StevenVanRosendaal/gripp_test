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
                            <form id="petForm" onsubmit="return ValidationEvent()">
                                <div class="form-group row">
                                    <label for="petName" class="col-sm-4 col-form-label">Naam Huisdier:</label>
                                    <div class="col-sm-8">
                                        <input required type="text" class="form-control" id="petName">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="petType" class="col-sm-4 col-form-label">Type Huisdier:</label>
                                    <div class="col-sm-8">
                                        <select class="custom-select" id="petType">
                                            <option value="1">Hond</option>
                                            <option value="2">Kat</option>
                                            <option value="3">Vis</option>
                                            <option value="4">Konijn</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="petAddress" class="col-sm-4 col-form-label">Adres Eigenaar:</label>
                                    <div class="col-sm-8">
                                        <input required type="text" class="form-control" id="petAddress">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-8">
                                        <button type="button" id="petSubmit" class="btn btn-primary mb-2" onclick="return PetSubmit()">Opslaan</button>
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
                                <tbody id="petList">
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
                                <tbody id="petCount">
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <div class="col col-auto"></div>
            </div>
        </div>
    </main>

    <script type="application/javascript">
        // Form validation for unsupported browsers
        function ValidationEvent()
        {
            // Storing Field Values In Variables
            var petName = document.getElementById("petName").value;
            var petType = document.getElementById("petType").value;
            var petAddress = document.getElementById("petAddress").value;

            // Conditions
            if (petName == '' || petType == '' || petAddress == '') {
                alert("All fields are required!");
                return false;
            }

        }

        function PetSubmit() {
            var put_pets_url = "{{ route('home.putPets') }}";
            var petName = $("#petName").val();
            var petType = $("#petType").val();
            var petAddress = $("#petAddress").val();
            var query = [
                petName,
                petType,
                petAddress
            ]

            $.ajax({
                url: put_pets_url,
                method:'GET',
                data:{query},
                dataType:'json',
            })

            location.reload();
        }

        window.onload = function () {
            $(document).ready(function () {

                fetch_pet_data();

                function fetch_pet_data() {
                    var pets_url = "{{ route('home.getPets') }}";

                    $.ajax({
                        url: pets_url,
                        method:'GET',
                        dataType:'json',
                        success:function(data)
                        {
                            $('#petList').html(data.pet_data);
                            $('#petCount').html(data.pet_count);
                        }
                    })


                }
            });
        }
    </script>


@endsection
