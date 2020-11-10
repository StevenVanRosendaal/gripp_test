<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Pet;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $data = [];

    /**
     * Show the application home.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function putPets(Request $request)
    {
        if ($request->ajax()) {
            $query = $request->get('query');
            $newPet = new Pet();
            $newPet->name = $query['petName'];
            $newPet->animal_type = ['petType'];
            $newPet->address = ['petAddress'];
            $newPet->save();
        }
    }

    public function getPets(Request $request)
    {
        if ($request->ajax()) {
            $petOutput = "";
            $petCountOutput = "";

            $allPets = Pet::all();
            $animals = Animal::all()->toArray();
            foreach ($animals as $animal) {
                $animalList[$animal['id']] = $animal['name'];
                $petList = Pet::where('id',  $animal['id']);
                $petCountOutput .= '
                    <tr>
                        <td>'.$animal["name"].'</td>
                        <td>'.$petList->count().'</td>
                    </tr>
                ';
            }

            if ($allPets->count() > 0) {
                foreach ($allPets as $pet) {
                    $petOutput .= '
                        <tr>
                            <td>' . $pet["name"] . '</td>
                            <td>' . $pet["address"] . '</td>
                            <td>' . $animalList[$pet["animal_type"]] . '</td>
                        </tr>
                    ';
                }
            } else {
                $petOutput .= '
                        <tr>
                            <td>Geen huisdieren gevonden</td>
                        </tr>
                    ';
            }

            $data = array(
                'pet_data' => $petOutput,
                'pet_count' => $petCountOutput
            );

            echo json_encode($data);

        } else {
            return redirect('/');
        }

    }
}
