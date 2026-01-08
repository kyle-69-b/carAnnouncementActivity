<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $makes = ['Toyota', 'Honda', 'Ford', 'Chevrolet', 'BMW', 'Mercedes-Benz', 'Nissan', 'Mazda', 'Hyundai', 'Volkswagen'];
        $types = ['Sedan', 'SUV', 'Truck', 'Coupe', 'Hatchback', 'Wagon'];
        $transmissions = ['Automatic', 'Manual'];
        $fuelTypes = ['Gasoline', 'Diesel', 'Electric', 'Hybrid'];
        $colors = ['Black', 'White', 'Silver', 'Blue', 'Red', 'Gray', 'Green', 'Yellow', 'Orange'];
        $statuses = ['available', 'sold', 'pending'];

        $make = fake()->randomElement($makes);
        $modelsByMake = [
            'Toyota' => ['Camry', 'Corolla', 'RAV4', 'Highlander', 'Tacoma'],
            'Honda' => ['Civic', 'Accord', 'CR-V', 'Pilot', 'Ridgeline'],
            'Ford' => ['F-150', 'Mustang', 'Explorer', 'Escape', 'Edge'],
            'Chevrolet' => ['Silverado', 'Malibu', 'Equinox', 'Traverse', 'Camaro'],
            'BMW' => ['3 Series', '5 Series', 'X3', 'X5', 'M4'],
            'Mercedes-Benz' => ['C-Class', 'E-Class', 'GLC', 'GLE', 'S-Class'],
            'Nissan' => ['Altima', 'Maxima', 'Rogue', 'Pathfinder', 'Frontier'],
            'Mazda' => ['Mazda3', 'Mazda6', 'CX-5', 'CX-9', 'MX-5 Miata'],
            'Hyundai' => ['Elantra', 'Sonata', 'Tucson', 'Santa Fe', 'Palisade'],
            'Volkswagen' => ['Jetta', 'Passat', 'Tiguan', 'Atlas', 'Golf'],
        ];

        $model = fake()->randomElement($modelsByMake[$make] ?? ['Model X']);

        return [
            'make' => $make,
            'model' => $model,
            'year' => fake()->numberBetween(2018, 2024),
            'price' => fake()->randomFloat(2, 15000, 75000),
            'mileage' => fake()->numberBetween(1000, 100000),
            'color' => fake()->randomElement($colors),
            'type' => fake()->randomElement($types),
            'transmission' => fake()->randomElement($transmissions),
            'fuel_type' => fake()->randomElement($fuelTypes),
            'description' => fake()->paragraph(3),
            'status' => fake()->randomElement($statuses),
        ];
    }
}
