<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MobilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "tahun_keluaran" => $this->faker->tahun_keluaran(),
            "warna" => $this->faker->warna(),
            "harga" => $this->faker->harga(),
            "mesin_mobil" => $this->faker->mesin_mobil(),
            "kapasitas_penumpang" => $this->faker->kapasitas_penumpang(),
            "tipe" => $this->faker->tipe(),
            "soldout" => $this->faker->soldout(),

        ];
    }
}
