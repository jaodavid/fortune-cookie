<?php

namespace App\Http\Controllers;

use App\Fortune;
use App\Http\Requests\FortuneUpdateRequest;
use App\Services\FortuneService;

class FortuneController extends Controller
{
    /**
     * The fortune service instance.
     *
     * @var FortuneService
     */
    protected $fortuneService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(FortuneService $fortuneService)
    {
        $this->fortuneService = $fortuneService;
    }

    /**
     * Get a random fortune cookie.
     *
     * @return \Illuminate\Http\Response
     */
    public function getFortune()
    {
        return $this->fortuneService->fortune();
    }

    /**
     * Update the specified fortune record.
     *
     * @param  App\Http\Requests\FortuneUpdateRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FortuneUpdateRequest $request, int $id)
    {
        return $this->fortuneService->updateFortune($request, $id);
    }
}
