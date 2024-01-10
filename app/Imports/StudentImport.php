<?php

namespace App\Imports;

use App\Enums\GenderEnum;
use App\Helpers\StudentImportHelper;
use App\Models\Classroom;
use App\Traits\ValidationStudentTrait;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentImport implements ToModel, WithHeadingRow
{
    /**
     * model
     *
     * @param  mixed $row
     * @return void
     */
    public function model(array $row)
    {
        $classroom = Classroom::query()->where('name', $row['kelas'])->first();
        if ($row['jenis_kelamin'] == 'laki-laki') {
            $gender = GenderEnum::MALE->value;
        } else {
            $gender = GenderEnum::FEMALE->value;
        }

        $birthDate = $row['tanggal_lahir'] = Date::excelToDateTimeObject($row['tanggal_lahir'])->format('Y-m-d');

        StudentImportHelper::import([
            'name' => $row['nama'],
            'email' => $row['email'],
            'password' => bcrypt('password'),
            'phone_number' => $row['nomor_hp'],
            'national_student_id' => $row['nisn'],
            'birth_date' => $birthDate,
            'gender' => $gender,
            'is_graduate' => 0,
            'address' => $row['alamat'],
            'classroom_id' => $classroom->id
        ]);
    }

    use ValidationStudentTrait;
}
