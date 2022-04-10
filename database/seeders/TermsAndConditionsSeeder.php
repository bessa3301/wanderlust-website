<?php

namespace Database\Seeders;

use App\Enum\LangsEnum;
use App\Models\TermsAndConditions;
use App\Models\WebsitePage;
use Illuminate\Database\Seeder;

class TermsAndConditionsSeeder extends Seeder
{
    public function run()
    {
        $terms = [
            ['term' => 'voce precisa atualizar isto', 'lang' => LangsEnum::BRAZILIAN_PORTUGUESE],
            ['term' => 'necessita atualizar esto', 'lang' => LangsEnum::SPANISH],
            ['term' => 'you must update this!', 'lang' => LangsEnum::UNITED_STATES_ENGLISH],
        ];

        foreach ($terms as $value) {
            TermsAndConditions::create($value);
        }
    }
}
