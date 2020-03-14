<?php

use Illuminate\Database\Seeder;
use App\Services\FortuneService;
use App\Fortune;

class FortunesTableSeeder extends Seeder
{
	/**
     * The fortune service instance.
     *
     * @var FortuneService
     */
    protected $fortuneService;

    /**
     * Create a new seeder instance.
     *
     * @return void
     */
    public function __construct(FortuneService $fortuneService)
    {
        $this->fortuneService = $fortuneService;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = $this->fortuneService->getSeeder();

        foreach ($data as $val) {
        	Fortune::create(['text' => $val]);
        }
    }
}
