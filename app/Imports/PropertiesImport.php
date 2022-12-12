<?php

namespace App\Imports;

use App\Property;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PropertiesImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Property([
        'title' => $row['title'],
        'slug' => str_slug($row['title']),
        'price' => $row['price'],
        'purpose' => $row['purpose'],
        'type' => $row['type'],
        'image' => $row['image'],
        'bedroom' => $row['bedroom'],
        'bathroom' => $row['bathroom'],
        'city' => $row['city'],
        'city_slug' => str_slug($row['city']),
        'address' => $row['address'],
        'area' => $row['area'],
        'agent_id' => 1,
        'description' => $row['description'],
        'video' => $row['video'],
        'floor_plan' => $row['floor_plan'],
        ]);

    }
}
