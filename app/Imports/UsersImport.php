<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Mail;
use App\Mail\NewUserInvitation;

class UsersImport implements ToModel, WithChunkReading, ShouldQueue
{
    public function model(array $row)
    {
        $fullName = explode(" ",$row[1]);
       $user = User::create([
            'email' => $row[0],
            'first_name'    => $fullName[0],
            'last_name'     => $fullName[1],
            'city'          => $row[2],
            'zip'           => $row[3],
            'number'        => intval($row[4]),
            'street'        => $row[5],
            'country'       => $row[6],
            'phone'         => $row[7],
            'company'       => $row[8],
            'job_title'     => $row[9],
            'ip'            => $row[10],
            'password'      => Str::random(25)
        ]);

        Mail::to($user)->send(new NewUserInvitation( $user ));
    }
    
    public function chunkSize(): int
    {
        return 1000;
    }
}