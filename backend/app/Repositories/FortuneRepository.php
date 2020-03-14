<?php

namespace App\Repositories;

use App\Fortune;

class FortuneRepository
{
    protected $fortune;

    public function __construct(Fortune $fortune)
    {
        $this->fortune = $fortune;
    }

    /**
     * Get all of the fortune.
     *
     * @return Collection
     */
    public function random()
    {
        return $this->fortune->get()->random();
    }

    /**
     * Find fortune by ID.
     *
     * @return Collection
     */
    public function find($id)
    {
        return $this->fortune->find($id);
    }

    /**
     * Update fortune by ID.
     *
     * @return Collection
     */
    public function update($data, $id)
    {
        $this->fortune->where('id', $id)->update($data);
        return $this->find($id);
    }
}