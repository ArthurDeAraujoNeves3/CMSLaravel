<?php

use GuzzleHttp\Psr7\Request;

interface BaseInterface {

    public function index();
    public function create();
    public function store(Request $r);
    public function show(string $id);
    public function edit(string $id);
    public function update(Request $r, string $id);
    public function destroy(string $id);
    
};
