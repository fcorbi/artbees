<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use League\Csv\Writer;
use League\Csv\Reader;
use League\Csv\Statement;

class Client extends Model
{

    public static $rules = [
        'name' => 'required|string|max:255',
        'gender' => 'required|string|max:255',
        'phone' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'address' => 'required|string|max:255',
        'nationality' => 'required|string|max:255',
        'dateOfBirth' => 'required|string|max:255',
        'educationBackground' => 'required|string|max:255',
        'preferredModeOfContact' => 'required|string|max:255'
    ];

    /**
     * Client helper to create instance with all fields.
     * @param array $name
     * @param $gender
     * @param $phone
     * @param $email
     * @param $address
     * @param $nationality
     * @param $dateOfBirth
     * @param $educationBackground
     * @param $preferredModeOfContact
     * @return Client
     */

    public static function createOne($name, $gender, $phone, $email, $address, $nationality, $dateOfBirth, $educationBackground, $preferredModeOfContact)
    {
        $client = new Client();
        $client->name = $name;
        $client->gender = $gender;
        $client->phone = $phone;
        $client->email = $email;
        $client->address = $address;
        $client->nationality = $nationality;
        $client->dateOfBirth = $dateOfBirth;
        $client->educationBackground = $educationBackground;
        $client->preferredModeOfContact = $preferredModeOfContact;
        return $client;
    }

    private static function getPathCSV()
    {
        return Storage::path('csv/client.csv');
    }

    public static function getFromCSV($offset = 0, $limit = 10)
    {
        $reader = Reader::createFromPath(self::getPathCSV(), 'r');
        $stmt = (new Statement())
            ->offset($offset)
            ->limit($limit);
        $records = $stmt->process($reader, array_keys(self::$rules));
        return $records;
    }

    public function saveToCSV()
    {
        $writer = Writer::createFromPath(self::getPathCSV(), 'w');
        $writer->insertOne($this->toArray());
    }

}
