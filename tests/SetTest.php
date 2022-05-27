<?php

use Testingallthethings\Pest\Set;



beforeEach(function (){
    $this->empty = new Set();

    $this->one = new Set();
    $this->one->add("red");
});

it("is empty when nothing has been added", function () {
    expect($this->empty->isEmpty())->toBeTrue();
});

it("is not empty once something has been added", function () {
    expect($this->one->isEmpty())->toBeFalse();
});

it("has a size of zero when nothing has been added", function () {
    expect($this->empty->size())->toBe(0);
});

it('has a size of one when a thing has been added', function () {
    expect($this->one->size())->toBeOne();
});

it('has a size of two when 2 things have been added', function () {
    $two = new Set();
    $two->add("red");
    $two->add("blue");

    expect($two->size())->toBe(2);
});

it('does not contain red if red has not been added', function () {
    expect($this->empty->contains('red'))->toBeFalse();
});

it('does contain red if red has been added', function () {
    expect($this->one->contains('red'))->toBeTrue();
});

it('does not store duplicate values', function () {
    $this->one->add("red");

    expect($this->one->size())->toBeOne();
});