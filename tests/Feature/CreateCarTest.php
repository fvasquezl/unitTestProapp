<?php

class CreateCarTest extends FeatureTestCase
{
    public function test_a_user_create_a_car()
    {
        $this->actingAs($this->defaultUser())
         ->get(route('cars.create'));




    }
}